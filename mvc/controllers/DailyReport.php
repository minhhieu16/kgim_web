<?php
class DailyReport extends Controller 
{
    public function __construct ()
    {
        $checkUser = $this->SessionProcess();
        if(!$checkUser)
        {
            echo '<script language="javascript">location.href="./../index.php";</script>';
        }
    }
    public function index()
    {
        $rep = $this->model("HomeModel");
        $this->view("index",[
            "pages"=>"show",
            "rep"=>$rep->Test()
        ]);
    }

}

?>