<?php
    require_once ('../db/db_helper.php');
    $id='';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    $sql = 'select * from category where id = '.$id;
    $category = executeSingleResult($sql);
    if($category != null){
        $name = $category['name'];
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/icons/favicon.png"/>
        <title>Category Page -<?=$name?></title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/lightbox.min.css">
        <link href="../css/responsive.css" rel="stylesheet">
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="../js/instafeed.min.js" type="text/javascript"></script>
        <script src="../js/custom.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="page">

            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <a href="../index.php"><span>BDS</span>Long</a>
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
                                            <li><a data-hover="????ng Nh???p" href="news.html"><span>????ng Nh???p</span></a></li>
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
            <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center"><?=$name?></h2>
            </div>
            <div class="panel-body">
                <div class="row">
<?php
$sql = 'select product.id, product.title, product.price, product.thumbnail, product.updated_at, category.name category_name from product left join category on product.id_category = category.id where category.id='.$id;
$productList = executeResult($sql);
foreach ($productList as $item) {
            echo    '<div class="col-lg-3">
                    <a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%"></a>
                    <a href="detail.php?id='.$item['id'].'"><p>'.$item['title'].'</p></a>
                    <button type="button" class="book-now-btn"><p style="color:white; font-weight: bold">'.$item['price'].'</p>
                    
                </div>';
                
}
?>

            </div>
            </div>
        </div>
    </div>
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
                                    <li> <a href="news.html">????ng nh???p</a></li>
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
