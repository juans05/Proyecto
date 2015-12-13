@extends('layouts.principal')
@section('content')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/common-scripts.js') }}"></script>
    <div class="cardTap">
        <div class="dialog">
            <div class="form-espacio">

                <div class="header">
                    <h4 class="title">Modificacion Perfil</h4>
                </div>


            {!! Form::open(['route' => ['usuario.update',$datos[0]->trabajador_id], 'method' => 'PUT', 'class'=>'form-vertical']) !!}
                <div class="row-fluid">
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Usuario</label>
                            <div class="controls controls-row">
                                <input type="text" id="usuario" class="input-block-level" placeholder="Usuario" disabled name="usuario" VALUE="{{$datosUsuario[0]->usuario}}">
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Codigo de Trabajador</label>
                            <div class="controls controls-row">
                                <input type="text" id="nombre" class="input-block-level" placeholder="Nombre" disabled name="nombre"  VALUE="{{$datos[0]->cod_trabajador}}">
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Perfil</label>
                            <div class="controls controls-row">
                                <input type="text" id="perfil" class="input-block-level" placeholder="perfil" disabled  name="perfil"  VALUE="{{$datosUsuario[0]->nombre}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                        <div class="control-group">
                            <label class="control-label" >Nombre</label>
                            <div class="controls controls-row">
                                <input type="text" id="nombre_persona" class="input-block-level" placeholder="Usuario"  name="nombre_persona"  VALUE="{{$datos[0]->nombre_trabajador}}">
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="control-group">
                            <label class="control-label" >Apellido</label>
                            <div class="controls controls-row">
                                <input type="text" id="apellido_persona" class="input-block-level" placeholder="Nombre"  name="apellido_persona"  VALUE="{{$datos[0]->nombre_trabajador}}">
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
                                <input type="text" id="direccion" class="input-block-level" placeholder="Usuario"  name="direccion"  VALUE="{{$datos[0]->Direccion}}">
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
                                <input type="text" id="nacionalidad" class="input-block-level" placeholder="Usuario"  name="nacionalidad"  VALUE="{{$datos[0]->Nacionalidad}}">
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Telefono</label>
                            <div class="controls controls-row">
                                <input type="text" id="telefono" class="input-block-level" placeholder="Nombre"  name="telefono"  VALUE="{{$datos[0]->Telefono}}">
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label" >Celular</label>
                            <div class="controls controls-row">
                                <input type="text" id="celular" class="input-block-level" placeholder="celular"  name="celular"  VALUE="{{$datos[0]->celular}}">
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
                                <input type="text" class="input-block-level" placeholder="Nombre"  name="nro_documento"  VALUE="{{$datos[0]->nroDocumento}}">
                                <label for="email" class="error">This must be a valid email address</label>
                            </div>
                        </div>
                    </div>

                    <div class="span6">
                        <div class="control-group">
                            <label class="control-label" >Email</label>
                            <div class="controls controls-row">
                                <input type="text" id="email" class="input-block-level" placeholder="Apellido"  name="email"  VALUE="{{$datos[0]->correo_electronico}}">
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

        <div class="card_user">
            <div class="image">
            </div>
            <div class="content">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{asset('img/lock-thumb.jpg')}}" alt="..."/>
                        <h4 class="title">{{$datos[0]->nombre_trabajador}}
                            <br />
                            <small>{{$datos[0]->cod_trabajador}}</small>
                            <br />
                            <small>{{$datos[0]->nroDocumento}}</small>
                        </h4>
                    </a>
                </div>

            </div>
            <hr>
        </div>
    </div>

@endsection
