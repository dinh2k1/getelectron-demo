<?php require_once('contact_c/contact_c.php');?>

<?php 

    $contact_class = new contact_controller();

    $contact = $contact_class->update_contact();
    
    $rs = $contact_class->confirm_contact();

    $post = $contact_class->post;
    
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
</head>

<body>

    <div class="web-warper">
        
        <!-- HEAD -->
        <?php include('module/header.php')?>
        <!-- END HEAD -->


        <div class="container"> <!--chỉnh phần thanh toán-->
            <div class="list-warper">
                <h2 class="list-title">Liên Hệ</h2>
                <div class="row cart p-2">
                    
                    <div class="offset-md-2 col-md-8">

                        <form action="" method=echo"post">
                           
                            
                            <h3>Thông tin khách hàng</h3>
                            <small class="d-block text-red"><?php if(isset($error['main'])) echo $error['main']?></small>
                            <div class="form-group">
                                <label for="Contact_Name">Họ Tên</label>
                                <small class="d-block text-red"><?php if(isset($error['Contact_Name'])) echo $error['Contact_Name']?></small>
					        <input type="text" class="form-control" name="Contact_Name" placeholder="Nhập tên" id="Contact_Name" value="<?=$post['Contact_Name']?>">
                            </div>

                            <div class="form-group">
                                <label for="Contact_Subject">Tiêu đề</label>
                                <small class="d-block text-red"><?php if(isset($error['Contact_Subject'])) echo $error['Contact_Subject']?></small>
                                <input type="text" class="form-control" name="Contact_Subject" placeholder="nhập tiêu đề" id="Contact_Subject" value="<?=$post['Contact_Subject']?>">
                            </div>

							
							 <div class="form-group">
                                <label for="Contact_Email">Email</label>
                                <small class="d-block text-red"><?php if(isset($error['Contact_Email'])) echo $error['Contact_Email']?></small>
                                <input type="text" class="form-control" name="Contact_Email" placeholder="Nhập email" id="Contact_Email"value="<?=$post['Contact_Email']?>">
                            </div>
							
                            <div class="form-group">
                                <label for="Contact_Phone">Điện thoại</label>
                                <small class="d-block text-red"><?php if(isset($error['Contact_Phone'])) echo $error['Contact_Phone']?></small>
                                <input type="text" class="form-control" name="Contact_Phone" placeholder="Nhập điện thoại" id="Contact_Phone"value="<?=$post['Contact_Phone']?>">
                            </div>

                           

                             <div class="form-group">
                                <label for="Contact_Message">Lời nhắn</label>
								 <small class="d-block text-red"><?php if(isset($error['Contact_Message'])) echo $error['Contact_Message']?></small>
                                <textarea name="Contact_Message" class="form-control" placeholder="Lời nhắn" id="Contact_Message" rows="5" value=" <?=$post['Contact_Message']?>"></textarea>
                            </div>
                         
                            <div class="offset-md-2 col-md-8 text-center">
                                <button type="submit" class="finaltotal" name="submit" value="sent">Gửi</button>
								
                            </div>
							 <div class="offset-md-2 col-md-8 text-center">
                                <button type="submit" class="finaltotal" name="submit" value="reset">hủy</button>
								
                            </div>
                        </form>
                    </div>

                    
                </div>
            </div>

        </div>
		
<?php
         $Contact_Name= $_REQUEST['Contact_Name'];
	     $Contact_Subject= $_REQUEST['Contact_Subject'];
	     $Contact_Email= $_REQUEST['Contact_Email'];
	     $Contact_Phone= $_REQUEST['Contact_Phone'];
	     $Contact_Message= $_REQUEST['Contact_Message'];
	$link=mysqli_connect('localhost', 'root', '', 'qlbh_electron');
	$query="INSERT INTO contact (Contact_Name, Contact_Subject, Contact_Email, Contact_Phone, Contact_Message )VALUES ('$Contact_Name', '$Contact_Subject', '$Contact_Email', '$Contact_Phone', '$Contact_Message') ";
	mysqli_query($link,$query);
	mysqli_close($link);
	
?>
		
        <?php include('module/footer.php') ?>

    </div>

    <!-- template scripts -->
    <?php include('module/js.php') ?>

   
</body>

</html>