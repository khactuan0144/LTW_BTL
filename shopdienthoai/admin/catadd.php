<?php 
    include 'inc/header.php';
    include 'inc/sidebar.php';
    include '../classes/category.php';

	$cat = new category();
//kiểm tra nếu đúng phương thức thì gọi biến lấy data
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     	$catName = $_POST['catName'];
     	
     	$insert_cat = $cat->insert_category($catName);
     	
	}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Thêm danh mục sản phẩm mới</h2>
                <?php
                    if(isset($insert_cat)){
                        echo $insert_cat;
                    }
                ?>
               <div class="block copyblock"> 
                 <form action="catadd.php" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="catName" placeholder="Nhập tên danh mục..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Lưu lại" />
                                <button class="btn_main"><a href="../admin/catlist.php">Xem danh mục</a></button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>