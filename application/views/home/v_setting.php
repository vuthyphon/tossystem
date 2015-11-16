<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
                <?php $id=$this->uri->segment(3);

                ?>
                <input type="hidden" value="<?=$id?>" id="u_id">
                <div class="box-content">
                    <div class="btn-group-box">
                        <button class="btn" id="btn-region"></i><i class="fa fa-area-chart icon-large"></i><br/>Region</button>
                        <a href="#"><button class="btn" id="btn-type"><i class="fa fa-university icon-large"></i><br/>Add Type</button></a>
                    </div>
                    <hr>
                    <?php
                    echo $this->session->flashdata('msg');
                    ?>

                    <div id="type">
                        <fieldset>
                            <legend>
                                Type Information
                            </legend>

                            <?php $this->load->view('table/tbl_type'); ?>
                        </fieldset>

                    </div>

                    <div id="region">
                        <fieldset>
                            <legend>
                                Region Information
                            </legend>
                            <?php $this->load->view('table/tbl_region'); ?>
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<script>
       $("#type").hide();
    $(document).ready(function(){
        $("#btn-region").click(function(){
            $("#region").show(300);
            $("#type").hide();
        });
    });
    $(document).ready(function(){
        $("#btn-type").click(function(){
            $("#type").show(300);
            $("#region").hide();
        });
    });
</script>
