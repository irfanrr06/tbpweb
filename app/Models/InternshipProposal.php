<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternshipProposal extends Model
{
    const STATUS_DRAFT = 0;
    const STATUS_SUBMITTED = 1;
    const STATUS_ACCEPTED = 2;
    const STATUS_REVISED = 3;
    const STATUS_REJECTED = 4;

    const STATUSES = [
        self::STATUS_DRAFT => 'Belum Disetujui',
        self::STATUS_SUBMITTED => 'Terkirim',
        self::STATUS_ACCEPTED => 'Diterima',
        self::STATUS_REVISED => 'Perlu Revisi',
        self::STATUS_REJECTED => 'Ditolak'
    ];

    protected $table = 'internship_proposals';
    protected $guarded = [];

    public function agency()
    {
        return $this->belongsTo(InternshipAgency::class);
    }

    public function members()
    {
        return $this->hasMany(Internship::class);
    }

    public function getStatusTextAttribute($value){
        switch ($this->status){
            case self::STATUS_DRAFT:
                return "<span class=\"badge badge-secondary\">Belum Disetujui</span>";
                break;
            case self::STATUS_SUBMITTED:
                return "<span class=\"badge badge-info\">Terkirim</span>";
                break;
            case self::STATUS_ACCEPTED:
                return "<span class=\"badge badge-success\">Diterima</span>";
                break;
            case self::STATUS_REVISED:
                return "<span class=\"badge badge-warning\">Perlu Revisi</span>";
                break;
            case self::STATUS_REJECTED:
                return "<span class=\"badge badge-danger\">Ditolak</span>";
                break;


        }
    }
    public static $validation_rules = [
        'status'=>'required',
    ];
}
