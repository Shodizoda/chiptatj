<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('ФИО') }}
            {{ Form::text('nomu_nasab', $noziron->nomu_nasab, ['class' => 'form-control' . ($errors->has('nomu_nasab') ? ' is-invalid' : ''), 'placeholder' => 'Сангали']) }}
            {!! $errors->first('nomu_nasab', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Дата рождения') }}
            {{ Form::date('soli_tavallud', $noziron->soli_tavallud, ['class' => 'form-control' . ($errors->has('soli_tavallud') ? ' is-invalid' : ''), 'placeholder' => '01012000']) }}
            {!! $errors->first('soli_tavallud', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Телефон') }}
            {{ Form::text('raghami_telefon', $noziron->raghami_telefon, ['class' => 'form-control' . ($errors->has('raghami_telefon') ? ' is-invalid' : ''), 'placeholder' => '992775454545']) }}
            {!! $errors->first('raghami_telefon', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Выберите юзера') }}
            {{ Form::select('user_id', $users ,['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Сангали']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
</div>
