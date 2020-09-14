@php
    use App\Equipment;
    use App\Plan;
    use App\RequestCriticality;

    $equipments = Equipment::all();
    $plans = Plan::all();
    $criticalities = RequestCriticality::all();
@endphp

@extends('employee.templates.employee_menu')

@section('content')
    <div class="row center">
        <div class="container">
            <div class="row center">
                <h4>Nova solicitação</h4>
            </div>
            <div class="row">
                <form class="col s12" action="{{ route('employee.request.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="input-field col l2">
                            <input id="date" type="text" class="datepicker" value="{{date('d/m/Y')}}" name="date">
                            <label for="date">Data da solicitação</label>
                        </div>
                        <div class="input-field col l3">
                            <input disabled id="user" type="text" class="validate" value="*usuario logado*" name="user">
                            <label for="user">Usuário</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col l4">
                            <select name="equipment">
                                <option value="" disabled selected>Ativo</option>
                                @foreach ($equipments as $equipment)
                                    <option value="{{ $equipment->id }}">{{ $equipment->reg }} - {{ $equipment->equipment_model()->first()->name }}</option>
                                @endforeach
                            </select>
                            <label>Ativo</label>
                        </div>
                        <div class="input-field col l4">
                            <select name="plan">
                                <option value="" disabled selected>Selecione se houver</option>
                                @foreach ($plans as $plan)
                                    <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                                @endforeach
                            </select>
                            <label>Plano</label>
                        </div>
                        <div class="input-field col l4">
                            <select name="criticality">
                                <option value="" disabled selected>Criticidade</option>
                                @foreach ($criticalities as $criticality)
                                    <option value="{{ $criticality->id }}">{{ $criticality->name }}</option>
                                @endforeach
                            </select>
                            <label>Criticidade</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col l3">
                            <input id="position" type="text" class="validate" name="position">
                            <label for="position">Posição</label>
                        </div>
                        <div class="input-field col l3">
                            <input id="reference" type="text" class="validate" name="reference">
                            <label for="reference">Referência</label>
                        </div>
                        <div class="input-field col l6">
                            <textarea id="obs" class="materialize-textarea" data-length="255" name="obs"></textarea>
                            <label for="obs">Observações</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col l6">
                            <textarea id="description" class="materialize-textarea" data-length="255" name="description"></textarea>
                            <label for="description">Descrição</label>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('select').formSelect();

            $('textarea#obs, textarea#description').characterCounter();
        });
    </script>
@endsection