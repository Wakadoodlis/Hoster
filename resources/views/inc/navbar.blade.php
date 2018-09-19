<!-- Image and text -->
<nav class="navbar navbar-dar bg-dark mb-4">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      {{config('app.name', 'Hoster')}}
    </a>
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('hosts/create') }}">Create host <span class="sr-only">(current)</span></a>
        </li>
    </ul>   
  </nav>