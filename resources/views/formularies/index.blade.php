@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Formulario</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

    <div class="container-fluid">
        @if(session()->get('success'))
            <div class="alert alert-success fade show" role="alert">
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="close white" data-dismiss="alert" aria-label="Close" style="color: white">
                    <span aria-hidden="true" style="color: white">&times;</span>
                </button>
            </div>
        @endif
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('formulary.create')}}" class="btn btn-success">
                            <i class="fa fa-plus"></i> Agregar Datos
                        </a>
                   </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table id="pedido" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombres y Apellidos</th>
                                        <th>Tipo de Documento</th>
                                        <th>Numero de Documento</th>
                                        <th>Correo</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Direccion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($formularies as $formulary)
                                    <tr>
                                    <td>{{ $formulary->nombresyapellidos }}</td>
                                    <td>
                                        @if($formulary->tipodocumento == '1')
                                            <p>DNI</p>
                                        @else
                                            <P>CARNET DE EXTRANJERIA</P>
                                        @endif
                                    </td>
                                    <td>{{ $formulary->numerodocumento }}</td>
                                    <td>{{ $formulary->correo }}</td>
                                    <td>{{ $formulary->fecha_nac }}</td>
                                    <td>{{ $formulary->direccion }}</td>
                                    <td>
                                        <div class="row col-md-12">
                                            <a href="{{ route('formulary.edit', $formulary->id) }}" class="btn btn-primary ">
                                                <i>Editar </i>
                                            </a>
                                            <form action="{{ route('formulary.destroy', $formulary->id) }}" method="POST" class="form-button">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"><i> Eliminar</i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection