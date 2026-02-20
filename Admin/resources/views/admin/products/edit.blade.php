@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="block">
                <div class="title"><strong>Edit Product</strong></div>
                <div class="block-body">
                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-control-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Description</label>
                            <textarea name="description" class="form-control" rows="5" required>{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Price</label>
                            <input type="number" name="price" step="0.01" class="form-control" value="{{ $product->price }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Stock</label>
                            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Category</label>
                            <select name="category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Current Image</label> <br>
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" width="100">
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Upload New Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
