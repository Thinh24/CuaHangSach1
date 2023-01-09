<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


@extends('layout.base')
@section('title','Sửa Sản Phẩm')
@section('content')
    <br>
    <br>
    <form action="{{ url('/admin/products/'.$product->id.'/edit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Tên Sách</label>
                    <br>
                    <input value=" {{ $product->nameProduct }}" name="tenSach" type="text" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="col">
                    <label>Tên tác giả</label>
                    <br>
                    <input value=" {{ $product->author }}" name="tenTacGia" type="text" placeholder="Nhập tên tác giả" required>
                </div>

                <div class="col">
                    <label>Giá</label>
                    <br>
                    <input value=" {{ $product->price}}" name="gia" type="text" placeholder="Giá" required min="0">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Mã ISBN</label>
                    <br>
                    <input value=" {{ $product->ISBN }}" name="maISBN" type="text" placeholder="Mã ISBN" required>
                </div>

                <div class="col">
                    <label>Số Lượng</label>
                    <br>
                    <input value="{{$product->quantity }}" name="soLuong" type="text" placeholder="Số Lượng" required>
                </div>

                <div class="col">
                    <label>Nhà Xuất Bản</label>
                    <br>
                        <select name="nhaXuatBan" class="form-control" >
                            @forelse($publishers as $publisher)
                                <option value="{{$publisher->id}}">{{$publisher->namePublishers}}</option>
                            @empty
                                <option>Không có nhà xuất bản nào</option>
                            @endforelse
                        </select>
                    </select>
                </div>
            </div>

            </div>
            <div class="rol">
                <div class="col">
                    <div class="container imageUploadContainer">
                        <div>
                            <img
                                src="{{asset( $product -> image )}}"
                                alt=""
                                id="imagePreview" width="400px">
                        </div>
                        <div class="imageUpload">
                            <input value="{{$product->image }}" type="file" name="image" id="imageUploadInput" accept=".jpg,.png" >
                        </div>
                        <div id="uploadFileStatus"></div>
                        <div class="fileInfomation">
                            <p>
                                Tên file:
                                <span id="fileInfomation_name">----</span>
                            </p>
                            <p>
                                Định dạng:
                                <span id="fileInfomation_type">----</span>
                            </p>
                            <p>
                                Dung lượng:
                                <span id="fileInfomation_size">----</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rol">
                <div class="rol">
                    <br>
                    <textarea id = "editor" name="description">{{ $product->des }}"</textarea>
                </div>
                <br>
                <div class="row">
                    <div class="rol text-center">
                        <button class="btn btn-primary">Sửa Sản Phẩm</button>
                    </div>
                </div>
            </div>
        </div>
    </form>



@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
<script src="{{asset('tem/js/index.js')}}" type="text/javascript"></script>
</body>
</html>

