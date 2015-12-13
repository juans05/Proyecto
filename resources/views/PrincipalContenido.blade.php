@extends('layouts.principal')
@section('content')
    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/common-scripts.js') }}"></script>
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN THEME CUSTOMIZER-->

            <!-- END THEME CUSTOMIZER-->
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Inicio
            </h3>

            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <!--Menu de contenedor -->
        <div class="metro-nav">
            <div class="metro-nav-block nav-block-orange">
                <a data-original-title="" href="#">
                    <i class="fa fa-graduation-cap"></i>
                    <div class="info">321</div>
                    <div class="status">Alumnos</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-grey">
                <a data-original-title="" href="#">
                    <i class="icon-user"></i>
                    <div class="info">49</div>
                    <div class="status">Personal</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-yellow">
                <a data-original-title="" href="#">
                    <i class="icon-dollar"></i>
                    <div class="info"></div>
                    <div class="status">Pagos</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-blue double">
                <a data-original-title="" href="#">
                    <i class="icon-book"></i>
                    <div class="status">Reportes </div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-red">
                <a data-original-title="" href="#">
                    <i class="icon-tasks"></i>
                    <div class="info"></div>
                    <div class="status">administracion</div>
                </a>
            </div>
        </div>
        <!--FIN Menu de contenedor -->
        <!--   <div class="metro-nav">
               <div class="metro-nav-block nav-block-blue">
                   <a data-original-title="" href="#">
                       <i class="icon-shopping-cart"></i>
                       <div class="info">29</div>
                       <div class="status">New Order</div>
                   </a>
               </div>
               <div class="metro-nav-block nav-block-green double">
                   <a data-original-title="" href="#">
                       <i class="icon-tasks"></i>
                       <div class="info">$37624</div>
                       <div class="status">Stock</div>
                   </a>
               </div>
               <div class="metro-nav-block nav-block-orange">
                   <a data-original-title="" href="#">
                       <i class="icon-envelope"></i>
                       <div class="info">123</div>
                       <div class="status">Messages</div>
                   </a>
               </div>
               <div class="metro-nav-block nav-block-purple">
                   <a data-original-title="" href="#">
                       <i class="icon-remove-sign"></i>
                       <div class="info">34</div>
                       <div class="status">Cancelled</div>
                   </a>
               </div>
               <div class="metro-nav-block nav-block-grey ">
                   <a data-original-title="" href="#">
                       <i class="icon-external-link"></i>
                       <div class="info">$53412</div>
                       <div class="status">Total Profit</div>
                   </a>
               </div>
           </div>
           <div class="space10"></div>
           <!--END METRO STATES-->
    </div>



    <!-- END PAGE CONTENT-->
</div>

@endsection