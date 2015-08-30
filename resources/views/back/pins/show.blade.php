@extends('layouts.back')

@section('content')

<div class="row">

    <div class="col-lg-12">
        <h1 class="page-header">Pines</h1>
    </div>

    <div class="panel-body">
        <div class="content">

            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-list-ol fa-fw"></i> {{ $title }}
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th class="text-center">id</th>
                                        <th class="text-center">Pin</th>
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
                                            <td class="text-center">{!! ($pin->active) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>' !!}</td>
                                            <td class="text-center">
                                                <button value="{{ $pin->id }}" OnClick="editPin(this);" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Editar</button>
                                                <button value="{{ $pin->id }}" OnClick="deletePin(this);" class="btn btn-danger btn-xs">Eliminar</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    {!! $pins->render() !!}
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->

                <div class="col-lg-4">
                    @include('back.modules.search')
                </div>

            </div>

        </div>
    </div>

</div>

@endsection