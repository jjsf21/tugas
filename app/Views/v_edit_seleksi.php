<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_seleksi')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_seleksi ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Nama Pegawai<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai" required="required" class="form-control col-12" value="<?= $ferdi->nama_pegawai?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Seleksi<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal_seleksi" name="tanggal_seleksi" placeholder="Tanggal Seleksi" required="required" class="form-control col-12" value="<?= $ferdi->tanggal_seleksi?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Lokasi<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi" required="required" class="form-control col-12" value="<?= $ferdi->lokasi?>">
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
