<?php
class HomeModel extends DB
{
    public function Test()
    {
        $sql = "select * from tbl_dailyreport";
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
}


?>