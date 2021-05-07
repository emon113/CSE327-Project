<?php 
class Auth extends Controller{
    public static function logged(){

        $username1 = $_POST['uname'];
        $password1 = $_POST['pass'];
        

        if(!empty($_POST['uname']) && !empty($_POST['pass'])){
            $username = $_POST['uname'];
            $password = $_POST['pass'];
            print_r($username."  ".$password."  In Auth");
            $result = self::query("select emp_id, username, password, job from credentials where username = '$username' and password = '$password' limit 1");
            if(!empty($result))
            {
                
                header('Location: employees');
            }
            else{
                header('Location: sfdmsdgflkn');
            }
        }

    }
}


?>