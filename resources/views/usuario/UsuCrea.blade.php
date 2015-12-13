@extends('layouts.principal')
@section('content')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <div class="cardTap">
        <div class="dialog">
            <div class="form-espacio">

                <div class="header">
                    <h4 class="title">Modificacion Perfil</h4>
                </div>
                {!! Form::open(['route' => 'usuario.create', 'method' => 'POST', 'class'=>'form-vertical']) !!}
                <div class="row-fluid">
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Usuario</label>
                            <div class="controls controls-row">
                                <input type="text" id="usuario" class="input-block-level" placeholder="Usuario" disabled name="" >
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Codigo de Trabajador</label>
                            <div class="controls controls-row">
                                <input type="text" id="nombre" class="input-block-level" placeholder="Nombre" disabled name=""  >
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Perfil</label>
                            <div class="controls controls-row">
                                <select class="form-control" name="nomAplicativo">

                                    <option value="admin">Administrador</option>
                                    <option value="admin">Alumno</option>
                                    <option value="admin">Profesor</option>
                                    <option value="admin">Padre de Familia</option>


                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                        <div class="control-group">
                            <label class="control-label" >Nombre</label>
                            <div class="controls controls-row">
                                <input type="text" id="nombre_persona" class="input-block-level" placeholder="Usuario"  name=""  >
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="control-group">
                            <label class="control-label" >Apellido</label>
                            <div class="controls controls-row">
                                <input type="text" id="apellido_persona" class="input-block-level" placeholder="Nombre"  name="" >
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="control-group">
                            <label class="control-label" >Direccion</label>
                            <div class="controls controls-row">
                                <input type="text" id="direccion" class="input-block-level" placeholder="Usuario"  name=""  >
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Nacionalidad</label>
                            <div class="controls controls-row">
                                <input type="text" id="nacionalidad" class="input-block-level" placeholder="Usuario"  name="" >
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Telefono</label>
                            <div class="controls controls-row">
                                <input type="text" id="telefono" class="input-block-level" placeholder="Nombre"  name=""  >
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Celular</label>
                            <div class="controls controls-row">
                                <input type="text" id="celular" class="input-block-level" placeholder="celular"  name=""  >
                                <label for="email"  class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">

                    <div class="span6">
                        <div class="control-group">
                            <label class="control-label" >Nro Documento</label>
                            <div class="controls controls-row">
                                <input type="text" class="input-block-level" placeholder="Nombre"  name=""  >
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>

                    <div class="span6">
                        <div class="control-group">
                            <label class="control-label" >Email</label>
                            <div class="controls controls-row">
                                <input type="text" id="email" class="input-block-level" placeholder="Apellido"  name=""  >
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">

                    <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar Perfil</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>


    </div>

@endsection
