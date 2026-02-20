@extends('layouts.admin')

@section('content')
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>Customers</strong>
                    </div>
                    <div class="number dashtext-1">{{ $userCount }}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>Products</strong>
                    </div>
                    <div class="number dashtext-2">{{ $productCount }}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Orders</strong>
                    </div>
                    <div class="number dashtext-3">{{ $orderCount }}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Categories</strong>
                    </div>
                    <div class="number dashtext-4">{{ $categoryCount }}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Recent Orders</strong></div>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Customer</th>
                          <th>Total Amount</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($recentOrders as $order)
                        <tr>
                          <td>#{{ $order->id }}</td>
                          <td>{{ $order->user->name ?? 'N/A' }}</td>
                          <td>${{ number_format($order->total_amount, 2) }}</td>
                          <td>
                            <span class="badge {{ $order->status == 'delivered' ? 'bg-success' : ($order->status == 'cancelled' ? 'bg-danger' : 'bg-warning') }}">
                              {{ ucfirst($order->status) }}
                            </span>
                          </td>
                          <td>{{ $order->created_at->format('M d, Y') }}</td>
                          <td>
                            <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-info">View</a>
                          </td>
                        </tr>
                        @endforeach
                        @if($recentOrders->isEmpty())
                        <tr>
                          <td colspan="6" class="text-center">No recent orders found.</td>
                        </tr>
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection
