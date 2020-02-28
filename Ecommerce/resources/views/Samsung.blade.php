@extends('layout.main')
@section('content')
  <div class="container">
  @include('inc.navbar')
  @include('inc.logo')
 @include('inc.login')
  <div class="product_back">
 <!-- samsung category  -->
 @if(!$samsung->isEmpty())
  <div class="top_product">
     <h3>Samsung</h3>
  </div>
  <div class="row">
     @foreach($samsung as $s)
     <div class="col-md-3">
         <div class="product">
         <a href="{{url('/show/'.$s->id)}}"><img src="/image/{{$s->imgName}}"></a>
            <div class="product_detail_show">
            <h4>{{$s->name}}</h4>
            <p>{{$s->storage}}&nbsp{{$s->ram}}</p>
            <p class="price">{{$s->price}} $</p>
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