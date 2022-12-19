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
                    <input value=" {{ $product->nameProduct }}" name="tenSach" type="text" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="col">
                    <label>Tên tác giả</label>
                    <input value=" {{ $product->author }}" name="tenTacGia" type="text" placeholder="Nhập tên tác giả" required>
                </div>

{{--                <div class="col">--}}
{{--                    <label>Thể loại</label>--}}
{{--                    <input value=" {{ $product->category }}" name="theLoai" type="text" placeholder="Thể loại" required>--}}
{{--                </div>--}}

                <div class="col">
                    <label>Giá</label>
                    <br>
                    <input value=" {{ $product->price}}" name="gia" type="text" placeholder="Giá" required min="0">
                </div>
                <div class="col">
                    <br>
                    <label>Mã ISBN</label>
                    <br>
                    <input value=" {{ $product->ISBN }}" name="maISBN" type="text" placeholder="Mã ISBN" required>
                </div>

                <div class="col">
                    <br>
                    <label>Số Lượng</label>
                    <br>
                    <input value="{{$product->quantity }}" name="soLuong" type="text" placeholder="Số Lượng" required>
                </div>

                <div class="col">
                    <br>
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
            <div class="rol">
                <div class="col">
                    <br>
                    <input value=" {{ $product->image }}" name="image" type="file" class="form-control-file">
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


