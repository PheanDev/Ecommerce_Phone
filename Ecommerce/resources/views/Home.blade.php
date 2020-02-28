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

   <!-- Mobile category  -->

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