@extends('layout.main')

@section('main-section')
@if (session('success'))
    <div class="alert alert-danger">
        {{session('success')}}
    </div>
@endif
<button class="btn btn-primary">
    Add Product
</button>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)

                <tr class="">
                    <td scope="row">{{$p->id}}</td>
                    <td scope="row">{{$p->product_name}}</td>
                    <td>{{$p->product_price}}</td>
                    <td><img src="{{$p->product_image}}" width="100" alt=""></td>
                    <td><form action="{{route('delete-product', $p->id)}}" method="post">@csrf<button class="btn btn-danger">Delete</button></form></td>
                    <td><form action="{{route('update-product', $p->id)}}"><button class="btn btn-warning">Update</button></form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
