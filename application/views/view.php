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
        <br>
        <br>
      <h1> Transfer Credit System </h1>
      <br>
      <br>
    </center>
        <?php echo form_open('updatecredit'); 
         foreach ($details->result() as $row) {} ?>


        <input type="text" hidden value="<?php echo $row->id; ?>" name="id">
        <div class="form-group">
            <label> Name</label>
            <input type="text" name="name" readonly value="<?php echo $row->name; ?>">

        </div>

        <div class="form-group">
            <label> Credits </label>
            <input type="text" value="<?php echo $row->credits; ?>"   readonly>
        </div>

        <div class="form-group">
            <label>Transfer To</label>
            <select name="transfer_to">
                <?php foreach ($users->result() as $row1) {
                    if($row1->id != $row->id) {
                ?>
                <option value="<?php echo $row1->id  ?>"> <?php echo $row1->name ; ?> </option>
                <?php }} ?>
            </select>

        </div>

        <div class="form-group">
            <label>Transfer Credits</label>
            <input type="number" name="credit" > 

        </div>

        <div class="form-group">
            <button type="submit" id="register" class="btn btn-primary">Transfer </button>
        </div>
    </div>
    <?php echo form_close(); ?>




    </div>
</body>

</html>