

<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
                <?php $id=$this->uri->segment(3);

                ?>
                <input type="hidden" value="<?=$id?>" id="u_id">
                <div class="box-content">
                    <div class="btn-group-box">
                        <a href="<?php echo base_url('item')?>"><button class="btn"><i class="fa fa-arrow-left icon-large"></i><br/>Back</button></a>
                        <button class="btn" id="" data-toggle="modal" data-target="#item"></i><i class="fa fa-cart-plus icon-large"></i><i class="fa fa-plus"></i><br/>Add New</button>

                    </div>
                    <hr>
                    <?php $this->load->view('form/md_truck')?>
                    <?php $this->load->view('form/md_itemtype')?>
                    <!-- Modal -->
                    <?php $this->load->view('table/tbl_item_type')?>
                </div>
            </div>
        </div>
    </div>
</section>

</div>


