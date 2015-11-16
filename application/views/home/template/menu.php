<?php
$menu=$this->uri->segment(1);//get class to active menu
?>
<div id="body-content">

    <div class="body-nav body-nav-horizontal nav-page body-nav-fixed">
        <div class="container">
            <legend class="lead">

                <ul>

                    <li style="border:none;padding-top:5px;">
                        <?php
                        $us_type=$this->session->userdata('us_type');
                        //echo $us_type;
                        if($us_type=='cbl')
                        {
                            $icon='cbl_icon.png';
                        }
                        elseif($us_type=='total')
                        {
                            $icon='total_icon.png';
                        }
                        elseif($us_type=='coca'){
                            $icon='coca_icon.png';
                        }

                        ?>
                        <img src="<?php echo base_url('asset/image/common/'.$icon)?>" width="60" height="50" />

                    </li>
                    <li class="<?php echo $menu=='issue' ? 'active' :'' ?>">
                        <a href="#">
                            <i class="fa fa-file-text-o icon-large"></i>
                            <b>Issue Note</b>
                        </a>
                    </li>
                    <li class="<?php echo $menu=='custome' ? 'active' :'' ?>">
                        <a href="#">
                            <i class="fa-users icon-large"></i> <b>Customer</b>
                        </a>
                    </li>
                    <li class="<?php echo $menu=='item' ? 'active' :'' ?>">
                        <a href="<?php echo base_url('item')?>">
                            <i class="fa fa-cart-arrow-down icon-large"></i> <b>Item/Goods</b>
                        </a>
                    </li>
                    <li class="<?php echo $menu=='agent' ? 'active' :'' ?>">
                        <a href="#">
                            <i class="icon-user icon-large"></i> <b>Agent Name</b>
                        </a>
                    </li>
                    <li class="<?php echo $menu=='truck' ? 'active' :'' ?>">
                        <a href="<?php echo base_url('truck')?>">
                            <i class="fa fa-truck icon-large"></i> <b>Truck</b>
                        </a>
                    </li>
                    <li class="<?php echo $menu=='report' ? 'active' :'' ?>">
                        <a href="#">
                            <i class="icon-bar-chart icon-large"></i> <b>Report</b>
                        </a>
                    </li>
                    <li class="<?php echo $menu=='user' ? 'active' :'' ?>">
                        <a href="<?php echo base_url('user')?>">
                            <i class="fa fa-users icon-large"></i> <b>User</b>
                        </a>
                    </li>
                    <li class="<?php echo $menu=='profile' ? 'active' :'' ?>">
                        <a href="#">
                            <i class="fa fa-cogs icon-large"></i><b>Setting</b>
                        </a>
                    </li>
                </ul>
            </legend>
        </div>
    </div>