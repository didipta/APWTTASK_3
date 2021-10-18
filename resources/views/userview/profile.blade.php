@extends("userview.layout")
@section("content")
<form action="{{route('/Edite')}}" method="POST" style=" width: 500px;  margin-left: 300px;">
<h2 class="card-title">Profile</h2>
<input type="hidden" name="id" class="form-control" value="{{$user->id}}" placeholder="Name" aria-label="First name">
    {{csrf_field()}}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Name" aria-label="First name">
        @error('name')
        <span class="error" >{{$message}}</span>
      @enderror
     
       
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User Name</label>
        <input type="text" name="username" class="form-control" value="{{$user->Username}}" placeholder="User name" aria-label="First name">
        @error('username')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
        <input type="text" name="phonenumber" class="form-control" value="{{$user->Phonenumber}}" placeholder="Phone Number" aria-label="First name">
        @error('phonenumber')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" name="email" class="form-control" value="{{$user->email}}" placeholder="email" aria-label="First name" readonly>
      @error('email')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
@section("title")
 Profile| @if(Session::get('username')) {{Session::get('username')}}
  @endif
@endsection