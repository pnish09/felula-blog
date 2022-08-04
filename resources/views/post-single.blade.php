@extends('layouts.front-end-sidebar')
@section('content')
<!-- Grid -->
  
  <div class="w3-row w3-padding w3-border">
  
    <!-- Blog entries -->
    <div class="w3-col l8 s12">
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>{{$post->name}}</h3>
          <h5>{{$post->category->name}}, <span class="w3-opacity">Posted on {{ Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}


          by {{$post->user->name}}</span></h5>
        </div>

        <div class="w3-justify">
          <img src="{{ asset('uploads/post/'.$post->image)}}" alt="{{$post->name}}" style="width:100%" class="w3-padding-16">
          {!! Str::limit($post->description, 1000) !!}
          
          
        </div>
      </div>
      <hr>
      <h3>Post a Comment</h3>
      <form method="POST" action="{{ url('add-comment') }}" enctype="multipart/form-data">
      @csrf
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
        <div class="form-row">
                    <div  class="frm-col4">Name</div>  
                    <div  class="frm-col8"><input id="name" type="text" class="form-control" style="width:100%;" name="name" value="" required>
                    <input id="post_id" type="hidden" class="form-control" style="width:100%;" name="post_id" value="{{$post->id}}" require>
                    </div> 
                    </div>
      <div class="form-row">
        <div  class="frm-col4">Email</div>  
        <div  class="frm-col8"><input id="email" type="text" class="form-control" style="width:100%;" name="email" required></div> 
      </div>  
      <div class="form-row">
        <div  class="frm-col4">Comment</div>  
        <div  class="frm-col8"><textarea class="form-control" name="comment" id="comment" required style="width:100%"></textarea></div> 
      </div> 
      <div class="form-row">
                    <div  class="frm-col4">&nbsp;</div>  
                    <div  class="frm-col8"><button type="submit" class="w3-button w3-black">
                                    Post
                                </button>
</div> 
                    </div>    
</form>              
      <!-- Blog entry -->
      <?php // echo count($comment) ?>
      @foreach($comment as $record)
      <hr>
      <div class="form-row">
        <div  class="frm-col12">{{$record->comment}}</div>  
      </div> 
      <div class="form-row" style="text-align: right;">
        <div  class="frm-col12" style="
font-style: italic;"><b>{{$record->name}}</b> {{ Carbon\Carbon::parse($record->created_at)->format('M d, Y') }}</div>  
      </div> 
      @endforeach
  
      
    <!-- END BLOG ENTRIES -->
    </div>
</div>
 

 

@endsection  

