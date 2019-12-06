<?php
class UserModel extends DB
{
    public function loginModel($username, $password)
    {
        $sql = "select * from tbl_employee where Username = '$username' and Passcode = '$password'";
        $result = mysqli_query($this->con,$sql);  
        if(mysqli_num_rows($result)!=0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $_SESSION['user']= $row['Username'];
                $_SESSION['display_name']= $row['DisplayName'];
                $_SESSION['ID']= $row['EmpID'];
            }
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>