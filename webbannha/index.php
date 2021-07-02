<?php
	require_once ('db/db_helper.php');
    include 'dangnhap/config.php';
    //$user = [];
    $user = (isset($_SESSION['username'])) ? $_SESSION['username']: [];
    //$user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>BDS Long</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        </style>
    </head>
    <body>
        <div id="page">

            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <a href="index.php"><span>BDS</span>Long</a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Gọi Ngay</button></div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Xem Danh Mục" class="active"><span>Xem Danh Mục</span></a></li>

                                            <li><a data-hover="Xem Sản Phẩm"  href="about.html"><span>Xem Sản Phẩm</span></a></li>
                                            <li><a data-hover="Tin Tức" href="news.html"><span>Tin Tức</span></a></li>
                                <ul class="nav navbar-nav navbar-right">
                                <?php
                                    if(isset($user['username'])){
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['username']; ?><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                            <li><a href="dangnhap/logout.php">Đăng xuất</a></li>
                                    </ul>
                                </li>
                                <?php } else{ ?>
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Đăng nhập<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="dangnhap/register.php">Đăng ký</a></li>
                                        <li><a href="dangnhap/login.php">Đăng nhập</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                            </ul>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Gọi Ngay: 0326985723</button></div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>


            <!--end-->
            <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"> <img src="images/banner.png" style="width:100%; height: 500px" alt="First slide">
                        <div class="carousel-caption">
                            <h1>BDSLong<br> Bất động sản</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="images/banner2.png" style="width:100%; height: 500px" alt="Second slide">
                        <div class="carousel-caption">
                            <h1>BDSLong<br> Bất động sản</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="images/banner3.png" style="width:100%; height: 500px" alt="Third slide">
                        <div class="carousel-caption">
                            <h1>BDSLong<br> Bất động sản</h1>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

            </div>
            <div class="clearfix"></div>

            <!--service block--->
            <section class="service-block">
                <div class="container">
                    <div class="row">
<?php
//Lay danh sach danh muc tu database
$sql          = 'select * from category';
$categoryList = executeResult($sql);

$index = 1;
foreach ($categoryList as $item) {
	echo '<tr>
				<div class="col-md-3 col-sm-3 col-xs-6 width-50">
					<div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/bac.png">
                                </div>
                                <h4><a href="frontend/category.php?id='.$item['id'].'">'.$item['name'].'</a></h4>
                    </div>
                </div>
			</tr>';
}
?>
                        
                    </div>
                </div>
            </section>
 <!--offer block-->
            <section class="vacation-offer-block">
                <div class="vacation-offer-bgbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="vacation-offer-details">
                                    <h1>hãy đến và chọn cho mình một căn nhà phù hợp</h1>
                                    <h4>Bất động sản Long hân hạnh đón tiếp</h4>
                                    <button type="button" class="btn btn-default">Chọn địa điểm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End-->
            <!----resort-overview--->
            <section class="resort-overview-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a><img src="images/category1.png" class="img-responsive" alt="image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a href="frontend/detail.php?id=1">nhà ở hà nội</a></h3>
                                    <p>GIA ĐÌNH KHÔNG CÓ NHU CẦU SỬ DỤNG CẦN BÁN GẤP SHOPHOUSE, LIỀN KỀ VÀ BIỆT THỰ THE MANOR CENTRAL PARK</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a><img alt="image" class="img-responsive" src="images/category2.png"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a href="frontend/detail.php?id=5">nhà ở đà nẵng</a></h3>
                                    <p>GIA ĐÌNH KHÔNG CÓ NHU CẦU SỬ DỤNG CẦN BÁN GẤP SHOPHOUSE, LIỀN KỀ VÀ BIỆT THỰ THE MANOR CENTRAL PARK</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-desc-side">
                                    <h3><a href="frontend/detail.php?id=13">nhà ở TP.HCM</a></h3>
                                    <p>GIA ĐÌNH KHÔNG CÓ NHU CẦU SỬ DỤNG CẦN BÁN GẤP SHOPHOUSE, LIỀN KỀ VÀ BIỆT THỰ THE MANOR CENTRAL PARK</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>

                            <div class="side-B">
                                <div class="product-thumb">
                                    <div class="image txt-rgt">
                                        <a class="arrow-left"><img src="images/category2.png" class="img-responsive" alt="imaga"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                            <div class="side-A">
                                <div class="product-desc-side">
                                    <h3><a href="frontend/detail.php?id=14">nhà ở châu đốc an giang</a></h3>
                                    <p>GIA ĐÌNH KHÔNG CÓ NHU CẦU SỬ DỤNG CẦN BÁN GẤP SHOPHOUSE, LIỀN KỀ VÀ BIỆT THỰ THE MANOR CENTRAL PARK</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>

                            <div class="side-B">
                                <div class="product-thumb txt-rgt">
                                    <div class="image">
                                        <a class="arrow-left"><img src="images/category2.png" class="img-responsive" alt="imaga"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </section>

            <!-----blog slider----->
            <!--blog trainer block-->
            <section class="blog-block-slider">
                <div class="blog-block-slider-fix-image">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <div class="container">
                            <!-- Wrapper for slides -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                                <li data-target="#myCarousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="blog-box">
                                        <p>Bất động sản không thể mất đi hoặc bị đánh cắp và cũng không thể tự nó có thể di chuyển.Với những đặc điểm của nó, thì với việc chi trả đầy đủ để sở hữu nó, được quản lý cẩn thận, thì đó sẽ là kênh đầu tư an toàn nhất trên thế giới.</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client1.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Franklin D. Roosevelt</h3>
                                                <h5 class="blog-rev"> Tổng thống Hoa Kỳ 2</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>Trong kinh doanh bất động sản, bạn có được nhiều kiến thức hơn và bạn biết và hiểu thêm về con người, các vấn đề cộng đồng, tìm hiểu thêm về cuộc sống, ngoài ra hiểu được sự tác động của chính phủ,  hơn bất kỳ ngành nghề nào  khác</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client2.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Johnny Isakson</h3>
                                                <h5 class="blog-rev">Thượng nghị sĩ Mỹ</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>Những người giàu có họ không làm việc vào thời gian nghỉ ngơi, họ để cho chính những bất động sản làm việc và làm họ thêm giàu có</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client3.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">John Stuart Mill</h3>
                                                <h5 class="blog-rev">Nhà kinh tế chính trị học</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <!---footer--->
            <footer>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                            <div class="footer-details">
                                <h4>explore</h4>
                                <ul class="list-unstyled footer-links">
                                    <li class="active"><a>Trang chủ</a></li>
                                    <li><a href="about.html">Xem Danh Mục</a></li>
                                    <li><a href="rooms.html">Xem Nhà</a></li>
                                    <li> <a href="news.html">Tin Tức</a></li>
                                    <li> <a href="contact.html">Liên Hệ</a></li>
                                    <li> <a href="dangnhap/login.php">Đăng nhập</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>

                    <div class="copyright">
                        &copy; 2021 All right reserved. Designed by <a href="http://www.themevault.net/" target="_blank">Long Nguyen</a>
                    </div>

                </div>
            </footer>
            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
    </body>
</html>
