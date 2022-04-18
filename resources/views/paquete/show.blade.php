@extends('layouts.app')

@section('template_title')
    {{ $paquete->name ?? 'Show Paquete' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paquete</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paquetes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Origen:</strong>
                            {{ $paquete->origen }}
                        </div>
                        <div class="form-group">
                            <strong>Destino:</strong>
                            {{ $paquete->destino }}
                        </div>
                        <div class="form-group">
                            <strong>Confirmed:</strong>
                            {{ $paquete->confirmed }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $paquete->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Destinatario:</strong>
                            {{ $paquete->destinatario }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $paquete->cliente_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
