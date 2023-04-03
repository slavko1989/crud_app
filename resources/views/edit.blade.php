@extends('bootstrap_sections/main')
@section('title','CRUD APP') 
@section('link')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

@section('table')

<x-edit_success></x-edit_success>
<x-edit_error></x-edit_error>

<form class="form-horizontal" method="post" action="{{ url('/edit/'. $edit->id) }}" enctype="multipart/form-data"> 
  @csrf
  <input type="hidden" name="id" value="{{ $edit->id }}">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Text name" value="{{ $edit->name }}">
       @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Post</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="post"  value="{{ $edit->post }}">
       @error('post')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="email"
       value="{{ $edit->email }}">
       @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Profile</label>
    <div class="col-sm-10">
      <input type="file" class="btn btn-secondary" id="inputPassword3" name="image" value="{{ $edit->image }}">
      <img src="{{ asset('employees_profile/'. $edit->image) }}" class="img-thumbnail" alt="" style="width: 70px;height: 70px;">
       @error('image')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
  </div>
  <br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-primary" name="submit" value="Update">
    </div>
  </div>
</form>


@endsection

