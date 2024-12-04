<!-- link to database -->

<?php
    try{
        $db = new PDO("mysql:dbname=try","root","");
    }catch(PDOException $e){
    ?>
        <p>Sorry, a database eooro occured. Please try again later.</p>
        <p>(Error details: <?= $e->getMessage()?>)</p>
    <?php
    }
?>