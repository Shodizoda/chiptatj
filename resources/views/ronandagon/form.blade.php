<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('ФИО') }}
            {{ Form::text('nomu_nasab', $ronandagon->nomu_nasab, ['class' => 'form-control' . ($errors->has('nomu_nasab') ? ' is-invalid' : ''), 'placeholder' => 'Ронанди автобус']) }}
            {!! $errors->first('nomu_nasab', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Дата рождения') }}
            {{ Form::date('soli_tavallud', $ronandagon->soli_tavallud, ['class' => 'form-control' . ($errors->has('soli_tavallud') ? ' is-invalid' : ''), 'placeholder' => '2000']) }}
            {!! $errors->first('soli_tavallud', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Водительское удостоверение') }}
            {{ Form::text('hujati_ronandagi', $ronandagon->hujati_ronandagi, ['class' => 'form-control' . ($errors->has('hujati_ronandagi') ? ' is-invalid' : ''), 'placeholder' => '45487845']) }}
            {!! $errors->first('hujati_ronandagi', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Номер телефона') }}
            {{ Form::text('raghami_telefon', $ronandagon->raghami_telefon, ['class' => 'form-control' . ($errors->has('raghami_telefon') ? ' is-invalid' : ''), 'placeholder' => '111111111']) }}
            {!! $errors->first('raghami_telefon', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
</div>
