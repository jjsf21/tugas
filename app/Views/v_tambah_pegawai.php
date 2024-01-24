<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_pegawai')?>" method="post">
                <h1></h1>
        
        <div class="item form-group">
          <label class="control-label col-12" >NIK<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nik" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nik" required="required" placeholder="Nik">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nama Pegawai<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama" required="required" placeholder="Nama">
          </div>
        </div>
       <div class="item form-group">
          <label class="control-label col-12" >Jenis Kelamin<span class="required"></span>
          </label>
          <div class="col-12">
            <select id="jk" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jk" required="required">
              <option>Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tempat Tanggal Lahir<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir" required="required" class="form-control col-12">
          </div>
        </div>
          <div class="item form-group">
          <label class="control-label col-12" >Alamat<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat" name="alamat" placeholder="Alamat" required="required" class="form-control col-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Email<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="email" name="email" placeholder="Email" required="required" class="form-control col-12">
          </div>
        </div>
          <div class="item form-group">
          <label class="control-label col-12" >No Telp<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="no_telp" name="no_telp" placeholder="No Telp" required="required" class="form-control col-12">
          </div>
        </div>
          <div class="item form-group">
          <label class="control-label col-12" >Status Pegawai<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="status_pegawai" name="status_pegawai" placeholder="Status Pegawai" required="required" class="form-control col-12">
          </div>
        </div>



        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pegawai" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>