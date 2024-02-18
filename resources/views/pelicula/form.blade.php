<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreP') }}
            {{ Form::text('nombreP', $pelicula->nombreP, ['class' => 'form-control' . ($errors->has('nombreP') ? ' is-invalid' : ''), 'placeholder' => 'Nombrep']) }}
            {!! $errors->first('nombreP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anioP') }}
            {{ Form::text('anioP', $pelicula->anioP, ['class' => 'form-control' . ($errors->has('anioP') ? ' is-invalid' : ''), 'placeholder' => 'Aniop']) }}
            {!! $errors->first('anioP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriP') }}
            {{ Form::text('descriP', $pelicula->descriP, ['class' => 'form-control' . ($errors->has('descriP') ? ' is-invalid' : ''), 'placeholder' => 'Descrip']) }}
            {!! $errors->first('descriP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::text('categoria_id', $pelicula->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>