<nav class="navbar navbar-dark bg-dark">

        <a class="navbar-brand" href="{{ route('product.index1') }}">JohnShop</a>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('product.shoppingcart') }}"> <i class="fas fa-shopping-cart"></i> Shopping Cart 
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-tag"></i> User Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @if(Auth::check())
                <a class="dropdown-item" href="{{route('users.profile')}}">User Profile</a>
                <a class="dropdown-item" href="{{route('users.logout')}}">Logout</a>
                @else
                <a class="dropdown-item" href="{{route('users.Signup')}}">Sign up</a>
                <a class="dropdown-item" href="{{route('users.Signin')}}">Sign in</a>
                @endif
 
               
               
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <header class="jumbotron my-4" >
          
            <h1 class="display-3">A Warm Welcome! To John Shop</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <a href="http://localhost/" class="btn btn-primary btn-lg">Back to Welcome Page!</a>
    </header>
      