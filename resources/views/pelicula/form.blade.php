<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreP') }}
            {{ Form::text('nombreP', $pelicula->nombreP, ['class' => 'form-control custom-form-control' . ($errors->has('nombreP') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombreP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anioP') }}
            {{ Form::text('anioP', $pelicula->anioP, ['class' => 'form-control custom-form-control' . ($errors->has('anioP') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('anioP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriP') }}
            {{ Form::text('descriP', $pelicula->descriP, ['class' => 'form-control custom-form-control' . ($errors->has('descriP') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descriP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::text('categoria_id', $pelicula->categoria_id, ['class' => 'form-control custom-form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoría Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary custom-btn">{{ __('Submit') }}</button>
    </div>
</div>

<style>
    /* Para aumentar el tamaño de letra de los campos de entrada */
    .form-control.custom-form-control {
        font-size: 18px; /* Ajusta el tamaño según tus preferencias */
    }

    /* Para aumentar el tamaño de letra de los botones */
    .btn.custom-btn {
        font-size: 18px; /* Ajusta el tamaño según tus preferencias */
    }
</style>
