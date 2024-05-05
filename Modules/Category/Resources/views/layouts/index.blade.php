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
                                <th scope="col">Title</th>
                                <th scope="col">image</th>
                                <th scope="col">...</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->title}}</td>
                                    <td>
                                        <img src="{{$category->image}}" alt="Image" class="img img-responsive" style="width: 60px; height: 60px;">
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <form action="{{route('category.destroy',$category->id)}}" class="mr-10" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">delete</button>
                                        </form>
                                        <a href="{{route('category.edit' , $category->id)}}">
                                            <button class="btn btn-info ml-3">edite</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <form action="{{route('category.create')}}"  method="post" >
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
