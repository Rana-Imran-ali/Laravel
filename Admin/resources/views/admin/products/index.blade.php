@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="block">
                <div class="title"><strong>Products</strong></div>
                <div class="table-responsive">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add Product</a>
                    <table class="table table-striped table-hover" id="products-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr id="product-{{ $product->id }}">
                                <th scope="row">{{ $product->id }}</th>
                                <td>
                                    @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" width="50">
                                    @endif
                                </td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->category->name ?? 'N/A' }}</td>
                                <td>${{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $product->id }}" data-url="{{ route('admin.products.destroy', $product->id) }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete-btn').on('click', function() {
        if (confirm('Are you sure you want to delete this product?')) {
            var btn = $(this);
            var id = btn.data('id');
            var url = btn.data('url');

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                success: function(response) {
                    $('#product-' + id).fadeOut('slow', function() {
                        $(this).remove();
                    });
                },
                error: function(xhr) {
                    alert('Error deleting product. Please try again.');
                }
            });
        }
    });
});
</script>
@endsection
