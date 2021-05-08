@extends('layout')

@section('content')
    <h1>EMPLEADOS</h1>

    <ul>
        @foreach ($empleados as $empleado)
            <li>
                {{$empleado->nombres}}
            </li>
            <li>
                <form action="{{route('empleado.destroy',$empleado->id)}}" method="POST">
                    {{method_field('DELETE')}} {{ csrf_field() }}

                    <button type="submit">Borrar</button>
                </form>
            </li>
        @endforeach
    </ul>
    
@endsection