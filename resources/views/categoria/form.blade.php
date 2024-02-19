<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="nombre_categoria" style="font-size: 18px;">Nombre Categoria</label>
            <input type="text" name="nombre_categoria" id="nombre_categoria" value="{{ $categoria->nombre_categoria }}" class="form-control{{ $errors->has('nombre_categoria') ? ' is-invalid' : '' }}" placeholder="Nombre Categoria" style="font-size: 16px;">
            {!! $errors->first('nombre_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="estado_categoria" style="font-size: 18px;">Estado Categoria</label>
            <input type="text" name="estado_categoria" id="estado_categoria" value="{{ $categoria->estado_categoria }}" class="form-control{{ $errors->has('estado_categoria') ? ' is-invalid' : '' }}" placeholder="Estado Categoria" style="font-size: 16px;">
            {!! $errors->first('estado_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
