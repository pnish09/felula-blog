<div class="w3-bar w3-black w3-hide-small">
  <a href="{{ url('/') }}" class="w3-bar-item w3-button">Home</a>
  @auth
  <a href="{{ url('/my-posts') }}" class="w3-bar-item w3-button">My Posts</a>
  <a href="{{ url('/logout') }}" class="w3-bar-item w3-button">Logout</a>
  
  @else
  
  <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>
  <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>                     
  @endauth
</div>