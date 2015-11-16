<?php
        echo $this->session->flashdata('msg');
?>
<button type="button" data-toggle="modal" data-target="#truck_type" class="btn-primary btn">
    Add Type
</button>
<fieldset>
    <legend>Truck Type Data</legend><br>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Truck Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //print_r($truck_type);
        if($truck_type):
            foreach($truck_type as $k=>$v):
                ?>
                <tr>
                    <td><?=$v['t_typeid']?></td>
                    <td><?=$v['t_typename']?></td>
                    <td><?=$v['status']==1 ? '<i class="fa fa-check-square-o" style="color:#048ae4;"></i>' : '<i class="fa fa-times" style="color:#990000;"></i>'?></td>
                    <td><a href="#" data-toggle="modal" data-target="#truck_type<?=$v['t_typeid']?>"><i class="fa fa-pencil"></i></a> | <a href="<?php echo base_url('truck/disable/'.$v['t_typeid'])?>"><i class="fa fa-times" style="color:#990000;"></i></a>
                    </td>
                    <div class="modal fade modal-sm" id="truck_type<?=$v['t_typeid']?>" role="dialog" >
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content" >
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-truck icon-large"></i> Add Truck Type</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div id="acct-password-row" class="span7">
                                            <form action="<?=base_url('truck/update_type');?>" method="post">

                                                <div class="control-group ">
                                                    <div class="controls">
                                                        <input id="" name="type_id" class="span4" type="hidden" required="required" value="<?=$v['t_typeid']?>" autocomplete="false">
                                                    </div>
                                                </div>
                                                <div class="control-group ">
                                                    <label class="control-label">Truck Type <span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input id="current-pass-control" name="truck_type" class="span4" type="text" required="required" value="<?=$v['t_typename']?>" autocomplete="false">
                                                    </div>
                                                </div>

                                                <div class="control-group ">
                                                    <label class="control-label">Status <span class="required">*</span></label>
                                                    <div class="controls">
                                                        <select name="status" class="span4">
                                                            <option value="1" <?=$v['status']==1 ? 'checked':''?>>Enable</option>
                                                            <option value="0" <?=$v['status']==0 ? 'checked':''?>>Disable</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="control-group ">

                                                    <div class="controls">
                                                        <input class="btn btn-info" type="submit" value="Save">
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </tr>
            <?php
            endforeach;
        endif;?>
        </tbody>
    </table>
</fieldset>
