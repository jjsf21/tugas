<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_penerimaan_pegawai')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_penerima ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Nama Pegawai<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai" required="required" class="form-control col-12" value="<?= $ferdi->nama_pegawai?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Status Penerimaan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="status_penerimaan" name="status_penerimaan" placeholder="Status Penerimaan" required="required" class="form-control col-12" value="<?= $ferdi->status_penerimaan?>">
          </div>
        </div>


       <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/penerimaan_pegawai" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
