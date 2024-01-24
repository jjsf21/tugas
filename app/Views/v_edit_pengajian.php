<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pengajian')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_pengajian ?>">
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" name="nama" placeholder="Nama" required="required" class="form-control col-12" value="<?= $ferdi->nama?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Gajian<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal_gajian" name="tanggal_gajian" placeholder="Tanggal Gajian" required="required" class="form-control col-12" value="<?= $ferdi->tanggal_gajian?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nominal<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nominal" name="nominal" placeholder="Nominal" required="required" class="form-control col-12" value="<?= $ferdi->nominal?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Catatan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="catatan" name="catatan" placeholder="Catatan" required="required" class="form-control col-12" value="<?= $ferdi->catatan?>">
          </div>
        </div>


       <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pengajian" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
