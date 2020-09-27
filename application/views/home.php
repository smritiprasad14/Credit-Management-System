<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Credit System</title>
</head>
<body>
   <div class="container">
      <center>
      <h1> Transfer Credit System </h1>
      <br>
      <br>
<table class="table-striped table" cellspacing="2">
   
    <thead>
         <tr>  
            <th> Name</th>  
            <th> Credits </th>  
            <th> View </th>  
         </tr>  
    </thead>
         <tbody> 
         <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->name;?></td>  
      
            <td><?php echo $row->credits;?></td>  
            <td><a class="btn btn-default" href="<?php echo site_url('/view/'.$row->id) ;?>"> View </a></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table> 
   </div>
</body>
</html>