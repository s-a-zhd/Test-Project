@extends('navbar')
@section('content')
<div class="container h-100">
    <div class="row h-200 justify-content-center align-items-center box">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form class="form-example" action="" method="post">
             
                  
              
                <h1>{{ $title }}</h1>
                
                <!-- Input fields -->
                <div class="form-group">
                    <label for="">Video</label>
                    <iframe width="648" height="400" src="{{ $link  }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                </div>
                <div class="form-group">
                    <label for="password">Body:</label>
                 <div>
                    {{ $details }}
                     </div>  
                     <button type="" class="btn btn-primary btn-customized">Share</button>
                </div>
               
              
               
            </form>
           
        </div>
    </div>
</div>
@endsection('content')