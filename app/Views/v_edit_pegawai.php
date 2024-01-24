<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pegawai')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_pegawai ?>">
        
        
        <div class="item form-group">
          <label class="control-label col-12" >NIK<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nik" name="nik" placeholder="NIK" required="required" class="form-control col-12" value="<?= $ferdi->nik?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nama Pegawai<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" name="nama" placeholder="Nama Pegawai" required="required" class="form-control col-12" value="<?= $ferdi->nama?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Jenis Kelamin<span class="required"></span>
          </label>
          <div class="col-12">
            <select id="jk" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jk" required="required">
              <option value="<?= $ferdi->jk?>"><?= $ferdi->jk; ?></option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tempat Tanggal Lahir<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir" required="required" class="form-control col-12" value="<?= $ferdi->ttl?>">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >Alamat<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat" name="alamat" placeholder="Alamat" required="required" class="form-control col-12" value="<?= $ferdi->alamat?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Email<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="email" name="email" placeholder="Email" required="required" class="form-control col-12" value="<?= $ferdi->email?>">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >No Telp<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="no_telp" name="no_telp" placeholder="No Telp" required="required" class="form-control col-12" value="<?= $ferdi->no_telp?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Status Pegawai<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="status_pegawai" name="status_pegawai" placeholder="Status Pegawai" required="required" class="form-control col-12" value="<?= $ferdi->status_pegawai?>">
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
