<?php

$a = json_decode($data["OldReport"]);
foreach ($a as $value) {
    ?>
<div class="row">
    <h2 align="center" style="color: blue">EDIT REPORT</h2>
    <div class="col-sm-8 add">
        <form class="was-validated" method="post" id="formEdit" action="DailyReport/EditReport/<?php echo $data["SessionIdReport"]; ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="issue">List of Issue:</label>
            </div>
            <div class="col-lg-8">
                <select class="form-control" id="issue" name="issue">
                    <?php
                        $issue = json_decode($data["issue"]);
                        foreach ($issue as $val) {
                            if($val->ID_Issue == $value->ID_Issue)
                                echo "<option value='".$val->ID_Issue."' selected>".$val->IssueName."</option>";
                            else
                                echo "<option value='".$val->ID_Issue."'>".$val->IssueName."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-2">
                <label for="type">Type:</label>
            </div>
            <div class="col-lg-3">
                <select class="form-control" id="Type" name="Type">
                    
                    <?php
                        echo $ab =(int)$value->MC;
                        if($ab == 0)
                        {
                           
                            echo "<option value='".$value->MC."'>".$value->MC."</option>";
                        }
                        else{
                            echo "<option value='MC'>MC</option>";
                        }
                        
                    ?>
                </select>
            </div>
            <div class="col-lg-7">
                <input type="text" value="<?php  if((int)$value->MC!= 0) echo $value->MC; ?>" class="form-control" id="valMC" name="valMC" placeholder="MC">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Level:</label>
                <select class="form-control" id="level" name="level">
                    <?php
                        $level = json_decode($data["level"]);
                        foreach ($level as $val) {
                            if($val->ID_Level == $value->ID_Level)
                            echo "<option value='".$val->ID_Level."' selected>".$val->Level."</option>";
                            else
                            echo "<option value='".$val->ID_Level."'>".$val->Level."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="uname">Status:</label>
                <select class="form-control" id="status" name="status">
                    <?php
                        $status = json_decode($data["status"]);
                        foreach ($status as $val) {
                            if($val->ID_Status == $value->ID_Status)
                            echo "<option value='".$val->ID_Status."' selected>".$val->Status."</option>";
                            else
                            echo "<option value='".$val->ID_Status."'>".$val->Status."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="shift">Shift:</label>
                <select class="form-control" id="shift" name="shift">
                    <?php
                        
                        $shift = json_decode($data["shift"]);
                        foreach ($shift as $val) {
                            if($val->ShiftID == $value->ShiftID)
                            echo "<option value='".$val->ShiftID."' selected>".$val->ShiftName."</option>";
                            else
                            echo "<option value='".$val->ShiftID."'>".$val->ShiftName."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Start:</label>
                <input type="time" value="<?php echo $value->Start; ?>" class="form-control" id="startID" name="startID" >
            </div>
            <div class="col-lg-4">
                <label for="uname">Finish:</label>
                <input type="time" value="<?php echo $value->Finished; ?>" class="form-control" id="finishID" name="finishID" >
            </div>
            <div class="col-lg-4">
                <label for="uname">Total:</label>
                <div id="total">
                <input type="text" value="<?php echo $value->Total; ?>" class="form-control" id="total" name="total" value="" disabled=""></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Note:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" id="note" name="note"><?php echo $value->Note; ?></textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Reason:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" name="reason" id="reason" placeholder="Reason"><?php echo $value->Reason; ?></textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Solution:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" name="solution" id="solution" ><?php echo $value->Reason; ?></textarea>
            </div>
        </div>
    </div>
  
   
  <button type="submit" id="" class="btn btn-primary">Edit</button>
  <div  style="text-align: center;" id="notice"></div>
</form>
    </div>
</div>
<?php
}

?>