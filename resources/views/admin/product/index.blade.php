@extends('layout.base')

@section('content')
<h1>All Books</h1>
    <a href="{{url('admin/products/create')}}">Thêm Sản Phẩm</a>
    <br>
    <table id="tableProducts" class="table table-bordered">
        <thead>
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
        </thead>
        <tbody>
        @foreach($products as $product)
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
                    @forelse($publishers as $publisher)
                        @if($product -> id_publishers == $publisher -> id ) {{$publisher->namePublishers}}  @endif
                    @empty
                    @endforelse
                </td>
                <td>
                    {{$product -> quantity}}
                </td>
                <td>
                    {{number_format($product -> price)}}{{" VND"}}
                </td>
                <td>
                    {{$product -> ISBN}}
                </td>
                <td>
                    <a href="{{ url('admin/products/'.$product->id.'/edit' )}} " class="btn btn-success">Sửa</a>
{{--                    @csrf--}}
{{--                    @method('')--}}
{{--                    <form onsubmit=" return confirm('Bạn có muốn xóa không')" method="POST" action="{{url('/admin/products/'.$product->id)}}">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit" class="btn btn-danger">Xóa</button>--}}
{{--                    </form>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tableProducts').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endpush
