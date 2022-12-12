@extends('layout.base')

@section('content')
<h1>All Nhà Xuất Bản</h1>
    <a href="{{url('admin/publishers/create')}}">Thêm Nhà Xuất Bản</a>
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
        @forelse($publishers as $publisher)
            <tr>
                <td>{{$publisher->id }}</td>
                <td>{{$publisher -> namePublishers}}<br>

                <td>
                    <a href="{{ url('admin/publishers/'.$publisher->id.'/edit' )}} " class="btn btn-success">Sửa</a>
                    @csrf
                    @method('')
                    <form onsubmit=" return confirm('Bạn có muốn xóa không')" method="POST" action="{{url('/admin/publishers/'.$publisher->id)}}">
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
    {{ $publishers->links() }}
@endsection
