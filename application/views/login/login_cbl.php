<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href=" <?php echo base_url('asset/css/main.css');?>">

    <title></title>
</head>
<body>
<div class="container">

    <div class="login">
        <img src="<?php echo base_url('asset/image/common/cbl.png')?>" title="cbl login" style="margin-left:60px;"/>

        <form class="form-horizontal" role="form" action="<?php echo base_url('login/check_login')?>" method="post">


            <div class="col-sm-12">
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" name="us_name" placeholder="Username" aria-describedby="sizing-addon1" required="required">
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                        <input type="password" name="us_pwd" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-5"><?php echo $captcha['image']; ?><input type="hidden" id="captcha" value="<?php echo $this->session->userdata('captcha'); ?>"/></div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="word" placeholder="Security Code" style="align:center;">
                </div>
            </div>
            <div class="form-group">

                <div class="col-sm-12">
                    <input type="submit" class="btn btn-primary" value="login" id="btnlogin" placeholder="Enter email" style="margin-left:120px;">
                </div>
            </div>

            <?php echo $this->session->flashdata('msg');?>
        </form>

    </div>
</div>

<script>
    //alert('aa');
    $("#btnlogin").click(function(){
        var word=$("#word").val();
        var captcha=$("#captcha").val();

        if(word==captcha)
        {

        }
        else
        {
            alert('incorrect Security Code');
            return false;
        }
    });
</script>
</body>

</html>