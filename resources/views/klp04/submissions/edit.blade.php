@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('frontend.internship-submission.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('frontend.internship-submission.index'), 'cil-list', 'List Proposal') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                        {{ html()->modelForm($internship_submission, 'PUT', route('frontend.internship-submission.update', $internship_submission->id))->acceptsFiles()->open() }}

                        {{--CARD HEADER --}}
                        <div class="card-header">
                            <strong><i class="cil-pencil"></i>Setujui Proposal</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('klp04.submissions.edit_form')
                        </div>

                        {{-- CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Simpan"/>
                        </div>

                        {{ html()->closeModelForm() }}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
