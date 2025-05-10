@extends('layouts.projects')

@section('title')
{{$project->name}}
@endsection

@section('content')

<div class="row">
    {{-- <div class="col-12 text-center p-4">
        {{$project->lang}}
    </div> --}}

    <div class="col-6 text-center p-4">
        {{$project->type->name}}
    </div>

    <div class="col-6 text-center p-4">
        {{$project->team ? 'Progetto in collaborazione con un team ' : 'Progetto individuale'}}
    </div>

    <div class="col-12 text-center p-4 ">
            Tecnologie: 
            @forelse ($project->technologies as $technology)
            <span class="badge " style="background-color: {{$technology->color}}">{{$technology->name}}</span>
                
            @empty
            nessuna tecnologia usata.
                
            @endforelse
    

    </div>

    <div class="col-12 text-center p-4">
        {{$project->description}}
    </div>
</div>
<div class="row justify-content-center text-center">

    <div class="col-3"> 
        <a href={{route('projects.edit', $project)}} class=" btn btn-primay bg-warning text-white ">Modifica Progetto</a>
    </div>

    {{-- <div class="col-3">
         <a href={{route('projects.create')}} class=" btn btn-primay bg-danger text-white ">Elimina Progetto</a>
    </div> --}}

    <div class="col-3">
        <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina Progetto
          </button>

    </div>


</div>


    
@endsection


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Il progetto sarà eliminato definitivamente
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">indietro</button>
       
          <form action="{{route('projects.destroy', $project )}} " method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
          </form>
        </div>
      </div>
    </div>
  </div>