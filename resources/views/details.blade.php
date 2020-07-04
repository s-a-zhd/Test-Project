@extends('navbar')
@section('content')
<div class="container h-100">
    <div class="row h-300 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
          
            <form class="form-example" action="" method="post">
                <h1>{{ $title }}</h1>
                
              
                <div class="form-group">
                    <label for="">Image</label>
                    <img src="{{ $link }}" alt="" srcset="" class="img-fluid">
                   
                </div>
                <div class="form-group">
                    <label for="">Body:</label>
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