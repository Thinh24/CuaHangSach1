<div class="cart-content py-3 pl-3" data-url="{{ route('deleteCart') }}">
    <div class="update_cart_url" data-url="{{ route('updateCart') }}">
        <h6 class="header-gio-hang">GIỎ HÀNG CỦA BẠN</h6>
        @php
            $total = 0;
        @endphp
        @foreach($carts as $id => $productCart)
            @php
                $total += $productCart['price'] * $productCart['quantity'];
            @endphp
            <div class="cart-list-items">
                <table>

                    <tr>
                        <div class="cart-item d-flex">
                            <th><a href="">
                                    <img src="{{asset( $productCart['image'])}}" style="width: 100px; height: 100px;"
                                         class="img-fluid" alt="anhsp1"></a></th>
                            <div class="item-caption d-flex w-100">
                                <td style="width: 70px">
                                    <div class="item-info ml-3">
                                        <a href="" class="ten">{{$productCart['name']}}</a>
                                        <div class="soluong d-flex">
                                            <div class="input-number input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text btn-spin btn-dec">-</span>
                                                </div>
                                                <input type="text" value="{{$productCart['quantity']}}" min="1"
                                                       class="soluongsp  text-center quantity">
                                                <div class="input-group-append">
                                                    <span class="input-group-text btn-spin btn-inc">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 70px"></td>
                                <td style="width: 150px">
                                    <div class="item-price ml-auto d-flex flex-column align-items-end">
                                        <div class="giamoi">Đơn giá {{number_format($productCart['price'])}}VND</div>
                                        <div class="giamoi">Tổng
                                            giá {{number_format(($productCart['price']) * ($productCart['quantity']))}}
                                            VND
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 70px"></td>
                                <td style="width: 150px">
                                    <div class="item-price ml-auto  align-items-end">
                                        <a href="" data-id="{{$id}}" class="btn btn-primary cart_update"> Cập Nhật </a>

                                        <a href="" data-id="{{$id}}" class="btn btn-danger cart_delete"> Xóa </a>
                                    </div>
                                </td>
                            </div>
                        </div>
                    </tr>

                </table>

                <hr>

            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <strong class="text-uppercase">Tổng cộng:</strong>
        <p class="tongcong">{{number_format($total)}}VND</p>
    </div>
</div>
