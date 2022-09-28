<?php include '../view/header_mvc.php'; ?>
<div id="main">
    <h1>Database Error</h1>
    <p>There was an error connecting to the database.</p>
    
    <p>Error message: <?php echo $error_message; ?></p>
    <p>&nbsp;</p>
</div><!-- end main -->
<?php include '../view/footer_mvc.php'; ?>