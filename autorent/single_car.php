<?php session_start(); ?>
<?php include('config.php'); ?>
<?php include('header.php'); ?>

<!-- sisu -->
<div class="container">
    <div class="row">

        <?php
        $id = intval($_GET['id']);
        $stmt = mysqli_prepare($yhendus, "SELECT * FROM cars WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $valjund = mysqli_stmt_get_result($stmt);
        $rida = mysqli_fetch_assoc($valjund);
        // print_r($rida);
        ?>
        <div class="col">
            <h1><?php echo $rida["mark"]; ?><?php echo $rida["model"]; ?></h1>
            <p>Mootor: <?php echo $rida["engine"]; ?></p>
            <p>Kütus: <?php echo $rida["fuel"]; ?></p>
            <p>Aasta: <?php echo $rida["year"]; ?></p>
            <p>Staatus: <?php echo $rida["status"]; ?></p>
            <p>Käigukast: <?php echo $rida["transmission"]; ?></p>
            <p>Istmed: <?php echo $rida["seats"]; ?></p>
            <p class="fs-5">Hind: <?php echo $rida["price"]; ?></p>
            <a class="btn btn-dark" href="index.php">Tagasi</a>
            <a href="#" class="btn btn-dark w-100">Rendi</a>
        </div>
        <div class="col">
            <img src="https://loremflickr.com/800/500/<?php echo str_replace(" ","", $rida["mark"]); ?>" class="card-img-top img-fluid" alt="<?php echo str_replace(" ","", $rida["mark"]); ?>">
        </div>
    </div>
    
</div>
<!-- /sisu -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
  </body>
</html>