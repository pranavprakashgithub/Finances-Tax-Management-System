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
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="change-password.php">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="register-complaint.php" >
                          <i class="fa fa-book"></i>
                          <span>Generate Tax</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Tax Payment History</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <style>#sidebar{background-color: #248aaf;}.centered{background-color: #248aaf;}.sub-menu{background-color: #248aaf;}</style>
              <!-- sidebar menu end-->
          </div>
      </aside>