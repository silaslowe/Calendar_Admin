<?php include "admin_db.php"; ?>
<?php include "admin_functions.php"; ?>

<?php
createRows();

deleteRows();

updateTable();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_style.css">
    <title>Admin_Panel</title>
</head>
<body>
<header>
<h1>Admin-Panel</h1>
</header>
<div class="container">
  <div class="row">
    <div class="col-sm">
           <form action="admin_panel.php" method="post">
               <div class="form-group">
               <label for="month">Month</label>
               <input type="text" name="month" placeholder="Ex. 'Sept or May'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="day">Day</label>
                   <input type="text" name="day" placeholder="Ex. '06'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="day_of_week">Day of the Week</label>
                   <input type="text" name="day_of_week"  placeholder="Ex. 'Monday or Mon'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="band">Band</label>
                   <input type="text" name="band" placeholder="Ex. 'Spin Doctors'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="city">City</label>
                   <input type="text" name="city" placeholder="Ex. 'Des Moines'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="state">State</label>
                   <input type="text" name="state" placeholder="Ex. 'NM'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="country">Country</label>
                   <input type="text" name="country" placeholder="2 character code: 'Uk'"class="form-control">
               </div>
               <div class="form-group"> 
               <label for="venue">Venue</label>
                   <input type="text" name="venue" placeholder="Ex. 'Carnegie Hall'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="time">Time</label>
                   <input type="text" name="time" placeholder="Ex. '3:00am'" class="form-control">
               </div>
               <div class="form-group"> 
               <input type="submit" name="submit" value="SUBMIT" class="btn-primary" >
               </form> 
               </div>
               </div>
               <div class="col-sm">
           <form action="admin_panel.php" method="post">
               <div class="form-group">
               <label for="month">Month</label>
               <input type="text" name="month" placeholder="Ex. 'Sept or May'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="day">Day</label>
                   <input type="text" name="day" placeholder="Ex. '06'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="day_of_week">Day of the Week</label>
                   <input type="text" name="day_of_week"  placeholder="Ex. 'Monday or Mon'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="band">Band</label>
                   <input type="text" name="band" placeholder="Ex. 'Spin Doctors'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="city">City</label>
                   <input type="text" name="city" placeholder="Ex. 'Des Moines'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="state">State</label>
                   <input type="text" name="state" placeholder="Ex. 'NM'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="country">Country</label>
                   <input type="text" name="country" placeholder="2 character code: 'Uk'"class="form-control">
               </div>
               <div class="form-group"> 
               <label for="venue">Venue</label>
                   <input type="text" name="venue" placeholder="Ex. 'Carnegie Hall'" class="form-control">
               </div>
               <div class="form-group"> 
               <label for="time">Time</label>
                   <input type="text" name="time" placeholder="Ex. '3:00am'" class="form-control">
               </div>
               <div class="form-group">
               <select name="id" id="">

                 <?php
                     showAllData()
                 ?>


               </select>
               </div>

               <input type="submit" name="submit" value="UPDATE" class="btn-primary" > 
               </form> 
               </div>
               </div>
       </div>
               <br> 
               
        
           <div class="class-sm-6">
           <form action="admin_panel.php" method="post" class="d-flex justify-content-center delete-box"" >  
             
             <div class="form-group">
               <select name="id" id="">

               <?php 
               showAllData();
               ?>

               <input type="submit" name="delete" value="DELETE" class="btn-danger" >    
           </form>
           </div>
   </div>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
  
</body>
</html>