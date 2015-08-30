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

                                    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="message"></div>
                                    </div>

                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="text-center">id</th>
                                                <th class="text-center">PIN</th>
                                                <th class="text-center">Fecha de creación</th>
                                                <th class="text-center">Fecha de modificación</th>
                                                <th class="text-center">Estado</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pins as $pin)
                                            <tr class="odd">
                                                <td class="text-center">{{ $pin->id }}</td>
                                                <td class="text-center">{{ $pin->pin }}</td>
                                                <td class="text-center">{{ $pin->created_at }}</td>
                                                <td class="text-center">{{ $pin->updated_at }}</td>
                                                <td class="text-center">{!! ($pin->active) ? '<i class="fa fa-check text-success" title="PIN libre"></i>' : '<i class="fa fa-times text-danger" title="PIN usado"></i>' !!}</td>
                                                <td class="text-center">
                                                    <button value="{{ $pin->id }}" {!! ($pin->active) ? 'OnClick="editPin(this);" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"' : 'class="btn btn-primary btn-xs disabled"' !!}>Editar</button>
                                                    <button value="{{ $pin->id }}" {!! ($pin->active) ? 'OnClick="deletePin(this);" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"' : 'class="btn btn-danger btn-xs disabled"' !!}>Eliminar</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        {!! $pins->render() !!}
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

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