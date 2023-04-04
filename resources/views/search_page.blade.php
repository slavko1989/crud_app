@extends('bootstrap_sections/main')
@section('title','CRUD APP') 
@section('link')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


@section('table')
<h2>Employee</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Post</th>
        <th>Profile</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      
     
     <x-dinamic_search :search="$search"></x-dinamic_search>

    </tbody>
  </table>



@endsection
