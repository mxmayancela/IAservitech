<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::select('cliente_id',$clientes, $paquete->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un cliente']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('origen') }}
            {{ Form::text('origen', $paquete->origen, ['class' => 'form-control' . ($errors->has('origen') ? ' is-invalid' : ''), 'placeholder' => 'Origen']) }}
            {!! $errors->first('origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('destino') }}
            {{ Form::text('destino', $paquete->destino, ['class' => 'form-control' . ($errors->has('destino') ? ' is-invalid' : ''), 'placeholder' => 'Destino']) }}
            {!! $errors->first('destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('confirmed', $paquete->confirmed, ['class' => 'form-control' . ($errors->has('confirmed') ? ' is-invalid' : ''), 'placeholder' => '0 o 1']) }}
            {!! $errors->first('confirmed', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $paquete->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Express o Normal']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('destinatario') }}
            {{ Form::text('destinatario', $paquete->destinatario, ['class' => 'form-control' . ($errors->has('destinatario') ? ' is-invalid' : ''), 'placeholder' => 'Direccion de envio']) }}
            {!! $errors->first('destinatario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>