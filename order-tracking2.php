<!DOCTYPE html>
<?php include_once('database/connect.php')?>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart - Order Tracking page</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font.awesome.css" />
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/venobox.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="main-wrapper">
		<header>
		<?php include('include/header.php')?>
		<?php include('include/mobile.php')?>
		</header>
		<!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
		<?php include('include/cart.php')?>
		<?php include('include/wish-list.php')?>
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Order Tracking</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Order Tracking</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!--order-tracking area start-->
		
<?php 
	if(isset($_REQUEST['xem-ct-dh'])){
		$id_dh = $_REQUEST['id-donhang'];?>
		
			<div class="cart-main-area pt-100px pb-100px">
            <div class="container-admin">
                <h3 class="cart-page-title">????n h??ng</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="order-tracking.php" method="get">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>????n h??ng ID</th>
                                            <th>T??n</th>
                                            <th>S??? ??i???n tho???i</th>
                                            <th>Email</th>
                                            <th>?????a ch???</th>
											<th>T???ng gi?? tr???</th>
											<th>M?? gi???m</th>
                                            <th>Ng??y th??ng</th>
											<th>T??nh tr???ng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $row_dh = mysqli_fetch_array(mysqli_query($con,'SELECT * FROM `tbl_donhang` WHERE donhang_id = '.$id_dh.'')) ;?>
										<tr>
											<td><?php echo $row_dh['donhang_id']?></td>
											<input name="id-donhang" value="<?php echo $row_dh['donhang_id']?>" style="display: none">
											<td><?php echo $row_dh['name']?></td>
											<td><?php echo $row_dh['phone']?></td>
											<td><?php echo $row_dh['email']?></td>
											<td><?php echo $row_dh['address']?></td>
											<td><?php echo currency_format( $row_dh['tonggiatri_donhang'])?></td>
											<td><?php echo $row_dh['magiamgia']?></td>
											<td><?php echo $row_dh['ngaythang']?></td>
											<td><?php echo $row_dh['tinhtrang']?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
		<div class="cart-main-area pb-100px">
            <div class="container-admin">
                <h3 class="cart-page-title">S???n ph???m trong ????n h??ng</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="order-tracking.php" method="get">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
											<th></th>
                                            <th>????n h??ng ID</th>
                                            <th>T??n</th>
                                            <th>Gi??</th>
                                            <th>S??? l?????ng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
	$sql_row_ct_dh = mysqli_query($con,'SELECT * FROM `tbl_ct_donhang` a  JOIN tbl_sanpham b on a.sanpham_id = b.sanpham_id WHERE donhang_id = '.$id_dh.'');
    	while($row_ct_dh = mysqli_fetch_array($sql_row_ct_dh)) {
?>
			

										<tr>
											<td class="product-thumbnail">
               									 <a href="single-product.php?id=<?php echo $row_ct_dh['sanpham_id'] ?>"><img class="img-responsive ml-15px" 
													 src="assets/images/product-image/<?php echo $row_ct_dh['sanpham_image'] ?>" alt="" /></a>
            								</td>
											<td><?php echo $row_ct_dh['donhang_id']?></td>
											<input name="id-donhang" value="<?php echo $row_ct_dh['donhang_id']?>" style="display: none">
											<td><?php echo $row_ct_dh['sanpham_name']?></td>
											<td><?php echo $row_ct_dh['gia']?></td>
											<td><?php echo $row_ct_dh['soluong']?></td>
										</tr>
<?php }?>
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
<?php 
	// N???u nh???n n??t t??m ????n th??
	}elseif(isset($_REQUEST['tracking'])){
		
    // L???y th??ng tin l???c
    $filter  = array(
        'order-id'     => isset($_GET['order-id']) ? ($_GET['order-id']) : false,
        'phone-tracking'     => isset($_GET['phone-tracking']) ? ($_GET['phone-tracking']) : false,
    );
        // Bi???n l??u tr??? l???c
    $where = array();

    // N???u c?? ch???n l???c th?? th??m ??i???u ki???n v??o m???ng
    if ($filter['order-id']){
        $where[] = "donhang_id = '{$filter['order-id']}'";
    }

    if ($filter['phone-tracking']){
        $where[] = "phone = '{$filter['phone-tracking']}'";
    }
        // C??u truy v???n cu???i c??ng
    $sql_where = '';
    if ($where){
        $sql_where .= ' WHERE '.implode(' AND ', $where);
    }	

    if(!empty($sql_where)){	

      $sql_donhang_checking = mysqli_query($con,'SELECT * FROM `tbl_donhang`  '.$sql_where.'');

      $count_donhang = mysqli_num_rows($sql_donhang_checking);	
		
      if($count_donhang > 0 ){ ?>
		<!--N???u t??m th???y ????n h??ng th?? xu???t-->
		<div class="cart-main-area pt-100px pb-100px">
            <div class="container-admin">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="order-tracking.php" method="get">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>????n h??ng ID</th>
                                            <th>T??n</th>
                                            <th>S??? ??i???n tho???i</th>
                                            <th>Email</th>
                                            <th>?????a ch???</th>
											<th>T???ng gi?? tr???</th>
											<th>M?? gi???m</th>
                                            <th>Ng??y th??ng</th>
											<th>T??nh tr???ng</th>
											<th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										
											

<?php while($row_donhang_checking = mysqli_fetch_array($sql_donhang_checking)) {?>
										<tr>
											<td><?php echo $row_donhang_checking['donhang_id']?></td>
											<input name="id-donhang" value="<?php echo $row_donhang_checking['donhang_id']?>" style="display: none">
											<td><?php echo $row_donhang_checking['name']?></td>
											<td><?php echo $row_donhang_checking['phone']?></td>
											<td><?php echo $row_donhang_checking['email']?></td>
											<td><?php echo $row_donhang_checking['address']?></td>
											<td><?php echo currency_format($row_donhang_checking['tonggiatri_donhang'])?></td>
											<td><?php echo $row_donhang_checking['magiamgia']?></td>
											<td><?php echo $row_donhang_checking['ngaythang']?></td>
											<td><?php echo $row_donhang_checking['tinhtrang']?></td>
											<td><button name="xem-ct-dh">Xem</button></td>
										</tr>
<?php } ?>
										
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>									
		<?php }else{ ?>
            <div class="thank-you-area">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-8">
                            <div class="inner_complated">
                                <div class="img_cmpted"><img src="assets/images/404/error-icon-search-icon.png" alt="" width="20%"></div>
                                <h2 class="dsc_cmpted">Kh??ng t??m th???y k???t qu???<br></h2>
                                <div class="btn_cmpted">
                                    <a href="order-tracking.php" class="shop-btn" title="Go To Shop">Quay l???i trang tr?????c</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
		<?php } ?>
 
	<?php }else{ ?>
		<div class="thank-you-area">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="inner_complated">
                            <div class="img_cmpted"><img src="assets/images/404/error-icon-search-icon.png" alt="" width="20%"></div>
                            <h2 class="dsc_cmpted">Kh??ng t??m th???y k???t qu???<br></h2>
                            <div class="btn_cmpted">
                                <a href="order-tracking.php" class="shop-btn" title="Go To Shop">Quay l???i trang tr?????c</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
	<?php } ?>
		
<?php //n???u ch??a b???m t??m ????n	
	}else{ ?>
		
		
        <div class="pt-100px pb-100px">
            <div class="container">
                <div class="order-tracking">
                    <p>Tra c???u ????n h??ng c???a b???n.<br> B???n c?? th??? t??m th??ng qua ????n h??ng id ho???c s??? ??i???n tho???i <br> ( 1 trong 2 ho???c c??? 2 )</p>
                    <form action="" method="get">
                        <div class="row mb-n-30px">
                            <div class="col-12 mb-30px">
                                <label for="orderID">????n h??ng ID</label>
                                <input id="orderID" type="text" placeholder="Order ID" name="order-id">
                            </div>
                            <div class="col-12 mb-30px">
                                <label for="billingEmail">S??? ??i???n tho???i</label>
                                <input type="tel" name="phone-tracking" placeholder="S??? ??i???n tho???i" pattern="[0]{1}[0-9]{9}" title="?????nh d???ng s??? ??i???n tho???i ch??a ????ng, VD: 0123456789" />
                            </div>
                            <div class="col-12 text-center mb-30px">
                                <button class="btn btn-dark btn-outline-hover-dark" name="tracking">Tra c???u</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		
<?php 	} ?>
        <!--order-tracking Policy area end-->
        <!-- Footer Area Start -->
		<?php include('include/footer.php')?>
        <!-- Footer Area End -->
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/scrollUp.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>
</body>

</html>