<?php
include 'inc/header.php';
include 'inc/slider.php';
?>


<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Điện thoại nổi bật nhất</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $product_feathered = $product->getproduct_feathered();
            if ($product_feathered) {
                while ($result = $product_feathered->fetch_assoc()) {
            ?>
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
                        <h2><?php echo $result['productName'] ?></h2>
                        <p><?php echo $fm->textShorten($result['product_desc'],20) ?></p>
                        <p><span class="price"><?php echo $result['price']." VNĐ" ?></span></p>
                        <div class="button"><span><a href="details.php?proId=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="content_bottom">
            <div class="heading">
                <h3>New Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
        <?php
            $productNew = $product->getproduct_new();
            if ($productNew) {
                while ($resultNew = $productNew->fetch_assoc()) {
            ?>
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="details.php"><img src="admin/uploads/<?php echo $resultNew['image'] ?>" alt="" /></a>
                        <h2><?php echo $resultNew['productName'] ?></h2>
                        <p><?php echo $fm->textShorten($resultNew['product_desc'],20) ?></p>
                        <p><span class="price"><?php echo $resultNew['price']." VNĐ" ?></span></p>
                        <div class="button"><span><a href="details.php?proId=<?php echo $resultNew['productId'] ?>" class="details">Chi tiết</a></span></div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
include 'inc/footer.php';
?>