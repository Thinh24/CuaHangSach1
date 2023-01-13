@extends('layout.base')

@section('content')
    <h1>All Nhà Xuất Bản</h1>
    <a href="{{url('admin/supplier/create')}}">Thêm Nhà Cung Cấp</a>
    <br>
    <form >
        <input name="kw" class="form-control" type="text" placeholder="Nhập từ khóa cần tìm kiếm">
        <button type="submit" hidden class="btn btn-primary">Tìm</button>
    </form>
    <table class="table table-bordered table-striped table-responsive-md ">
        <tr class="table-primary">
            <th>ID</th>
            <th>Tên Nhà Cung Cấp</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Hành Động</th>

        </tr>
        @forelse($suppliers as $supplier)
            <tr>
                <td>{{$supplier -> id }}</td>
                <td>{{$supplier -> nameSupplier}}<br>
                <td>{{$supplier -> address}}<br>
                <td>{{$supplier -> phone}}<br>
                <td>
                    <a href="{{ url('admin/supplier/'.$supplier -> id.'/edit' )}} " class="btn btn-success">Sửa</a>
                    @csrf
                    @method('')
                    <form onsubmit=" return confirm('Bạn có muốn xóa không')" method="POST" action="{{url('/admin/supplier/'.$supplier->id)}}">
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
    {{ $suppliers->links() }}
@endsection
