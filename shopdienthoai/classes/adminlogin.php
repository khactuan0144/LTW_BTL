<?php
include '../lib/session.php';
//gọi hàm trong lib/session để check nếu thỏa mãn vào trang index admin
Session::checkLogin();
include '../lib/database.php';
include '../helpers/format.php';

?>
<?php
    class adminLogin{
        
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function admin_login($adminUser,$adminPass){
            //kiểm tra các kí tự nhập vào có hợp lệ không
            $adminUser = $this->fm->validation($adminUser);
            $adminPass = $this->fm->validation($adminPass);

            //xử lí các kí tự đặc biệt có thể gây lỗi khi truy vấn
            $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link,$adminPass);

            if(empty($adminUser)||empty($adminPass)){
                $alert = "Vui lòng không để trống User và Pass";
                $result = $alert;
            }else{
                $query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1";
                $result =$this->db->select($query);
                
                if($result !=false){
                    $value = $result->fetch_assoc();
                    session::set('adminlogin',true);
                    session::set('adminId',$value['adminId']);
                    session::set('adminUser',$value['adminUser']);
                    session::set('adminName',$value['adminName']);
                    header('Location:index.php');

                }else{
                    $alert = "Thông tin đăng nhập không trùng khớp";
                    return $alert;
                }
            }
        }
    }
?>
