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