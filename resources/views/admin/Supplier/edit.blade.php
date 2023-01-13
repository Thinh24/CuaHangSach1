@extends('layout.base')

@section('title','Sửa Nhà Cung Cấp')
@section('content')
    <br>
    <br>
    <form action="{{ url('/admin/supplier/'.$suppliers->id.'/edit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Tên Nhà Cung Cấp</label>
                    <input value=" {{ $suppliers->nameSupplier }}" name="nameSupplier" type="text" placeholder="Nhập tên Nhà Cung Cấp" required>
                </div>
                <div class="col">
                    <label>Địa Chỉ</label>
                    <br>
                    <input value=" {{ $suppliers->address }}" name="address" type="text" placeholder="Nhập địa chỉ" required>
                </div>
                <div class="col">
                    <label>Số Điện Thoại</label>
                    <br>
                    <input value=" {{ $suppliers->phone }}" name="phone" type="text" placeholder="Nhập số điện thoại" required>
                </div>
            </div>

            <div class="rol">
                <br>
                <div class="row">
                    <div class="rol text-center">
                        <button class="btn btn-primary">Sửa Nhà Cung Cấp</button>
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


