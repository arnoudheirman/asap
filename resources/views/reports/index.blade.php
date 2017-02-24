@extends('_layouts.master')

@section('content')

    <div class="container">

    <form method="GET">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Beoordeling</label>
            <select class="form-control" name="connotation" id="connotation">
                @foreach($connotations as $connotation)
                    <option value="{{$connotation->id}}">{{$connotation->name}}</option>
                @endforeach
            </select>
            <label for="competence">Competenties</label>
            <select class="form-control" name="competence" id="competence">
                @foreach($competences as $competence)
                    <option value="{{$competence->id}}">{{$competence->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Submit">
        </div>
    </form>


    <!--form method="POST">
        {{csrf_field()}}
        <div class="form-group">

            <input type="submit" value="Submit">
        </div>
    </form-->

    </div>

@stop