@extends('voyager::master')

@section('content')

    <h3>Administrador de la base de datos de Backups</h3>
    <div class="row">
        <div class="col-xs-12 clearfix">
            <a id="create-new-backup-button" href="{{ url('/administracion/backup/create') }}" class="btn btn-primary pull-right"
               style="margin-bottom:2em;"><i
                    class="fa fa-plus"></i> Crear un nuevo Backup
            </a>
        </div>
        <div class="col-xs-12">
            @if (count($backups))

                <table class="table table-striped table-bordered" id="tabla">
                    <thead>
                    <tr>
                        <th>Archivo</th>
                        <th>Tamaño</th>
                        <th>Fecha</th>
                        
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        Los backups se encuentran en el directorio: <strong>{{$ubicacion}}</strong>
              @foreach($backups as $backup)
                        <tr>
                                  <td>{{ $backup['file_name'] }}</td>
                            <td>{{($backup['file_size']) }}</td>
                            <td>
                                {{ $backup['last_modified'] }}
                            </td>
                            <td>
                                {{ $backup['last_modified'] }}
                            </td>
                           
                            <td class="text-right">
                                <a class="btn btn-xs btn-default"
                                   href="{{  route('backDownload', $backup['file_name']) }}"><i
                                        class="fa fa-cloud-download"></i> Descargar</a>
                                <a class="btn btn-xs btn-danger" data-button-type="delete"
                                   href="{{ url('/administracion/backup/delete/'.$backup['file_name']) }}"><i class="fa fa-trash-o"></i>
                                    Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="well">
                    <h4>No se posee ningun backup</h4>
                </div>
            @endif
        </div>
    </div>
@stop
