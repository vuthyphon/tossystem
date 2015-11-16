<style>

    .modal-sm{
        width: 560px;
        left: 50%;
    }
</style>

<div class="modal fade modal-sm" id="item_type" role="dialog" >
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-cart-plus icon-large"></i> Add Item Type</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div id="acct-password-row" class="span7">
                        <form action="<?=base_url('item/add_type');?>" method="post">
                            <div class="control-group ">
                                <label class="control-label">Item Weight Name <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="current-pass-control" name="it_typename" class="span4" type="text" required="required" value="" autocomplete="false">
                                </div>
                            </div>

                            <div class="control-group ">
                                <label class="control-label">Item Unitcan <span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="it_unit" class="span4">
                                </div>
                            </div>

                            <div class="control-group ">
                                <label class="control-label">Type <span class="required">*</span></label>
                                <div class="controls">
                                    <select name="type" class="span4">
                                        <option value="CBL">CBL</option>
                                        <option value="Coca">Total</option>
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