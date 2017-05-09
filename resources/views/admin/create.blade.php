@extends('_layouts.master')
@section('content')
<div class="container">
    <form method="POST" action="/admin/assessment">
        {{csrf_field()}}
        <div class='col-lg-4'>
            <div class="form-group">
            <label for="competence">Competentie</label>
            <select class="form-control" name="competence" id="competence">
                @foreach($competences as $competence)
                <option value="{{$competence->id}}">{{$competence->name}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
                <label for="name">Naam assessment</label>
                <textarea id="name" class="form-control" name="name"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Beschrijving assessment</label>
                <textarea id="description" class="form-control" name="description"></textarea>
            </div>

            <div class="form-group">
            <label for="level">Level</label>
            <select class="form-control" name="level" id="level">
                @foreach($levels as $level)
                <option value="{{$level->id}}">{{$level->name}}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class='col-lg-4'>
            <div class="form-group">
                <label for="name">Beoordeling</label>
                <select class="form-control" name="connotation" id="connotation">
                    @foreach($connotations as $connotation)
                    <option value="{{$connotation->id}}">{{$connotation->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Bijvoegen">
        </div>
    </form>
</div>

@stop
