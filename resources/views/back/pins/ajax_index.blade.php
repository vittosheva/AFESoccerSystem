@extends('layouts.back')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Pines</h1>
        </div>

        <div class="panel-body">
            <div class="content">

                <div class="row">
                    <div class="col-lg-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-list-ol fa-fw"></i> {{ $title }}
                            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">

                                    @include('back.modules.modal')

                                    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="message"></div>
                                    </div>

                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="display:none">
                                        <thead>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">PIN</th>
                                            <th class="text-center">Fecha de creación</th>
                                            <th class="text-center">Fecha de modificación</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Acciones</th>
                                        </thead>

                                        <tbody id="datos"></tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        @include('back.modules.search')
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection