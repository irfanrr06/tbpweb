<div class="form-group">
    <label class="form-label" for="field">Alasan Pembatalan KP</label>
    {{ html()->textarea('field')->class(['form-control', 'is-invalid' 
    => $errors->has('field')])->id('field')}}
    @error('field')
    <div class="invalid-feedback">{{ $errors->first('field') }}</div>
    @enderror
</div>