<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl bg-light" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar"> 
      <div class="ms-md-3 pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body bg-white border-0"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control bg-white border-0" placeholder="Type here...">
        </div>
      </div>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="{{ url('/logout') }}" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
