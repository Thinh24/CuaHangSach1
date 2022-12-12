@extends('layout.base')

@section('title','Sửa Nhà Xuât Bản')
@section('content')
    <br>
    <br>
    <form action="{{ url('/admin/NhaXuatBan/'.$nha_xuat_bans->id.'/edit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Tên Nhà Xuât Bản</label>
                    <input value=" {{ $nha_xuat_bans->tenNhaXuatBan }}" name="tenNhaXuatBan" type="text" placeholder="Nhập tên Nhà Xuât Bản" required>
                </div>
            </div>

            <div class="rol">
                <br>
                <div class="row">
                    <div class="rol text-center">
                        <button class="btn btn-primary">Sửa Nhà Xuât Bản</button>
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


