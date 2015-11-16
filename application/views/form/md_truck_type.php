<style>

    .modal-sm{
        width: 560px;
        left: 50%;
    }
</style>

<!-- Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div class="modal fade modal-sm" id="truck_type" role="dialog" >
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
                        <form action="<?=base_url('truck/add_type');?>" method="post">
                            <div class="control-group ">
                                <label class="control-label">Truck Type <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="current-pass-control" name="truck_type" class="span4" type="text" required="required" value="" autocomplete="false">
                                </div>
                            </div>

                            <div class="control-group ">
                                <label class="control-label">Status <span class="required">*</span></label>
                                <div class="controls">
                                    <select name="status" class="span4">
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
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