<?php
    include '../lib/database.php';
    include '../helpers/format.php';
?>
<?php
    class category{
        
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_category($catName)
        {
            //kiểm tra các kí tự nhập vào có hợp lệ không
            $catName = $this->fm->validation($catName);
            
            //xử lí các kí tự đặc biệt có thể gây lỗi khi truy vấn
            $catName = mysqli_real_escape_string($this->db->link,$catName);

            if(empty($catName)){
                $alert = " <span class='error'>Vui lòng không để trống category</span>";
                return $alert;
            }else{
                $query = "INSERT INTO tbl_category(catName) VALUE ('$catName')";
                $result = $this->db->insert($query);
                if($result){
                    $alert = "<span class='success'>Thêm thành công</span>";
                    return $alert;
                }else{
                    $alert = "<span class='error'>Thêm thất bại</span>";
                    return $alert;
                }
            }
        }
        public function show_category()
        {
            $query = "SELECT * FROM tbl_category ORDER BY catId DESC";
                $result = $this->db->insert($query);
                return $result;
        }
    }
?>
