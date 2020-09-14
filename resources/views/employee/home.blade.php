@php
    use App\Section;

    $sections = Section::all();
@endphp
@extends('employee.templates.employee_menu')

@section('content')
    <div class="row container">
        <form class="col s12" action="{{ route('employee.checklistitem.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col l6">
                    <input id="description" type="text" class="validate" name="description">
                    <label for="description">Description</label>
                </div>
                <div class="input-field col l6">
                    <select name="section">
                        <option value="" disabled selected>Choose your option</option>
                        @foreach ($sections as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                    </select>
                    <label>Section</label>
                </div>
            </div>
            <div class="row">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
@endsection