<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends('layout.base')

@section('title', 'Chi tiết Hóa đơn')

@section('content')

        <table class="table table-bordered table-striped table-responsive-md ">
            <thead>
            <tr class="table-primary">

                <th>Sản phẩm</th>
                <th>Số Lượng</th>
                <th>Đơn Giá</th>
                <th>Tổng giá</th>

            </tr>
            </thead>
            <tbody>
            @foreach($billdetails as $billdetail)
            <tr>
                <td>
                    {{$billdetail->nameProduct}}
                </td>
                <td>
                    {{$billdetail->quantity}}
                </td>
                <td>
                    {{$billdetail->price}}
                </td>
                <td>
                    {{$billdetail->price * $billdetail->quantity}}
                </td>

            @endforeach
            </tbody>
        </table>

@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
<script src="{{asset('tem/js/index.js')}}" type="text/javascript"></script>
</body>
</html>

