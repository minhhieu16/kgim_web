<<<<<<< HEAD

<div class="row">
    <h2 align="center" style="color: blue">ADD NEW DAILY REPORT</h2>
    <div class="col-sm-8 add">
        <form action="" class="was-validated">
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">List of Issue:</label>
            </div>
            <div class="col-lg-8">
                <select class="form-control" id="uname" name="issue">
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
                <label for="uname">Type:</label>
            </div>
            <div class="col-lg-3">
                <select class="form-control" id="uname" name="mc">
                    <?php
                        $issue = json_decode($data["issue"]);
                        foreach ($issue as $val) {
                            echo "<option value='".$val->ID_Issue."'>".$val->Type."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="" placeholder="MC">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Level:</label>
            </div>
            <div class="col-lg-8">
                <select class="form-control" id="uname" name="level">
                    <?php
                        $level = json_decode($data["level"]);
                        foreach ($level as $val) {
                            echo "<option value='".$val->ID_Level."'>".$val->Level."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Status:</label>
            </div>
            <div class="col-lg-8">
                <select class="form-control" id="uname" name="status">
                    <?php
                        $status = json_decode($data["status"]);
                        foreach ($status as $val) {
                            echo "<option value='".$val->ID_Status."'>".$val->Status."</option>";
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
                <input type="time" class="form-control" id="sTime" name="sTime" required>
            </div>
            <div class="col-lg-4">
                <label for="uname">Finish:</label>
                <input type="time" class="form-control" id="fTime" name="fTime" required>
            </div>
            <div class="col-lg-4">
                <label for="uname">Total:</label>
                <input type="text" class="form-control" id="tTime" name="tTime" disabled="">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Note:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" name="" placeholder="Note">
                   
               </textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Reason:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" name="" placeholder="Reason">
                   
               </textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="uname">Solution:</label>
            </div>
            <div class="col-lg-8">
               <textarea class="form-control" name="" placeholder="Solution">
                   
               </textarea>
            </div>
        </div>
    </div>
  
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
    </div>
</div>
=======
<form action="/action_page.php" class="was-validated">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="uname">List of Issue:</label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" id="uname" name="issue">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="uname">MC:</label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" id="uname" name="mc">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="uname">Level:</label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" id="uname" name="level">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="uname">Status:</label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" id="uname" name="status">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="uname">Start:</label>
                                <input type="time" class="form-control" id="sTime" name="sTime" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="uname">Finish:</label>
                                <input type="time" class="form-control" id="fTime" name="fTime" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="uname">Total:</label>
                                <input type="text" class="form-control" id="tTime" name="tTime" disabled="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="uname">Note:</label>
                            </div>
                            <div class="col-lg-8">
                               <textarea class="form-control" name="">
                                   
                               </textarea>
                            </div>
                        </div>
                    </div>
                  
                  
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
>>>>>>> bda6cedeafb2f184992141ed1c2df69391766ffb
