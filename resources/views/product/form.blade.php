<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('codigo', $product->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('articulo', $product->articulo, ['class' => 'form-control' . ($errors->has('articulo') ? ' is-invalid' : ''), 'placeholder' => 'Articulo']) }}
            {!! $errors->first('articulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('lote', $product->lote, ['class' => 'form-control' . ($errors->has('lote') ? ' is-invalid' : ''), 'placeholder' => 'Lote']) }}
            {!! $errors->first('lote', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('marca', $product->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('rubro', $product->rubro, ['class' => 'form-control' . ($errors->has('rubro') ? ' is-invalid' : ''), 'placeholder' => 'Rubro']) }}
            {!! $errors->first('rubro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('stock', $product->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>