<?php
class User extends Controller 
{
    public $us;

    public function __construct()
    {
        $this->us = $this->model("UserModel");
    }

    function IndexLogin()
    {
        $this->view("login",[]);
    }

    public function UserLogin()
    {
        if(isset($_POST['btnLogin']))
        {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $kq = $this->us->loginModel($user,$pass);
            if($kq)
            {
                echo '<script language="javascript">location.href="../DailyReport/index";</script>';
               
            }
            else
            {
                echo "error";
            }
             
        }
        else
        {
            echo "missing value";
        }
    }

    public function ChangePass()
    {
        if(isset($_POST['btnChangePass'])){

        }
    }

    public function Logout()
    {
        session_unset();
        session_destroy();
        header("location: ./../index.php");
        exit();
    }
}

?>