<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $archivo->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tema') }}
            {{ Form::text('tema', $archivo->tema, ['class' => 'form-control' . ($errors->has('tema') ? ' is-invalid' : ''), 'placeholder' => 'Tema']) }}
            {!! $errors->first('tema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('recurso') }}
            {{ Form::text('recurso', $archivo->recurso, ['class' => 'form-control' . ($errors->has('recurso') ? ' is-invalid' : ''), 'placeholder' => 'Recurso']) }}
            {!! $errors->first('recurso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>