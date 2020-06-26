@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'List KP' => route('frontend.internships.index'),
        'Detail' => '#'
    ]) !!}
@endsection
        
@section('toolbar')

@if($internships->status==0)
        @if($internships->advisor_id != null)
        {!! cui()->toolbar_delete(route('frontend.internship-supervisors.destroy', [$internships->id]), $internships->id, 'cil-trash', 'Hapus Pembimbing KP', 'Anda yakin akan menghapus dosen pembimbing?') !!}
        @endif
        @if($internships->advisor_id ==null)
        {!! cui()->toolbar_btn(route('frontend.internship-supervisors.create','id='.$internships->id), 'cil-library-add', 'Pilih Pembimbing KP') !!}
        @endif
        {!! cui()->toolbar_btn(route('frontend.internship-cancellation.edit', [$internships->id]), 'cil-user-unfollow', 'Batalkan KP', 'Anda yakin akan membatalkan KP ini?') !!}
@endif
        {!! cui()->toolbar_btn(route('frontend.internships.index'), 'cil-list', 'List KP') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                {{-- CARD HEADER--}}
                <div class="card-header">
                    <i class="fa fa-edit"></i> <strong>Detail KP</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">
                    @include('klp04.internships._detail')
                </div>
                
                <div class="col-md-3">
                    <div class="card">
                      <div class="card-header">
                        <strong><i class="cil-file"></i> Files</strong>
                      </div>
                      <div class="card-body">
                        @include('klp04.internships._file')
                      </div>
                    </div>
                </div>

                {{--CARD FOOTER--}}
                <div class="card-footer">
                </div>

            </div>
        </div>

    </div>

@endsection
