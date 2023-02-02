@extends('layout.base')

@section('title', 'Chi tiết Warehouse')

@section('content_header','Warehouse có id = '.$warehouses->id)
@section('content')

    @if($warehouses == null)
        <hi> Nhap khong ton tai</hi>
    @else
        <table class="table table-bordered table-striped table-responsive-md ">
            <tr class="table-primary">
                <th>ID</th>
                <th>ID Warehouse</th>
                <th>ID Products</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>{{$warehouse_details->id }}</td>
                <td>
                    {{$warehouses_details -> id_warehouses}}
                </td>
                <td>
                    {{$warehouses_details -> id_products}}
                </td>
                <td>
                    {{$warehouse_details -> quantity}}
                </td>
                <td>
                    {{$warehouse_details -> price}}{{(" VND")}}
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="rol text-center">

            </div>
        </div>
    @endif
@endsection
