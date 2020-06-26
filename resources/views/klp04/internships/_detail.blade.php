

<div class="form-group">
    <div class='form-label'>Nama Mahasiswa</div>
    <div>{{ $internships->student->name }}</div>
</div>

<div class="form-group">
    <div class='form-label'>Periode</div>
    <div>{{ $internships->start_at }} s/d {{ $internships->end_at}}</div>
</div>

<div class="form-group">
    <div class='form-label'>Instansi</div>
    <div>{{ $internships->proposal->agency->name ?? "-"}}</div>
</div>

<div class="form-group">
    <div class='form-label'>Judul</div>
    <div>{{ $internships->title ?? "-"}}</div>
</div>

<div class="form-group">
    <div class='form-label'>Pembimbing KP</div>
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><div>{{ $internships->advisor->name ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><div>{{ $internships->advisor->nip ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td>{{ $internships->advisor->phone ?? "-"}}</td>
        </tr>
        </tr>

    </table>
</div>

<div class="form-group">
    <div class='form-label'>Pembimbing Lapangan</div>
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><div>{{ $internships->field_advisor_name ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>No Pegawai</td>
            <td>:</td>
            <td><div>{{ $internships->field_advisor_no ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td>{{ $internships->field_advisor_phone ?? "-"}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $internships->field_advisor_email?? "-"}}</td>
        </tr>
        </tr>

    </table>
</div>

<div class="form-group">
    <div class='form-label'>Seminar</div>
    <table>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><div>{{ $internships->seminar_date ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>:</td>
            <td><div>{{ $internships->seminar_time ?? "-"}}</div></td>
        </tr>

    </table>
</div>

<div class="form-group">
    <div class='form-label'>Status</div>
    <div><h4>{!! $internships->status_text !!}</h4></div>
</div>

@if($internships->status == 1)
<div class="form-group">
    <div class='form-label'>Alasan Batal KP</div>
    <div>{{ $internships->field}}</div>
</div>
@endif




