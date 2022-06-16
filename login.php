<!-- HEAD -->
    <?php include('module/head.php')?>
<!-- END HEAD -->

<!-- HEAD -->
        <?php include('module/header.php')?>
        <!-- END HEAD -->

<!-- SLIDER -->
        <?php include('module/slider.php')?>

 

<div align="center">
<form action="dangnhap.php" method="post" name="frm" onsubmit="return dangnhap()">
	<div class="dangnhap">
		<h2>Đăng nhập</h2>
		<table>
		
		<tr>
		<td>Nhập tên người dùng<font color="red">*</font> </td><td class="input"><input type="text" name="tennd" size="40"></td>
		</tr>
		<tr>
		<td>Mật khẩu<font color="red">*</font> </td><td class="input"><input type="password" name="pass" size="40" ></td>
		</tr>
		
		<tr>
			<td colspan=2 class="btndangnhap">
				<button type="submit" name="submit">Đăng nhập</button>
				<button type="reset">Hủy</button>
			</td>
		</tr>
		</table>
	</div>
</form>

<script language="javascript">
 	function  dangnhap()
	{
	    if(frm.tennd.value=="")
		{
			alert("Bạn chưa nhập tên tài khoản. Vui lòng kiểm tra lại");
			frm.tennd.focus();
			return false;	
		}
		
		}
		if(frm.pass.value=="")
		{
			alert("Bạn chưa nhập password");	
			frm.pass.focus();
			return false;
		}
		
	}
 </script>
</div>
</div>


	 <?php include('module/footer.php') ?>
	
	<!-- template scripts -->
    <?php include('module/js.php') ?>