@extends('dashboard::layouts.master')

@section('content')
{{--    ction('js')--}}
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

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let inputIds = ['image1'];

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

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body card-block">
                    <form action={{route('category.store')}} method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-3">
                                <label class=" form-control-label">title</label>
                            </div>
                            <div class="col-12">
                                <input type="text"  name="title" placeholder="category title" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3">
                                <label class=" form-control-label">parent</label>
                            </div>
                            <div class="col-12">
                                <select name="parent_id" class="form-control">
                                    <option value="" selected >select your category</option>
                                @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" id="image1" name="image" readonly>
                                    <button class="file-manager-button" data-input-id="image1">Select Image </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions form-group">
                            <div class="d-inline-block">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                <a href="{{route('category.index')}}">
                                    <button type="button" class="btn btn-danger btn-sm">back</button>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
