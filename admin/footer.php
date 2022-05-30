<footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a class="text-muted" href="<?php echo SITE_PATH; ?>" target="_blank"><strong><?php echo SITE_NAME; ?></strong></a> &copy;
              </p>
            </div>
          
          </div>
        </div>
</footer>
</div>
</div>
      <!-- footer ends here -->
    

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
   <script src="<?php echo SITE_PATH; ?>assets/js_admin/app.js"></script>
  <script src="//cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo SITE_PATH; ?>templates/ckeditor/ckeditor.js"></script>
<script src="<?php echo SITE_PATH; ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready( function () {
      $('#dttable').DataTable();
  } );

    CKEDITOR.replace('placedesc');
  </script>
 
  <script>

      $(".userdropdown").click(function(){
            
            $("#userDrop").toggle();
        });     


        $( "#changePassFrom" ).submit(function( event ) {  

            event.preventDefault(); 
            oldp=$( "#oldPass" ).val();
            newp=$( "#newPass" ).val(); 
            renewp=$( "#renewp" ).val(); 

            if ( oldp=== "" || newp=== "" || renewp==="") {  
              $( "#passMsg" ).text( "All fields are mandatory" ).show();  
              return;  
            }
            if(newp!==renewp){
                 $( "#repassMsg" ).text( "Password not matching!" ).show();  
              return;  
            }

              jQuery.ajax({
                  url:'changepass',
                  type:'post',
                  data:"oldPass="+oldp+"&newPass="+newp,
                  success:function(result){
                    msg=jQuery.parseJSON(result);
                    if(msg.action=="success"){
                        $( "#passMsg" ).text( "Password Changed Successfully" ).show();
                         $( "#changePassFrom" )[0].reset();
                    }
                    else{

                        $( "#passMsg" ).text( "Incorrect old password" ).show();
                    }

                  }

              }); 

        });  


  </script>



</body>
</html>