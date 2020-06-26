@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('frontend.internship-submission.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('content')

    <div class="card">

        <div class="card-header">
            <strong>List Proposal KP</strong>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Instansi</th>
                    <th>Periode</th>
                    <th>Pengusul</th>
                    <th>Status</th>
                    <th>Proposal</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse($proposals as $proposal)
                    <tr>
                        <td>{{ $proposal->agency->name }}</td>
                        <td>
                            {{ $proposal->start_at }}
                            <br>
                            s/d
                            <br>
                            {{ $proposal->end_at }}
                        </td>
                        <td>
                            @foreach($proposal->members as $member)
                                <div>
                                    {{ $member->student->name }} / {{ $member->student->nim }}
                                </div>
                            @endforeach
                        </td>
                        <td>
                            <h4>{!! $proposal->status_text !!}</h4>
                        </td>
                        <td>
                             <a href={{ asset('../storage/app/file_proposal/'. $proposal->file) }}>Download</a>
                        </td>
                        <td>
                            {!! cui()->btn_edit(route('frontend.internship-submission.edit', [$proposal->id])) !!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada proposal</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>

@endsection
