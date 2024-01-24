<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_rencana')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_rencana ?>">
        
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama Rencana<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_rencana" name="nama_rencana" placeholder="Nama Rencana" required="required" class="form-control col-12" value="<?= $ferdi->nama_rencana?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Rencana<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal_rencana" name="tanggal_rencana" placeholder="Tanggal Rencana" required="required" class="form-control col-12" value="<?= $ferdi->tanggal_rencana?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tujuan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="tujuan" name="tujuan" placeholder="Tujuan" required="required" class="form-control col-12" value="<?= $ferdi->tujuan?>">
          </div>
        </div>


       <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/rencana" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
