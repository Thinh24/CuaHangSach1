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
            <th>Số Lượng</th>
            <th>Giá Sản Phẩm</th>
            <th>Mã ISBN</th>
            <th>Hành Động</th>
        </tr>
        @forelse($products as $product)
            <tr>
                <td>{{$product->id }}</td>
                <td>
                    <a href="{{ url('admin/products/'.$product->id) }}">
                        {{$product -> nameProduct}}
                    </a>
                    <br>
                    <img width="100 px" src="{{asset( $product -> image  )}}">
                </td>
                <td>
                    {{$product -> author}}
                </td>
                <td>
                    {{$product -> id_publishers}}
                </td>
{{--                <td>--}}
{{--                    {{$product -> category}}--}}
{{--                </td>--}}
                <td>
                    {{$product -> quantity}}
                </td>
                <td>
                    {{$product -> price}}{{" VND"}}
                </td>
                <td>
                    {{$product -> ISBN}}
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
