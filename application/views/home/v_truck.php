<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
                <?php $id=$this->uri->segment(3);

                ?>
                <input type="hidden" value="<?=$id?>" id="u_id">
                <div class="box-content">
                    <div class="btn-group-box">
                        <button class="btn" id="" data-toggle="modal" data-target="#myModal"></i><i class="fa fa-truck icon-large"></i><i class="fa fa-plus"></i><br/>Add New</button>
                        <a href="<?php echo base_url('truck/type');?>"><button class="btn"><i class="fa fa-plus-square"></i><i class="fa fa-truck icon-large"></i><br/>Add Type</button></a>
                    </div>
                    <hr>
                    <?php
                    echo $this->session->flashdata('msg');
                    ?>
                    <?php $this->load->view('form/md_truck')?>
                    <?php $this->load->view('form/md_truck_type')?>
                    <!-- Modal -->
                    <?php $this->load->view('table/tbl_truck')?>
                </div>
            </div>
        </div>
    </div>
</section>

</div>


