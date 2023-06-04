@include('include.header')


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Form</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped text-center">
                            <tr>
                                <th>Sl</th>
                                <th>Brand Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            {{--                            @php $i=1 @endphp--}}
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    {{--                                <td>{{$i}}</td>--}}
                                    <td>{{$brand->brand_name}}</td>
                                    <td>{{$brand->status ==1 ? 'published' : 'unpublished'}}</td>
                                    <td>
                                        <input type="hidden" name="id" value="{{$brand->id}}">
                                        @if($brand->status ==1)
                                            <a href="{{route('status',['id'=>$brand->id])}}" class="btn btn-sm btn-success">unPublished</a>
                                        @else
                                            <a href="{{route('status',['id'=>$brand->id])}}" class="btn btn-sm btn-success">Published</a>
                                        @endif
                                        <a href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-sm btn-primary">edit</a>
                                        {{--                                        <a href="{{route('brand.delete',['id'=>$brand->id])}}" class="btn btn-sm btn-primary">delete</a>--}}
                                        <form action="{{route('brand.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$brand->id}}">
                                            <button type="submit" class="btn btn-sm btn-success">Delate</button>
                                        </form>
                                    </td>
                                </tr>
                                {{--                                @php $i++ @endphp--}}
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
