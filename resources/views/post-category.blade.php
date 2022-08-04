@extends('layouts.front-end-sidebar')
@section('content')
<!-- Grid -->
  
  <div class="w3-row w3-padding w3-border">
  
    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
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
          <p class="w3-right"><button class="w3-button w3-black"  id="myBtn"><b><a href="{{ url('post-single/'.$record->id) }}">Read more..</a></b></button></p>
          <p class="w3-clear"></p>
          
        </div>
      </div>
      <hr>
      @endforeach 
      
      <!-- Blog entry -->
      

  
      
    <!-- END BLOG ENTRIES -->
   
</div>
 

 

@endsection  

