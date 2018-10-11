  <!DOCTYPE html>
<html>
<head>
<title>Hall Permission</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://github.com/Eonasdan/bootstrap-datetimepicker/blob/master/src/js/bootstrap-datetimepicker.js"></script>

	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <script src="https://use.fontawesome.com/b3f6a18a0c.js"></script>
    <script src="clockface.js"></script>
    <link rel="stylesheet" href="clockface.css">

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
    
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
    

    <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
     <style>
        body,html {
            height: 100%;
            width: 100%;
        }
         #panel{
             height: 700px;
             margin-top:50px;

         }
    </style>

 <?php


    ?>
</head>
<body class="bg">
    <div class="container" id="panel">
        <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12" style="background-color: lightblue;padding: 50px;  box-shadow: 5px 5px 5px #888; border-radius: 4px;">
            <div class="panel-heading">
                <h1 align="center">Hall Permission Form</h1>
            </div>
   
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
           <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            

            <div class="form-group">
	            <div class="input-group">
	                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                <input  type="text" class="form-control" name="name" placeholder="Name">
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="input-group">
	                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
	                <input  type="text" class="form-control" name="rollno" placeholder="Roll number">
	            </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  type="text" class="form-control" name="email" placeholder="Email ID">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input  type="tel" class="form-control" name="mobile" placeholder="Mobile number">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i></span>
                <input  type="text" class="form-control" name="hallno" placeholder="Hall number">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
<!--                <input id="purpose" type="text" class="form-control" name="purpose" placeholder="Purpose">-->
               <textarea class="form-control" rows="2" name="purpose" placeholder="Purpose"></textarea>
            </div>
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                <input  type="number" class="form-control" name="strength" placeholder="Approx Strength">
            </div>
            

            
           <div class="input-group"> <!-- Date input -->
<!--                <label class="control-label" for="date">Date</label>-->
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input class="form-control" name="date" placeholder="MM/DD/YYY" type="text"/>
           </div>
        
           <div class="input-group">
                 
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <input type="text" id="t1" name="fromtime" data-format="hh:mm A" class="form-control" placeholder="From">
            </div>
            
             <div class="input-group">
                 
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <input type="text" id="t2" name="totime" data-format="hh:mm A" class="form-control" placeholder="To">
            </div>
            <button type="submit" class="btn btn-md btn-primary btn-block" value="Generate"> Generate</button>
            <script>
            $(function(){
                    $('#t1').clockface();  
                });         
            </script>
            <script>
            $(function(){
                    $('#t2').clockface();  
                });         
            </script>
            
        </form>
        </div>
        </div>
    </div>
</body>

</html>
<?php ob_end_flush(); ?>