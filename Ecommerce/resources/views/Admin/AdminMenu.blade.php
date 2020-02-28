@extends('layout.main')
@section('content')
@include('inc.navbar')
<div class="container">
    
  <div class="admincontroltop">
  <div class="adminheader">
        <h3>User Controller</h3>
    </div>
   <div class="row">
    <div class="col-md-6">
   <div class="controldiv">
       <h3>Product Control</h3>
       <table>
        <tr>
            <td>Total Product</td>
            <td></td>
    </tr>
    <tr>
            <td>Phone</td>
            <td></td>
    </tr>
       </table>
       @if(auth()->user()->isAdmin())
       <a href="{{url('/approve')}}" class="btn btn-primary">Approve</a>
       @else
       <a href="{{url('/Post')}}" class="btn btn-primary">Add new post</a>
       @endif
   </div>
</div>
<div class="col-md-6">
   <div class="controldiv">
       <h3>User Account</h3>
       <table>
       @foreach($user as $p)
        <tr>
            <td>Account Name</td>
            <td>{{$p->name}}</td>
    </tr>
    <tr>
       @if($p->admin=="1")
            <td>Account Type</td>
            <td>Admin</td>
        @else
        <td>Account Type</td>
            <td>Normal User</td>
        @endif
    </tr>
    @endforeach
       </table>
       <a href="{{url('/Changepassword')}}" class="btn btn-primary">Change Password</a>
   </div> 
</div> 
  </div>
</div>


<div class="admincontrolbutton">
   <table class="table table-bordered">
       <tr>
           <th>Product Name</th>
           <th>Date Upload</th>
           <th>price</th>
           <th>camara</th>
           <th>battery</th>
           <th>Action</th>
</tr>
@foreach($product as $p)
<tr>
    <td>{{$p->name}}</td>
    <td>{{$p->dateUpload}}</td>
    <td>{{$p->price}}</td>
    <td>{{$p->camara}}</td>
    <td>{{$p->battery}}</td>
     <form action="{{url('/edit/'.$p->id)}}" method="post">
        @csrf
        <td><input type="submit" value="Edit"></td>
        </form>
        <form action="{{url('/removed/'.$p->id)}}" method="post">
        @csrf
        <td><input type="submit" value="Remove"></td>
        
        </form>
</tr>
@endforeach
@if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
</table>
</div>
</div>
@endsection