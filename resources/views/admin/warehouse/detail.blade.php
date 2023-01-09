@extends('layout.base')

@section('title', 'Chi tiết Warehouse')

@section('content_header','Warehouse có id = '.$warehouses->id)
@section('content')

    @if($warehouses == null)
        <hi> Kho khong ton tai</hi>
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
                <td>{{$warehouses->id }}</td>
                <td>
                    {{$warehouses -> id_Warehouse}}
                </td>
                <td>
                    {{$warehouses -> id_products}}
                </td>
                <td>
                    {{$products -> quantity}}
                </td>
                <td>
                    {{$products -> price}}{{(" VND")}}
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="rol text-center">

            </div>
        </div>
    @endif
@endsection
