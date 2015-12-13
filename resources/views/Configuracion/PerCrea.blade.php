@extends('layouts.principal')
@section('content')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/common-scripts.js') }}"></script>


    <div class="cardTap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dialog_Total">
                        <div class="form-espacio">
                            <div class="header">
                                <h4 class="title">Modificacion Perfil</h4>
                            </div>
                            <hr></hr>
                            <div class="col-lg-12">
                                {!! Form::open(['route' => 'trabajador.show', 'method' => 'GET', 'class'=>'form-vertical','role'=>'search']) !!}
                                <div class="row-fluid">

                                            <input type="hidden" class="form-control" id="id" name="pantalla" value="lista" >

                                    <div class="span3">
                                        <div class="control-group">
                                            <select class="form-control" name="TipBusqu">
                                                <option value="1">DNI</option>
                                                <option value="2">Nombre</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="span3">
                                        <div class="control-group">
                                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Usuario'])!!}
                                        </div>
                                    </div>
                                    <div class="span1">
                                        <div class="control-group">
                                            <button type="submit" class="btn btn-warning ">Buscar</button>
                                        </div>
                                    </div>

                                    <div class="span1">
                                        <div class="control-group">
                                            <button type="submit" class="btn btn-warning ">Limpiar</button>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped table-bordered" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
                                        <th>Username</th>
                                        <th class="hidden-phone">Email</th>
                                        <th class="hidden-phone">Points</th>
                                        <th class="hidden-phone">Joined</th>
                                        <th class="hidden-phone"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>Jhone doe</td>
                                        <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com">jhone-doe@gmail.com</a></td>
                                        <td class="hidden-phone">10</td>
                                        <td class="center hidden-phone">02.03.2013</td>
                                        <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>gada</td>
                                        <td class="hidden-phone"><a href="mailto:gada-lal@gmail.com">gada-lal@gmail.com</a></td>
                                        <td class="hidden-phone">34</td>
                                        <td class="center hidden-phone">08.03.2013</td>
                                        <td class="hidden-phone"><span class="label label-warning">Suspended</span></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>soa bal</td>
                                        <td class="hidden-phone"><a href="mailto:soa bal@yahoo.com">soa bal@yahoo.com</a></td>
                                        <td class="hidden-phone">33</td>
                                        <td class="center hidden-phone">1.12.2013</td>
                                        <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
