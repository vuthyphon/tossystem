<button type="button" data-toggle="modal" data-target="#md_dirver" class="btn-info btn">
    Add Driver
</button>
<br>

    <table class="table table-hover tablesorter" id="sample-table4">
        <thead>
        <tr>
            <th>Id</th>
            <th>Driver Name</th>
            <th>Type</th>
            <th>Driver Other</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //print_r($truck_type);
        if(isset($driver_dt)):
            $i=1;
            foreach($driver_dt as $k=>$v):

                ?>
                <tr>
                    <td><?=$i++;?></td>
                    <td><?=$v['d_name']?></td>
                    <td><?=$v['ty_id']?></td>
                    <td><?=$v['d_other']?></td>
                    <td><?=$v['d_status']==1 ? '<i class="fa fa-check-square-o" style="color:#048ae4;"></i>' : '<i class="fa fa-times" style="color:#990000;"></i>'?></td>
                    <td><a href="#" data-toggle="modal" data-target="#driver<?=$v['d_id']?>"><i class="fa fa-pencil"></i></a> | <a href="<?php echo base_url('setting/disable_driver/'.$v['d_id'])?>"><i class="fa fa-times" style="color:#990000;"></i></a>
                    </td>
                    <div class="modal fade modal-sm" id="driver<?=$v['d_id']?>" role="dialog" >
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content" >
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-life-ring"></i> Update Driver Information</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div id="acct-password-row" class="span7">
                                            <form action="<?=base_url('setting/update_driver');?>" method="post">

                                                <div class="control-group ">
                                                    <div class="controls">
                                                        <input id="" name="d_id" class="span4" type="hidden" required="required" value="<?=$v['d_id']?>" autocomplete="false">
                                                    </div>
                                                </div>
                                                <div class="control-group ">
                                                    <label class="control-label">Driver Name <span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input id="current-pass-control" name="d_name" class="span4" type="text" required="required" value="<?=$v['d_name']?>" autocomplete="false">
                                                    </div>
                                                </div>

                                                <div class="control-group ">
                                                    <label class="control-label">Type <span class="required">*</span></label>
                                                    <div class="controls">
                                                       <select name="type">
                                                           <option value="1">CBL</option>
                                                           <option value="2">Total</option>
                                                           <option value="3">Coca</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="control-group ">
                                                    <label class="control-label">Driver Other <span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input id="current-pass-control" name="d_other" class="span4" type="text" required="required" value="<?=$v['d_other']?>" autocomplete="false">
                                                    </div>
                                                </div>

                                                <div class="control-group ">
                                                    <label class="control-label">Status <span class="required">*</span></label>
                                                    <div class="controls">
                                                        <select name="status" class="span4">
                                                            <option value="1" <?=$v['d_status']==1 ? 'checked':''?>>Enable</option>
                                                            <option value="0" <?=$v['d_status']==0 ? 'checked':''?>>Disable</option>
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

<script>

    $(function() {
        $('#sample-table4').tablesorter();
    });

</script>