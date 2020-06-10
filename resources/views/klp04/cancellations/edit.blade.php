@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'List KP' => route('frontend.internships.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('frontend.internships.index'), 'cil-list', 'List KP') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                        {{ html()->modelForm($internship, 'PUT', route('frontend.internship-cancellation.update', $internship->id))->acceptsFiles()->open() }}

                        {{--CARD HEADER --}}
                        <div class="card-header">
                            <strong><i class="cil-pencil"></i>Alasan Pembatalan KP</strong>
                        </div>   



                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('klp04.cancellations._form')
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