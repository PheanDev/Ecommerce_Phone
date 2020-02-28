@extends('layout.main')
@section('content')
  <div class="container">
  @include('inc.navbar')
  @include('inc.logo')
 @include('inc.login')
  <div class="product_back">

   <!-- Iphone category  -->

   @if(!$iphone->isEmpty())
  <div class="top_product">
     <h3>Iphone</h3>
  </div>
  <div class="row">
     @foreach($iphone as $I)
     <div class="col-md-3">
         <div class="product">
         <a href="{{url('/show/'.$I->id)}}"><img src="/image/{{$I->imgName}}"></a>
            <div class="product_detail_show">
            <h4>{{$I->name}}</h4>
            <p>{{$I->storage}}&nbsp{{$I->ram}}</p>
            <p class="price">{{$I->price}} $</p>
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