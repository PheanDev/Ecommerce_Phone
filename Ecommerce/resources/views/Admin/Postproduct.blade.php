@extends('layout.main')
@section('content')
<div class="container">
@include('inc.navbar')
        <div class="row">
        <div class="post">
                <!-- Default form login -->
<form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
@csrf
    <p class="h4 mb-4">ADD POST</p>

    @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Type</label>
    <div class="col-sm-8">
        <select class="form-control" name="type">
          <option value="iphone">IPhone</option>
          <option value="samsung">Samsung</option>
          <option value="oppo">Oppo</option>
          <option value="huawei">Huawei</option>
          <option value="mobile">Mobile</option>
        </select>
      <span class="text-danger">{{$errors->first('type')}}</span>
    </div>
  </div>
     
    <!-- Brand -->
 <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Brand</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" placeholder="Brand">
      <span class="text-danger">{{$errors->first('name')}}</span>
    </div>
  </div>
    <!-- Screen -->
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Screen</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="screen" placeholder="Screen">
      <span class="text-danger">{{$errors->first('screen')}}</span>
    </div>
  </div>
     <!-- Memory -->
     <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">RAM</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="ram" placeholder="RAM">
      <span class="text-danger">{{$errors->first('ram')}}</span>
    </div>
  </div>
     <!-- Capicity -->
     <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Storage</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="storage" placeholder="Storage">
      <span class="text-danger">{{$errors->first('storage')}}</span>
    </div>
  </div>
      <!-- Sim -->
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Sim</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="sim" placeholder="Sim">
      <span class="text-danger">{{$errors->first('sim')}}</span>
    </div>
  </div>
     <!-- Front Camera -->
     <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Front Camara</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="camara" placeholder="Front Camara">
      <span class="text-danger">{{$errors->first('camara')}}</span>
    </div>
  </div>
     <!-- Battery -->
     <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Battery</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="battery" placeholder="Battery">
      <span class="text-danger">{{$errors->first('battery')}}</span>
    </div>
  </div>

   <!-- Price -->
   <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Price</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="price" placeholder="Price">
      <span class="text-danger">{{$errors->first('price')}}</span>
    </div>
  </div>
      <!-- Image -->

      <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Upload Image</label>
    <div class="col-sm-8">
    <input type="file" class="form-control-file" name="img">
    <span class="text-danger">{{$errors->first('img')}}</span>
    </div>
  </div>

  
    <!-- Upload button -->
    <button class="btn btn-info btn-block my-4" type="submit">Upload</button>

</form>
<!-- Default form login -->
</div>
    </div>
    </div>
@endsection