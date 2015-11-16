<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Transport Management System(TOS)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>

    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="<?php echo base_url('asset')?>/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="<?=base_url('asset/css/customize-template.css')?>" type="text/css" media="screen, projection" rel="stylesheet" />
    <link href="<?=base_url('asset/css/font-awesome.css')?>" type="text/css" media="screen,projection" rel="stylesheet">
    <link href="<?=base_url('asset/css/main.css')?>" type="text/css" media="screen, projection" rel="stylesheet" />

</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="dashboard.html" class="brand"><i class="icon-truck">Transport Management System</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav">
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                                <a href="#"><span class="fa fa-user"></span> &nbsp;Admin</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i>
                                    Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="body-content">
                
                    <div class="body-nav body-nav-horizontal nav-page body-nav-fixed">
                        <div class="container">
                            <legend class="lead">

                            <ul>

                                <li style="border:none;padding-top:5px;">
                                        <?php
                                            $us_type=$this->session->userdata('us_type');
                                            //echo $us_type;
                                            if($us_type=='CBL')
                                            {
                                                $icon='cbl_icon.png';
                                            }
                                            elseif($us_type=='Total')
                                            {
                                                $icon='total_icon.png';
                                            }
                                            elseif($us_type=='coca'){
                                                $icon='coca_icon.png';
                                            }

                                        ?>
                                        <img src="<?php echo base_url('asset/image/common/'.$icon)?>" width="60" height="50" />

                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-calendar icon-large"></i> <b>Issue Note</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-users icon-large"></i> <b>Customer</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cart-arrow-down icon-large"></i> <b>Item/Goods</b>
                                    </a>
                                </li>
                                <li style="width: 150px;">
                                    <a href="#">
                                        <i class="icon-user icon-large"></i> <b>Transport Agent Name</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-truck icon-large"></i> <b>Truck</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-bar-chart icon-large"></i> <b>Report</b>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <i class="fa fa-users icon-large"></i> <b>User</b>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-bar-chart icon-large"></i> <b>Profile</b>
                                    </a>
                                </li>
                            </ul>
                        </legend>
                        </div>
                    </div>

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

        <footer class="application-footer">
            <div class="container">
                <p>Design And Develope By IT Department</p>
                <div class="disclaimer">
                    <p>Copyright © 2015</p>
                </div>
            </div>
        </footer>
        
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>

        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="<?=base_url('asset')?>/js/jquery/virtual-tour.js" type="text/javascript" ></script>
        <script type="text/javascript">

        $(function() {
            $('#sample-table').tablesorter();
            $('#datepicker').datepicker();
            $(".chosen").chosen();
        });
    </script>


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

    </body>
</html>