@extends('layouts.console')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-12 offset-md-3 col-md-6 mb-4">
      <h3 class="mt-4">
        All Updates
      </h3>
     
       @foreach($updates as $update)
         <div class="card mt-2">
          <div class="card-body">
            <h4>
              {{ $update->body }}
            </h4>
            <p class="card-text text-muted">Added {{ \Carbon\Carbon::parse($update->created_at)->diffForHumans() }}</p>
            <p style="margin-bottom: 0px;">
            <a href="{{ route('updates.edit', [ 'update' => $update->id ]) }}">Edit</a>
            <a href="{{ route('updates.show', [ 'update' => $update->id ]) }}">Show</a>
            </p>
          </div>
        </div>
      @endforeach
      
    </div>
  </div>
</div>

@endsection