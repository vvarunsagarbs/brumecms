<!DOCTYPE html>
<html lang="en" >
   <!-- Head -->
   <?php include 'include/head.php';?>
   <!-- /Head -->
   <body data-ng-app="myWebApp" data-ng-controller="HomeController">
    <!-- NavBar -->
        <?php include 'include/navbar.php';?>
    <!-- /NavBar -->
    <!-- Content -->
        <div class="container-fluid">
          <div class="row" style="min-height:518px;display: -ms-flex; display: -webkit-flex; display: flex;">
            <!-- Side Navigation Bar -->
            <div class="col-md-2" style="background-color:#1C2B36;margin:0px;padding:0px;">
              <?php include 'include/sidebar.php'; ?>
            </div>
            <!-- Side Navigation Bar -->
            <!-- Main Content -->
            <div class="col-md-10" style="background-color:#F0F3F4;margin:0px;padding:0px;">
              <!-- Dashboard -->
              <div class="row center" style="padding:10%;">
                <img src="img/WorkInProgress.gif" alt="Work In Progress"/>
              </div>
              <!-- /Dashboard -->
            </div>
            <!-- /Main Content -->
          </div>
        </div>
    <!-- Content -->
    <!-- Footer -->
      <?php include 'include/footer.php'; ?>
    <!-- /Footer -->
   </body>
</html>