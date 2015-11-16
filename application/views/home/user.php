<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
                <?php $id=$this->uri->segment(3);

                ?>
                <input type="hidden" value="<?=$id?>" id="u_id">
                <div class="box-content">
                    <div class="btn-group-box">
                        <button class="btn" id="ad_user"><i class="fa fa-user-plus icon-large"></i><br/>Add New</button>
                        <a href="<?=base_url('user/delete_user/'.$id)?>"><button class="btn"><i class="fa fa-user-times icon-large"></i><br/>Disable</button></a>
                        <a href="<?=base_url('user/enable_user/'.$id)?>"><button class="btn"><i class="fa fa-user icon-large"></i><br/>Enable</button></a>
                        <button class="btn"><i class="icon-list-alt icon-large"></i><br/>Reports</button>
                        <button class="btn"><i class="icon-bar-chart icon-large"></i><br/>Charts</button>
                    </div>
                    <hr>
                    <div id="frm">
                        <?php $this->load->view('form/frm_user')?>
                    </div>

                    <?php $this->load->view('table/tbl_user.php')?>
                </div>
            </div>
        </div>
    </div>
</section>

</div>


<script>
    $(document).ready(function(){
        var show=$('#u_id').val();

        if(show!='')
        {
            $("#frm").show();
        }
        else
        {
            $("#frm").hide();
        }

        $("#ad_user").click(function(){
            $("#frm").fadeToggle('slow');
        });

    });
</script>