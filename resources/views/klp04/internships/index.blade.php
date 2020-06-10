@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'List KP' => route('frontend.internships.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('content')

    <div class="card">

        <div class="card-header">
            <strong>List KP yang Telah Memberikan Surat Balasan</strong>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Periode</th>
                    <th>Pengusul</th>
                    <th>Instansi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse($internships as $internship)
                    <tr>
                        <td>
                            {{ $internship->proposal->start_at }}
                            <br>
                            s/d
                            <br>
                            {{ $internship->proposal->end_at }}
                        </td>
                        <td>
                                <div>
                                    {{ $internship->student->name }} <br>
                                    <small>{{ $internship->student->nim }}</small>
                                </div>
                            
                        </td>
                        <td>{{ $internship->proposal->agency->name }}</td>
                        <td>
                            {!! cui()->btn_view(route('frontend.internships.show', [$internship->id])) !!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada list KP</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>

@endsection