@extends('layouts.console')

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center mt-4">
          <img src="/img/fireworks.png">
          <h2>
            Welcome {{ Auth::user()->name }}
          </h2>
          <a href="/updates/create" class="btn btn-danger">Create a new update</a>
      </div>
    </div>
</div>
@endsection
