
<div class="modal fade" id="myModal" role="dialog" style="width:750px;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-shopping-cart icon-large"></i> Add Item Information</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form method="post" action="<?php echo base_url('item/add_item');?>">
                        <div id="acct-password-row" class="span4">
                            <div class="control-group ">
                                <label class="control-label">Item Code <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="current-pass-control" name="it_code" class="span4" type="text" required="required" value="" placeholder="PP 3A-XXXX" autocomplete="false">

                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">Item Name</label>
                                <div class="controls">
                                    <input id="new-pass-control" name="it_name" class="span4" required="required"  type="text" placeholder="1.5 T" value="" autocomplete="false">

                                </div>
                            </div>

                            <div class="control-group ">
                                <label class="control-label">Type</label>
                                <div class="controls">
                                    <select name="type" class="span4">
                                        <option value="Coca">Coca</option>
                                        <option value="Total">Total</option>
                                        <option value="CBL">CBL</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div id="acct-password-row" class="span4">
                            <div class="control-group ">
                                <label class="control-label">Item Other<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="it_other" class="span4">
                                </div>
                            </div>
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