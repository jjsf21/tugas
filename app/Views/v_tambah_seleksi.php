<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_seleksi')?>" method="post">
                <h1></h1>
        

         <div class="item form-group">
          <label class="control-label col-12" >Nama Pegawai<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai" required="required" class="form-control col-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Seleksi<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal_seleksi" name="tanggal_seleksi" placeholder="Tanggal Seleksi" required="required" class="form-control col-12">
          </div>
        </div>
          <div class="item form-group">
          <label class="control-label col-12" >Lokasi<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="lokasi" name="lokasi" placeholder="lokasi" required="required" class="form-control col-12">
          </div>
        </div>



        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/seleksi" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>