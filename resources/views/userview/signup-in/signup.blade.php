@extends("userview.signup-in.layout")
@section("content")
<form action="{{route('/Registertion')}}" method="POST">
    {{csrf_field()}}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name" aria-label="First name">
        @error('name')
        <span class="error" >{{$message}}</span>
      @enderror
     
       
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User Name</label>
        <input type="text" name="username" class="form-control" value="{{old('username')}}" placeholder="User name" aria-label="First name">
        @error('username')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
        <input type="text" name="phonenumber" class="form-control" value="{{old('phonenumber')}}" placeholder="Phone Number" aria-label="First name">
        @error('phonenumber')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Email Address" aria-label="First name">
      @error('email')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="Password" id="exampleInputPassword1">
      @error('password')
      <span class="error" >{{$message}}</span>
    @enderror
   
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" name="cpassword" class="form-control" value="{{old('cpassword')}}" placeholder="Password" id="exampleInputPassword1">
        @error('cpassword')
        <span class="error" >{{$message}}</span>
      @enderror
     
      </div>
    <div id="emailHelp" class="form-text">Your have account?<a href="{{url('/')}}">Log in</a></div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
@section("title")
 sign-in
@endsection