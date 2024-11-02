<!DOCTYPE html>
<html lang="fr">


<?php include $P_header; ?>

<body>
    <div id="weLoad"></div>


    <?php include $P_script; ?>
    <script>
        loader('start')
        window.location.replace(_i_homePage)
    </script>

</body>


</html>