<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('raqam') }}
            {{ Form::text('raqam', $autobusho->raqam, ['class' => 'form-control' . ($errors->has('raqam') ? ' is-invalid' : ''), 'placeholder' => 'Raqam']) }}
            {!! $errors->first('raqam', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('model') }}
            {{ Form::text('model', $autobusho->model, ['class' => 'form-control' . ($errors->has('model') ? ' is-invalid' : ''), 'placeholder' => 'Model']) }}
            {!! $errors->first('model', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('joi_nishast') }}
            {{ Form::text('joi_nishast', $autobusho->joi_nishast, ['class' => 'form-control' . ($errors->has('joi_nishast') ? ' is-invalid' : ''), 'placeholder' => 'Joi Nishast']) }}
            {!! $errors->first('joi_nishast', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tashkilot_id') }}
            {{ Form::text('tashkilot_id', $autobusho->tashkilot_id, ['class' => 'form-control' . ($errors->has('tashkilot_id') ? ' is-invalid' : ''), 'placeholder' => 'Tashkilot Id']) }}
            {!! $errors->first('tashkilot_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>