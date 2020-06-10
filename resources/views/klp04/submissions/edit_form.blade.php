<div class="form-group">
    <div class='form-label'>Nama Instansi</div>
    <div>{{ $internship_submission->agency->name }}</div>
</div>

<div class="form-group">
    <div class='form-label'>Periode</div>
    <div>{{ $internship_submission->start_at }} s/d {{ $internship_submission->end_at }}</div>
</div>

<div class="form-group">
    <div class='form-label'>Nama Pengusul</div>
    @foreach($internship_submission->members as $member)
    <div>
        - {{ $member->student->name }} <br>
        <small>{{ $member->student->nim }}</small>
    </div>
    @endforeach
</div>

<div class="form-group">
    <label class="form-label" for="status">Status Proposal</label>
    {{ html()->select('status')->options($statuses)->class(["form-control", "is-invalid" => $errors->has('status')])->id('status') }}
    @error('status')
    <div class="invalid-feedback">{{ $errors->first('status') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="name">Catatan</label>
    {{ html()->textarea('notes')->class(["form-control","is-invalid" => $errors->has('notes')])->id('notes') }}
    @error('notes')
    <div class="invalid-feedback">{{ $errors->first('notes') }}</div>
    @enderror
</div>
