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
                                <div class="text-right"><button type="button" class="book-now-btn">G???i Ngay</button></div>
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
                                            <li><a  data-hover="Xem Danh M???c" class="active"><span>Xem Danh M???c</span></a></li>

                                            <li><a data-hover="Xem S???n Ph???m"  href="about.html"><span>Xem S???n Ph???m</span></a></li>
                                            <li><a data-hover="Tin T???c" href="news.html"><span>Tin T???c</span></a></li>
                                <ul class="nav navbar-nav navbar-right">
                                <?php
                                    if(isset($user['username'])){
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['username']; ?><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                            <li><a href="dangnhap/logout.php">????ng xu???t</a></li>
                                    </ul>
                                </li>
                                <?php } else{ ?>
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">????ng nh???p<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="dangnhap/register.php">????ng k??</a></li>
                                        <li><a href="dangnhap/login.php">????ng nh???p</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                            </ul>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">G???i Ngay: 0326985723</button></div>
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
                            <h1>BDSLong<br> B???t ?????ng s???n</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="images/banner2.png" style="width:100%; height: 500px" alt="Second slide">
                        <div class="carousel-caption">
                            <h1>BDSLong<br> B???t ?????ng s???n</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="images/banner3.png" style="width:100%; height: 500px" alt="Third slide">
                        <div class="carousel-caption">
                            <h1>BDSLong<br> B???t ?????ng s???n</h1>
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
                                    <h1>h??y ?????n v?? ch???n cho m??nh m???t c??n nh?? ph?? h???p</h1>
                                    <h4>B???t ?????ng s???n Long h??n h???nh ????n ti???p</h4>
                                    <button type="button" class="btn btn-default">Ch???n ?????a ??i???m</button>
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
                                    <h3><a href="frontend/detail.php?id=1">nh?? ??? h?? n???i</a></h3>
                                    <p>GIA ????NH KH??NG C?? NHU C???U S??? D???NG C???N B??N G???P SHOPHOUSE, LI???N K??? V?? BI???T TH??? THE MANOR CENTRAL PARK</p>
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
                                    <h3><a href="frontend/detail.php?id=5">nh?? ??? ???? n???ng</a></h3>
                                    <p>GIA ????NH KH??NG C?? NHU C???U S??? D???NG C???N B??N G???P SHOPHOUSE, LI???N K??? V?? BI???T TH??? THE MANOR CENTRAL PARK</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-desc-side">
                                    <h3><a href="frontend/detail.php?id=13">nh?? ??? TP.HCM</a></h3>
                                    <p>GIA ????NH KH??NG C?? NHU C???U S??? D???NG C???N B??N G???P SHOPHOUSE, LI???N K??? V?? BI???T TH??? THE MANOR CENTRAL PARK</p>
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
                                    <h3><a href="frontend/detail.php?id=14">nh?? ??? ch??u ?????c an giang</a></h3>
                                    <p>GIA ????NH KH??NG C?? NHU C???U S??? D???NG C???N B??N G???P SHOPHOUSE, LI???N K??? V?? BI???T TH??? THE MANOR CENTRAL PARK</p>
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
                                        <p>B???t ?????ng s???n kh??ng th??? m???t ??i ho???c b??? ????nh c???p v?? c??ng kh??ng th??? t??? n?? c?? th??? di chuy???n.V???i nh???ng ?????c ??i???m c???a n??, th?? v???i vi???c chi tr??? ?????y ????? ????? s??? h???u n??, ???????c qu???n l?? c???n th???n, th?? ???? s??? l?? k??nh ?????u t?? an to??n nh???t tr??n th??? gi???i.</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client1.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Franklin D. Roosevelt</h3>
                                                <h5 class="blog-rev"> T???ng th???ng Hoa K??? 2</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>Trong kinh doanh b???t ?????ng s???n, b???n c?? ???????c nhi???u ki???n th???c h??n v?? b???n bi???t v?? hi???u th??m v??? con ng?????i, c??c v???n ????? c???ng ?????ng, t??m hi???u th??m v??? cu???c s???ng, ngo??i ra hi???u ???????c s??? t??c ?????ng c???a ch??nh ph???,  h??n b???t k??? ng??nh ngh??? n??o  kh??c</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client2.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Johnny Isakson</h3>
                                                <h5 class="blog-rev">Th?????ng ngh??? s?? M???</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>Nh???ng ng?????i gi??u c?? h??? kh??ng l??m vi???c v??o th???i gian ngh??? ng??i, h??? ????? cho ch??nh nh???ng b???t ?????ng s???n l??m vi???c v?? l??m h??? th??m gi??u c??</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client3.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">John Stuart Mill</h3>
                                                <h5 class="blog-rev">Nh?? kinh t??? ch??nh tr??? h???c</h5>
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
                                    <li class="active"><a>Trang ch???</a></li>
                                    <li><a href="about.html">Xem Danh M???c</a></li>
                                    <li><a href="rooms.html">Xem Nh??</a></li>
                                    <li> <a href="news.html">Tin T???c</a></li>
                                    <li> <a href="contact.html">Li??n H???</a></li>
                                    <li> <a href="dangnhap/login.php">????ng nh???p</a></li>
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
