<!DOCTYPE html>
<html lang="vi">

<head>
    @include('web.head')
</head>

<body>
<!-- code cho nut like share facebook  -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>



<!-- header -->
@include('web.header')
<!-- khoi sach moi  -->

@include('web.body')

<!-- footer  -->
<footer>
    @include('web.footer')
</footer>

<!-- nut cuon len dau trang -->
<div class="fixed-bottom">
    <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
         style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
</div>

</body>

</html>
