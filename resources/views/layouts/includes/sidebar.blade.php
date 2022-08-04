<div class="w3-col l4">
     

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Categories</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
        @foreach($category as $record)  
        <li class="w3-padding-16">
            
            <a href="{{ url('post-category/'.$record->id) }}">{{$record->name}} ({{App\Models\Post::where('category_id', $record->id)->where('status', 0)->count()}})</a>
          </li>
        @endforeach  
          

          
        </ul>
      </div>
      <hr>

      
    <!-- END About/Intro Menu -->
    </div>