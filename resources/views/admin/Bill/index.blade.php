<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript">
        //<![CDATA[
        function OpenPopup(Url,WindowName,width,height,extras,scrollbars) {
            var wide = width;
            var high = height;
            var additional= extras;
            var top = (screen.height-high)/2;
            var leftside = (screen.width-wide)/2; newWindow=window.open(''+ Url + '',''+ WindowName + '','width=' + wide + ',height=' + high + ',top=' + top + ',left=' + leftside + ',features=' + additional + '' + ',scrollbars=1');
            newWindow.focus();
        }
        //]]>
    </script>
</head>
<body>
@extends('layout.base')
@section('title', 'Quản lý hóa đơn')
@section('content')

    <h1>Quản lý hóa đơn</h1>
    <table id="tableBills" class="table table-bordered">
        <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Tên User</th>
            <th>PTTT</th>
            <th>Tình trạng</th>
            <th>Xét duyệt hóa đơn</th>
            <th>Chi Tiết Hóa đơn</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bills as $bill)
            <tr>
                <td>{{$bill->id}}</td>
                <td>
                    {{$bill->name}}
                </td>
                <td>
                    {{$bill->paymentName}}
                </td>
                <td>
                    @if($bill->status == 0)
                        {{'Chưa duyệt'}}
                    @elseif($bill->status == 1)
                        {{'Đã duyệt, đang vận chuyển'}}
                    @elseif($bill->status == 2)
                        {{'Đã nhận hàng'}}
                    @elseif($bill->status == 3)
                        {{'Đã hủy'}}
                    @endif
                </td>
                <td>
                    <a href="{{ url('admin/bill/'.$bill->id) }}">Xét duyệt hóa đơn</a>
{{--                    <a href="javascript: void(0);" onclick=" javascript:OpenPopup('{{ url('admin/bill/'.$bill->id)}}','WindowName','1000px','500px','scrollbars=1');">Xét duyệt</a>--}}

                </td>
                <td>
                    <div>
                        <a href="javascript: void(0);" onclick=" javascript:OpenPopup('{{ url('admin/billDetail/'.$bill->id) }}','WindowName','510','280','scrollbars=1');">Chi tiết</a>
                    </div>
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
            $('#tableBills').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endpush
</body>
</html>
