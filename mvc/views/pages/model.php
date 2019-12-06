<!-- add report -->
<div class="modal" id="addNew">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ADD NEW DAILY REPORT</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <form action="" class="was-validated">
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
            
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>
<!-- change password report -->
<div class="modal" id="changePassword">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">CHANGE PASSWORD</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <form action="/action_page.php" class="was-validated">
                
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="curPass">Current Password:</label>
                            <input type="text" class="form-control" id="sTime" name="sTime" placeholder="Current Password" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="newPass">New Password:</label>
                            <input type="text" class="form-control" id="sTime" name="sTime" placeholder="New Password" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="confPass">Confirm Password:</label>
                            <input type="text" class="form-control" id="sTime" name="sTime" placeholder="Confirm Password" required>
                        </div>
                    </div>
                </div>
                
              
              
              <button type="submit" class="btn btn-primary">Change</button>
            </form>
            
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>