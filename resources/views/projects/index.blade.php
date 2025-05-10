@extends('layouts.projects')

@section('title', 'tutti i progetti')

@section('content')


<div class="row p-4 justify-content-center">

    <a href={{route('projects.create')}} class=" btn btn-primay col-3 bg-primary text-white ">Aggiungi un nuovo Progetto</a>

</div>



<div class="row row-gap-4">


    @foreach ($projects as $project)
    <div class="col-4">
        <a href="{{ route('projects.show', $project) }}" class="text-decoration-none text-reset">
            <div class="card py-3">
                <div class="card-title text-center">
                    {{ $project->name }}
                </div>
                <div class="card-body text-center">
                    
                    @forelse ($project->technologies as $technology)
                    <span class="badge " style="background-color: {{$technology->color}}">{{$technology->name}}</span>
                        
                    @empty
                    nessuna tecnologia usata.
                        
                    @endforelse
                </div>
            </div>
        </a>
    </div>
    @endforeach

</div>
    
@endsection