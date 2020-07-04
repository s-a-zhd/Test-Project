@extends('navbar')
@section('content')
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
           
            @include('flash-message')
            @if ( Session::has('flash_message') )
         
          <div class="alert {{ Session::get('flash_type') }}">
            <script> M.toast({html: '{{ Session::get('flash_message') }}', displayLegth: 1000, timeRemaining: 2000}) </script>
              <h3></h3>
          </div>
          @endif
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif
            <div class="box">
            <form class="form-example" action="{{ route('create.store') }}" method="post">
               
               @csrf
                <!-- Input fields -->
                <div class="form-group">
                <input type="text" value="" placeholder="Title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" value="" placeholder="link" name="link" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">File Type</label>
                       <select name="type" id="" class="form-control">
                        <option value="video">Video</option>
                        <option value="post">Post</option>
                       </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="">Choose Section</label>
                        <select name="section" id="" class="form-control">
                         <option value="section1">Section 1</option>
                         <option value="section2">Section 2</option>
                        </select>
                     </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <div>
                  <textarea class="form-control" name="details" id="" cols="50" rows="10"></textarea>
                </div>
                </div>
                <button type="" class="btn btn-primary btn-customized">Create Post</button>
              
               
            </form>
        </div>
        </div>
    </div>
</div>
@endsection('content')