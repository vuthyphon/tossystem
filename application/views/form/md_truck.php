<style>


</style>

<!-- Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div class="modal fade" id="myModal" role="dialog" style="width:750px;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-truck icon-large"></i> Add Truck Information</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                   <form method="post" action="<?php echo base_url('truck/add_truck');?>">
                            <div id="acct-password-row" class="span4">
                                <div class="control-group ">
                                    <label class="control-label">Plate Number <span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="t_pnumber" class="span4" type="text" required="required" value="" placeholder="PP 3A-XXXX" autocomplete="false">

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Truck Size</label>
                                    <div class="controls">
                                        <input id="new-pass-control" name="t_size" class="span4" required="required"  type="text" placeholder="1.5 T" value="" autocomplete="false">

                                    </div>
                                </div>

                            </div>
                            <div id="acct-password-row" class="span4">
                                <div class="control-group ">
                                    <label class="control-label">Type<span class="required">*</span></label>
                                    <div class="controls">

                                        <select name="t_type" class="span4">
                                            <?php
                                            foreach($select_type as $k=>$v):?>
                                                <option value="<?=$v['t_typeid']?>"><?=$v['t_typename']?></option>
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