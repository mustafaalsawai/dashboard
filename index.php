
<?php
include_once("header.php");?>
          <article class="col-lg-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Panel title</h3>
              </div>
             <div class="row row-panel">
               <div class="col-lg-3">
                <div class="well">
      	         <h2><span class="fa fa-pencil"> 0</span></h2>
                 <h3>Post</h3></div>
               </div><!-- /.col-lg-4 -->
               <div class="col-lg-3">
      	        <div class="well">
      	         <h2><span class="fa fa-user "> 6</span></h2>
                 <h3>Admins</h3>
                </div>
               </div>

               <div class="col-lg-3">
                <div class="well">
      	         <h2><span class="fa fa-users "> 200</span></h2>
                 <h3>CA</h3>
                </div>
               </div><!-- /.col-lg-4 -->
               <div class="col-lg-3">
                <div class="well">
      	         <h2><span class="fa fa-users "> 1200</span></h2>
                 <h3>Users</h3></div>
               </div>
             </div><!-- /.row -->
            </div><?php // end panel panel-default?>
            <div class="panel panel-default">
              <div class="panel-heading main-">
                <h3 class="panel-title main-color-bg">Panel title</h3>
              </div>
              <div class="panel-body">

                  <?php
                  require_once ('vendor/autoload.php');
                  use App\Users\User;


                  $obj=new User;
                  $res=$obj->select();
                  ?>
                  <table class="table table-striped table-hover">
                      <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                      <?php
                          foreach ($res as $key=>$row){
                      "<tr class='tr-td'>";

                              echo "<td>".$row['Fname'].
                                  "<td>".$row['Lname'].
                                  "<td>".$row['Email'].
                                  "<td>".$row['Message'];?>
                              <td><a href="edit.php?token=<?php echo $key;?>" class="btn btn-success btn-xs">Edit</a></td>
                              <td><a href="" class="btn btn-danger btn-xs">Delete</a></td>




                      </tr><?php }?>
                  </table>
              </div>
            </div>
          </article><?php // end col-md-9?>



 <?php include_once("footer.php");?>



