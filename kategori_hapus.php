<?php
$id = $_GET['id'];
$quary = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori=$id");
?>
<script>
    alert("Data berhasil dihapus");
    location.href = "index.php?page=kategori";
</script>