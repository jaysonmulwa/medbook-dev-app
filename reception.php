<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <title>Medbook Dev App</title>


  </head>



  <body>
<div style="width:40%; margin-left:30%;margin-right: 30%">
     <form class="form-horizontal" action="reception_model.php" method="post" id="form1">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="email" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
        
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">DOB</label>
          <input type="date" class="form-control" name="dob" id="dob" placeholder="Password">
        </div>
         <div class="form-group">
          <label for="exampleFormControlSelect1">Gender</label>
          <select class="form-control" name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            
          </select>
        </div>
         <div class="form-group">
          <label for="exampleFormControlSelect1">Type of Service</label>
          <select class="form-control" name="service" id="service">
            <option value="InPatient">InPatient</option>
            <option value="OutPatient">OutPatient</option>
           
          </select>
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">General Comments</label>
        <textarea class="form-control" name="general" id="general" rows="3"></textarea>
      </div>


         <button type="button" class="btn btn-primary" id="register" onclick="f_post()">Search</button>
      </form>
    </body>
  </div>
      <div id="message">

        <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
          
                          
                          <th>Name</th>
                          <th>DOB</th>
                          <th>Gender</th>
                          <th>Type Of Service</th>
                          <th>General Comments</th>
                          
                          
                          
                        </tr>
                      </thead>


  
                     <tbody id="messages">
                    
                      </tbody>
                    </table>
       
      </div>


   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>



        <script type="text/javascript">

            
           

            function f_post()
          {

        


                
                          var name = $('#name').val();
                          var dob = $('#dob').val();
                          var gender = $('#gender').val();
                          var service = $('#service').val();
                          var general = $('#general').val();
                  

                          $.ajax({
                              type: "POST",
                              cache: false,        
                              url: "reception_model.php",
                              data: {name: name, dob: dob, gender: gender, service: service, general: general},

                              success: function(data) {

                                        

                                          $("#messages").html(data)

                                            var handleDataTableButtons = function() {
                                                if ($("#datatable-buttons").length) {
                                                  $("#datatable-buttons").DataTable({
                                                    dom: "Bfrtip",
                                                    buttons: [
                                                      {
                                                        extend: "copy",
                                                        className: "btn-sm"
                                                      },
                                                      {
                                                        extend: "csv",
                                                        className: "btn-sm"
                                                      },
                                                      {
                                                        extend: "excel",
                                                        className: "btn-sm"
                                                      },
                                                      {
                                                        extend: "pdfHtml5",
                                                        className: "btn-sm"
                                                      },
                                                      {
                                                        extend: "print",
                                                        className: "btn-sm"
                                                      },
                                                    ],
                                                    responsive: true
                                                  });
                                                }

                                            
                                              };
                                          
                                          
                                              TableManageButtons = function() {
                                                "use strict";
                                                return {
                                                  init: function() {
                                                    handleDataTableButtons();
                                                  }
                                                };
                                              }();

                                              $('#datatable').dataTable();
                                              $('#datatable-keytable').DataTable({
                                                keys: true
                                              });

                                              $('#datatable-responsive').DataTable();

                                              $('#datatable-scroller').DataTable({
                                                ajax: "js/datatables/json/scroller-demo.json",
                                                deferRender: true,
                                                scrollY: 380,
                                                scrollCollapse: true,
                                                scroller: true
                                              });

                                              var table = $('#datatable-fixed-header').DataTable({
                                                fixedHeader: true
                                              });

                                              TableManageButtons.init();
          
                    


                                //window.location.href="reception.php";
                    
                              }
                          });
                      
          }
          </script>

    <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
               // $.material.init();
            });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>



</html>





