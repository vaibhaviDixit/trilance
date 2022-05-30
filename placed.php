<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/header.php');
$sql="select * from placed order by id desc";
$res=mysqli_query($con,$sql);

?>



  <main id="main">

    
    <!-- ======= Services Section ======= -->
    <section id="courses" class="courses">
      <div class="container">

        <div class="section-title">
          <span>Students</span>
          <h2>Placed Students</h2>
        </div>

        <div class="container table-responsive">

          <table class="table table-striped   table-hover  table-sm pt-3" id="dttable">
          <thead class="table-dark">
            <tr>

            <th scope="col">Sr No.</th>
            <th scope="col">Name</th>
            <th scope="col" >Job Profile</th>

            </tr>
          </thead>
          <tbody>
          <?php  

              if(mysqli_num_rows($res) > 0){
                $i=1;
                while( $row=mysqli_fetch_assoc($res) ){

            ?>

            
            <tr>
            <td scope="col"> <?php  echo $i; ?></td>

            <td scope="col"><?php echo $row['name']; ?></td>
            <td scope="col"><?php echo $row['job']; ?></td>

            </tr>


            <?php
                $i++;

                }
              }
              else{
              ?>
              <td colspan="4">Data not found</td>

              <?php

              }

            ?>
          </tbody>

          </table>


        </div>

      </div>
    </section><!-- End Services Section -->

   
  </main><!-- End #main -->
<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/footer.php');

?>