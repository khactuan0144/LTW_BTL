<?php
/**
*Session Class
**/
class Session{
  
 public static function init(){
  if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
            session_start();
        }
    } else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
 }

/* set Session key */
 public static function set($key, $val){
    $_SESSION[$key] = $val;
 }

 /* get Session key */
 public static function get($key){
    if (isset($_SESSION[$key])) {
     return $_SESSION[$key];
    } else {
     return false;
    }
 }

 /* kiểm tra phiên làm việc */
 public static function checkSession(){
    self::init();
    if (self::get("adminlogin")== false) {
     self::destroy();
     header("Location:login.php");
    }
 }

 /* Kiểm tra đăng nhập */
 public static function checkLogin(){
    self::init();
    if (self::get("adminlogin")== true) {
     header("Location:index.php");
    }
 }

 /* Xóa phiên làm việc */
 public static function destroy(){
  session_destroy();
  header("Location:login.php");
 }
}
?>

