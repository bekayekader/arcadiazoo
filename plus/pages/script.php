<script>
    var globalFormData = [],
        globalFiltreData = './api/home/vide',
        globalFiltre = "./api/filtre/vide"

    const _i_cookieDeConnexion = "is_co_JOB",
        _i_storageMenu = "_menuJOB",
        _i_cookieUtilisateur = "_cookieUserJOB",
        _i_cookieDroits = "_cookieDroitsJOB",
        _i_homePage = "home",
        _i_loginPage = "login"
</script>
<!-- JQUERY -->
<script src="./assets/js/jquery.min.js"></script>
<?php
$dossier = "./assets/js/indispensables";
$scandir = scandir($dossier);
foreach ($scandir as $fichier) {
    if ($fichier != '.' && $fichier != '..' && substr($fichier, mb_strlen($fichier) - 3) == ".js")
        //  echo "$dossier/$fichier <br>";
        echo '<script src="' . "$dossier/$fichier" . '?' . time() . '"></script>
        ';
}

?>

<script>
    moment.locale('fr')
</script>
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

<?php
$dossier = "./assets/js/fonctions";
$scandir = scandir($dossier);
foreach ($scandir as $fichier) {
    $ext__ = explode(".", $fichier);
    if ($fichier != '.' && $fichier != '..' && end($ext__) == "js")
        //  echo "$dossier/$fichier <br>";
        echo '<script src="assets/js/fonctions/' . $fichier . '?' . time() . '"></script>';
}
?>