@extends('layouts.app')

@section('template_title')
    Paquete
@endsection

@section('content')
    <div class="container-fluid">
    <form action="{{route('paquetes.index')}}" method="GET">
    <div class="btn-group">
        <input type="text" name="busqueda" class="form-control" placeholder="Ingrese direccion">
        <input type="submit" name="" class="btn btn-primary">
    </div>
    <div class="btn-group">
      <input type='date'  name="busqueda"   class="form-control"/>
      <input type="submit" name="" class="btn btn-primary">
    </div>
       
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12">
                
                <div class="card">
                    <div class="card-header">
                
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paquete') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paquetes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Paquete') }}
                                </a>
                              </div>
                              
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Origen</th>
										<th>Destino</th>
										<th>Confirmed</th>
										<th>Tipo</th>
										<th>Destinatario</th>
										<th>Cliente Id</th>
                                        <th>Fecha de Envio</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paquetes as $paquete)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $paquete->origen }}</td>
											<td>{{ $paquete->destino }}</td>
											<td>{{ $paquete->confirmed }}</td>
											<td>{{ $paquete->tipo }}</td>
											<td>{{ $paquete->destinatario }}</td>
											<td>{{ $paquete->cliente_id }}</td>
                                            <td>{{ $paquete->created_at }}</td>

                                            <td>
                                                <form action="{{ route('paquetes.destroy',$paquete->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paquetes.show',$paquete->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $paquetes->links() !!}
            </div>
        </div>
    </div>
@endsection
