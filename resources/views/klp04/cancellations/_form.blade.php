<div class="form-group">
    <div class='form-label'>Nama Mahasiswa</div>
    <div>{{ $internship->student->name }}</div>
</div>

<div class="form-group">
    <div class='form-label'>Periode</div>
    <div>{{ $internship->start_at }} s/d {{ $internship->end_at}}</div>
</div>

<div class="form-group">
    <div class='form-label'>Instansi</div>
    <div>{{ $internship->proposal->agency->name ?? "-"}}</div>
</div>

<div class="form-group">
    <div class='form-label'>Judul</div>
    <div>{{ $internship->title ?? "-"}}</div>
</div>

<div class="form-group">
    <div class='form-label'>Pembimbing KP</div>
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><div>{{ $internship->advisor->name ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><div>{{ $internship->advisor->nip ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td>{{ $internship->advisor->phone ?? "-"}}</td>
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
            <td><div>{{ $internship->field_advisor_name ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>No Pegawai</td>
            <td>:</td>
            <td><div>{{ $internship->field_advisor_no ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td>{{ $internship->field_advisor_phone ?? "-"}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $internship->field_advisor_email?? "-"}}</td>
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
            <td><div>{{ $internship->seminar_date ?? "-"}}</div></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>:</td>
            <td><div>{{ $internship->seminar_time ?? "-"}}</div></td>
        </tr>

    </table>
</div>


<div class="form-group">


    <label class="form-label" for="field">Alasan Pembatalan KP</label>

    {{ html()->textarea('field')->class(['form-control', 'is-invalid' 

    => $errors->has('field')])->id('field')}}

    @error('field')

    <div class="invalid-feedback">{{ $errors->first('field') }}</div>

    @enderror
    
</div>