@extends('layout.base')

@section('content')
<h1>All User</h1>
        <form >
            <input name="kw" class="form-control" type="text" placeholder="Nhập từ khóa cần tìm kiếm">
            <button type="submit" hidden class="btn btn-primary">Tìm</button>
        </form>
    <table class="table table-bordered table-striped table-responsive-md ">
        <tr class="table-primary">
            <th>Id</th>
            <th>Tên user</th>
            <th>Ngày tháng năm sinh</th>
            <th>Số Điện thoại</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Hành Động</th>
        </tr>
        @forelse($users as $nguoidung)

            <tr>
                <td>{{$nguoidung->id}}
                </td>
                <td>
                    {{$nguoidung->name}}
                </td>
                <td>
                    {{$nguoidung->dob}}
                </td>
                <td>
                    {{$nguoidung->phonenb}}
                </td>
                <td>
                    {{$nguoidung->address}}
                </td>
                <td>
                    {{$nguoidung->email}}
                </td>
                <td>
                    <form onsubmit=" return confirm('Bạn có muốn xóa không')" method="POST" action="{{url('/admin/users/'.$nguoidung->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>

                    </form>

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
    {{ $users->links() }}
@endsection
