@extends('navbar')
@section('content')
    

       
      <div class="container-fluid mt-3"  style="clear: both">
       
        
        <div class="row">
          
          <div class="col-sm-4">
              <div class="main-content">
             
               @foreach($list1 as $video)
               
               @if($video->status==0 && $loop->first)  
                <iframe width="400" height="315" src="{{ $video->link  }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="title">
                 <a href="{{ route('details',$video->id)}}"><h4>{{ $video->title  }}</h4></a>
                 <a href="" class="btn btn-primary button"><i class="fa fa-info-circle">Brief</i></a>
                </div>
              </div>
             
            </div>
            @endif
           @endforeach
          
           <div class="col-sm-4">
                <!--Nested rows within a column-->
                
                <div class="row">
                  @foreach($list1 as $video) 
                @if($video->status==0 && $loop->even) 
                    <div class="col-6">
                        <div class="sidebar-content">
                          <a href="{{ $video->link  }}">
                            <iframe width="200" height="100" src="{{ $video->link  }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="title">
                <a href="{{ route('details',$video->id)}}">{{ $video->title  }}</a>
               
              </div>
                </div>
                    </div>
                    @endif
                    @endforeach
                </div>
              
                <div class="row">
                  @foreach($list1 as $video) 
                @if ($video->status==0 && $loop->odd) 
                    <div class="col-6">
                        <div class="sidebar-content">
                          <a href="{{ $video->link  }}">
                            <iframe width="200" height="100" src="{{ $video->link  }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </a>
              <div class="title">
                <a href="{{ route('details',$video->id)}}">{{ $video->title  }}</a>
              </div>
                </div>
                    </div>
                    @endif
                    @endforeach
                    
                </div>
            </div>

          
           
          
            <div class="col-sm-4">
              
              <div class="main-content">
              @foreach($list2 as $post)
              @if($post->status==0 && $loop->first) 
                <a href={{ route('create.edit',$post->id)}}">
                <img src="{{ $post->link }}" alt=""  class="img-fluid" alt="Responsive image" height="" width="">
              </a>
              
                <div class="title">
                 <h4>{{ $post->title }}</h4>
                 
                 <a href="{{ route('details',$post->id)}}" class="btn btn-primary button"><i class="fa fa-info-circle">Brief</i></a>
                </div>
             
            </div>
              @endif
              @endforeach
              <div class="row  mt-2 ">
                @foreach($list2 as $post)
                @if($post->status==0)
                <div class="col-6 ">
                    <div class="sidebar-content">
                      <a href="{{ route('create.edit',$post->id)}}">
                        <img src="{{ $post->link }}" alt=""  class="img-fluid" alt="Responsive image" height="100" width="500">
              </a>
              <div class="title">
               <a href="{{ route('details',$post->id)}}">{{ $post->title }}</a>
              </div>
                      <div class="title">
                        
                       </div>
                    </div>
                </div>
                
                @endif
                @endforeach
               
               
             
            </div>
          </>

        </div>
    </div>
      </div>
    @endsection('content')
      