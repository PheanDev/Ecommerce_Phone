@extends('layout.main')
@section('content')
  <div class="container">
  @include('inc.navbar')
  @include('inc.logo')
 @include('inc.login')
  <div class="product_back">
<!-- Oppo category  -->

@if(!$oppo->isEmpty())
  <div class="top_product">
     <h3>Oppo</h3>
  </div>
  <div class="row">
     @foreach($oppo as $o)
     <div class="col-md-3">
         <div class="product">
         <a href="{{url('/show/'.$o->id)}}"><img src="/image/{{$o->imgName}}"></a>
            <div class="product_detail_show">
            <h4>{{$o->name}}</h4>
            <p>{{$o->storage}}&nbsp{{$o->ram}}</p>
            <p class="price">{{$o->price}} $</p>
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