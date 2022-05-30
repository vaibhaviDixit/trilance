<?php

include ('top.php');

$msg="";

                    

?>
      
      <main class="content">
        <div class="container-fluid p-0">



          <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Change Password</h1>
          
          </div>
          <div class="row">
        
            
            <!-- Change pass-->
             <span id="passMsg" class="text-danger"></span>
        <form id="changePassFrom">
          <div class="mb-3">
            <label for="oldPass" class="col-form-label">Old Password:</label>
            <input type="text" class="form-control" id="oldPass">
          </div>
          <span id="repassMsg" class="text-danger"></span>
          <div class="mb-3">
            <label for="newPass" class="col-form-label">New Password:</label>
            <input class="form-control" id="newPass">
          </div>

          <div class="mb-3">
            <label for="renewp" class="col-form-label">Repeat Password:</label>
            <input class="form-control" id="renewp">
          </div>

        <button type="submit" class="btn btn-primary">Change Password</button>

        </form>
 

          </div>




      
      </main>

      <?php

        include 'footer.php';

      ?>
