@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List des photos') }} <a href="{{route('photo.create')}}">Ajouter un nouveau</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div  class="row">
                        
                   
                    @foreach($photos as $photo)
                    <div class="col-sm-4">
                        
                
                    <a href="{{route('photo.edit', $photo)}}">
                        <img src="{{$photo->thumbnail}}" alt="{{$photo->title}}" class="img-thumbnail">
                    </a>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection