
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="/">
            <span>
              {{env('APP_NAME')}}
            </span>
          </a>
          <div class="" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="User_option">
                    <li class="">
                      <a class="" href="">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </a>
                    </li>
                    <form class="form-inline ">
                      <button class="btn   nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    </form>
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
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
   