<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fa fa-arrow-left"></i>
            </span>
        <span class="text">kembali</span>
    </a>
</div>
<div class="card-body">
<form action="simpan_catatan.php" method="post">
  <div class="form-group">
        <label>Pilih Tanggal</label>
        <input name="tanggal" type="date" reuired class="form-control" placeholder="Masukan Tanggal">
    </div>
  <div class="form-group">
        <label>Pilih Jam</label>
        <input name="jam" type="time" reuired class="form-control" placeholder="Masukan Jam">
    </div>
  <div class="form-group">
        <label>Pilih Lokasi</label>
        <input name="lokasi" type="text" reuired class="form-control" placeholder="Masukan Lokasi">
    </div>
  <div class="form-group">
        <label>Suhu Tubuh</label>
        <input name="suhu" type="text" reuired class="form-control" placeholder="Suhu Tubuh">
    </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN </button>
      <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> KOSONGKAN </button>
      
    </div>
    
</form>
</div>
</div>

