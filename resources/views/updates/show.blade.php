@extends('layouts.console')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-12 offset-md-3 col-md-6">
      <h3 class="mt-4">
        All Updates
      </h3>
    
         <div class="card mt-2">
          <div class="card-body">
            {{ $update->body }}
            <p class="card-text text-muted">Added on {{ \Carbon\Carbon::parse($update->created_at)->diffForHumans() }} by <strong>{{ $update->user->name }}</strong></p>
          </div>
        </div>
      
    </div>
  </div>
</div>

@endsection