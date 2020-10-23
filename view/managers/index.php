<?php
include("../templates/header.php");
include("../templates/navbar.php");
?>

<!-- cek apakah sudah login -->
<?php
session_start();

if ($_SESSION['level'] != "managers") {
    header("location:../../index.php?pesan=belum_login");
}
?>
<main>
    <?php
    include("halaman.php");
    ?>
</main>
<!-- finish content -->
<script async type="text/javascript">
    (function() {
        var burger = document.querySelector('.burger');
        var menu = document.querySelector('#' + burger.dataset.target);
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    })();
</script>
</body>

</html>