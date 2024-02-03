<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">Jabatan Penjara</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === "home" ?'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "about" ?'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "blog" ?'active' : '' }}" href="/blog">Blog</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
        @auth 
         <!--kalau sudah login-->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
            <li>
          </ul>
        </li>
        @else
        <!--kalau belium login-->
      
          <li class="nav-item"></li>
          <a href="/login" class="nav-link {{ $title === "login" ?'active' : '' }}"><i class="bi bi-person-circle"></i> Login</a>

        </ul>
        @endauth
       
      </div>
    </div>
  </nav>