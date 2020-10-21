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
<script type="text/javascript">
    function loadData() {
        $.ajax({ //create an ajax request to display.php
            method: "post",
            url: "http://localhost/aweb/model/dataBarang.php",
            success: function(data) {
                $("#dataBarang").html(data);
            }
        });
    };

    function konfirmasi(yakin) {
        var yakin = confirm("Apakah anda yakin ingin mengunjungi Rafli");
        if (yakin) {
            window.location = "https://www.petanikode.com";
        } else {
            document.write("Baiklah tetap di sini saja !");
        }
    }

    //konfirmasi(yakin);

    function dialog() {
        var totalBelanja = prompt("Total Belanja ?", 0);
        if (totalBelanja > 100000) {
            document.write("Selamat anda mendapat hadiah !!\n");
        }
        document.write("Terima kasih Sudah belanja d Toko Kami");

    }

    function konrf() {
        var pertanyaan = confirm("Apakah kamu berumur diatas 18 tahun?");
        var hasil = pertanyaan ? "Selamat datang" : "Kamu tidak boleh di sini";
        document.write(hasil);
    }
    //dialog();
</script>
</body>

</html>