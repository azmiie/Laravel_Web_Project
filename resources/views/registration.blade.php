@extends('layout')
@section('title', 'Registration')
@section('content')
  <div class="container">
    
    <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
      @csrf
      <div class="mb-3">
         <label class="form-label">Fullname</label>
          <input type="text" class="form-control" name="name"> 
          </div>
      <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" >   
      </div>
      <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
      </div>  
      <button type="submit" class="btn btn-primary">Register</button>
      <small class="d-block text-center mt-3">Already registered? <a href="/registration">Login Now!</a></small>
    </form>
</div>
@endsection