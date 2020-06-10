<div class="form-group">
    <label class="form-label" for="advisor_id">Nama Dosen :</label>
    {{ html()->select('advisor_id')->options($lecturer)->class(["form-control", "is-invalid" => $errors->has('advisor_id')])->id('advisor_id') }}
    @error('advisor_id')
    <div class="invalid-feedback">{{ $errors->first('advisor_id') }}</div>
    @enderror
</div>