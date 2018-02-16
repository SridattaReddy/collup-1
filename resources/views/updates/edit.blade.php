@extends('layouts.console')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-12 offset-md-4 col-md-4">
      <h3 class="mt-4">
        Create New Update
      </h3>
      
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     
       <form action="{{ route('updates.update', ['update' => $update->id] ) }}" method="POST">
         {{ csrf_field() }}
         {{ method_field('PATCH') }}
         <div class="form-group">
      <label for="exampleFormControlTextarea1">Update</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body">{{ $update->body }}</textarea>
    </div>
         <button type="submit" class="btn btn-primary">
           Modify your udpate
         </button>
      </form>
      
    </div>
  </div>
</div>

@endsection