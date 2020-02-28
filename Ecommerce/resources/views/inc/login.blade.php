<!-- Modal -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
  <form action="{{url('login')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">USER NAME</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <div class="button_login_flex">
  <button type="submit" class="btn btn-primary">Login</button>
  <button type="button" class="btn btn-primary" id="signUp" onclick="window.location='{{ url("signup") }}'">Create Account</button>
</div>
</form>
</div>
    </div>
  </div>
</div>