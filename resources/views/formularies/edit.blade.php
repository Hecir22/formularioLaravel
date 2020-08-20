@extends('layouts.main')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Campos de Formulario</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
					<div class="card-header">
							FORMULARIO
					</div>
					<!-- /.card-header -->
					<form role="form" method="POST" id="formula" name="formula" action="{{ route('formulary.update', $formulary->id) }}  "  >
						@csrf
                        @method('PATCH')
						<div class="card-body row">
							<div class="form-group col-md-6">
                                <label for="nombresyapellidos">Nombres y Apellidos:</label>
                                <input type="text" id="nombresyapellidos" name="nombresyapellidos" class="form-control" placeholder="Nombre completo" value="{{ $formulary->nombresyapellidos }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tipodocumento">Tipo de Documento:</label>
                                <select id="tipodocumento" name="tipodocumento" class="form-control">
                                    <option @if($formulary->tipodocumento == '1') {{'selected'}} @endif value="1">DNI</option>
                                    <option @if($formulary->tipodocumento == '2') {{'selected'}} @endif value="2">CARNET DE EXTRANJERIA</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="numerodocumento">Numero de Documento:</label>
                                <input type="text" id="numerodocumento" name="numerodocumento" class="form-control" placeholder="Numero completo" value="{{ $formulary->numerodocumento }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="correo">Correo Electronico:</label>
                                <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo completo" value="{{ $formulary->correo }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fecha_nac">Fecha de Nacimiento:</label>
                                <input type="date" max='2020-01-01' min='1950-01-01' id="fecha_nac" name="fecha_nac" class="form-control" placeholder="Fecha completa" value="{{ $formulary->fecha_nac }}" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="direccion">Direccion:</label>
                                <input type="text" id="text" name="text" class="form-control" placeholder="Direccion completa" value="{{ $formulary->direccion }}" required>
                            </div>

						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="float-right btn btn-primary">Actualizar</button>
                            
						</div>
					</form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
