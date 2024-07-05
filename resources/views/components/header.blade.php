  @php
      $navItems = [
          ['url' => '/', 'label' => 'Home'],
          ['url' => '/about', 'label' => 'About'],
          ['url' => '/jobs', 'label' => 'Jobs'],
          ['url' => '/blog', 'label' => 'Blog'],
          ['url' => '/contact', 'label' => 'Contact'],
      ];
  @endphp

  <header class="navbar-light bg-light">
      <div class="container">
          <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">
                  <a class="navbar-brand" href="{{ url('/') }}">My Application</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                          @foreach ($navItems as $item)
                              <li class="nav-item">
                                  <a class="nav-link {{ request()->is(ltrim($item['url'], '/')) ? 'text-primary' : '' }}"
                                      href="{{ url($item['url']) }}">{{ $item['label'] }}</a>
                              </li>
                          @endforeach
                      </ul>
                  </div>
                  <div>
                      @guest
                          <a href="/register" class="btn btn-primary">Register</a>
                          <a href="/login" class="btn btn-primary">Login</a>
                      @endguest
                      @auth
                          <form action="/logout" method="POST" id="logout-form">
                              @csrf
                              <button type="submit" class="btn btn-danger">Logout</button>
                          </form>
                      @endauth
                  </div>
              </div>
          </nav>
      </div>
  </header>
