<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Название') }}
            {{ Form::text('nom', $khatsayrho->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Мусофир   Мусофири']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Откуда ') }}
            {{ Form::text('az_kujo', $khatsayrho->az_kujo, ['class' => 'form-control' . ($errors->has('az_kujo') ? ' is-invalid' : ''), 'placeholder' => 'Душанбе']) }}
            {!! $errors->first('az_kujo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Куда') }}
            {{ Form::text('ba_kujo', $khatsayrho->ba_kujo, ['class' => 'form-control' . ($errors->has('ba_kujo') ? ' is-invalid' : ''), 'placeholder' => 'Худжанд']) }}
            {!! $errors->first('ba_kujo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Расстояние') }}
            {{ Form::text('masofa', $khatsayrho->masofa, ['class' => 'form-control' . ($errors->has('masofa') ? ' is-invalid' : ''), 'placeholder' => '380км']) }}
            {!! $errors->first('masofa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Время отправки') }}
            {{ Form::text('vaqti_raftan', $khatsayrho->vaqti_raftan, ['class' => 'form-control' . ($errors->has('vaqti_raftan') ? ' is-invalid' : ''), 'placeholder' => '00:00']) }}
            {!! $errors->first('vaqti_raftan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Время прибытия') }}
            {{ Form::text('vaqti_rasidan', $khatsayrho->vaqti_rasidan, ['class' => 'form-control' . ($errors->has('vaqti_rasidan') ? ' is-invalid' : ''), 'placeholder' => '06:00']) }}
            {!! $errors->first('vaqti_rasidan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Время возвращения') }}
            {{ Form::text('vaqti_bargashtan', $khatsayrho->vaqti_bargashtan, ['class' => 'form-control' . ($errors->has('vaqti_bargashtan') ? ' is-invalid' : ''), 'placeholder' => '1000']) }}
            {!! $errors->first('vaqti_bargashtan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Автобус') }}
            {{ Form::text('autobus_id', $khatsayrho->autobus_id, ['class' => 'form-control' . ($errors->has('autobus_id') ? ' is-invalid' : ''), 'placeholder' => 'IKEA GLS63']) }}
            {!! $errors->first('autobus_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Водитель') }}
            {{ Form::text('ronanda_id', $khatsayrho->ronanda_id, ['class' => 'form-control' . ($errors->has('ronanda_id') ? ' is-invalid' : ''), 'placeholder' => 'Ронандаи Ронанда']) }}
            {!! $errors->first('ronanda_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Диспетчер') }}
            {{ Form::text('nozir_id', $khatsayrho->nozir_id, ['class' => 'form-control' . ($errors->has('nozir_id') ? ' is-invalid' : ''), 'placeholder' => 'Кумрибону']) }}
            {!! $errors->first('nozir_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Статус') }}
            {{ Form::text('khatsayr_status_id', $khatsayrho->khatsayr_status_id, ['class' => 'form-control' . ($errors->has('khatsayr_status_id') ? ' is-invalid' : ''), 'placeholder' => 'Статус']) }}
            {!! $errors->first('khatsayr_status_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
