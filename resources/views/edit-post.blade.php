@extends('layouts.front-end')
@section('content')
<!-- Grid -->
  
  <div class="w3-row w3-padding" style="margin:0 auto;  width:700px;">
  
    <div class="w3-col l12 s12"> 
    <h1>Edit Post</h1>
    <form method="POST" action="{{ url('update-post/'.$post->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="form-row">
                    <div  class="frm-col4">Name</div>  
                    <div  class="frm-col8"><input id="name" type="text" class="form-control" style="width:100%;" name="name" value="{{$post->name}}" required></div> 
                    </div>  
                    
                    <div class="form-row">
                    <div  class="frm-col4">Image</div>  
                    <div  class="frm-col8"><input type="file" class="form-control" name="image"><br /><img src="{{ asset('uploads/post/'.$post->image)}}" width="100"></div> 
                    </div> 
                    
                    <div class="form-row">
                    <div  class="frm-col4">Description</div>  
                    <div  class="frm-col8"><textarea class="form-control description" name="description" id="description" required>{{$post->description}}</textarea></div> 
                    </div> 

                    <div class="form-row">
                    <div  class="frm-col4">Category</div>  
                    <div  class="frm-col8"><select class="form-control" name="category_id" style="width:100%;"  required>
                                    <option value=""> - Select - </option>
                                        @foreach($category as $record)
                                        <option value="{{$record->id}}" {{$post->category_id == $record->id ? 'selected':''}}>{{$record->name}}</option>
                                        @endforeach
                                    </select></div> 
                    </div>
                        
                    <div class="form-row">
                    <div  class="frm-col4">Slug</div>  
                    <div  class="frm-col8"><input id="slug" type="text" class="form-control" name="slug" style="width:100%;" value="{{$post->slug}}" required>
</div> 
                    </div> 
                    
                    <div class="form-row">
                    <div  class="frm-col4">&nbsp;</div>  
                    <div  class="frm-col8"><button type="submit" class="w3-button w3-black">
                                    Save
                                </button>
</div> 
                    </div> 


                       
                     
                    </form>
    </div>
</div>
 

 

@endsection  

