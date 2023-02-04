<!doctype html>
<html lang="en">
<head>
    <title>Dealbook-Mua sách trực tuyến giá rẻ nhất</title>
    <meta name="description"
          content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('web.headGioHang')
</head>
<body>
<!-- header -->
@include('web.header.header')
@include('web.header.header3')
<!-- header -->
<!-- body -->
<!-- giao diện giỏ hàng  -->
<section class="content my-3">
    <div class="container">
        <div class="cart-page bg-white">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="cart_wrapper">

                        @include('web.components.cart_component')

                    </div>
                </div>
                <!-- giao diện phần thanh toán nằm bên phải  -->
                <div class="col-md-4 cart-steps pl-0">
                    <div id="cart-steps-accordion" role="tablist" aria-multiselectable="true">
                        <form method="POST" >
                            @csrf
                        <!-- bước số 1: nhập địa chỉ giao hàng  -->
                        <div class="card">
                            <div class="card-header" role="tab" id="step2header">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                       href="#step2contentid" aria-expanded="true" aria-controls="step2contentid"
                                       class="text-uppercase header"><span class="steps">1</span>
                                        <span class="label">Địa chỉ giao hàng</span>
                                        <i class="fa fa-chevron-right float-right"></i>
                                    </a>
                                </h5>
                            </div>

                            <div id="step2contentid" class="collapse in" role="tabpanel"
                                 aria-labelledby="step2header" class="stepscontent">
                                <div class="card-body">
                                    <form class="form-diachigiaohang">
                                        <div class="form-label-group">
                                            <input type="text" id="inputName" class="form-control"
                                                   placeholder="Nhập họ và tên" name="name" required autofocus>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" id="inputPhone" class="form-control"
                                                   placeholder="Nhập số điện thoại" name="phone" required>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" id="inputAddress" class="form-control"
                                                   placeholder="Nhập Địa chỉ giao hàng" name="address" required>
                                        </div>
                                        <div class="form-label-group">
                                                <textarea type="text" id="inputNote" class="form-control"
                                                          placeholder="Nhập ghi chú (Nếu có)" name="note"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- bước 2: thanh toán đặt mua  -->
                            <div class="card">
                                <div class="card-header" role="tab" id="step3header">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                           href="#step3contentid" aria-expanded="true"
                                           aria-controls="step3contentid" class="text-uppercase header"><span
                                                class="steps">2</span>
                                            <span class="label">Thanh toán đặt mua</span>
                                            <i class="fa fa-chevron-right float-right"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="step3contentid" class="collapse in" role="tabpanel"
                                     aria-labelledby="step3header" class="stepscontent">
                                    <div class="card-body" style="padding: 15px;">

                                        <div>
                                            <h6 class="header text-uppercase">Chọn phương thức thanh toán</h6>
                                            <select name="pttt" class="form-control">
                                                @forelse($payments as $payment)
                                                    <option value="{{$payment->id}}">{{$payment->paymentName}}</option>
                                                @empty
                                                    <option>Không có nhà xuất bản nào</option>
                                                @endforelse
                                            </select>
                                        </div>
                                        <div>
                                            @auth
                                                <select name="nameUser" class="select form-control" id="lang" hidden="hidden">
                                                        <option value="{{Auth::user()->id}}">{{Auth::user()->id}}</option>
                                                </select>
                                            @else
                                            @endauth
                                        </div>
                                        <div>
                                            <select name="status" class="select form-control" id="lang" hidden="hidden">
                                                <option value="0"></option>
                                            </select>
                                        </div>
                                        <hr>
                                        @if (Auth::check())
                                            @auth
                                                <button class="btn btn-primary btn-lg btn-block btn-checkout text-uppercase text-white"
                                                        style="background: #F5A623"> Đặt mua
                                                </button>
                                                <p class="text-center note-before-checkout">(Vui lòng kiểm tra lại đơn hàng
                                                    trước khi Đặt Mua)</p>
                                            @else
                                            @endauth
                                        @else
                                            <a class="dropdown-item nutdangnhap text-center mb-2" href="{{ url('/login') }}">Đăng nhập</a>
                                            <p class="text-center note-before-checkout">(Vui lòng đăng nhập để Đặt Mua)</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            </div>
{{--                                endform--}}
                            </form>

                        </div>
                    </div>
                </div>
                <!-- het div cart-steps  -->
            </div>
            <!-- het row  -->
        </div>
        <!-- het cart-page  -->
    </div>
    <!-- het container  -->
</section>
<!-- het khoi content  -->
<!-- body -->

<!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
<section class="abovefooter text-white" style="background-color: #CF111A;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="dichvu d-flex align-items-center">
                    <img src="{{asset('tem/images/icon-books.png')}}" alt="icon-books">
                    <div class="noidung">
                        <h6 class="tieude font-weight-bold">HƠN 14.000 TỰA SÁCH HAY</h6>
                        <p class="detail">Tuyển chọn bởi DealBooks</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dichvu d-flex align-items-center">
                    <img src="{{asset('tem/images/icon-ship.png')}}" alt="icon-ship">
                    <div class="noidung">
                        <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                        <p class="detail">Từ 150.000đ ở TP.HCM</p>
                        <p class="detail">Từ 300.000đ ở tỉnh thành khác</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dichvu d-flex align-items-center">
                    <img src="{{asset('tem/images/icon-gift.png')}}" alt="icon-gift">
                    <div class="noidung">
                        <h6 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h6>
                        <p class="detail">Tặng Bookmark</p>
                        <p class="detail">Bao sách miễn phí</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dichvu d-flex align-items-center">
                    <img src="{{asset('tem/images/icon-return.png')}}" alt="icon-return">
                    <div class="noidung">
                        <h6 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h6>
                        <p class="detail">Hàng bị lỗi được đổi trả nhanh chóng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer  -->
@include('web.footer')
<!-- footer  -->
<script>
    function cartUpdate(event) {
        event.preventDefault();
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).parents('tr').find('input.quantity').val();

        $.ajax({
            type: "GET",
            url: urlUpdateCart,
            data: {id: id, quantity: quantity},
            success: function (data) {
                if (data.code === 200) {
                    $('.cart_wrapper').html(data.cart_component);
                    alert('Cập nhật thành công');
                }
            },
            error: function () {

            }
        });
    }

    function cartDelete(event) {
        event.preventDefault();
        let urlDelete = $('.cart-content').data('url');
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: urlDelete,
            data: {id: id},
            success: function (data) {
                if (data.code === 200) {
                    $('.cart_wrapper').html(data.cart_component);
                    alert('Xóa thành công');
                }
            },
            error: function () {

            }
        });
    }

    $(function () {
        $(document).on('click', '.cart_update', cartUpdate);
        $(document).on('click', '.cart_delete', cartDelete);

    })
</script>
</body>

</html>
