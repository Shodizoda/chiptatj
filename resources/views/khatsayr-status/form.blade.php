<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom') }}
            {{ Form::text('nom', $khatsayrStatus->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rang') }}
            {{ Form::text('rang', $khatsayrStatus->rang, ['class' => 'form-control' . ($errors->has('rang') ? ' is-invalid' : ''), 'placeholder' => 'Rang']) }}
            {!! $errors->first('rang', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('class') }}
            {{ Form::text('class', $khatsayrStatus->class, ['class' => 'form-control' . ($errors->has('class') ? ' is-invalid' : ''), 'placeholder' => 'Class']) }}
            {!! $errors->first('class', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('order') }}
            {{ Form::text('order', $khatsayrStatus->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}
            {!! $errors->first('order', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>