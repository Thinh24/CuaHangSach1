@extends('layout.base')

@section('content')
<h1>All Nhà Xuất Bản</h1>
    <a href="{{url('admin/NhaXuatBan/create')}}">Thêm Nhà Xuất Bản</a>
    <br>
        <form >
            <input name="kw" class="form-control" type="text" placeholder="Nhập từ khóa cần tìm kiếm">
            <button type="submit" hidden class="btn btn-primary">Tìm</button>
        </form>
    <table class="table table-bordered table-striped table-responsive-md ">
        <tr class="table-primary">
            <th>ID</th>
            <th>Tên Nxb</th>
            <th>Hành Động</th>

        </tr>
        @forelse($nha_xuat_bans as $nha_xuat_ban)
            <tr>
                <td>{{$nha_xuat_ban->id }}</td>
                <td>{{$nha_xuat_ban -> tenNhaXuatBan}}<br>

                <td>
                    <a href="{{ url('admin/NhaXuatBan/'.$nha_xuat_ban->id.'/edit' )}} " class="btn btn-success">Sửa</a>
                    @csrf
                    @method('')
                    <form onsubmit=" return confirm('Bạn có muốn xóa không')" method="POST" action="{{url('/admin/NhaXuatBan/'.$nha_xuat_ban->id)}}">
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
    {{ $nha_xuat_bans->links() }}
@endsection
