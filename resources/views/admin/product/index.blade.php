@extends('layout.base')

@section('content')
<h1>All Books</h1>
    <a href="{{url('admin/products/create')}}">Thêm Sản Phẩm</a>
    <br>
        <form >
            <input name="kw" class="form-control" type="text" placeholder="Nhập từ khóa cần tìm kiếm">
            <button type="submit" hidden class="btn btn-primary">Tìm</button>
        </form>
    <table class="table table-bordered table-striped table-responsive-md ">
        <tr class="table-primary">
            <th>ID</th>
            <th>Tên Sách</th>
            <th>Tác Giả</th>
            <th>NXB</th>
            <th>Thể Loại</th>
            <th>Giá Sản Phẩm</th>
            <th>Mã ISBN</th>
            <th>Hành Động</th>
        </tr>
        @forelse($products as $product)
            <tr>
                <td>{{$product->id }}</td>
                <td>
                    <a href="{{ url('admin/products/'.$product->id) }}">
                        {{$product -> tenSanPham}}
                    </a>
                    <br>
                    <img width="100 px" src="{{asset( $product -> image  )}}">
                </td>
                <td>
                    {{$product -> tacGia}}
                </td>
                <td>
                    {{$product -> id_nha_xuat_ban}}
                </td>
                <td>
                    {{$product -> theLoai}}
                </td>
                <td>
                    {{$product -> giaSanPham}}{{" VND"}}
                </td>
                <td>
                    {{$product -> maISBN}}
                </td>
                <td>
                    <a href="{{ url('admin/products/'.$product->id.'/edit' )}} " class="btn btn-success">Sửa</a>
                    @csrf
                    @method('')
                    <form onsubmit=" return confirm('Bạn có muốn xóa không')" method="POST" action="{{url('/admin/products/'.$product->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>
                    Không có dữ liệu!
                </td>
            </tr>
        @endempty
    </table>
    {{ $products->links() }}
@endsection
