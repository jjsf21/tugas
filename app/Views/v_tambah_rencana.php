<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_rencana')?>" method="post">
                <h1></h1>
        
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama Rencana<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_rencana" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_rencana" required="required" placeholder="Nama Rencana">
          </div>
        </div>
          <div class="item form-group">
          <label class="control-label col-12" >Tanggal Rencana<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal_rencana" name="tanggal_rencana" placeholder="Tanggal Rencana" required="required" class="form-control col-12">
          </div>
        </div>
         <div class="item form-group">
          <label class="control-label col-12" >tujuan<span class="required"></span>
          </label>
          <div class="col-12">
          <input type="text" id="tujuan" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="tujuan" required="required" placeholder="Tujuan">
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
            </div>