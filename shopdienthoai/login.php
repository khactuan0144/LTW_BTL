<?php 
	include'inc/header.php';
	
?>

<div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Đã có tài khoản</h3>
        	<p>Đăng nhập bằng cách nhập thông tin bên dưới</p>
        	<form action="hello" method="get" id="member">
                	<input name="Domain" type="text" value="Username" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
                    <input name="Domain" type="password" value="Password" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                 </form>
                 <p class="note">Nếu bạn quên mật khẩu hãy nhấn vào <a href="#">đây</a></p>
                    <div class="buttons"><div><button class="grey">Đăng nhập</button></div></div>
                    </div>
    	<div class="register_account">
    		<h3>Đăng ký tài khoản</h3>
    		<form>
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên';}" >
							</div>
							
							<div>
							   <input type="text" value="City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tỉnh/Thành phố';}">
							</div>
							
							<div>
								<input type="text" value="Zip-Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mã';}">
							</div>
							<div>
								<input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Địa chỉ E-Mail';}">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Địa chỉ';}">
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Chọn quốc gia</option>         
							<option value="AF">Afghanistan</option>
							<option value="AL">Albania</option>
							<option value="DZ">Algeria</option>
							<option value="AR">Argentina</option>
							<option value="AM">Armenia</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australia</option>
							<option value="AT">Austria</option>
							<option value="AZ">Azerbaijan</option>
							<option value="BS">Bahamas</option>
							<option value="BH">Bahrain</option>
							<option value="BD">Bangladesh</option>

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
		          </div>
				  
				  <div>
					<input type="text" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey">Tạo tài khoản</button></div></div>
		    <p class="terms">Bằng các nhấn vào "Tạo tài khoản" bạn đã chấp nhận <a href="#">Điều khoản &amp; Điều kiện</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 <?php
include'inc/footer.php';
?>