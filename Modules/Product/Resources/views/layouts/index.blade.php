@extends('dashboard::layouts.master')


@section('content')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">


            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Count</th>
                                <th scope="col">Price</th>
                                <th scope="col">Is_sale</th>
                                <th scope="col">Category</th>
                                <th scope="col">Image</th>
                                <th scope="col">status</th>
                                <th scope="col">...</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->count}}</td>
                                    <td>${{$product->price}}</td>
                                    <td>${{$product->is_sale}}</td>
                                    <td class="sorting_1">{{$product->category->title}}</td>
                                    <td>
                                        <img src="{{$product->image}}" alt="Image" class="img img-responsive" style="width: 60px; height: 60px;">
                                    </td>
                                    <td class="sorting_1">{{$product->status == 1 ? 'فعال' : 'غیر فعال'}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <form action="{{route('product.destroy',$product->id)}}" class="mr-10" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                        <a href="{{route('product.edit' , $product->id)}}">
                                            <button class="btn btn-info me-3">ویرایش</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <form action="{{route('product.create')}}"  method="post" >
                        @csrf
                        @method('GET')
                        <button class="btn btn-secondary ml-4 mb-3" type="submit">create</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
