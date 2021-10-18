<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TASK-3</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/user/home/{{$user->id}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pro" href="/user/profile/{{$user->id}}"> {{$user->name}}</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact us</a>
      </li>
    </ul>

      <a href="{{route('/logout')}}"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGOUT</button></a>
    
  </div>
</nav>
