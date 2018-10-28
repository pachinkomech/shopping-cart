<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('product.index') }}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('product.shoppingCart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>   Shopping Cart <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user" aria-hidden="true"></i>   User Management 
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if(Auth::check())
                <li><a href="{{ route('user.profile') }}">User Profile</a></li>                            
                <div class="dropdown-divider"></div>
                <li><a href="{{ route('user.logout') }}">Logout</a></li> 
                @else
                    <li><a href="{{ route('user.signup') }}">Signup</a></li>
                    <li><a href="{{ route('user.signin') }}">Sign In</a></li>
            @endif
        </ul>
      </li>
    </ul>
  </div>
</nav>