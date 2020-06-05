
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