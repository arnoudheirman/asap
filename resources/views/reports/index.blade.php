@extends('_layouts.master')
@section('content')

    <div class="container">
        <div class='col-lg-3'>
    <form method="GET">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Beoordeling</label>
            <select class="form-control" name="connotation" id="connotation">
                @foreach($connotations as $connotation)
                    <option value="{{$connotation->id}}"  @if (isset($_GET['connotation']) && $_GET['connotation'] == $connotation->id) selected="selected") @endif>{{$connotation->name}} </option>
                @endforeach
            </select>
            <label for="competence">Competenties</label>
            <select class="form-control" name="competence" id="competence">
                @foreach($competences as $competence)
                    <option value="{{$competence->id}}" @if (isset($_GET['competence']) && $_GET['competence'] == $competence->id) selected="selected") @endif>{{$competence->name}}</option>
                @endforeach
            </select>
            
            <label for="level">Level</label>
            <select class="form-control" name="level" id="level">
                @foreach($levels as $level)
                    <option value="{{$level->id}}" @if (isset($_GET['level']) && $_GET['level'] == $level->id) selected="selected") @endif>{{$level->name}}</option>
                @endforeach
            </select>
            <br />
            <input type="submit" value="Filter">
        </div>
    </form>
        </div>
        <div class='col-lg-3'>
            <!--form>
                {{csrf_field()}}
            <div class="form-group">
                <label for="Assesment">Assesments</label>
                <select class="form-control" name="assesment" id="assesment">
                    @foreach($assessments as $assessment)
                        <option value="{{$assessment->id}}">{{$assessment->name}}</option>
                    @endforeach
                </select>
                <br />
                <input type="submit" value="Voeg toe">
            </div>
            </form-->
            <ul lass='list-group'>
                @foreach($assessments as $assessment)
                <li class='assessment_item list-group-item' value="{{$assessment->id}}">{{$assessment->name}}  
                </li> 
                @endforeach 
            </ul>
        </div>
          <div class='col-lg-6'>
            <form>
                {{csrf_field()}}
            <div class="form-group">
                <label for="Assesment">Rapport</label>
                <textarea rows="20" class="form-control" name="report" id="report"></textarea>
              
               
            </div>
            </form>
           
        </div>

    <!--form method="POST">
        {{csrf_field()}}
        <div class="form-group">

            <input type="submit" value="Submit">
        </div>
    </form-->

    </div>

@stop