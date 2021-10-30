<?php 
    include 'inc/header.php';
    include 'inc/sidebar.php';
    include '../classes/category.php';

    
    if(!isset($_GET['catid']) || $_GET['catid'] == NULL){
       echo "<script>window.location = 'catlist.php';</script>";
    }else{
        $id = $_GET['catid'];
    }

    $cat = new category();

    //kiểm tra nếu đúng phương thức thì gọi biến lấy data
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $catName = $_POST['catName'];
        $updateCatName = $cat->updateCatgory($id,$catName);
        
   }

       
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Sửa danh mục sản phẩm</h2>
                <div class="block copyblock">
                <?php
                    if(isset($updateCatName)){
                        echo $updateCatName;
                    }
                ?>
                <?php
                    $getCatName = $cat->getCatById($id);
                    if($getCatName){
                        while($result = $getCatName->fetch_assoc()){
     
                ?>
                   
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                
                                <input type="text" value="<?= $result['catName']; ?>" name="catName" class="medium" />
                                
                            </td>
                        </tr>
                

						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Lưu lại" />
                                
                                <button class="btn_main"><a href="../admin/catlist.php">Quay lại</a></button>
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>