@extends('dashboard::layouts.master')


@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="{{ asset('vendor/file-manager/css/file-manager.css') }}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function openFileManager(buttonId, inputId) {
                document.getElementById(buttonId).addEventListener('click', (event) => {
                    event.preventDefault();
                    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
                    window.fmSetLink = function(url) {
                        document.getElementById(inputId).value = url;
                    };
                });
            }

            openFileManager('button-image-0', 'image_label_0');
            openFileManager('button-image-1', 'image_label_1');
            openFileManager('button-image-2', 'image_label_2');
            openFileManager('button-image-3', 'image_label_3');
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let inputIds = ['image1', 'image2', 'image3', 'image4', 'image5'];

            function openFileManager(event) {
                event.preventDefault();
                let inputId = this.dataset.inputId;
                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
                window.fmSetInputId = inputId;
            }

            document.querySelectorAll('.file-manager-button').forEach(button => {
                button.addEventListener('click', openFileManager);
            });
        });

        // Set file link
        function fmSetLink(url) {
            document.getElementById(window.fmSetInputId).value = url;
        }
    </script>

@endsection


@section('content')

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body card-block">
                <form action={{route('product.update' , $product->id)}} method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="row form-group">
                        <div class="col-12">
                            <input type="text" id="name" name="name" placeholder="products name" class="form-control" value="{{old('name' , $product->name)}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 ">
                            <input type="number" id="count" name="count" placeholder="products count" class="form-control" value="{{old('count' , $product->count)}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-euro"></i>
                                </div>
                                <input type="number" name="price" placeholder=".." class="form-control" value="{{old('price' , $product->price)}}">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                                <input type="number" name="is_sale" placeholder="0.00" class="form-control" value="{{old('is_sale' , $product->is_sale)}}">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <select  name="status" class="form-select form-control" style="width: 100%">
                                <option value="" disabled selected hidden>وضعیت</option>
                                <option value="1" selected>فعال</option>
                                <option value="2" >غیر فعال</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <select name="category_id" class="form-select form-control">
                                @foreach($categories as $category)
                                    <option value="#" selected hidden>{{old('category_id' , $product->category->title)}}</option>
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="image1" name="image" readonly  value="{{ old('image' , $product->image) }}">
                                <button class="file-manager-button" data-input-id="image1">Select Image 1</button>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="image2" name="items[0][file_path]"  readonly >
                                <button class="file-manager-button" data-input-id="image2">Select Image 2</button>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="image3" name="items[1][file_path]" readonly >
                                <button class="file-manager-button" data-input-id="image3">Select Image 3</button>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="image4" name="items[2][file_path]" readonly >
                                <button class="file-manager-button" data-input-id="image4">Select Image 4</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        <a href="#">
                            <button type="button" class="btn btn-danger btn-sm">back</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

