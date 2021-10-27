<?php 
	include 'inc/header.php';
	include 'inc/sidebar.php';
	
	include '../classes/category.php';

?>
<?php 
	$cat = new category();
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Danh sách danh mục</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Số thứ tự</th>
							<th>Tên danh mục</th>
							<th>Lựa chọn</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$show_cat = $cat->show_category();
						if($show_cat){
							$i=0;
							while($result = $show_cat->fetch_assoc()){
								$i++;
							
					?>
						<tr class="odd gradeX">
							<td><?= $i; ?></td>
							<td><?= $result['catName']; ?></td>
							<td><a href="">Sửa</a> || <a href="">Xóa</a></td>
						</tr>
						<?php 
							}
						}?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

