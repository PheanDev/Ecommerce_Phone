@extends('layout.main')
@section('content')
<div class="container">
@include('inc.navbar')
@if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
<table class="table table-striped table-approve">
<thead class="thead-dark">
  <tr>
    <th>Name</th>
    <th>Date Upload</th>
    <th>Price</th>
    <th>Owner</th>
    <th>Screen</th>
    <th>ram</th>
    <th>storage</th>
    <th>camara</th>
    <th>battery</th>
    <th>sim card</th>
    <th>Status</th>
  </tr>
  <thead>
  <tbody>
  @foreach($Approve as $ap)
      <tr>
        <td>{{$ap->name}}</td>
        <td>{{$ap->dateupload}}</td>
        <td>{{$ap->price}}</td>
        <td>{{$ap->name}}</td>
        <td>{{$ap->screen}}</td>
        <td>{{$ap->ram}}</td>
        <td>{{$ap->storage}}</td>
        <td>{{$ap->camara}}</td>
        <td>{{$ap->battery}}</td>
        <td>{{$ap->sim}}</td>
        <form action="{{url('/approved/'.$ap->id)}}" method="post">
        @csrf
        <td><input type="submit" value="Approve"></td>
        </form>
      </tr>
  @endforeach
  <tbody>
</table>
</div>

@endsection