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
            <th>Thể Loại</th>
            <th>Giá Sản Phẩm</th>
            <th>Mã ISBN</th>
            <th>Hành Động</th>
        </tr>
        @forelse($products as $products)
            <tr>
                <td>{{ $products->id }}</td>
                <td>
                    <a href="{{ url('admin/products/'.$products->id) }}">
                        {{$products -> tenSanPham}}
                    </a>
                </td>
                <td>
                    {{$products -> tacGia}}
                </td>
                <td>
                    {{$products -> theLoai}}
                </td>
                <td>
                    {{$products -> giaSanPham}}
                </td>
                <td>
                    {{$products -> maISBN}}
                </td>
                <td>
                    <button>Sửa</button>
                    <form onsubmit=" return confirm('Bạn có muốn xóa không')" method="POST" action="{{url('/admin/products/'.$products->id)}}">
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
@endsection
