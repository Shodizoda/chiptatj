<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom') }}
            {{ Form::text('nom', $khatsayrho->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('az_kujo') }}
            {{ Form::text('az_kujo', $khatsayrho->az_kujo, ['class' => 'form-control' . ($errors->has('az_kujo') ? ' is-invalid' : ''), 'placeholder' => 'Az Kujo']) }}
            {!! $errors->first('az_kujo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ba_kujo') }}
            {{ Form::text('ba_kujo', $khatsayrho->ba_kujo, ['class' => 'form-control' . ($errors->has('ba_kujo') ? ' is-invalid' : ''), 'placeholder' => 'Ba Kujo']) }}
            {!! $errors->first('ba_kujo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('masofa') }}
            {{ Form::text('masofa', $khatsayrho->masofa, ['class' => 'form-control' . ($errors->has('masofa') ? ' is-invalid' : ''), 'placeholder' => 'Masofa']) }}
            {!! $errors->first('masofa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vaqti_raftan') }}
            {{ Form::text('vaqti_raftan', $khatsayrho->vaqti_raftan, ['class' => 'form-control' . ($errors->has('vaqti_raftan') ? ' is-invalid' : ''), 'placeholder' => 'Vaqti Raftan']) }}
            {!! $errors->first('vaqti_raftan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vaqti_rasidan') }}
            {{ Form::text('vaqti_rasidan', $khatsayrho->vaqti_rasidan, ['class' => 'form-control' . ($errors->has('vaqti_rasidan') ? ' is-invalid' : ''), 'placeholder' => 'Vaqti Rasidan']) }}
            {!! $errors->first('vaqti_rasidan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vaqti_bargashtan') }}
            {{ Form::text('vaqti_bargashtan', $khatsayrho->vaqti_bargashtan, ['class' => 'form-control' . ($errors->has('vaqti_bargashtan') ? ' is-invalid' : ''), 'placeholder' => 'Vaqti Bargashtan']) }}
            {!! $errors->first('vaqti_bargashtan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autobus_id') }}
            {{ Form::text('autobus_id', $khatsayrho->autobus_id, ['class' => 'form-control' . ($errors->has('autobus_id') ? ' is-invalid' : ''), 'placeholder' => 'Autobus Id']) }}
            {!! $errors->first('autobus_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ronanda_id') }}
            {{ Form::text('ronanda_id', $khatsayrho->ronanda_id, ['class' => 'form-control' . ($errors->has('ronanda_id') ? ' is-invalid' : ''), 'placeholder' => 'Ronanda Id']) }}
            {!! $errors->first('ronanda_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nozir_id') }}
            {{ Form::text('nozir_id', $khatsayrho->nozir_id, ['class' => 'form-control' . ($errors->has('nozir_id') ? ' is-invalid' : ''), 'placeholder' => 'Nozir Id']) }}
            {!! $errors->first('nozir_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('khatsayr_status_id') }}
            {{ Form::text('khatsayr_status_id', $khatsayrho->khatsayr_status_id, ['class' => 'form-control' . ($errors->has('khatsayr_status_id') ? ' is-invalid' : ''), 'placeholder' => 'Khatsayr Status Id']) }}
            {!! $errors->first('khatsayr_status_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>