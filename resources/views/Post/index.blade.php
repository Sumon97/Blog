@extends('layouts.admin')

@section('Law Diary', 'Change the way')


@section('content')


<div class="container-fluid py-4">
     
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">publish Status</th>
      <th scope="col">created</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->pubstatus}}</td>
      <td>{{$post->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>    
      
</div>




@endsection
