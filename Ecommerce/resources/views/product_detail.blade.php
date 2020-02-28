@extends('layout.main')
@section('content')
<div class="container">
      <div class="products">
      <div class="row no-gutters">
       @foreach($product as $p)
          <div class="col-md-5">
             <div class="product_img">
                <img src="/image/{{$p->imgID}}.jpg">
             </div>
          </div>
          <div class="col-md-7">
            <div class="product_detail">
            <table class="table table-bordered">
                <tr>
                    <td colspan="2" align="center">Product Detail</td>
                </tr>
               <tr>
                   <td>Brand</td>
                   <td>{{$p->name}}</td>
               </tr>
               <tr>
                <td>Screen</td>
                <td>{{$p->screen}}</td>
            </tr>
            <tr>
                <td>Memory</td>
                <td>{{$p->ram}}</td>
            </tr>
            <tr>
                <td>capcity</td>
                <td>{{$p->storage}}</td>
            </tr>
            <tr>
                <td>sim</td>
                <td>{{$p->sim}}</td>
            </tr>
            <tr>
                <td>Camara</td>
                <td>{{$p->camara}}</td>
            </tr>
            <tr>
                <td>Battery</td>
                <td>{{$p->battery}}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{$p->price}}</td>
            </tr>
      </table>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endsection