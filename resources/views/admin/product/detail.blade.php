@extends('layout.base')

@section('title', 'Chi tiết sản phẩm')

@section('content_header','Sản phẩm có id = '.$products->id)
@section('content')

    @if($products == null)
        <hi> Sản Phẩm Không Tồn Tại</hi>
    @else
        <table class="table table-bordered table-striped table-responsive-md ">
            <tr class="table-primary">
                <th>ID</th>
                <th>Tên Sách</th>
                <th>Tác Giả</th>
                <th>Thể Loại</th>
                <th>Giá Sản Phẩm</th>
                <th>Mã ISBN</th>
            </tr>
            <tr>
                <td>{{ $products->id }}</td>
                <td>
                        {{$products -> tenSanPham}}
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
            </tr>
        </table>
    @endif
@endsection
