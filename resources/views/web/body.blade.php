<section class="_1khoi sachmoi bg-white">
    <div class="container">
        <div class="noidung" style=" width: 100%;">
            <div class="row">
                <!--header-->
                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                    <h1 class="header text-uppercase" style="font-weight: 400;">SÁCH MỚI TUYỂN CHỌN</h1>
                    <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                </div>
            </div>

            <div class="khoisanpham" style="padding-bottom: 2rem;">
                <!-- 1 san pham -->
                @foreach($products as $product)
{{--                    {{dd($product) }}--}}

                <div class="card">
                    <a href="" class="motsanpham"
                       style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                       title="">
                        <img class="card-img-top anh" src="{{asset( $product -> image  )}}">
                        <div class="card-body noidungsp mt-2">
                            <h3 class="card-title ten">{{$product->nameProduct}}</h3>
                            <small class="tacgia text-muted">{{$product->author}}</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">{{$product->price}}{{" VNĐ"}}</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{--            @empty--}}

{{--            @endempty--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<!-- khoi sach combo hot  -->--}}
{{--<section class="_1khoi combohot mt-4">--}}
{{--    <div class="container">--}}
{{--        <div class="noidung bg-white" style=" width: 100%;">--}}
{{--            <div class="row">--}}
{{--                <!--header -->--}}
{{--                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">--}}
{{--                    <h2 class="header text-uppercase" style="font-weight: 400;">COMBO SÁCH HOT - GIẢM ĐẾN 25%</h2>--}}
{{--                    <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="khoisanpham">--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom" title="Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn">--}}
{{--                        <img class="card-img-top anh" src="tem/images/combo-chuyen-nghe-chuyen-doi.jpg"--}}
{{--                             alt="combo-chuyen-nghe-chuyen-doi">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn</h3>--}}
{{--                            <small class="tacgia text-muted">Nguyễn Hữu Long</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                                <div class="giamoi">111.200 ₫</div>--}}
{{--                                <div class="giacu text-muted">139.000 ₫</div>--}}
{{--                                <div class="sale">-20%</div>--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom"--}}
{{--                       title="Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt">--}}
{{--                        <img class="card-img-top anh" src="tem/images/combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat.jpg"--}}
{{--                             alt="combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt</h3>--}}
{{--                            <small class="tacgia text-muted">Thích Nhất Hạnh</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                                <div class="giamoi">111.200 ₫</div>--}}
{{--                                <div class="giacu text-muted">139.000 ₫</div>--}}
{{--                                <div class="sale">-20%</div>--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom" title="Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành--}}
{{--                            Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong">--}}
{{--                        <img class="card-img-top anh" src="tem/images/combo-hanh-phuc-sang-tao.jpg"--}}
{{--                             alt="combo-hanh-phuc-sang-tao">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành--}}
{{--                                Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong--}}
{{--                            </h3>--}}
{{--                            <small class="tacgia text-muted">Gosho Aoyama, Mutsuki Watanabe, Takahisa Taira</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                                <div class="giamoi">111.200 ₫</div>--}}
{{--                                <div class="giacu text-muted">139.000 ₫</div>--}}
{{--                                <div class="sale">-20%</div>--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom"--}}
{{--                       title="Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với Đời Mình?">--}}
{{--                        <img class="card-img-top anh" src="tem/images/combo-giao-duc-va-y-nghia-cuoc-song.jpg"--}}
{{--                             alt="combo-giao-duc-va-y-nghia-cuoc-song">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với--}}
{{--                                Đời Mình?</h3>--}}
{{--                            <small class="tacgia text-muted"> J.Krishnamurti</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                                <div class="giamoi">111.200 ₫</div>--}}
{{--                                <div class="giacu text-muted">139.000 ₫</div>--}}
{{--                                <div class="sale">-20%</div>--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom"--}}
{{--                       title="Combo Dinh Dưỡng Xanh - Thần dược xanh">--}}
{{--                        <img class="card-img-top anh" src="tem/images/combo-dinh-duong-than-duoc-xanh.jpg"--}}
{{--                             alt="combo-dinh-duong-than-duoc-xanh">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Combo Dinh Dưỡng Xanh - Thần dược xanh</h3>--}}
{{--                            <small class="tacgia text-muted">Ryu Seung-SunVictoria Boutenko</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                                <div class="giamoi">111.200 ₫</div>--}}
{{--                                <div class="giacu text-muted">139.000 ₫</div>--}}
{{--                                <div class="sale">-20%</div>--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom"--}}
{{--                       title="Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ">--}}
{{--                        <img class="card-img-top anh" src="tem/images/combo-an-xanh-song-lanh.jpg"--}}
{{--                             alt="combo-an-xanh-song-lanh">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ</h3>--}}
{{--                            <small class="tacgia text-muted">Norman W. Walker</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                                <div class="giamoi">111.200 ₫</div>--}}
{{--                                <div class="giacu text-muted">139.000 ₫</div>--}}
{{--                                <div class="sale">-20%</div>--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom"--}}
{{--                       title="Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho Thế Kỷ 21">--}}
{{--                        <img class="card-img-top anh" src="tem/images/combo-luoc-su-loai-nguoi.jpg"--}}
{{--                             alt="combo-luoc-su-loai-nguoi">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho--}}
{{--                                Thế Kỷ 21</h3>--}}
{{--                            <small class="tacgia text-muted">Yuval Noah Harari</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                                <div class="giamoi">111.200 ₫</div>--}}
{{--                                <div class="giacu text-muted">139.000 ₫</div>--}}
{{--                                <div class="sale">-20%</div>--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom" title="Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)">--}}
{{--                        <img class="card-img-top anh" src="tem/images/combo-phong-cach-song.jpg"--}}
{{--                             alt="combo-phong-cach-song">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)</h3>--}}
{{--                            <small class="tacgia text-muted">Marie Tourell Soderberg, Joanna Nylund, Yukari--}}
{{--                                Mitsuhashi, Margareta Magnusson, Linnea Dunne</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                                <div class="giamoi">111.200 ₫</div>--}}
{{--                                <div class="giacu text-muted">139.000 ₫</div>--}}
{{--                                <div class="sale">-20%</div>--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<!-- khoi sach sap phathanh  -->--}}
{{--<section class="_1khoi sapphathanh mt-4">--}}
{{--    <div class="container">--}}
{{--        <div class="noidung bg-white" style=" width: 100%;">--}}
{{--            <div class="row">--}}
{{--                <!--header-->--}}
{{--                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">--}}
{{--                    <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH SẮP PHÁT HÀNH / ĐẶT TRƯỚC</h2>--}}
{{--                    <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="khoisanpham">--}}
{{--                <!-- 1 san pham -->--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom" title="Ngoại Giao Của Chính Quyền Sài Gòn">--}}
{{--                        <img class="card-img-top anh" src="tem/images/ngoai-giao-cua-chinh-quyen-sai-gon.jpg"--}}
{{--                             alt="ngoai-giao-cua-chinh-quyen-sai-gon">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Ngoại Giao Của Chính Quyền Sài Gòn</h3>--}}
{{--                            <small class="tacgia text-muted">Brian Finch</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom" title="Đường Mây Trên Đất Hoa">--}}
{{--                        <img class="card-img-top anh" src="tem/images/duong-may-tren-dat-hoa.jpg"--}}
{{--                             alt="duong-may-tren-dat-hoa">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Đường Mây Trên Đất Hoa</h3>--}}
{{--                            <small class="tacgia text-muted">Brian Finch</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom" title="Muôn Kiếp Nhân Sinh">--}}
{{--                        <img class="card-img-top anh" src="tem/images/muon-kiep-nhan-sinh.jpg"--}}
{{--                             alt="muon-kiep-nhan-sinh">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Muôn Kiếp Nhân Sinh</h3>--}}
{{--                            <small class="tacgia text-muted">Brian Finch</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                       data-toggle="tooltip" data-placement="bottom" title="Đường Mây Trong Cõi Mộng">--}}
{{--                        <img class="card-img-top anh" src="tem/images/duong-may-trong-coi-mong.jpg"--}}
{{--                             alt="duong-may-trong-coi-mong.jpg">--}}
{{--                        <div class="card-body noidungsp mt-3">--}}
{{--                            <h3 class="card-title ten">Đường Mây Trong Cõi Mộng</h3>--}}
{{--                            <small class="tacgia text-muted">Brian Finch</small>--}}
{{--                            <div class="gia d-flex align-items-baseline">--}}
{{--                            </div>--}}
{{--                            <div class="danhgia">--}}
{{--                                <ul class="d-flex" style="list-style: none;">--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li class="active"><i class="fa fa-star"></i></li>--}}
{{--                                    <li><i class="fa fa-star"></i></li>--}}
{{--                                    <li><span class="text-muted">0 nhận xét</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<!-- div _1khoi -- khoi sachnendoc -->--}}
{{--<section class="_1khoi sachnendoc bg-white mt-4">--}}
{{--    <div class="container">--}}
{{--        <div class="noidung" style=" width: 100%;">--}}
{{--            <div class="row">--}}
{{--                <!--header-->--}}
{{--                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">--}}
{{--                    <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH HAY NÊN ĐỌC</h2>--}}
{{--                    <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>--}}
{{--                </div>--}}
{{--                <!-- 1 san pham -->--}}
{{--                <div class="col-lg col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                           data-toggle="tooltip" data-placement="bottom"--}}
{{--                           title="Từng bước chân nở hoa: Khi câu kinh bước tới">--}}
{{--                            <img class="card-img-top anh" src="tem/images/tung-buoc-chan-no-hoa.jpg"--}}
{{--                                 alt="tung-buoc-chan-no-hoa">--}}
{{--                            <div class="card-body noidungsp mt-3">--}}
{{--                                <h3 class="card-title ten">Từng bước chân nở hoa: Khi câu kinh bước tới</h3>--}}
{{--                                <small class="thoigian text-muted">03/04/2020</small>--}}
{{--                                <div><a class="detail" href="#">Xem chi tiết</a></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                           data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">--}}
{{--                            <img class="card-img-top anh" src="tem/images/cam-on-vi-da-duoc-thuong.jpg"--}}
{{--                                 alt="cam-on-vi-da-duoc-thuong">--}}
{{--                            <div class="card-body noidungsp mt-3">--}}
{{--                                <h3 class="card-title ten">Cảm ơn vì đã được thương</h3>--}}
{{--                                <small class="thoigian text-muted">31/03/2020</small>--}}
{{--                                <div><a class="detail" href="#">Xem chi tiết</a></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                           data-toggle="tooltip" data-placement="bottom"--}}
{{--                           title="Hào quang của vua Gia Long trong mắt Michel Gaultier">--}}
{{--                            <img class="card-img-top anh" src="tem/images/vua-gia-long.jpg" alt="vua-gia-long">--}}
{{--                            <div class="card-body noidungsp mt-3">--}}
{{--                                <h3 class="card-title ten">Hào quang của vua Gia Long trong mắt Michel Gaultier</h3>--}}
{{--                                <small class="thoigian text-muted">21/03/2020</small>--}}
{{--                                <div><a class="detail" href="#">Xem chi tiết</a></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                           data-toggle="tooltip" data-placement="bottom"--}}
{{--                           title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">--}}
{{--                            <img class="card-img-top anh" src="tem/images/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg"--}}
{{--                                 alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">--}}
{{--                            <div class="card-body noidungsp mt-3">--}}
{{--                                <h3 class="card-title ten">"Suối nguồn” và cái tôi hiện sinh trong từng cá thể</h3>--}}
{{--                                <small class="thoigian text-muted">16/03/2020</small>--}}
{{--                                <div><a class="detail" href="#">Xem chi tiết</a></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg col-sm-4">--}}
{{--                    <div class="card cuoicung">--}}
{{--                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"--}}
{{--                           data-toggle="tooltip" data-placement="bottom"--}}
{{--                           title="Đại dịch trên những con đường tơ lụa">--}}
{{--                            <img class="card-img-top anh" src="tem/images/dai-dich-tren-con-duong-to-lua.jpg"--}}
{{--                                 alt="dai-dich-tren-con-duong-to-lua">--}}
{{--                            <div class="card-body noidungsp mt-3">--}}
{{--                                <h3 class="card-title ten">Đại dịch trên những con đường tơ lụa</h3>--}}
{{--                                <small class="thoigian text-muted">16/03/2020</small>--}}
{{--                                <div><a class="detail" href="#">Xem chi tiết</a></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <hr>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->--}}
{{--<section class="abovefooter text-white" style="background-color: #CF111A;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-3 col-sm-6">--}}
{{--                <div class="dichvu d-flex align-items-center">--}}
{{--                    <img src="tem/images/icon-books.png" alt="icon-books">--}}
{{--                    <div class="noidung">--}}
{{--                        <h3 class="tieude font-weight-bold">HƠN 14.000 TỰA SÁCH HAY</h3>--}}
{{--                        <p class="detail">Tuyển chọn bởi DealBooks</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6">--}}
{{--                <div class="dichvu d-flex align-items-center">--}}
{{--                    <img src="tem/images/icon-ship.png" alt="icon-ship">--}}
{{--                    <div class="noidung">--}}
{{--                        <h3 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h3>--}}
{{--                        <p class="detail">Từ 150.000đ ở TP.HCM</p>--}}
{{--                        <p class="detail">Từ 300.000đ ở tỉnh thành khác</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6">--}}
{{--                <div class="dichvu d-flex align-items-center">--}}
{{--                    <img src="tem/images/icon-gift.png" alt="icon-gift">--}}
{{--                    <div class="noidung">--}}
{{--                        <h3 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h3>--}}
{{--                        <p class="detail">Tặng Bookmark</p>--}}
{{--                        <p class="detail">Bao sách miễn phí</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6">--}}
{{--                <div class="dichvu d-flex align-items-center">--}}
{{--                    <img src="tem/images/icon-return.png" alt="icon-return">--}}
{{--                    <div class="noidung">--}}
{{--                        <h3 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h3>--}}
{{--                        <p class="detail">Hàng bị lỗi được đổi trả nhanh chóng</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
