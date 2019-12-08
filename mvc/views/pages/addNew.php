
<div class="row">
    <h2 align="center" style="color: blue">ADD NEW DAILY REPORT</h2>
    <div class="col-sm-8 add">
        <form class="was-validated" method="post" id="formAdd" action="DailyReport/addNewReport">
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="issue">List of Issue:</label>
            </div>
            <div class="col-lg-8">
                <select class="form-control" id="issue" name="issue">
                    <option>Choose Issue</option>
                    <?php
                        $issue = json_decode($data["issue"]);
                        foreach ($issue as $val) {
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
                    <option></option>
                </select>
            </div>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="valMC" name="valMC" placeholder="MC">
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
                
            </div>
            <div class="col-lg-8">
                
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Start:</label>
                <input type="time" class="form-control" id="startID" name="startID" required>
            </div>
            <div class="col-lg-4">
                <label for="uname">Finish:</label>
                <input type="time" class="form-control" id="finishID" name="finishID" required>
            </div>
            <div class="col-lg-4">
                <label for="uname">Total: </label>
                <div id="total12">
                    <input type="text" class="form-control" id="total" name="total" disabled="">
                </div>
            </div>
        </div>
        
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-12" id="noticeTotal">
            
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Note:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" id="note" name="note" placeholder="Note"></textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Reason:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" name="reason" id="reason" placeholder="Reason"></textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Solution:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" name="solution" id="solution" placeholder="Solution"></textarea>
            </div>
        </div>
    </div>
  
  
  <button type="submit" id="" class="btn btn-primary">Add</button>
  <a href="index.php" class="btn btn-danger" id="back">Back</a>
  <div  style="text-align: center;" id="notice"></div>
</form>
    </div>
</div>
