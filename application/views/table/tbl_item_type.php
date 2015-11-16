<?php
        echo $this->session->flashdata('msg');
?>
<button type="button" data-toggle="modal" data-target="#item_type" class="btn-primary btn">
    Add Type
</button>
<fieldset>
    <legend>Truck Type Data</legend><br>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Item Type</th>
            <th>Item UnitCan</th>
            <th>Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php

        if(isset($item_type_data)):
            foreach($item_type_data as $k=>$v):
                ?>
                <tr>
                    <td><?=$v['iw_id']?></td>
                    <td><?=$v['iw_name']?></td>
                    <td><?=$v['iw_unitcan']?></td>
                    <td><?=$v['iw_type']?></td>
                    <td><?=$v['iw_status']==1 ? '<i class="fa fa-check-square-o" style="color:#048ae4;"></i>' : '<i class="fa fa-times" style="color:#990000;"></i>'?></td>
                    <td><a href="#" data-toggle="modal" data-target="#item_type<?=$v['iw_id']?>"><i class="fa fa-pencil"></i></a> | <a href="<?php echo base_url('item/disable_type/'.$v['iw_id'])?>"><i class="fa fa-times" style="color:#990000;"></i></a>
                    </td>
                    <div class="modal fade" style="width:560px;" id="item_type<?=$v['iw_id']?>" role="dialog" >
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content" >
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-cart-plus icon-large"></i> Update Item Type</h4>
                                </div>
                                <div class="modal-body">

                                        <div class="row">
                                            <div id="acct-password-row" class="span7">
                                                <form action="<?=base_url('item/update_type');?>" method="post">
                                                    <div class="control-group ">
                                                        <label class="control-label">Item Weight Name <span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input name="it_typeid" class="span4" type="hidden" required="required" value="<?=$v['iw_id']?>" autocomplete="false">
                                                            <input id="current-pass-control" name="it_typename" class="span4" type="text" required="required" value="<?=$v['iw_name']?>" autocomplete="false">
                                                        </div>
                                                    </div>

                                                    <div class="control-group ">
                                                        <label class="control-label">Item Unitcan <span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" name="it_unit" value="<?=$v['iw_unitcan']?>" class="span4">
                                                        </div>
                                                    </div>

                                                    <div class="control-group ">
                                                        <label class="control-label">Type <span class="required">*</span></label>
                                                        <div class="controls">
                                                            <select name="type" class="span4">
                                                                <option value="CBL">CBL</option>
                                                                <option value="Coca">Coca</option>
                                                                <option value="Total">Total</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group ">
                                                        <label class="control-label">Visible <span class="required">*</span></label>
                                                        <div class="controls">
                                                            <select name="it_type_status" class="span4">
                                                                <option value="1">True</option>
                                                                <option value="0">False</option>
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
