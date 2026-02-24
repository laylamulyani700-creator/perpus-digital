<div class="container-fluid">
    <!--page heading-->
    <h1 class="h3 mb-4 text-gray-800">Ubah kategori Buku</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="POST">
                <?php
                    $id = $_GET['id'];    
                    if(isset($_POST['submit'])) {
                        $kategori = strtolower ($_POST['kategori']); 
                        //mengecek data kategori//
                        $cek = mysqli_query($koneksi, "SELECT * FROM kategori WHERE LOWER(kategori)='$kategori' ");
                        $chek = mysqli_num_rows($cek);
                        if($chek > 0) {
                            echo "Data yang dimasukan sudah ada";
                        } else {
                            $query = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori=$id");
                            if($query) {
                                echo '<script>alert("Update data berhasil"); </script>';
                            } else {
                                echo '<script>alert("Update data gagal"); </script>';
                            }
                        }
                    }
                ?>

                <!--form Grup-->
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Nama Kategori</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="kategori" placeholder="Masukan nama kategori" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">
                            Simpan
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Reset
                        </button>
                        <a href="?page=kategori" class="btn btn-danger">
                            kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>