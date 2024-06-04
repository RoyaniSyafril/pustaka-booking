<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">

            <form action="<?= base_url('buku'); ?>" method="post">
                <div class="form-group">
                    <label for="judul_buku">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku">
                </div>
                <div class="form-group">
                    <label for="id_kategori">Id kategori</label>
                    <input type="text" class="form-control" id="id_kategori" name="id_kategori">
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                </div>
                <div class="form-group">
                    <label for="isbn">isbn</label>
                    <input type="text" class="form-control" id="isbn" name="isbn">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
                <div class="form-group">
                    <label for="dipinjam">dipinjam</label>
                    <input type="text" class="form-control" id="dipinjam">
                </div>
                <div class="form-group">
                    <label for="dibooking">dibooking</label>
                    <input type="text" class="form-control" id="diboking" name="diboking">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> EDIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->