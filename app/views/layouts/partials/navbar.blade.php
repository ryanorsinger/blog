<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
        {{ Form::open(['action' => 'PostsController@index', 'role' => 'search', 'class' => 'navbar-form navbar-left']) }}
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      {{ Form:: close() }}
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li><a href="">Welcome {{{ Auth::user()->first_name }}}</a></li>
          <li><a href="{{{ action('UsersController@logout') }}}">Logout</a></li>
        @else
          <li><a href="{{{ action('UsersController@showLogin') }}}">Login</a></li>
        @endif
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>
