@extends('layouts.main')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar en el Formulario</h1>
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
					<form role="form" method="POST" id="formula" name="formula" action="{{ route('formulary.store') }}" onsubmit="return validarFormulario()" >                        
						@csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nombresyapellidos">Nombres y Apellidos:</label>
                                    <input type="text" id="nombresyapellidos" name="nombresyapellidos" class="form-control" placeholder="Nombre completo" required autofocus >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tipodocumento">Tipo de Documento:</label>
                                    <select id="tipodocumento" name="tipodocumento" class="form-control">
                                        <option value="1">DNI</option>
                                        <option value="2">CARNET DE EXTRANJERIA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="numerodocumento">Numero de Documento:</label>
                                    <input type="text" id="numerodocumento" name="numerodocumento" class="form-control" placeholder="Numero Completo" required autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="correo">Correo Electronico:</label>
                                    <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo Completo" required autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fecha_nac">Fecha de Nacimiento</label>
                                    <input  type="text" max='2020-01-01' min='1950-01-01' id="fecha_nac" name="fecha_nac" class="form-control" placeholder="Fecha Completa" autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion Completa" required autofocus>
                                </div>
                            </div>
                        </div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="float-right btn btn-primary">Registrar</button>
                            <button type="reset" class="float-left btn btn-secondary" value='Limpiar Formulario'>Limpiar</button>
                            
						</div>
					</form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection


