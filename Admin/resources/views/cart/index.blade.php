<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{ asset('front end/images/favicon.png') }}" type="image/x-icon">

  <title>
    Giftos - Cart
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('front end/css/bootstrap.css') }}" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('front end/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('front end/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ route('home') }}">
          <span>
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shop') }}">
                Shop
              </a>
            </li>
          </ul>
          <div class="user_option">
              @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                @else
                    <a href="{{ route('login') }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Login</span>
                    </a>
                @endauth
            @endif
            <a href="{{ route('cart.index') }}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              <span id="cart-count">{{ \App\Http\Controllers\CartController::count() }}</span>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
  </div>

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Your Cart
        </h2>
      </div>
      <div class="row">
          <div class="col-md-12">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Image</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php $total = 0 @endphp
                      @if(session('cart'))
                          @foreach(session('cart') as $id => $details)
                              @php $total += $details['price'] * $details['quantity'] @endphp
                              <tr>
                                  <td>
                                      @if($details['image'])
                                          <img src="{{ asset('storage/' . $details['image']) }}" width="50" height="50" class="img-responsive"/>
                                      @else
                                          <img src="{{ asset('front end/images/p1.png') }}" width="50" height="50" class="img-responsive"/>
                                      @endif
                                  </td>
                                  <td>{{ $details['title'] }}</td>
                                  <td>${{ $details['price'] }}</td>
                                  <td>{{ $details['quantity'] }}</td>
                                  <td>${{ $details['price'] * $details['quantity'] }}</td>
                                  <td>
                                      <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger btn-sm">Remove</a>
                                  </td>
                              </tr>
                          @endforeach
                      @endif
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="5" class="text-right"><strong>Total: ${{ $total }}</strong></td>
                          <td>
                              <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                              {{-- <a href="{{ route('checkout') }}" class="btn btn-success">Checkout <i class="fa fa-angle-right"></i></a> --}}
                          </td>
                      </tr>
                  </tfoot>
              </table>
          </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('front end/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('front end/js/bootstrap.js') }}"></script>
  <script src="{{ asset('front end/js/custom.js') }}"></script>

</body>
</html>
