@extends('layout.base')

@section('content')
    <h1>All Warehouses</h1>
    <br>
    <a href="{{url('admin/warehouse/create')}}">Thêm Nhập Kho</a>
    <form >
        <input name="kw" class="form-control" type="text" placeholder="Nhập từ khóa cần tìm kiếm">
        <button type="submit" hidden class="btn btn-primary">Tìm</button>
    </form>
    <table class="table table-bordered table-striped table-responsive-md ">
        <tr class="table-primary">
            <th>ID</th>
            <th>Ngày nhập</th>
            <th>ID người nhập</th>
            <th>ID kho</th>
        </tr>
        @forelse($warehouses as $warehouse)
            <tr>
                <td>{{$warehouse->id }}</td>
                <td>
                    {{$warehouse -> created_at}}
                </td>
                <td>
                    {{$warehouse -> id_users}}
                </td>
                <td>
                    {{$warehouse -> id_storage}}
                </td>
                <td>
                    <a href="{{ url('admin/warehouses/'.$warehouse->id )}} " class="btn btn-success">Chi tiết</a>
                    @csrf
                    @method('')
                    <form onsubmit=" return confirm('Bạn có muốn xóa không')" method="POST" action="{{url('/admin/warehouse/'.$warehouse->id)}}">
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
    {{ $warehouses->links() }}
@endsection
