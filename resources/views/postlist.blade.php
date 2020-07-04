@extends('navbar')
@section('content')

<div class="bs-example container" data-example-id="striped-table">
    <table class="table table-striped table-bordered table-hover">
      <h2>All Blog Posts</h2>
      <thead>
       
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Type</th>
          <th>Link</th>
          <th>Section</th>
          <th>Details</th>
          <th>Action</th>
         
        </tr>
      </thead>
      <tbody>
        @foreach($list  as $p)  
        <tr>
          
          <td>{{ $p->id }}</td>
          <td>{{ $p->title }}</td>
          <td>{{ $p->type }}</td>
          <td>{{ $p->link }}</td>
          <td>{{ $p->section }}</td>
          <td>{{ $p->details }}</td>
          <td>
            @if ($p->status == 0)
            {{-- expr --}}
        <a href="{{route('unpublish', [$p->id])}}" class="btn btn-group-lg btn-primary">Unpublish</a>
          
          @elseif($p->status == 1)
          <a href="{{route('publish', [$p->id])}}" class="btn btn-group-lg btn-primary">Published</a>
          @endif
          </td>
        </tr>
      @endforeach
       
      </tbody>
     
    </table>
  </div>
  @endsection('content')