<div class="box box-info padding-1 mr-6">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Стоимость') }}
            {{ Form::text('narkh', $chiptaho->narkh, ['class' => 'form-control' . ($errors->has('narkh') ? ' is-invalid' : ''), 'placeholder' => '50 сомони']) }}
            {!! $errors->first('narkh', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Место') }}
            {{ Form::text('joi_nishast', $chiptaho->joi_nishast, ['class' => 'form-control' . ($errors->has('joi_nishast') ? ' is-invalid' : ''), 'placeholder' => 'А5']) }}
            {!! $errors->first('joi_nishast', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ФИО - пасажира') }}
            {{ Form::text('nomu_nasab', $chiptaho->nomu_nasab, ['class' => 'form-control' . ($errors->has('nomu_nasab') ? ' is-invalid' : ''), 'placeholder' => 'Мусофир Мусофири']) }}
            {!! $errors->first('nomu_nasab', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Время покупки') }}
            {{ Form::text('vagti_kharid', $chiptaho->vagti_kharid, ['class' => 'form-control' . ($errors->has('vagti_kharid') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('vagti_kharid', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Паспорт ID') }}
            {{ Form::text('raqami_shinosnoma', $chiptaho->raqami_shinosnoma, ['class' => 'form-control' . ($errors->has('raqami_shinosnoma') ? ' is-invalid' : ''), 'placeholder' => 'А11111111']) }}
            {!! $errors->first('raqami_shinosnoma', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Машрут') }}
            {{ Form::text('khatsayr_id', $chiptaho->khatsayr_id, ['class' => 'form-control' . ($errors->has('khatsayr_id') ? ' is-invalid' : ''), 'placeholder' => 'Душанбе-Худжанд']) }}
            {!! $errors->first('khatsayr_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Статус') }}
            {{ Form::text('chipta_status_id', $chiptaho->chipta_status_id, ['class' => 'form-control' . ($errors->has('chipta_status_id') ? ' is-invalid' : ''), 'placeholder' => 'Новый']) }}
            {!! $errors->first('chipta_status_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
</div>
