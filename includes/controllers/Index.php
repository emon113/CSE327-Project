<?php 
class Index extends Controller{

    public static function logged(){

        if(!empty($_POST['uname']) && !empty($_POST['pass'])){
            $username = $_POST['uname'];
            $password = $_POST['pass'];
            print_r($username."  ".$password."  In Auth");
            $result = self::query("select emp_id, username, password, job from credentials where username = '$username' and password = '$password' limit 1");
            foreach($result as $item){
                $eid = $item[0];
            }
            if(!empty($result)){
                
                header('Location: employees?eid='.$eid.'');
            }
            else{
                echo "<script>
                alert('Wrong Credentials!!!');
                window.location.href= 'Index.php';
                </script>";
            }
        }

    }
}

?>