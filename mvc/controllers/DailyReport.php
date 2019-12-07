<?php
class DailyReport extends Controller 
{
    public $checkUser;
    public function __construct ()
    {
        $this->checkUser = $this->SessionProcess();
        if(!$this->checkUser)
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
    public function addNew()
    {
        $add = $this->model("HomeModel");
        $this->view("index",[
            "pages"=>"addNew",
            "issue"=>$add->Add_Issue(),
            "status"=>$add->Add_Status(),
            "level"=>$add->Add_Level()]);

    }

}

?>