<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7Hn8HwaqBiqZQx1_jjLBCKhhb60959_ZJwg&usqp=CAU" class="img-circle" width="60"></a></p>
                   <?php $query=mysqli_query($bd, "select fullName from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
              	  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
              	  	
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span style="color: white;">Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span style="color: white;">Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="change-password.php">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="generate-tax.php" >
                          <i class="fa fa-book"></i>
                          <span style="color: white;">Generate Tax</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span style="color: white;">Bills</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="water.php">Water</a></li>
                          <li><a  href="electricity.php">Electricity</a></li>
                          <li><a  href="naturalgas.php">Natural Gas</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="due tax.php" >
                          <i class="fa fa-book"></i>
                          <span style="color: white;">Dues Tax</span>
                      </a>
                    </li>
       
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-thumbs-up"></i>
                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Helpline Number</button>
                      </a>
                  </li>
                 
                  <li class="sub-menu">
                      <a href="tax-payment-history.php" >
                          <i class="fa fa-tasks"></i>
                          <span style="color: white;">Tax Payment History</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <style>#sidebar{background-color: #248aaf;}.centered{background-color: #248aaf;}.sub-menu{background-color: #248aaf;}</style>
              <!-- sidebar menu end-->

          </div>
      </aside>
      <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color:  #a9d96c;">
      <div class="modal-header" style="background: linear-gradient(90deg, rgb(4, 143, 90) 0%, tomato 100%);">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       <b> <p style="color: black;">Contact us for any assistance regarding the system: Finances & Tax-Municipal Corporation</p></b>
        <b><p style="color: black;">Ph.No : 141-5153222-21124 Email oic.website@municipalcorporation.gov.in</p></b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
