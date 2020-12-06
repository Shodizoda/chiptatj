<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Номер') }}
            {{ Form::text('raqam', $autobusho->raqam, ['class' => 'form-control' . ($errors->has('raqam') ? ' is-invalid' : ''), 'placeholder' => '0101SS01']) }}
            {!! $errors->first('raqam', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Модель') }}
            {{ Form::text('model', $autobusho->model, ['class' => 'form-control' . ($errors->has('model') ? ' is-invalid' : ''), 'placeholder' => 'IKEA']) }}
            {!! $errors->first('model', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Количество мест') }}
            {{ Form::text('joi_nishast', $autobusho->joi_nishast, ['class' => 'form-control' . ($errors->has('joi_nishast') ? ' is-invalid' : ''), 'placeholder' => '30']) }}
            {!! $errors->first('joi_nishast', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('организация') }}
            {{ Form::text('tashkilot_id', $autobusho->tashkilot_id, ['class' => 'form-control' . ($errors->has('tashkilot_id') ? ' is-invalid' : ''), 'placeholder' => 'Asia express']) }}
            {!! $errors->first('tashkilot_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
</div>
