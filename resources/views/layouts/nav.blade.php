
<!------Navigation Bar------>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="/images/brand.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#loginModal" data-toggle="modal">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


@include('layouts/modal')  