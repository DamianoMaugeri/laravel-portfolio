@extends('layouts.projects')

@section('title', 'Modifica il progetto ')

@section('content')

 

    <form action="{{route("projects.update", $project )}}" method="POST" class="row g-3">

        @csrf

        @method('PUT')


        <div class="col-md-4">
          <label for="name" class="form-label">Nome Progetto</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
        </div>
        <div class="col-md-4">
          <label for="lang" class="form-label">Linguaggio utilizzato </label>
          <input type="text" class="form-control" id="lang" name="lang" value="{{$project->lang}}">
        </div>
        <div class="col-md-4">
            <label for="team" class="form-label">Team di sviluppo</label>
          <select name="team" id="team" class="form-select">
            <option value="1" {{ old('team', $project->team) == '1' ? 'selected' : '' }}>Lavoro di gruppo</option>
            <option value="0" {{ old('team', $project->team) == '0' ? 'selected' : '' }}>Progetto individuale</option>
          </select>
          </div>
        <div class="col-12">
          <label for="description" class="form-label">Descrizione del progetto </label>
         <textarea name="description" id="description"  rows="5" class="form-control">{{$project->description}}</textarea>
        </div>
        <div class="col-2 ">
            <input type="submit" value="Salva" class="btn btn-primary ">

        </div>
      
      </form>
    

    
@endsection