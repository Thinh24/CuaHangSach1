@extends('layout.base')

@section('title','Thêm Nhập Kho')
@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Người Nhập Kho</label>
                    <br>
                    <select name="user" class="form-control" >
                        @forelse($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @empty
                            <option>Không</option>
                        @endforelse
                    </select>
                </div>
                <div class="col">
                    <label>Kho</label>
                    <br>
                    <select name="storage" class="form-control" >
                        @forelse($storages as $storage)
                            <option value="{{$storage->id}}">{{$storage->address}}</option>
                        @empty
                            <option>Không</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <div class="rol">
                <br>
                <div class="row">
                    <div class="rol text-center">
                        <button class="btn btn-primary">Thêm Nhập Kho</button>
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
