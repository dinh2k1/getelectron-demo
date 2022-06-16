<?php include('login.php')?>
<?php include('db.php')?>
<?php
 
session_start();

if(isset($_POST['login']))
{
    $tennd = $_POST['tennd'];
    $password = MD5($_POST['pass']);
    $sql_check = mysql_query("select * from nguoidung where tennd = '$tennd'");
    $dem = mysql_num_rows($sql_check);
    if($dem == 0)
    {
        $_SESSION['thongbaolo'] = "Tài khoản không tồn tại";
		echo 
			"<script language='javascript'>
			alert('Tài khoản không tồn tại');
			
			</script>";
    }
    else
    {
        $sql_check2 = mysql_query("select * from nguoidung where tennd = '$tennd' and password = '$password'");
        $dem2 = mysql_num_rows($sql_check2);
        if($dem2 == 0)
			echo 
			"<script language='javascript'>
			alert('Mật khẩu đăng nhập không đúng');
			
			</script>";
        else
        {
            $row = mysql_fetch_array($sql_check2);
            
                $_SESSION['tennd'] = $tennd;
				
				$_SESSION['idnd'] = $row['idnd'];
          
                
                    echo "<script language='javascript'>
						  alert('Đăng nhập thành công');
						 
						  </script>";
                
            }
        }
    }
?>