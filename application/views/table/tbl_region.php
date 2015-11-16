<button type="button" data-toggle="modal" data-target="#regionmd" class="btn-primary btn">
    Add Type
</button>

<hr>
<table  id="sample-table2" class="table table-hover tablesorter" >
    <thead>
    <tr align="center">
        <th>Nº</th>
        <th>Region Code</th>
        <th>Region Name </th>
        <th>Region Type</th>
        <th>Region Status</th>
        <th>Region Visible</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $i=1;
    if(isset($region_dt)):
        foreach($regin_dt as $k=>$v): ?>
            <tr align="center">
                <td><?=$i++;?></td>
                <td><?php echo $v['rg_code']; ?></td>
                <td><?php echo $v['rg_name']; ?></td>
                <td><?php echo $v['rg_type']; ?></td>
                <td><?php echo $v['rg_status']==1 ? '<span class="fa fa-check" style="color: #048ae4;"></span>':'<span class="fa fa-times" style="color:#990000;"></span>' ?></td>
                <td>  <a href="#" data-toggle="modal" data-target="#myModal<?php echo $v['rg_id']; ?>" id="edit"><span class="fa fa-pencil" aria-hidden="true"></span></a> | <a href="<?php echo base_url('item/disable_item/'.$v['it_id']);?>"> <span class="fa fa-times" aria-hidden="true" style="color: #990000;"></span></a></td>

                <div class="modal fade" id="myModal<?php echo $v['rg_id']; ?>" role="dialog" style="width:750px;">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-shopping-cart icon-large"></i> Add Item Information</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form method="post" action="<?php echo base_url('item/update_item');?>">
                                        <div id="acct-password-row" class="span4">
                                            <div class="control-group ">
                                                <label class="control-label">Item Code <span class="required">*</span></label>
                                                <div class="controls">
                                                    <input id="current-pass-control" name="rg_code" class="span4" type="text" required="required" value="<?php echo $v['rg_code']; ?>">
                                                    <input id="current-pass-control" name="rg_id" class="span4" type="hidden" required="required" value="<?php echo $v['rg_id']; ?>">
                                                </div>
                                            </div>
                                            <div class="control-group ">
                                                <label class="control-label">Item Name</label>
                                                <div class="controls">
                                                    <input id="new-pass-control" name="rg_name" class="span4" required="required"  type="text"  value="<?php echo $v['rg_name']; ?>" autocomplete="false">

                                                </div>
                                            </div>

                                            <div class="control-group ">
                                                <label class="control-label">Type</label>
                                                <div class="controls">
                                                    <select name="rg_type" class="span4">
                                                        <option value="Coca">Coca</option>
                                                        <option value="Total">Total</option>
                                                        <option value="CBL">CBL</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div id="acct-password-row" class="span4">
                                            <div class="control-group ">
                                                <label class="control-label">Item Type</label>
                                                <div class="controls">

                                                    <select name="it_type" class="span4">
                                                        <?php foreach($item_type as $item):?>
                                                            <option value="<?=$item['iw_id'];?>"><?=$item['iw_name'];?></option>
                                                        <?php endforeach;?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="control-group ">
                                                <label class="control-label">Item Visible</label>
                                                <div class="controls">
                                                    <select name="it_status" class="span4">
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
