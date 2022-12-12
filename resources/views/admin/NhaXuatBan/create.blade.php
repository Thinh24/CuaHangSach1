@extends('layout.base')

@section('title','Thêm Nhà Xuất Bản')
@section('content')
<br>
<br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Tên Nhà Xuất Bản</label>
                    <input name="tenNhaXuatBan" type="text" placeholder="Nhập tên Nhà Xuất Bản" required>
                </div>
            </div>
            <div class="rol">
                <br>
                <div class="row">
                    <div class="rol text-center">
                        <button class="btn btn-primary">Thêm Nhà Xuất Bản</button>
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
