<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    const STATUS_ACTIVE = 0;
    const STATUS_CANCEL = 1;

    const STATUSES = [
        self::STATUS_ACTIVE => 'Aktif',
        self::STATUS_CANCEL => 'Batal'
    ];

	public static $validation_rules = [
		'id'=>'required',
		'student_id'=>'student_id',
	];
	protected $table = 'internships';
	protected $guarded = [];
	public $incrementing = false;

    public function proposal()
    {
        return $this->belongsTo(InternshipProposal::class, 'internship_proposal_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function getStatusTextAttribute($value){
        switch ($this->status){
            case self::STATUS_ACTIVE:
                return "<span class=\"badge badge-success\">Aktif</span>";
                break;
            case self::STATUS_CANCEL:
                return "<span class=\"badge badge-danger\">Batal</span>";
                break;

        }
    }
}