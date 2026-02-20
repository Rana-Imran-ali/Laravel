<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{{ asset('front end/images/favicon.png') }}" type="image/x-icon">
  <title>Giftos - My Orders</title>
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
        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
            </ul>
        </div>
      </nav>
    </header>
  </div>

  <section class="layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>My Orders</h2>
      </div>
      <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>${{ $order->total_price }}</td>
                        <td>{{ ucfirst($order->status) }}</td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>
                            <!-- Could add detail view later -->
                            <button class="btn btn-sm btn-info">View Items</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
