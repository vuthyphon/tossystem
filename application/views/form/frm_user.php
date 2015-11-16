
<?php
$us_type=$this->session->userdata('us_type');
if (isset($rows)){
    $url=base_url('user/update_user');
}
else{$rows=0;
    $url=base_url('user/create_user');
}
?>
<center>
    <form action="<?php echo $url;?>" method="post" class="form-horizontal">
        <input type="hidden" name="us_id" value="<?=$rows['us_id']?>">
        <div class="control-group">
            <div class="span6">
                <div class="input-append">
                    <span class="add-on" id="basic-addon3">User Fullname</span>
                    <input type="text" class="form-control" value="<?=$rows['us_fullname']?>" name="us_fullname" required="required" placeholder="Enter your Full name">
                </div>
            </div>

            <div class="span6">
                <div class="input-prepend">
                    <span class="add-on" id="">Gender</span>
                    <select name="gender"  class="form-control">
                        <option value="M" <?=$rows['us_gender']=="M" ? "selected" : ""?>>Male</option>
                        <option value="F" <?=$rows['us_gender']=="F" ? "selected" : ""?>>Female</option>
                    </select>
                </div>
            </div>
        </div>
            <div class="control-group">
            <div class="span6">
                <div class="input-prepend">
                    <span class="add-on" id="basic-addon3">Username</span>
                    <input type="text" class="form-control" value="<?=$rows['us_name']?>" required="required" name="us_name" placeholder="Enter Name for Login" >
                </div>
            </div>
            <div class="span6">
                <div class="input-prepend">
                    <span class="add-on" id="">Password</span>
                    <input type="password" class="form-control"  name="us_password" placeholder="Enter your Password" >
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="span6">
                <div class="input-prepend">
                    <span class="add-on" id="basic-addon3">User Level</span>
                    <select name="us_level" class="form-control">
                        <option value="user" <?=$rows['us_level']=="readonly" ? "selected" : ""?>>Read Only</option>
                        <option value="user" <?=$rows['us_level']=="user" ? "selected" : ""?>>User</option>
                        <option value="admin" <?=$rows['us_level']=="admin" ? "selected" : ""?> >Admin</option>
                    </select>

                </div>
            </div>
            <div class="span6">
                <div class="input-prepend">
                    <span class="add-on" id="">Visible</span>
                    <select name="us_status" class="form-control">
                        <option value="1" <?=$rows['us_status']=="1" ? "selected" : ""?>>Enable</option>
                        <option value="0" <?=$rows['us_status']=="0" ? "selected" : ""?>>Disable</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="span6">
                <div class="input-prepend">
                    <span class="add-on" id="basic-addon3">User Type</span>
                    <select name="us_type" class="form-control">
                        <option value="Coca" <?=$rows['us_type']=="Coca" ? "selected" : ""?> <?=$us_type=='coca' ? '' : 'disabled'?>>Cocacola</option>
                        <option value="CBL" <?=$rows['us_type']=="CBL" ? "selected" : ""?> <?=$us_type=='cbl' ? '' : 'disabled'?>>CBL</option>
                        <option value="Total" <?=$rows['us_type']=="Total" ? "selected" : ""?> <?=$us_type=='total' ? '' : 'disabled'?>>Total</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="col-sm-8">
                <center>
                    <button type="submit" class="btn btn-info">
                        <span class="glyphicon glyphicon-floppy-save"></span> Save
                    </button>
                    <button type="reset" class="btn btn-warning">
                        <span class="glyphicon glyphicon-floppy-remove"></span> Clear
                    </button>
                </center>

            </div>
        </div>

    </form>
    </center>

