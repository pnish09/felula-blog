@extends('layouts.front-end')
@section('content')
<!-- Grid -->
  
  <div class="w3-row w3-padding w3-border">
  
    <!-- Blog entries -->
    <div class="w3-col l12 s12">
    <div class="form-row">
                    <div  class="frm-col12"><p class="w3-left"><button class="w3-button w3-black"  id="myBtn"><b><a href="{{ url('add-post/') }}">+ Add Post</a></b></button></p></div>  
</div>
                    
                    
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    @foreach($post as $record)
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>{{$record->name}}</h3>
          <h5>{{$record->category->name}}, <span class="w3-opacity">Posted on {{ Carbon\Carbon::parse($record->created_at)->format('F d, Y') }}


          by {{$record->user->name}}</span></h5>
        </div>

        <div class="w3-justify">
          <img src="{{ asset('uploads/post/'.$record->image)}}" alt="{{$record->name}}" style="width:100%" class="w3-padding-16">
          <p>{!! Str::limit($record->description, 600, ' ...') !!}</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border"><b><a href="{{ url('edit-post/'.$record->id) }}">Edit</a></b></button></p>
          <p class="w3-right"><button class="w3-button w3-black"  id="myBtn"><b><a href="{{ url('post-delete/'.$record->id) }}">Delete </a> </b> </button></p>
          <p class="w3-clear"></p>
          
        </div>
      </div>
      <hr>
      @endforeach 
      <!-- Blog entry -->
      

  
      
    <!-- END BLOG ENTRIES -->
    </div>
</div>
 

 

@endsection  

