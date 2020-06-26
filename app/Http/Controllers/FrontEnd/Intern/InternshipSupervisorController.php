<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use App\Models\Lecturer;
use App\Models\User;
use Illuminate\Http\Request;

class InternshipSupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $id)
    {
        $internships_id = $id;
        $lecturer = Lecturer::all()->pluck('name','id');
        return view('klp04.supervisors.create', compact(
            'internships_id','lecturer'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $advisor_id = $request->advisor_id;
        $internships = Internship::find($id);
        Internship::where('id',$id)->update(['advisor_id'=>$request->advisor_id,
                                           ]);

        notify('success', 'Berhasil Menambahkan Dosen Pembimbing ');
        return redirect()->route('frontend.internships.show',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $internships = Internship::find($id);
        Internship::where('id',$id)->update(['advisor_id'=>null,
                                           ]);

        notify('success', 'Berhasil menghapus data dosbing ');
        return redirect()->route('frontend.internships.show',$internships->id);
    }
}
