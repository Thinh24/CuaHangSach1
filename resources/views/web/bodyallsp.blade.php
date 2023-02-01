<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('web.allsphead')
    @include('web.head')
</head>

<body>
@include('web.header.header')
@include('web.header.header3')

<section class="content my-4">
    <div class="container">
        <div class="noidung bg-white" style=" width: 100%;">
            <!-- header của khối sản phẩm : tag(tác giả), bộ lọc và sắp xếp  -->
            <div class="header-khoi-sp d-flex">
                <div class="sort d-flex ml-auto">
                    <div class="sap-xep">
                        <label for="sapxep-select" class="label-select">Sắp xếp</label>
                        <select class="sapxep-select">
                            <option value="moinhat">Mới nhất</option>
                            <option value="thap-cao">Giá: Thấp - Cao</option>
                            <option value="cao-thap">Giá: Cao - Thấp</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- các sản phẩm  -->
            <div class="items">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi" >
                        <div class="card"  >
                            <a href="{{url('/home/'.$product->id)}}" class="motsanpham"
                               style="text-decoration: none; color: black;" data-toggle="tooltip"
                               data-placement="bottom" >
                                <img class="card-img-top anh" src="{{asset( $product -> image )}}"
                                     alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                <div class="card-body noidungsp mt-3">
                                    <h6 class="card-title ten">{{$product->nameProduct}}</h6>
                                    <small class="tacgia text-muted">{{$product->author}}</small>
                                    <div class="gia d-flex align-items-baseline">
                                        <div class="giamoi">{{number_format($product -> price)}}VND</div>

                                    </div>
                                    <div class="danhgia">
                                        <ul class="d-flex" style="list-style: none;">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <span class="text-muted">0 nhận xét</span>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>



{{--                    phan trang--}}
                    <div class="pagination-bar my-3">
                        <div class="row">
                            <div class="col-12">
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <!-- <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li> -->
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&rsaquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!--het khoi san pham-->
                </div>
                <!--het div noidung-->
            </div>
            <!--het container-->
        </div>
    </div>
</section>
<!--het _1khoi-->
<!-- footer  -->
@include('web.footer')
<!-- footer  -->
</body>

</html>
