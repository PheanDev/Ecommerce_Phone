@extends('layout.main')
@section('content')
@include('inc.navbar')
@include('inc.login')
  <div class="signup">
    <form action="{{url('signup_account')}}" method="POST">
    @csrf
    <div class="signupheader">
       <h3>Sign Up</h3>
    </div>
  <div class="form-group row">
    <label for="txtname" class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtname" name="name" placeholder="Name">
      <span class="text-danger">{{$errors->first('name')}}</span>
    </div>
  </div>
  

  <div class="form-group row">
    <label for="txtEmail" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="Email" class="form-control" id="txtEmail" name="email" placeholder="Email">
      <span class="text-danger">{{$errors->first('email')}}</span>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="txtpassword" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="txtpassword" name="password" placeholder="Password">
      <span class="text-danger">{{$errors->first('password')}}</span>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="txtRPassword" class="col-sm-3 col-form-label">Retype Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="txtRPassword" name="password_confirmation" placeholder="Retype Password">
      <span class="text-danger">{{$errors->first('password')}}</span>
    </div>
  </div>
  
  <div class="btnsignup">
    <input type="submit" class="btn btn-primary" value="Signup">
  </div>
</form>
       @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
</div>
@endsection