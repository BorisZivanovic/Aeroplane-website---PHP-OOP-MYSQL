<?php

session_start();

if (!isset($_SESSION['zaposleni'])) {
    header('Location: prijava.php');
    exit();
}
if (isset($_COOKIE["zaposleni"]))
    {
        $poruka="Ulogovani ste kao " . $_COOKIE["zaposleni"];
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Avioni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

</head>

<body>
  <?php include 'header.php' ?>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <h1>Pretraga aviona</h1>
          <label for="pretraga">Pretraga po proizvodjacu</label>
          <select class="form-control" id="pretraga">

          </select>
          <label for="sort">Sortiranje po nazivu</label>
          <select class="form-control" id="sort">
            <option value="asc">Od A do Z</option>
            <option value="desc">Od Z do A</option>
          </select>
        <hr/>
        <button onclick="pretrazi()" class="btn btn-large btn-rounded btn-color">Pretrazi</button>
      </div>

      <div class="row">
        <div class="span12">
          <div class="blank10"></div>
        </div>
      </div>

      <div class="row">
        <div class="span12" id="rezultat">

        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="assets/js/jquery.ui.totop.js"></script>
  <script src="assets/js/custom.js"></script>

    <script>
        function uveziProizvodjace() {
            $.ajax({
                url: "server_proizvodjaci.php",
                success: function (podaci) {
                    let pr = '<option value="SVI_TIPOVI">Svi tipovi</option>' + podaci; 
                    $("#pretraga").html(pr);
                    pretrazi();
                }
            });
        }
        uveziProizvodjace();

    function pretrazi() {
        var proizvodjac = $("#pretraga").val();
        var sort = $("#sort").val();
        $.ajax({
            url: "server_pretraga.php",
            data: {
                proizvodjac: proizvodjac,
                sort: sort
            },
            success: function (podaci) {
                $("#rezultat").html(podaci);
            }
        });
    }

    </script>


</body>

</html>
