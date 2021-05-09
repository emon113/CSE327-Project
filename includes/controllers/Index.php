<?php 
    /**
    * @brief Index class. Do stuffs to authenticate a user and it extebds to Controller class. 
    */
class Index extends Controller{
    /**
    * @brief Authenticate an user.
    * @param No parameter.
    * @return Redirect to the home page if credentials are valid  otherwise shows error messages.
    */
    public static function logged(){

        if(!empty($_POST['uname']) && !empty($_POST['pass'])){
            $username = $_POST['uname']; /**< Employee ID of the user */
            $password = $_POST['pass'];
            $exist = new Index(); /**< An object of index Class */
            $exist->isExist($username,$password);

        }

    }
        /**
    * @brief Authenticate an user.
    * @param username - To check if the user is exist or not.
    * @param password - To compare the password if the user exists.
    * @return Redirect to the home page if credentials are valid  otherwise shows error messages.
    */

    public static function isExist($username, $password){
        $model = new LoginModel(); /**< model - An object of LoginModel Class */
        $result = $model->authentication($username); /**< result - Result retrived from database */
        $result = self::query("select emp_id, username, password, job from credentials where username = '$username' limit 1");
        $password2 =''; /**< password2 - Password start value null */
        foreach($result as $item){
            $employeeId = $item[0]; /**< employeeId - Employee ID retrived from database */
            $password2 = $item[2]; 
        }
        if($password2 == $password){
            header('Location: employees?eid='.$employeeId.'');
        }
        else{
            echo "<script>
            alert('Wrong Credentials!!!');
            window.location.href= 'Index.php';
            </script>";
        }
        return $result;
    }


}

?>