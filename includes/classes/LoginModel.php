<?php
    /**
    * @brief A class that handles query related to authentication of a user and it extends to Database class..
    */
class LoginModel extends Database {
    /**
    * @brief Perform query check if the password provided by user exist in the datatbase or not for that user.
    * @param  username - Username of a user who wants to log in
    * @return Employee ID , Username, password and job of that user if user password is matched.
    */
    public static function authentication($username) {
        return self::query("select emp_id, username, password, job from credentials where username = '$username' limit 1");
    }
}