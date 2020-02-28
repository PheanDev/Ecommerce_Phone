@extends('layout.main')
@section('content')
  <div class="container">
  @include('inc.navbar')
  @include('inc.logo')
 @include('inc.login')
  <div class="product_back">
  @if(!$mobile->isEmpty())
  <div class="top_product">
     <h3>Mobile</h3>
  </div>
  <div class="row">
     @foreach($mobile as $m)
     <div class="col-md-3">
         <div class="product">
         <a href="{{url('/show/'.$m->id)}}"><img src="/image/{{$m->imgName}}"></a>
            <div class="product_detail_show">
            <h4>{{$m->name}}</h4>
            <p>{{$m->storage}}&nbsp{{$m->ram}}</p>
            <p class="price">{{$m->price}} $</p>
           </div>
        </div>
   </div>
   @endforeach
   </div>
   @endif
   </div>
   </div>
   @include('inc.footer')
@endsection