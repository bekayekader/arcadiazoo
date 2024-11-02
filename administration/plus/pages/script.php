<script>
    var globalFormData = [],
        globalFiltreData = './api/home/vide',
        globalFiltre = "./api/filtre/vide"

    const _i_cookieDeConnexion = "is_co_adminARCADIA",
        _i_storageMenu = "_menuadminARCADIA",
        _i_cookieUtilisateur = "_cookieUseradminARCADIA",
        _i_cookieDroits = "_cookieDroitsadminARCADIA",
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