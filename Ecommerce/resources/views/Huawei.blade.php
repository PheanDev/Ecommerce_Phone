@extends('layout.main')
@section('content')
  <div class="container">
  @include('inc.navbar')
  @include('inc.logo')
 @include('inc.login')
  <div class="product_back">
  <!-- Huawie category  -->

  @if(!$huawei->isEmpty())
  <div class="top_product">
     <h3>Huawie</h3>
  </div>
  <div class="row">
     @foreach($huawei as $h)
     <div class="col-md-3">
         <div class="product">
         <a href="{{url('/show/'.$h->id)}}"><img src="/image/{{$h->imgName}}"></a>
            <div class="product_detail_show">
            <h4>{{$h->name}}</h4>
            <p>{{$h->storage}}&nbsp{{$h->ram}}</p>
            <p class="price">{{$h->price}} $</p>
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