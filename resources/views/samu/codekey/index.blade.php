@extends('layouts.app')

@section('content')

@include('nav')
<form method="POST" action="{{ route('samu.qtc.store') }}">
    @csrf
    @method('POST')

        <h3 class="mb-3"><i class="fas fa-lock"></i> Lista de Codificacion de Claves</h3>

        <div class="row mb-4">
            <div class="col-12 col-md-6">
                <form method="GET" class="form-horizontal" action="">
                    <div class="input-group mb-sm-0">
                        <input class="form-control" type="text" name="search" autocomplete="off" id="for_search"
                            style="text-transform: uppercase;"
                            placeholder="NOMBRE" value="" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-2">
                <a class="btn btn-success" href="{{ route('samu.codekey.create') }}">
                    <i class="fas fa-plus"></i> Agregar
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-sm table-bordered table-striped small">
                <thead>
                    <tr class="text-center table-info">
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($codekeys as $codekey)
                    <tr>
                        <td>{{ $codekey->key_code }}</td>
                        <td>{{ $codekey->name_key_code }}</td>
                        <td><a href="{{ route('samu.codekey.edit', $codekey) }}">Editar</a> </td>
                    
                                <td class="text-center" >
                                <form method="POST" action="{{ route('samu.codekey.destroy' , $codekey) }}">
                                @csrf
                                @method('DELETE')
                                <!--  <i class="fas fa-trash-alt fa-lg" type="submit" onclick="return confirm('¿Está seguro de eliminar la información?');"></i>
        -->                         <button type="submit" class="btn btn-default"> <i class="fas fa-trash-alt fa-lg"></i> </button>
                            </form>

                                </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection


@section('custom_js')
<script>

$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 3000 ); // 3 secs

});
</script>
@endsection