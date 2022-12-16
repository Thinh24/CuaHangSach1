<nav class="navbar navbar-expand-md bg-white navbar-light">
    <div class="container">
        <!-- logo  -->
        <a class="navbar-brand" href="" style="color: #CF111A;"><b>DealBook</b>.xyz</a>

        <!-- navbar-toggler  -->
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <!-- form tìm kiếm  -->
            <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                <div class="input-group" style="width: 520px;">
                    <input type="text" class="form-control" aria-label="Small"
                           placeholder="Nhập sách cần tìm kiếm...">
                    <div class="input-group-append">
                        <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
            <ul class="navbar-nav mb-1 ml-auto">
                <div class="dropdown">
                    <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>
                        </a>
                        <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                            khoản</a>
                    </li>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal"
                           data-target="#formdangky">Đăng ký</a>
                        <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal"
                           data-target="#formdangnhap">Đăng nhập</a>
                    </div>
                </div>
                <li class="nav-item giohang">
                    <a href="gio-hang.html" class="btn btn-secondary rounded-circle">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="cart-amount">0</div>
                    </a>
                    <a class="nav-link text-dark giohang text-uppercase" href="gio-hang.html"
                       style="display:inline-block">Giỏ
                        Hàng</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- form dang ky khi click vao button tren header-->
<div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
     aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                    <li class="tab tab-dangnhap text-center">
                        <a class=" text-decoration-none">Đăng nhập</a>
                        <hr>
                    </li>
                    <li class="tab tab-dangky text-center">
                        <a class="text-decoration-none">Đăng ký</a>
                        <hr>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-signup" class="form-signin mt-2">
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" required
                               autofocus>
                    </div>
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone"
                               required>
                    </div>
                    <div class="form-label-group">
                        <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                               required>
                    </div>
                    <div class="form-label-group">
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password"
                               required>
                    </div>
                    <div class="form-label-group mb-4">
                        <input type="password" class="form-control" name="confirm_password"
                               placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit"
                            style="background: #F5A623">Đăng ký</button>
                    <hr class="mt-3 mb-2">
                    <div class="custom-control custom-checkbox">
                        <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với DealBook về</p>
                        <a href="#" class="text-decoration-none text-center" style="color: #F5A623">Điều khoản dịch
                            vụ & Chính sách bảo mật</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- form dang nhap khi click vao button tren header-->
<div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1"
     aria-labelledby="dangnhap_tieude" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                    <li class="tab tab-dangnhap text-center">
                        <a class=" text-decoration-none">Đăng nhập</a>
                        <hr>
                    </li>
                    <li class="tab tab-dangky text-center">
                        <a class="text-decoration-none">Đăng ký</a>
                        <hr>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-signin" class="form-signin mt-2">
                    <div class="form-label-group">
                        <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                               required autofocus>
                    </div>

                    <div class="form-label-group">
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                        <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Quên mật
                            khẩu</a>
                    </div>

                    <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit"
                            style="background: #F5A623">Đăng nhập</button>
                    <hr class="my-4">
                    <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                            class="fab fa-google mr-2"></i> Đăng nhập bằng Google</button>
                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                            class="fab fa-facebook-f mr-2"></i> Đăng nhập bằng Facebook</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
<section class="duoinavbar">
    <div class="container text-white">
        <div class="row justify">
            <div class="col-md-3">
                <div class="categoryheader">
                    <div class="noidungheader text-white">
                        <i class="fa fa-bars"></i>
                        <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="benphai float-right">
                    <div class="hotline">
                        <i class="fa fa-phone"></i>
                        <span>Hotline:<b>1900 1999</b> </span>
                    </div>
                    <i class="fas fa-comments-dollar"></i>
                    <a href="#">Hỗ trợ trực tuyến </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- noi dung danh muc sach(categories) + banner slider -->
<section class="header bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="margin-right: -15px;">
                <!-- CATEGORIES -->
                <div class="categorycontent">
                    <ul>
                        <li> <a href="sach-kinh-te.html"> Sách Kinh Tế - Kỹ Năng</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Kinh Tế - Kỹ
                                        Năng</a></li>
                                <div class="content trai">
                                    <li><a href="#">Kinh Tế - Chính Trị</a></li>
                                    <li><a href="#">Sách Khởi Nghiệp</a></li>
                                    <li><a href="#">Sách Tài Chính, Kế Toán</a></li>
                                    <li><a href="#">Sách Quản Trị Nhân Sự</a></li>
                                    <li><a href="#">Sách Kỹ Năng Làm Việc</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Nhân Vật - Bài Học Kinh Doanh</a></li>
                                    <li><a href="#">Sách Quản Trị - Lãnh Đạo</a></li>
                                    <li><a href="#">Sách Kinh Tế Học</a></li>
                                    <li><a href="#">Sách Chứng Khoán - Bất Động Sản - Đầu Tư</a></li>
                                    <li><a href="#">Sách Marketing - Bán Hàng</a></li>
                                </div>
                            </ul>
                        </li>

                        <li><a href="#">Nghệ Thuật Sống - Tâm Lý </a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Nghệ Thuật Sống - Tâm
                                        Lý</a></li>
                                <div class="content trai">
                                    <li><a href="#">Sách Nghệ Thuật Sống</a></li>
                                    <li><a href="#">Sách Tâm Lý</a></li>
                                    <li><a href="#">Sách Hướng Nghiệp</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Sách Nghệ Thuật Sống Đẹp</a></li>
                                    <li><a href="#">Sách Tư Duy </a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Văn Học Việt Nam</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Văn Học Việt
                                        Nam</a></li>
                                <div class="content trai">
                                    <li><a href="#">Truyện Ngắn - Tản Văn </a></li>
                                    <li><a href="#">Tiểu Thuyết lịch Sử </a></li>
                                    <li><a href="#">Phóng Sự - Ký Sự - Du ký - Tùy Bút</a></li>
                                    <li><a href="#">Thơ</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Tiểu thuyết</a></li>
                                    <li><a href="#">Tiểu sử - Hồi ký</a></li>
                                    <li><a href="#">Phê Bình Văn Học</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Văn Học Nước Ngoài</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Văn Học Nước
                                        Ngoài</a></li>
                                <div class="content trai">
                                    <li><a href="#">Văn Học Hiện Đại</a></li>
                                    <li><a href="#">Tiểu Thuyết </a></li>
                                    <li><a href="#">Truyện Trinh Thám</a></li>
                                    <li><a href="#">Thần Thoại - Cổ Tích</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Văn Học Kinh Điển</a></li>
                                    <li><a href="#">Sách Giả Tưởng - Kinh Dị</a></li>
                                    <li><a href="#">Truyện Kiếm Hiệp</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Thiếu Nhi</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Thiếu Nhi</a>
                                </li>
                                <div class="content trai">
                                    <li><a href="#">Mẫu Giáo</a></li>
                                    <li><a href="#">Thiếu Niên</a></li>
                                    <li><a href="#">Kiến Thức - Bách Khoa</a></li>
                                    <li><a href="#">Truyện Cổ Tích</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Nhi Đồng</a></li>
                                    <li><a href="#">Văn Học Thiếu Nhi</a></li>
                                    <li><a href="#">Kỹ Năng Sống</a></li>
                                    <li><a href="#">Truyện Tranh</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Giáo Dục - Gia Đình</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Giáo Dục - Gia
                                        Đình</a></li>
                                <div class="content trai">
                                    <li><a href="#">Giáo dục</a></li>
                                    <li><a href="#">Thai Giáo</a></li>
                                    <li><a href="#">Sách Dinh Dưỡng - Chăm Sóc Trẻ</a></li>
                                    <li><a href="#">Ẩm Thực - Nấu Ăn</a></li>
                                    <li><a href="#">Sách Tham Khảo</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Giới Tính</a></li>
                                    <li><a href="#">Sách Làm Cha Mẹ</a></li>
                                    <li><a href="#">Kiến Thức - Kỹ Năng Cho Trẻ</a></li>
                                    <li><a href="#">Ngoại Ngữ - Từ Điển</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Lịch Sử</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Lịch Sử</a></li>
                                <div class="content trai">
                                    <li><a href="#">Lịch Sử Việt Nam</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Lịch Sử Thế Giới</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Văn Hóa - Nghệ Thuật</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Văn Hóa - Nghệ
                                        Thuật</a></li>
                                <div class="content trai">
                                    <li><a href="#">Văn Hóa</a></li>
                                    <li><a href="#">Phong Tục Tập Quán</a></li>
                                    <li><a href="#">Phong Thủy</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Nghệ Thuật</a></li>
                                    <li><a href="#">Kiến Trúc</a></li>
                                    <li><a href="#">Du Lịch</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Khoa Học - Triết Học</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Khoa Học - Triết
                                        Học</a></li>
                                <div class="content trai">
                                    <li><a href="#">Triết Học Phương Tây</a></li>
                                    <li><a href="#">Khoa Học Cơ Bản</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Minh Tiết Phương Đông</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Tâm Linh - Tôn Giáo</a><i class="fa fa-chevron-right float-right"></i>

                        </li>
                        <li><a href="#">Sách Y Học - Thực Dưỡng</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Y Học - Thực
                                        Dưỡng</a></li>
                                <div class="content trai">
                                    <li><a href="#">Chăm Sóc Sức Khỏe</a></li>
                                    <li><a href="#">Y Học</a></li>
                                    <li><a href="#">Thiền - Yoga</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Thực Dưỡng</a></li>
                                    <li><a href="#">Đông Y - Cổ Truyền</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- banner slider  -->
            <div class="col-md-9 px-0">
                <div id="carouselId" class="carousel slide" data-ride="carousel">
                    <ol class="nutcarousel carousel-indicators rounded-circle">
                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselId" data-slide-to="1"></li>
                        <li data-target="#carouselId" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#"><img src="tem/images/banner-sach-moi.jpg" class="img-fluid"
                                             style="height: 386px;" width="900px" alt="First slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="tem/images/banner-beethoven.jpg" class="img-fluid"
                                             style="height: 386px;" width="900px" alt="Second slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="tem/images/neu-toi-biet-duoc-khi-20-full-banner.jpg" class="img-fluid"
                                             style="height: 386px;" alt="Third slide"></a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
