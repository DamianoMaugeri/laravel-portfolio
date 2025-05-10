@extends('layouts.projects')

@section('title', 'Modifica il progetto ')

@section('content')

 

    <form action="{{route("projects.update", $project )}}" method="POST" class="row g-3">

        @csrf

        @method('PUT')


        <div class="col-md-6">
          <label for="name" class="form-label">Nome Progetto</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
        </div>

        
    {{-- <div class="col-md-6">
          <label for="lang" class="form-label">Linguaggio utilizzato </label>
          <input type="text" class="form-control" id="lang" name="lang" value="{{$project->lang}}">
        </div> --}}

        <div class="col-md-6">
            <label for="team" class="form-label">Team di sviluppo</label>
          <select name="team" id="team" class="form-select">
            <option value="1" {{ old('team', $project->team) == '1' ? 'selected' : '' }}>Lavoro di gruppo</option>
            <option value="0" {{ old('team', $project->team) == '0' ? 'selected' : '' }}>Progetto individuale</option>
          </select>
        </div>

        <div class="col-md-6">
            <label for="type_id" class="form-label">Tipo di progetto</label>
          <select name="type_id" id="type_id" class="form-select">
            @foreach ($types as $type)
            <option  value="{{$type->id}}" {{$project->type_id == $type->id ? 'selected':'' }}>{{$type->name}}</option>
                
            @endforeach

          </select>
        </div>

        
        <div class="col-md-12 d-flex flex-wrap gap-3">

            @foreach ($technologies as $technology)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}" {{$project->technologies->contains($technology) ? 'checked': ''}}>
                <label class="form-check-label" for="technology-{{$technology->id}}">{{$technology->name}}</label>
            </div>
                
            @endforeach


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