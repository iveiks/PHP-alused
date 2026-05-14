<?php
session_start();
if (!isset($_SESSION['roll']) || $_SESSION['roll'] !== 'admin') {
  header('Location: login.php');
  exit();
  }
?>

<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!-- sisu -->
<div class="container">
    <h2>Admini ala</h2>
    <a href="lisa.php" class="btn btn-success">+ Lisa auto</a>
    <div class="row row-cols-1 row-cols-md-4 g-4">
<!-- üks auto -->
<?php
    // sõnumi kuvamine
    if(isset($_GET['msg'])){
      echo '<div class="alert alert-success" role="alert"> Kõik on hästi! </div>';
    }


  //autode kuvamine
    if (!empty($_GET["otsi"])) {
        $otsing = "%" . $_GET["otsi"] . "%";
        $stmt = mysqli_prepare($yhendus, "SELECT * FROM cars WHERE mark LIKE ? LIMIT 8");
        mysqli_stmt_bind_param($stmt, "s", $otsing);
        mysqli_stmt_execute($stmt);
        $valjund = mysqli_stmt_get_result($stmt);
    } else {
        $paring = "SELECT * FROM cars LIMIT 8";
        $valjund = mysqli_query($yhendus, $paring);
    }

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mark</th>
      <th scope="col">Mudel</th>
      <th scope="col">Kustuta</th>
      <th scope="col">Muuda</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($rida = mysqli_fetch_assoc($valjund)){       //sikutan vastuse alla
            // var_dump($rida);                       //kuvan testvastuse
    ?>
    <tr>
      <th scope="row"><?php echo $rida["id"]; ?></th>
      <td><?php echo $rida["mark"]; ?></td>
      <td><?php echo $rida["model"]; ?></td>
      <td><a href="kustuta.php?delid=<?= $rida["id"]; ?>" class="btn btn-danger">Kustuta</a></td>
      <td><a href="muuda.php?editid=<?= $rida["id"]; ?>" class="btn btn-warning">Muuda</a></td>
    </tr>

    <?php } ?>

  </tbody>
</table>

</div>
<!-- /sisu -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>