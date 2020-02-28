<nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/">HOME</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/iphone">IPHONE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/huawie">HUAWIE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/oppo">OPPO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/samsung">SAMSUNG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/mobile">MOBILE</a>
      </li>
      @if(auth()->check())
      <li class="nav-item">
        <a class="nav-link" href="/Admin">MANAGE</a>
      </li>
      @endif
    </ul>
    <form class="form-inline my-2 my-lg-0">
      @if(auth()->check())
      <a href="{{url('/logout')}}" class="btn btn-primary">Logout</a>
      @else
      <button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
      @endif
    </form>
  </div>
</nav>
