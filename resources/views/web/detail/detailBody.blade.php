<section class="product-page mb-4">
    <div class="container">
        <!-- chi tiết 1 sản phẩm -->
        <div class="product-detail bg-white p-4">
            <div class="row">
                <!-- ảnh  -->
                <div class="col-md-5 khoianh">
                    <div class="anhto mb-4">
                        <a class="active" href="{{asset('images/Screenshot 2.png')}}" data-fancybox="thumb-img">
                            <img class="product-image" src="{{asset( $products->image)}}" alt="" style="width: 100%;">
                        </a>
                        <a href="" data-fancybox="thumb-img"></a>
                    </div>
                </div>
                <!-- thông tin sản phẩm: tên, giá bìa giá bán tiết kiệm, các khuyến mãi, nút chọn mua.... -->
                <div class="col-md-7 khoithongtin">
                    <div class="row">
                        <div class="col-md-12 header">
                            <h4 class="ten">{{$products -> nameProduct}}</h4>
                            <div class="rate">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star "></i>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-7">
                            <div class="gia">
                                <div class="giabia"><span class="giacu ml-2"> </span></div>
                                <div class="giaban">Giá bán tại Kim đồng: <span
                                        class="giamoi font-weight-bold">  {{number_format($products -> price)}}</span><span class="donvitien">₫</span></div>
                                <div class="tietkiem"> <span class="sale"></span>
                                </div>
                            </div>
                            <div class="uudai my-3">
{{--                                Mục ưu đãi--}}
                            </div>
                            <div class="soluong d-flex">
                                <label class="font-weight-bold">Số lượng: {{number_format($products -> quantity)}} </label>
{{--                                <div class="input-number input-group mb-3">--}}
{{--                                    <div class="input-group-prepend">--}}
{{--                                        <span class="input-group-text btn-spin btn-dec">-</span>--}}
{{--                                    </div>--}}
{{--                                    <input type="text" value="1" class="soluongsp quantity text-center">--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <span class="input-group-text btn-spin btn-inc">+</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div
                                data-url="{{route('addToCart', ['id'=>$products->id])}}"
                                class="nutmua btn w-100 text-uppercase add_to_cart">
                                Chọn mua
                            </div>


                        </div>
                        <!-- thông tin khác của sản phẩm:  tác giả, ngày xuất bản, kích thước ....  -->
                        <div class="col-md-5">
                            <div class="thongtinsach">
                                <ul>
                                    <li>Tác giả: <a href="#" class="tacgia">{{$products -> author}}</a></li>
                                    <li>Nhà Xuất bản: <a href="#" class="tacgia">
                                        @forelse($publishers as $publisher)
                                            @if($products -> id_publishers == $publisher -> id ) {{$publisher->namePublishers}}  @endif
                                        @empty
                                        @endforelse</a>
                                    </li>
                                    <li>Hình thức bìa: <b>Bìa mềm</b></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- decripstion của 1 sản phẩm: giới thiệu , đánh giá độc giả  -->
                <div class="product-description col-md-9">
                    <!-- 2 tab ở trên  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active text-uppercase" id="nav-gioithieu-tab"
                               data-toggle="tab" href="#nav-gioithieu" role="tab" aria-controls="nav-gioithieu"
                               aria-selected="true">Giới thiệu</a>
                            <a class="nav-item nav-link text-uppercase" id="nav-danhgia-tab" data-toggle="tab"
                               href="#nav-danhgia" role="tab" aria-controls="nav-danhgia"
                               aria-selected="false">Đánh giá của độc giả</a>
                        </div>
                    </nav>

                    <!-- nội dung của từng tab  -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active ml-3" id="nav-gioithieu" role="tabpanel"
                             aria-labelledby="nav-gioithieu-tab">
                            <h6 class="tieude font-weight-bold">{{$products -> nameProduct}}</h6>
                            <p>
                                    <span>
                                         {{$products -> des}}
                                    </span>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="nav-danhgia" role="tabpanel" aria-labelledby="nav-danhgia-tab">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <p class="tieude">Đánh giá trung bình</p>
                                    <div class="diem">0/5</div>
                                    <div class="sao">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="sonhanxet text-muted">(0 nhận xét)</p>
                                </div>
                                <div class="col-md-5">
                                    <div class="tiledanhgia text-center">
                                        <div class="motthanh d-flex align-items-center">5 <i class="fa fa-star"></i>
                                            <div class="progress mx-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> 0%
                                        </div>
                                        <div class="motthanh d-flex align-items-center">4 <i class="fa fa-star"></i>
                                            <div class="progress mx-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> 0%
                                        </div>
                                        <div class="motthanh d-flex align-items-center">3 <i class="fa fa-star"></i>
                                            <div class="progress mx-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> 0%
                                        </div>
                                        <div class="motthanh d-flex align-items-center">2 <i class="fa fa-star"></i>
                                            <div class="progress mx-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> 0%
                                        </div>
                                        <div class="motthanh d-flex align-items-center">1 <i class="fa fa-star"></i>
                                            <div class="progress mx-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> 0%
                                        </div>
                                        <div class="btn vietdanhgia mt-3">Viết đánh giá của bạn</div>
                                    </div>
                                    <!-- nội dung của form đánh giá  -->
                                    <div class="formdanhgia">
                                        <h6 class="tieude text-uppercase">GỬI ĐÁNH GIÁ CỦA BẠN</h6>
                                        <span class="danhgiacuaban">Đánh giá của bạn về sản phẩm này:</span>
                                        <div class="rating d-flex flex-row-reverse align-items-center justify-content-end">
                                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="txtFullname w-100" placeholder="Mời bạn nhập tên(Bắt buộc)">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="txtEmail w-100" placeholder="Mời bạn nhập email(Bắt buộc)">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="txtComment w-100" placeholder="Đánh giá của bạn về sản phẩm này">
                                        </div>
                                        <div class="btn nutguibl">Gửi bình luận</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- het tab nav-danhgia  -->
                    </div>
                    <!-- het tab-content  -->
                </div>
                <!-- het product-description -->
            </div>
            <!-- het row  -->
        </div>
        <!-- het product-detail -->
    </div>
    <!-- het container  -->
</section>
<script>
    function addTocart(event){
        event.preventDefault();
        let urlCart = $(this).data('url');
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType:'json',
            success: function (data){
                if(data.code === 200)[
                    alert('Them san pham thanh cong')
                ]
            },
            error: function (){

            }
        });
    }
    $(function (){
        $('.add_to_cart').on('click', addTocart);
    });
</script>
