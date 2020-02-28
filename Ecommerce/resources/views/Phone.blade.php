@extends('layout.main')
@section('product')
   <h1 class="text-center">Here our Product Phone</h1>
  <div class="container">
  <div class="row">
  <div class="col-md-3">
        <div class="product">
            <img src="{{URL('/image/img1.jpg')}}">
            <h4>Samsung Galaxy s</h4>
            <p>This phone release in 2010</p>
            <p class="price">$250</p>
            <button>ADD</button>
        </div>
   </div>

   <div class="col-md-3">
        <div class="product">
            <img src="{{URL('/image/img2.jpg')}}">
            <h4>Samsung Galaxy s</h4>
            <p>This phone release in 2011</p>
            <p class="price">$180</p>
            <button>ADD</button>
        </div>
   </div>

   <div class="col-md-3">
        <div class="product">
            <img src="{{URL('/image/img3.jpg')}}">
            <h4>Samsung Galaxy s1</h4>
            <p>This phone release in 2010</p>
            <p class="price">$400</p>
            <button>ADD</button>
        </div>
   </div>

   <div class="col-md-3">
        <div class="product">
            <img src="{{URL('/image/img5.jpg')}}">
            <h4>Samsung Galaxy s2</h4>
            <p>This phone release in 2012</p>
            <p class="price">$100</p>
            <button>ADD</button>
        </div>
   </div>
   
   <div class="col-md-3">
        <div class="product">
            <img src="{{URL('/image/img6.jpg')}}">
            <h4>Samsung Galaxy s3</h4>
            <p>This phone release in 2013</p>
            <p class="price">$600</p>
            <button>ADD</button>
        </div>
   </div>
  
   <div class="col-md-3">
        <div class="product">
            <img src="{{URL('/image/img7.jpg')}}">
            <h4>Samsung Galaxy s4</h4>
            <p>This phone release in 2014</p>
            <p class="price">$350</p>
            <button>ADD</button>
        </div>
   </div>

   <div class="col-md-3">
        <div class="product">
            <img src="{{URL('/image/img8.jpg')}}">
            <h4>Samsung Galaxy s5</h4>
            <p>This phone release in 2015</p>
            <p class="price">$1000</p>
            <button>ADD</button>
        </div>
   </div>
   
   <div class="col-md-3">
        <div class="product">
            <img src="{{URL('/image/img9.jpg')}}">
            <h4>Samsung Galaxy s6</h4>
            <p>This phone release in 2016</p>
            <p class="price">$180</p>
            <button>ADD</button>
        </div>
   </div>

   </div>
   </div>
@endsection