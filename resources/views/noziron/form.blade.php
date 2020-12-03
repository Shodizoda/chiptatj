<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nomu_nasab') }}
            {{ Form::text('nomu_nasab', $noziron->nomu_nasab, ['class' => 'form-control' . ($errors->has('nomu_nasab') ? ' is-invalid' : ''), 'placeholder' => 'Nomu Nasab']) }}
            {!! $errors->first('nomu_nasab', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('soli_tavallud') }}
            {{ Form::text('soli_tavallud', $noziron->soli_tavallud, ['class' => 'form-control' . ($errors->has('soli_tavallud') ? ' is-invalid' : ''), 'placeholder' => 'Soli Tavallud']) }}
            {!! $errors->first('soli_tavallud', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('raghami_telefon') }}
            {{ Form::text('raghami_telefon', $noziron->raghami_telefon, ['class' => 'form-control' . ($errors->has('raghami_telefon') ? ' is-invalid' : ''), 'placeholder' => 'Raghami Telefon']) }}
            {!! $errors->first('raghami_telefon', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $noziron->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>