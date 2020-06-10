@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'List KP'=>route('frontend.internships.index'),
        'Create Pembimbing KP' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('frontend.internships.index'), 'cil-list', 'Detail KP') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                        {{ html()->form('POST', route('frontend.internship-supervisors.store','id='.$internships_id->id))->acceptsFiles()->open() }}

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong><i class="cil-library-add"></i> Pilih Dosen Pembimbing KP</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('klp04.supervisors._form')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"/>
                        </div>

                        {{ html()->form()->close() }}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection