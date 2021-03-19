<?php require ("header.php");?>


<section class="container-fluid"">
<div class="container container-row">
    <div class=" row-r">
        <div class="size-bord">
            <aside class="col-lg-2">



                <a class="list-group-item List-a">
                    <img src="التقاط3.png" class="rounded-circle" width="100% ">

                </a>
                <br>
                <a class="list-group-item text-line ">
                    مرحبا: فيتر
                </a>
                <hr class="hr-line" size="100px">
                <br><br>
                <a class="list-group-item list-access">

                    المنشورات
                    <i class="fa fa-pencil icons"></i>
                </a>
                <a class="list-group-item list-access active-l" href="indexs.php">

                    المستخدمين
                    <i class="fa fa-users icons"></i>
                </a>
                <a class="list-group-item list-access">
                    فريق الدعم
                    <i class="fa fa-users icons"></i>
                </a>
            </aside>
            <br>
            <article class="col-lg-10">

                <div class="panel panel-default">
                    <div class="row row-pena">

                        <div class="col-lg-4">
                            <div class="well">
                                <h2><span class=" fa fa-bell "></span>
                                    <span class=" fa fa-cog "></span></h2>

                            </div>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-5">
                            <div class="well">
                                <h2 style="">المنشورات</h2>

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="cent">
                            <?php
                            require_once ('vendor/autoload.php');
                            use App\Users\User;


                            $obj=new User;
                            $res=$obj->select();
                            ?>
                            <div class="col-md-11">
                                <form  method="post" class="form-edit">

                                    <div class="row row-form">
                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">First Name</label>
                                        <div class="col-sm-7">
                                            <input type="first name" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $res['IdUser'];?>" placeholder="col-form-label-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row row-form">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-7">
                                            <input type="last name" class="form-control" id="colFormLabel" value="<?php echo $res['NameUser'];?>" placeholder="col-form-label">
                                        </div>
                                    </div>
                                    <div class="form-group row row-form">
                                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $res['EmailUser'];?>" placeholder="col-form-label-lg">
                                        </div>
                                    </div>
                                    <div class="form-group row row-form">
                                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Message</label>
                                        <div class="col-sm-7">
                                            <input type="message" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $res['CityUser'];?>" placeholder="col-form-label-lg">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article><?php // end col-md-9?>
        </div></div>
</div>
</section>




<?php require("footer.php");?>

