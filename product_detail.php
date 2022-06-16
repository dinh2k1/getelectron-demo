
<!--phần chi tiết sản phẩm và giỏ hàng-->

<?php require_once('product_c/product_c.php');?>
<?php require_once('comment_c/comment_c.php');?>
<?php 
    $product_class = new product_controller();

    $product = $product_class->get_product();    

  $comment_class = new comment_controller();

    $comment = $comment_class->update_comment();
    
    $rs = $comment_class->confirm_comment();

    $post = $comment_class->post;
    
    if(isset($rs['error'])){
        $error = $rs['error'];
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Get Electron | Shop điện tử</title>

    <!-- HEAD -->
    <?php include('module/head.php')?>
    <!-- END HEAD -->
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
<link rel="stylesheet" href="3.css">
</head>

<body>

    <div class="web-warper">
        
        <!-- HEAD -->
        <?php include('module/header.php')?>
        <!-- END HEAD -->

        

        <div class="container">
            <div class="list-warper product-detail">
                
                <div class="row title">
                    <div class="col-md-12">
                        <h1 class="mb-0 px-2"><?=$product['Product_Name']?></h1>
                    </div>
                </div>
                
                <div class="row my-3">
                    <div class="col-md-7">
                        <img src="upload/<?=$product['Product_Thumbnail']?>" class="d-block mx-auto"  alt="<?=$product['Product_Name']?>">
                    </div>
					
					
						
                    <div class="col-md-4">
                        <h2>Giới thiệu</h2>
						<p><?=$product['Product_Desc']?></p>
						 
                        <p class="p-price"><?=number_format($product['Product_Price'],0,',','.')?><u>đ</u></p>
                      
						
        <form action="cart.php" method="post">
                            <div class="row my-3">
                                <div class="col-md-6 ">
                                    <div class="input-group">
                                        
                                        <input type="hidden" name="id" class="form-control" value="<?=$product['Product_ID']?>">
										
                                        <input type="number" name="quanlity" class="form-control" placeholder="" value="1"name="quantity" min="0" max="<?=$product['Product_quantity']?>">

										
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                              <button type="submit" class="btn btn-primary">  <i class="fas fa-cart-plus"></i>Đặt hàng</button>
                                </div>
								
                            </div>
                        </form>
						
                    </div>
                </div>
				
                      <p><b><div style="color:dodgerblue">Trạng thái:</div> <?=$product['Product_mount']?></b></p></br>
			<p><b><div style="color:dodgerblue">Số lượng:</div> <?=$product['Product_quantity']?></b></p></br>
		
                <div class="row px-2">
                    <div class="col-md-12">
                        <h2>Thông tin của sản phẩm</h2>
                        <p><?=$product['Product_Content']?></p>
                    </div>
                </div>
		
		 <div class="form-group">
			  <form action="" method=echo"post">
				  
				  
				  
				  
				  
				  
				  
				<small class="d-block text-red"><?php if(isset($error['main'])) echo $error['main']?></small>
                            
				  
				   <div class="form-group">
                                <label for="tensp">Tên sản phẩm</label>
                                <small class="d-block text-red"><?php if(isset($error['tensp'])) echo $error['tensp']?></small>
					        <input type="text" class="form-control" name="tensp" placeholder="tên sản phẩm" id="tensp" value="<?=$post['tensp']?>">
                            </div>
				  
				  
				  
				  
				  
				  <div class="form-group">
                                <label for="tenkhach">Họ Tên</label>
                                <small class="d-block text-red"><?php if(isset($error['tenkhach'])) echo $error['tenkhach']?></small>
					        <input type="text" class="form-control" name="tenkhach" placeholder="Nhập tên khách hàng" id="tenkhach" value="<?=$post['tenkhach']?>">
                            </div>
				  
				  
				  <div class="form-group">
                                <label for="dienthoai">Điện thoại</label>
                                <small class="d-block text-red"><?php if(isset($error['dienthoai'])) echo $error['dienthoai']?></small>
                                <input type="text" class="form-control" name="dienthoai" placeholder="Nhập điện thoại" id="dienthoai"value="<?=$post['dienthoai']?>">
                            </div>
				  
				  
				  
				  
				  
				  <div class="form-group">
                                <label for="email">Email</label>
                                <small class="d-block text-red"><?php if(isset($error['email'])) echo $error['email']?></small>
                                <input type="text" class="form-control" name="email" placeholder="Nhập email" id="email"value="<?=$post['email']?>">
				  </div></br>
							
                            
         <tr>
		<td>Giới tính</td><td class="input">
				<select name="gioitinh">
					<option value="">-Chọn giới tính-</option>
					<option value="nam">Nam</option>
					<option value="nữ">Nữ</option>
				</select>
		</td>
				  </tr></br></br></br>
                           
				  
				  
				  
                                <label for="com_desc">Bình luận</label>
								 <small class="d-block text-red"><?php if(isset($error['com_desc'])) echo $error['com_desc']?></small>
                                <textarea name="com_desc" class="form-control" placeholder="Bình luận" id="com_desc" rows="3" value=" <?=$post['com_desc']?>"></textarea>
	</div></br>
                         


<div align="center" >
<div class="cmt-body" id="Div2" data-load="0">
                            <div id="cmt_postnew_div">
                                <div class="frm-comment-rating" style="margin-bottom: 10px;">
                                    <table style="width: 45%">
                                        <tr style="padding-bottom: 20px;">
                                            <td class="c2" style="width: 30%">
                                                <input type="text" id="hid-Star" hidden />
                                            <div align="center">    <label style="margin-top: 7px !important; margin-right: 20px; text-align: center; float: center; font-size: 14px; font-weight: normal; color: #898989;">Mời bạn đánh giá</label></div></br>
                                               
                                                    <!--<input type="radio" id="star5" name="danhgia" value="5" /><label for="star5" title="Tuyệt vời quá">5 stars</label>-->
													
													 <div align="center"> 
													<input class="star star-5" id="star-5" type="radio" name="danhgia" value="5"/>
                                                            <label class="star star-5" for="star-5"></label>
													
												<input class="star star-4" id="star-4" type="radio" name="danhgia" value="4"/>
                                                 <label class="star star-4" for="star-4"></label>
										
    											<input class="star star-3" id="star-3" type="radio" name="danhgia" value="3"/>
    											<label class="star star-3" for="star-3"></label>
										
   												 <input class="star star-2" id="star-2" type="radio" name="danhgia" value="2"/>
   												 <label class="star star-2" for="star-2"></label>
										
   												 <input class="star star-1" id="star-1" type="radio" name="danhgia" value="1"/>
   												 <label class="star star-1" for="star-1"></label>	
													
										</div>
                                            
                                            </td>
                                           
                                        </tr>
                                       
                                    </table>
                                </div>
                            </div>
</div>
                            <div class="offset-md-0 col-md-5 text-center">
                                <button type="submit" class="btn btn-dark btn-outline-hover-dark" name="submit" value="sent">Gửi</button>
								<button type="reset" class="btn btn-dark btn-outline-hover-dark">Hủy</button>
                         </div></br>

<script src="https://sp.zalo.me/plugins/sdk.js"></script>

<div class="zalo-comment-plugin" data-appid="4492955785576479983" data-size="5" data-href=""></div>




                         <h5><a href="dkcomment.php">Quy định đăng bình luận </a></h5></br></br>


			 <?php
         $com_desc= $_REQUEST['com_desc'];
	      $tenkhach= $_REQUEST['tenkhach'];
	$dienthoai= $_REQUEST['dienthoai'];
	$email= $_REQUEST['email'];
	$gioitinh= $_REQUEST['gioitinh'];
	$tensp= $_REQUEST['tensp'];
   
	$danhgia= $_REQUEST['danhgia'];
	
	
	
	$link=mysqli_connect('localhost', 'root', '', 'qlbh_electron');
	$query="INSERT INTO comment (com_desc, tenkhach, dienthoai, email, gioitinh, tensp, danhgia )VALUES ('$com_desc', '$tenkhach', '$dienthoai', '$email', '$gioitinh', '$tensp', '$danhgia'  ) ";
	mysqli_query($link,$query);
	mysqli_close($link);
	
?>
                        </form>
                    </div>
	
	
            </div>

        </div>

        <?php include('module/footer.php') ?>

    </div>

    <!-- template scripts -->
	<!--phần só lượng giỏ hàng-->
    <?php include('module/js.php') ?> 
	
<!--khi phần giảm sản phẩm của giỏ hàng thì sẽ trở về giá trị 1-->
    <script>
        function minus_number(){
            var val = parseInt($("input[name=quanlity]").val());

            if(val>1){
                $("input[name=quanlity]").val(val-1);    
            }
        }

        function plus_number(){
            var val = parseInt($("input[name=quanlity]").val());
            $("input[name=quanlity]").val(val+1);
			
        } 
    </script>
</body>

</html>