@php
    use App\Request;

    $requests = Request::where('employee_id', 2)->get();
@endphp

@extends('employee.templates.employee_menu')

@section('content')
    <div class="row center">
        <div class="container">
            <div class="row">
                <h4>Suas solicitações</h4>
            </div>
            <div class="row">
                <div class="card">
                    <table class="centered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Data</th>
                                <th>Ativo</th>
                                <th>Plano</th>
                                <th>Posição</th>
                                <th>Referência</th>
                                <th>Status</th>
                                <th>Criticidade</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{ $request->id }}</td>
                                    <td>{{ $request->date }}</td>
                                    <td>{{ $request->equipment()->first()->reg }}</td>
                                    <td>{{ $request->plan()->first()->name }}</td>
                                    <td>{{ $request->position }}</td>
                                    <td>{{ $request->reference }}</td>
                                    <td>{{ $request->request_status()->first()->name }}</td>
                                    <td>{{ $request->request_criticality()->first()->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){

            $('.modal').modal();
        });
    </script>
@endsection