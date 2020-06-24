<?php 
if(isset($_SESSION['logged'])):
if($_SESSION['logged']):
?>
<div class="dashboard-widget-area">
     <div class="widgetarea">

     <?php if(isset($_SESSION['accountNotice'])): ?>
     <div class="alert success logged" style="display:block;">
         <div class="alert-icon"><div class="alertIcon">&check;</div></div>
         <p><?php echo $_SESSION['accountNotice']; ?></p>
     </div>
     <!-- Close alert -->

     <?php endif;unset($_SESSION['accountNotice']); ?>

<?php if(isset($_SESSION['darkmode'])){echo 'Dark Mode: '. $_SESSION['darkmode'];} ?>

     <div class="alert success"></div>
     <!-- Close alert -->
     <div class="alert danger"></div>
     <!-- Close alert -->



          
     	<div class="widegt darkmode">
          <div class="title"><h2>Dark Mode</h2></div>
       <?php if(isset($_SESSION['user']) && isset($_SESSION['email']) && isset($_SESSION['role']) && isset($_SESSION['status'])): ?>   

          	<ul>
          		<li>
                <div class="slider-button">
                    <input class="darkMode" type="checkbox" >
                </div>
              </li>
          	</ul>
        <?php endif; ?>
     	</div>         
      <div class="widegt">
          <div class="title"><h2>My Accounts</h2></div>
       <?php if(isset($_SESSION['user']) && isset($_SESSION['email']) && isset($_SESSION['role']) && isset($_SESSION['status'])): ?>   
          <div class="body">
            <ul>
              <li>Name: <a href="#"><?php echo $_SESSION['name']; ?></a></li>
              <li>UserName: <a href="#" id="myuserName"><?php echo $_SESSION['user']; ?></a></li> 
              <li>Email: <a href="#"><?php echo $_SESSION['email']; ?></a></li>
              <li>Status: <a href="#"><?php echo $_SESSION['status']; ?></a></li>
              <li>Role: <a href="#"><?php echo $_SESSION['role']; ?></a></li>
              <li>Password: <a href="#">Reset</a></li>
              <li> <a href="classes/destrysessions.php">Logout</a></li>
            </ul>
          </div>
        <?php endif; ?>
      </div>
     	<!-- Close widget -->
     	<div class="widegt activeuser">
          <div class="title"><h2>Active Users</h2></div>
            <div class="body">
            </div>
     	</div>
      <!-- Close widget -->
     </div><!-- Close widgetarea -->
</div>
<?php endif; ?>
<?php endif; ?>