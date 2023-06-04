@include('include.header')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Product Form</h3>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" action="{{ route('products.store') }}" method="post" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="product_name" id="productName" placeholder="" value="" required="">

                                </div>

                                <div class="col-sm-6">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">
                                                {{$category->category_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="brand_id" class="form-label">Brand</label>
                                    <select class="form-control" name="brand_id" id="category_id">
                                        <option value="">Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">
                                                {{$brand->brand_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="phone" class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" id="phone" >

                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Description</label>
                                    <textarea class="form-control" name="description"></textarea>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="phone" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*" >
                            </div>
                            <div class="mt-5 text-end">
                                <button class="btn btn-success btn-lg" type="submit">Continue to Store</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>








<script src="{{ asset('crud-asset') }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>

