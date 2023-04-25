@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="d-flex">
            <div>
                <h1>{{$project->title}}</h1>
                <p>/{{$project->slug}}</p>
            </div>
        </div>

        <div>
            <a class="btn btn-primary" href="{{route('projects.edit',$project)}}">Modifica</a>
        </div>
    </div>

    <div class="container my-3">
        <p>
            {{$project->description}}
        </p>
    </div>
@endsection