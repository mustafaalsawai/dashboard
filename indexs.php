<?php require ("header.php");?>


<section class="container-fluid"">
<div class="container container-row">
             <div class=" row-r">
                <div class="size-bord">
                <aside class="col-lg-2">



                    <a class="list-group-item List-a">
                        <img src="التقاط.png" class="rounded-circle" width="100% ">

                    </a>
                    <br>
                    <a class="list-group-item text-line ">
                        مرحبا: فيتر
                    </a>
                    <hr class="hr-line" size="100px">
                    <br><br>
                    <a class="list-group-item list-access" href="posts.php">

                         المنشورات
                        <i class="fa fa-pencil icons"></i>
                    </a>
                    <a class="list-group-item list-access active-l" href="indexs.php">

                        المستخدمين
                        <i class="fa fa-user icons"></i>
                    </a>
                    <a class="list-group-item list-access" href="reviews.php">
                        المراجعات
                        <svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist icons" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </a>
                    <a class="list-group-item list-access" href="report.php">

                        البلاغات
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-fill-exclamation icons" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.553.553 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                        </svg>
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
                      <h2 style="">المستخدمين</h2>

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
            <table class=" table-list ">

                <tr class="table-tr">
                    <th class="table-th">حذف المستخدم</th>
                    <th class="table-th">تعديل</th>
                    <th class="table-th">الحالة</th>
                    <th class="table-th">العنوان</th>
                    <th class="table-th">البريد الالكتروني</th>
                    <th class="table-th">اسم المستخدم</th>
                    <th class="table-th" style="text-align: center">#</th>
                </tr>
                <?php
                $i=0;
                foreach ($res as $key=>$row){

                    ?>
                    <tr class="table-t">


                    <td class="table-td">
                        <?php
                        $d=new User;
                        $delet=$d->delete()
                        ?>
                        <form method="POST">
                            <input type="hidden" name="ref_toke_delete" value="<?php echo $key?>">
                            <button type="submit" name="delete_dara" ><h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                    </svg></h1></button>
                        </form>
                    </td>
                    <td class='table-td'><a href="mor.php?token=<?php echo $key;?>"><h1><i class="fa fa-pencil"></i></h1></a></td>

                        <td class='table-td'>
                        <?php if($row['TypeUser']=="true"){
                              echo "حساب عادي";
                          }else{ echo "حساب تجاري";}?></td>
                         <?php echo
                        "<td class='table-td'>".$row['CityUser'].
                        "<td class='table-td'>".$row['EmailUser'].
                        "<td class='table-td'>" .$row['NameUser']
                        ?>
                        <td class="table-td"><img src="<?php echo $row['PhotoUser']?>"n class="rounded-circle amg-t" width="10%">






                 </tr><?php }?>

            </table>
            </div>
             </div>
        </div>
    </div>
</article><?php // end col-md-9?>
                </div></div>
</div>
</section>




<?php require("footer.php");?>
