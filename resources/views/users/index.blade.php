@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <table class="table col-12">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Usuario</td>
                        <td>Correo</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <button class="btn btn-secondary" style="background-color: black"> 
                                    <i class="fa fa-trash">Modificar</i> 
                                </button>
                                |
                                <form 
                                    action="{{url('/users/'.$usuario->id)}}"
                                    method="POST"
                                    class="d-inline"
                                >
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button 
                                        type="submit" 
                                        onclick="return confirm('¿Desea eliminar este usuario?')"
                                        value="delete"
                                        class="btn btn-danger"
                                    >Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection