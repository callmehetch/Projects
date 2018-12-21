<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>IIITDM-Form</title>
    <style>
      

      </style>
  </head>
  <body>

<a href="<?= 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>" style="padding-top: %" style ="font-family: 'Work Sans', sans-serif;" >Institute Login</a>
    
<img src="HWlogo1.png" style="background: #264F8F; width: 100%;  border: solid white 1px;">

    <div class="container" style="padding-top : 1%;">
        <div class="col-md-8 order-md-1">
            <h3 class="mb-3" style="text-decoration: underline; text-align:center;font-family: 'Work Sans', sans-serif;">Birthday Request Form: </h3>
            <hr class="mb-4">
            <form class="needs-validation" onsubmit="return validate();" action="" method="post" autocomplete="off">
             <div class="row" >
                   
                    <div class="col-md-6 mb-4">
                        <label for="name">Name of the student:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Name is required.
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="roll">ROLL NO:</label>
                        <input type="text" class="form-control" name="roll" id="roll" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Roll No. is required.
                        </div>
                    </div>
                         <div class="col-md-2 mb-4">
                        <label for="gender">Gender:</label>
                        <select class="custom-select d-block w-100" name="gen" id="gender" required>
                            <option value="">Choose...</option>
                            <option>M</option>
                            <option>F</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Gender.
                        </div>
                    </div>

                </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="number">Phone Number:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="phone" id="number" placeholder="" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your Moile Numer is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="hostel">Hostel:</label>
                        <select class="custom-select d-block w-100" name="hos" id="hostel" required>
                            <option value="">Choose...</option>
                            <option>Ashwatha</option>
                            <option>Ashoka</option>
                             <option>Banyan</option>
                            <option>Lotus</option>
                            <option>Jasmine</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Hostel.
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <label for="roomno">ROOM NO:</label>
                        <input type="text" class="form-control" name="room" id="roomno" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Room No. is required.
                        </div>
                    </div>

                </div><hr class="mb-4">
                <div>
                <h5 style="text-align:center;font-family: 'Work Sans', sans-serif;">Details of the student having Birthday :</h5>
                 <div class="row">
                   
                    <div class="col-md-6 mb-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-6">
                        <label for="roll">ROLL NO:</label>
                        
          <input type="text" class="form-control" oninput="myFunction()" name="roll" id="broll" placeholder="" value="" required>
                  
                  <p id="demo"></p>
                        <div class="invalid-feedback">
                            Valid Roll No. is required.
                        </div>
                    </div>
              

                </div>
                      <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="number">Phone Number:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="phone" id="number" placeholder="" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your Moile Numer is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="hostel">Hostel:</label>
                        <select class="custom-select d-block w-100" name="hos" id="hostel" required>
                            <option value="">Choose...</option>
                            <option>Ashwatha</option>
                            <option>Ashoka</option>
                             <option>Banyan</option>
                            <option>Lotus</option>
                            <option>Jasmine</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Hostel.
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <label for="roomno">ROOM NO:</label>
                        <input type="text" class="form-control" name="room" id="roomno" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Room No. is required.
                        </div>
                    </div>

                </div></div><hr class="mb-4">
                <h5 style="text-align:center;font-family: 'Work Sans', sans-serif;">List of Invitees :</h5>
                
                
                
               
                 
                

    <table id="myTable" class=" table order-list">
    <thead>
        <tr>
            <td>*Name:</td>
            <td>*Roll:</td>
            <td>Phone:</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="text" name="name" class="form-control" required/>
            </td>
            <td >
                <input type="mail" name="mail"  class="form-control" required/>
            </td>
            <td>
                <input type="text" name="phone"  class="form-control"/>
            </td>
            <td><a class="deleteRow"></a>

            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " style="color: #214B8C" id="addrow" value="Add Invitee" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
    
    <hr class="mb-4">
    
          <div class="row">
                     <div class="col-md-8 mb-6">
                        <label for="roomno">Date (DOB minus 1):</label>
                        <input type="date" class="form-control" name="room" id="roomno" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Room No. is required.
                        </div>
                    </div>

                    <div class="col-md-4 mb-6">
                        <label for="hostel">Time Slot:</label>
                        <select class="custom-select d-block w-100" name="hos" id="hostel" required>
                            <option value="">Choose...</option>
                            <option>23:55 - 00:15</option>
                            <option>00:15 - 00:30</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Slot.
                        </div>
                    </div>
                  

                </div><hr class="mb-4">
                   <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1"  required>
                    <label class="form-check-label" for="exampleCheck1">Hereby, I declare that I am solemnly responsible for the cause of any personal damage or property damage.</label>
                </div>
                   <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">I am fully aware that in case of violating hostel rules, we would be severely penalized. </label>
                </div>
                   <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">I am sure we will not cause any disturbances to the other students and we will keep the premises clean.</label>
                </div>
     
    
     
      <hr class="mb-4">

                <button class="btn disabled "  style="width : 30%; background-color: #214B8C; color: white ">Submit</button>
                <p  style="color: red">Please Login with Institute mail to submit.</p>
     
   
         
            
            </form>
   
        </div> </div>
        
                   
    
       <footer class="footer" style="padding-top:2%">
   
   
<div class="row valign-wrapper" style="width: 100%;  background-color: #214B8C; margin: 0">
					<div class="col s5" style="min-width: 110px">
						<a href="Profile/homePage.php" style="margin: 0;padding: 10px 0 0 0; color: #edeaea; cursor: pointer" target="_blank">Institute Login</a>
					</div>
					<div class="col s2">
						
					</div>
					<div class="col s5" style="min-width: 220px">
						<h6 style="margin: 0;padding: 5px 15px 0 0; color: #edeaea;" align="right">&copy; IIITDM Kancheepuram 2018<br style="margin: 0">Designed by CED16I024 and CED15I033</h6>
					</div>
				</div>   
    </footer>
    
     
      <script>
function myFunction() {
  var x = document.getElementById("broll").value;
     var res = x.toLowerCase();
  document.getElementById("demo").innerHTML = "[ Email : " + res + "@iiitdm.ac.in]";
}
</script>
           
    
      
     <script>
      
      
      $(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="name' + counter + '" required/></td>';
        cols += '<td><input type="text" class="form-control" name="mail' + counter + '" required/></td>';
        cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';

        cols += '<td><i class="ibtnDel fas fa-trash-alt" style = "color: #264F8F;cursor:pointer;font-size:120%;"></i></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
      
      </script>
     

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>