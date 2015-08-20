@extends('layout')

@section('content')
    <div class="row">
        <h1>{{ $title }}</h1>
        <table>
        <tr>
            <th>
                #
            </th>
            <th>
                Nombre Programa
            </th>
            <th>
                Modalidad
            </th>
            <th>
                Ciudad
            </th>
        </tr>
        @foreach ($programs as $program)
        <tr>
            <td>
                {{ $program->id }}
            </td>
            <td>
                {{ $program->nombre_programa }}
            </td>
            <td>
                {{ $program->modalidad }}
            </td>
            <td>
                {{ $program->ciudad }}
            </td>
        </tr>
        @endforeach
        </table>
    </div>
@endsection