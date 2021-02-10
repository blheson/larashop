<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="/">
        <span>
          {{env('APP_NAME')}}
        </span>
      </a>
      <div class="float-right" id="">
        <div class="container">
          <div class=" mr-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav justify-content-between ">
              <li class="Uer_option">
                <div class="nav_form mr-2">
                  <form class="form-inline form_container" action="vegetables">
                    <div class="d-none" id="searchInput">
                      <button class="btn nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button><input type="text" name="search" value="{{request()->get('search')??''}}">
                    </div>
                    <div style="cursor: pointer;">
                      <span onclick="DOM.openSearch()"><i id="toggle_search" class="fa fa-search text-white" aria-hidden="true"></i></span>
                    </div>
                  </form>
                </div>

              </li>
              <li class="User_option" style="margin-right: 5px;">
                <a href="/cart"><i class="fa fa-shopping-bag"></i><span class="cart_info">{{count(
                  $cartItems = getCartItems()
                  )}}</span></a>
              </li>

              <li class="User_option">
                @if(Auth::check())
                <a class="account" href="profile">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                @else
                <a class="account" href="login">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                @endif
              </li>

            </ul>
          </div>
        </div>

        <div class="custom_menu-btn">
          <button onclick="DOM.openNav()">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>
        </div>
        <div id="myNav" class="overlay">
          <div class="overlay-content">
            <a href="/">HOME</a>
            <a href="/about">ABOUT</a>
            <a href="/vegetables">VEGETABLES</a>
            <a href="/cart">CART</a>
            <a href="/checkout">CHECKOUT</a>
            <a href="/contact">CONTACT US</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>