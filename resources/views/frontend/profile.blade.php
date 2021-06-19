@extends('layouts.frontend')
@section('main')
<div class="container">
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<h2 class="text-center mt-3">Profile</h2>
	  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
	<form action="{{route('profile')}}" method="post" enctype="multipart/form-data">
	@csrf
	 <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" id="name" placeholder="Enter Your Name.....">
  </div>			
	<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" value="{{auth()->user()->phone}}" class="form-control" id="phone" placeholder="Enter Your Name....." >
  </div>			
   <div class="mb-3">
    <label for="address" class="form-label"> Address</label>
    <textarea name="address" class="form-control" id="address"  placeholder="Enter Your Address.....">{{auth()->user()->address}}</textarea>
  </div>			
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control" id="email"  placeholder="Enter Your Email Address....." >
  </div>
   <div class="mb-3">
    <label for="photo" class="form-label">Profile Picture</label>
    <input type="file" name="photo" class="form-control" id="photo" placeholder="Enter Your Email Address....." >
  </div>
  <img src="{{asset('upload/users/'.auth()->user()->photo)}}" class="mt-3" alt="" style="height:200px;">

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
	</div>
	</div>
</div>
@endsection