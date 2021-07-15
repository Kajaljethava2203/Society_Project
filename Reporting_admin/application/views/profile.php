<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <?php include "components/header.php"; ?>
    <?php linkCSS("assets/css/dataTables.bootstrap4.min.css");?>
</head>
<body>
<?php include "components/nav.php"; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
        <?php include "components/messages.php"; ?>

        <?php include "components/datatable.php"; ?>


          
         </div>

    </div>

</div>
<?php include "components/footer.php"; ?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<?php linkCSS("assets/js/jquery.dataTable.min.css");?>
<?php linkCSS("assets/js/dataTable.bootstrap4.min.css");?>



    
</body>
</html>