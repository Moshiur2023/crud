@include('include.header')


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>All Products</h3>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="{{route('products.create')}}"  class="btn btn-success">Add Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped text-center">
                            <tr>

                                <th>Sl</th>
                                <th>Product Name</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->category_name}}</td>


                                <td>{{$product->description}}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" width="50" height="50" class="img-fluid" alt="">
                                </td>
                                <td>{{$product->status}}</td>
                                <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('products.destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<script src="{{ asset('crud-asset') }}js/bootstrap.bundle.min.js"></script>
</body>
</html>
