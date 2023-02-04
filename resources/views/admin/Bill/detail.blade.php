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
    @if($bills == null)
        <hi>Hóa đơn không tồn tại</hi>
    @else

        <table class="table table-bordered table-striped table-responsive-md ">
            <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>Tên User</th>
                <th>PTTT</th>
                <th>Tên người nhận</th>
                <th>SDT người nhận</th>
                <th>Địa chỉ người nhận</th>
                <th>Ghi chú</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$bills->id}}</td>
                <td>
                    @forelse($users as $user)
                        @if($bills -> id_users == $user -> id )
                            {{$user->name}}
                        @endif
                    @empty
                    @endforelse
                </td>
                <td>
                    @if($bills->id_payment == 1)
                        {{'Sau khi nhận hàng'}}
                    @elseif($bills->id_payment == 2)
                        {{'Thanh toán trước'}}
                    @endif
                </td>
                <td>
                    {{$bills->name}}
                </td>
                <td>
                    {{$bills->phone}}
                </td>
                <td>
                    {{$bills->address}}
                </td>
                <td>
                    {{$bills->note}}
                </td>
            </tr>
            </tbody>
        </table>


        <form action="{{ url('/admin/bill/'.$bills->id.'/edit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row" style="margin-left: 20px">
                <div>
                    <label>Xét duyệt hóa đơn</label>
                    <br>
                    <input type="radio" name="status" value="0"
                           <?php
                           if ($bills['status'] == 10){
                               ?>
                           checked
                        <?php } ?>> {{'Chưa duyệt'}}
                    <br>
                    <input type="radio" name="status" value="1"
                           <?php
                           if ($bills['status'] == 1){
                               ?>
                           checked
                        <?php } ?>> {{'Duyệt'}}
                    <br>
                    <input type="radio" name="status" value="2"
                           <?php
                           if ($bills['status'] == 2){
                               ?>
                           checked
                        <?php } ?>> {{'Đã xong'}}
                    <br>
                    <input type="radio" name="status" value="3"
                           <?php
                           if ($bills['status'] == 3){
                               ?>
                           checked
                        <?php } ?>> {{'Hủy'}}
                    <br>
                </div>
            </div>

            <div class="row" style="margin-left: 20px">
                <div class="rol text-center">
                    <br>
                    <button class="btn btn-primary">Xác nhận</button>
                </div>
            </div>

        </form>

    @endif
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

