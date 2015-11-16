<table  id="sample-table2" class="table table-hover tablesorter" >
    <thead>
    <tr align="center">
        <th>Nº</th>
        <th>Plate Number</th>
        <th>Type Name</th>
        <th>Truck Size</th>
        <th>Truck Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $i=1;
    if(isset($v_truck)):
        foreach($v_truck as $k=>$v): ?>
            <tr align="center">
                <td><?=$i++;?></td>
                <td><?php echo $v['t_platenumber']; ?></td>
                <td><?php echo $v['t_typeid']; ?></td>
                <td><?php echo $v['t_size']; ?></td>
                <td><?php echo $v['t_status']==1 ? '<span class="fa fa-check" style="color: #048ae4;"></span>':'<span class="fa fa-times" style="color:#990000;"></span>' ?></td>
                <td>  <a href="#" data-toggle="modal" data-target="#myModal<?php echo $v['t_id']; ?>" id="edit"><span class="fa fa-pencil" aria-hidden="true"></span></a> | <a href="<?php echo base_url('truck/disable_truck/'.$v['t_id']);?>"> <span class="fa fa-times" aria-hidden="true" style="color: #990000;"></span></a></td>

                <div class="modal fade" id="myModal<?php echo $v['t_id']; ?>" role="dialog" style="width:750px;">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-truck icon-large"></i> Add Truck Information</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form method="post" action="<?php echo base_url('truck/update_truck');?>">
                                        <div id="acct-password-row" class="span4">
                                            <div class="control-group ">
                                                <label class="control-label">Plate Number <span class="required">*</span></label>
                                                <div class="controls">
                                                    <input id="" name="t_id" class="span4" type="hidden" value="<?php echo $v['t_id']; ?>">
                                                    <input id="current-pass-control" name="t_pnumber" class="span4" type="text" required="required" value="<?php echo $v['t_platenumber']; ?>" placeholder="PP 3A-XXXX" autocomplete="false">

                                                </div>
                                            </div>
                                            <div class="control-group ">
                                                <label class="control-label">Truck Size</label>
                                                <div class="controls">
                                                    <input id="new-pass-control" name="t_size" class="span4" required="required"  type="text" placeholder="1.5 T" value="<?php echo $v['t_size']; ?>" autocomplete="false">

                                                </div>
                                            </div>

                                        </div>
                                        <div id="acct-password-row" class="span4">
                                            <div class="control-group ">
                                                <label class="control-label">Type<span class="required">*</span></label>
                                                <div class="controls">

                                                    <select name="t_type" class="span4">
                                                        <?php
                                                        $select=$v['t_typeid'];
                                                        foreach($select_type as $k=>$v):?>
                                                            <option value="<?=$v['t_typeid']?>" <?php echo $select==$v['t_typeid'] ? 'selected' : ''  ?>><?=$v['t_typename']?></option>
                                                        <?php endforeach;?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="control-group ">
                                                <label class="control-label">Visible</label>
                                                <div class="controls">
                                                    <select name="t_status" class="span4">
                                                        <option value="1">True</option>
                                                        <option value="0">False</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="control-group ">
                                                <div class="controls">
                                                    <input name="Save" class="btn btn-info pull-left" type="submit" value="Save" autocomplete="false">

                                                </div>
                                            </div>

                                        </div>
                                    </form>



                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </tr>
        <?php endforeach;
    endif;
    ?>
    </tbody>
</table>



<script>

    $(function() {
        $('#sample-table2').tablesorter();
    });
</script>
