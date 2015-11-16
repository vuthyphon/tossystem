<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
                <?php $id=$this->uri->segment(3);

                ?>
                <input type="hidden" value="<?=$id?>" id="u_id">
                <div class="box-content">
                    <div class="btn-group-box">
                        <button class="btn" id=""></i><i class="fa fa-truck icon-large"></i><i class="fa fa-plus"></i><br/>Add New</button>
                        <a href="#"><button class="btn"><i class="fa fa-truck icon-large"></i><i class="fa fa-times"></i><br/>Disable</button></a>
                        <a href="#"><button class="btn"><i class="fa fa-truck icon-large"></i><i class="fa fa-check"></i><br/>Enable</button></a>
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