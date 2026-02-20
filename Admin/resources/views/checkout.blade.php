<!DOCTYPE html>
<html>

<head>
  @include('admin.maindesign') <!-- Reusing admin styles for simplicity or copy from shop layout -->
  <!-- Actually better to use shop style -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{{ asset('front end/images/favicon.png') }}" type="image/x-icon">
  <title>Giftos - Checkout</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('front end/css/bootstrap.css') }}" />
  <link href="{{ asset('front end/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('front end/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ route('home') }}">
          <span>Giftos</span>
        </a>
      </nav>
    </header>
  </div>

  <section class="layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Checkout</h2>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="box">
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Receiver Name</label>
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" readonly>
                    </div>
                     <div class="form-group">
                        <label>Receiver Address</label>
                        <textarea class="form-control" name="rec_address" required>{{ Auth::user()->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Place Order</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
