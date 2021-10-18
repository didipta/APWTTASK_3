@extends("userview.signup-in.layout")
@section("content")
<form action="{{route('/Dashboard')}}" method="POST">
{{csrf_field()}}
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
      @error('email')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
      @error('password')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <div id="emailHelp" class="form-text">Your have not account?<a href="{{route('/signuppage')}}">Registration</a></div>
    <button type="submit" class="btn btn-primary">LOG IN</button>
  </form>
@endsection
@section("title")
 sign-in
@endsection