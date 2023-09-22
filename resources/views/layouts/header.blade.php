<nav class="navbar navbar-expand-lg  bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin">admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item ms-auto">
            <a class="nav-link" href="login">dang nhap</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex mt-4">
    @foreach ($menu as $menus)
        <div class="dropdown ms-4 mt-4">
            <a class="" type="" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"    
                href="/menu/{{ $menus->name }}">
                {{ $menus->name }}
            </a>
            @foreach ($menu_items as $menuitems)
                @if ($menuitems->menu_id == $menus->id)
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach ($menu_items as $menuitems)
                            @if ($menuitems->menu_id == $menus->id)
                                <li><a class="dropdown-item"
                                        href="/menu/{{ $menuitems->name }}">{{ $menuitems->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            @endforeach

        </div>
    @endforeach
</div>