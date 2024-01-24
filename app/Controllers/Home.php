<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index()
    {
  //    echo view('header');
        // echo view('menu');
        // echo view('footer');
        

        $model=new M_model();
        echo view('login');
    }

    public function aksi_login()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');
        $model = new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>$p
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {

            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');

        }else {
        return redirect()->to('/home');
    }
}

    public function log_out()
    {
        // if(session()->get('id')>0) {

         session()->destroy();
         return redirect()->to('/');

    //  }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }

    public function dashboard()
    {
        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }

    public function user()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('user');

        $id = session()->get('id');
        $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_user');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

     public function tambah_user()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('user');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_user',$kui);
        echo view('footer');
    }

    public function aksi_tambah_user()
    {
        $a= $this->request->getPost('username');
        $b= $this->request->getPost('password');
        $c= $this->request->getPost('level');
        
        $simpan=array(
            'username'=>$a,
            'password'=>$b,
            'level'=>$c
           
        );
        $model = new M_model();
        $model->simpan('user',$simpan);
        return redirect()->to('/home/user');
    }

    public function hapus_user($id)
    {
        $model = new M_model();
        $where=array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('/home/user');
    }

    public function pegawai()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('pegawai');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_pegawai');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_pegawai()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('pegawai');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_pegawai',$kui);
        echo view('footer');
    }

    public function aksi_tambah_pegawai()
    {
        $a= $this->request->getPost('nik');
        $b= $this->request->getPost('nama');
        $c= $this->request->getPost('jk');
        $d= $this->request->getPost('ttl');
        $e= $this->request->getPost('alamat');
        $f= $this->request->getPost('email');
        $g= $this->request->getPost('no_telp');
        $h= $this->request->getPost('status_pegawai');

        $simpan=array(
            'nik'=>$a,
            'nama'=>$b,
            'jk'=>$c,
            'ttl'=>$d,
            'alamat'=>$e,
            'email'=>$f,
            'no_telp'=>$g,
            'status_pegawai'=>$h

        );
        $model = new M_model();
        $model->simpan('pegawai',$simpan);
        return redirect()->to('/home/pegawai');
    }

    public function edit_pegawai($id)
    {
        $model = new M_model();
        $where=array('id_pegawai'=>$id);
        $kui['ferdi']=$model->getRow('pegawai',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_pegawai',$kui);
        echo view('footer');
    }

    public function aksi_edit_pegawai()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nik= $this->request->getPost('nik');
         $nama= $this->request->getPost('nama');
         $jk= $this->request->getPost('jk');
         $ttl= $this->request->getPost('ttl');
         $alamat= $this->request->getPost('alamat');
         $email= $this->request->getPost('email');
         $no_telp= $this->request->getPost('no_telp');
         $status_pegawai= $this->request->getPost('status_pegawai');

         $where=array('id_pegawai'=>$id);
         $simpan=array(
            'nik'=>$nik,
            'nama'=>$nama,
            'jk'=>$jk,
            'ttl'=>$ttl,
            'alamat'=>$alamat,
            'email'=>$email,
            'no_telp'=>$no_telp,
            'status_pegawai'=>$status_pegawai 
         );

         $model = new M_model();
         $model->edit('pegawai', $simpan, $where);
         return redirect()->to('/home/pegawai');
    }

    public function hapus_pegawai($id)
    {
        $model = new M_model();
        $where=array('id_pegawai'=>$id);
        $model->hapus('pegawai',$where);
        return redirect()->to('/home/pegawai');
    }

    public function rencana()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('rencana');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_rencana');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_rencana()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('rencana');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_rencana',$kui);
        echo view('footer');
    }

    public function aksi_tambah_rencana()
    {
        $a= $this->request->getPost('nama_rencana');
        $b= $this->request->getPost('tanggal_rencana');
        $c= $this->request->getPost('tujuan');

        $simpan=array(
            'nama_rencana'=>$a,
            'tanggal_rencana'=>$b,
            'tujuan'=>$c
        );
        $model = new M_model();
        $model->simpan('rencana',$simpan);
        return redirect()->to('/home/rencana');
    }

    public function edit_rencana($id)
    {
        $model = new M_model();
        $where=array('id_rencana'=>$id);
        $kui['ferdi']=$model->getRow('rencana',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_rencana',$kui);
        echo view('footer');
    }

    public function aksi_edit_rencana()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama_rencana= $this->request->getPost('nama_rencana');
         $tanggal_rencana= $this->request->getPost('tanggal_rencana');
         $tujuan= $this->request->getPost('tujuan');

         $where=array('id_rencana'=>$id);
         $simpan=array(
            'nama_rencana'=>$nama_rencana,
            'tanggal_rencana'=>$tanggal_rencana,
            'tujuan'=>$tujuan
         );

         $model = new M_model();
         $model->edit('rencana', $simpan, $where);
         return redirect()->to('/home/rencana');
    }

    public function hapus_rencana($id)
    {
        $model = new M_model();
        $where=array('id_rencana'=>$id);
        $model->hapus('rencana',$where);
        return redirect()->to('/home/rencana');
    }

    public function penerimaan_pegawai()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('penerimaan_pegawai');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_penerimaan');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_penerimaan_pegawai()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('penerimaan_pegawai');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_penerimaan_pegawai',$kui);
        echo view('footer');
    }

    public function aksi_tambah_penerimaan_pegawai()
    {
        $a= $this->request->getPost('nama_pegawai');       
        $b= $this->request->getPost('status_penerimaan');

        $simpan=array(
            'nama_pegawai'=>$a,
            'status_penerimaan'=>$b
        );
        $model = new M_model();
        $model->simpan('penerimaan_pegawai',$simpan);
        return redirect()->to('/home/penerimaan_pegawai');
    }

    public function edit_penerimaan($id)
    {
        $model = new M_model();
        $where=array('id_penerima'=>$id);
        $kui['ferdi']=$model->getRow('penerimaan_pegawai',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_penerimaan',$kui);
        echo view('footer');
    }

    public function aksi_edit_penerimaan_pegawai()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama_pegawai= $this->request->getPost('nama_pegawai');         
         $status_penerimaan= $this->request->getPost('status_penerimaan');

         $where=array('id_penerima'=>$id);
         $simpan=array(
            'nama_pegawai'=>$nama_pegawai,
            'status_penerimaan'=>$status_penerimaan
         );

         $model = new M_model();
         $model->edit('penerimaan_pegawai', $simpan, $where);
         return redirect()->to('/home/penerimaan_pegawai');
    }

    public function hapus_penerimaan($id)
    {
        $model = new M_model();
        $where=array('id_penerima'=>$id);
        $model->hapus('penerimaan_pegawai',$where);
        return redirect()->to('/home/penerimaan_pegawai');
    }

    public function seleksi()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('seleksi');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_seleksi');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_seleksi()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('seleksi');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_seleksi',$kui);
        echo view('footer');
    }

    public function aksi_tambah_seleksi()
    {
        $a= $this->request->getPost('nama_pegawai');
        $b= $this->request->getPost('tanggal_seleksi');
        $c= $this->request->getPost('lokasi');

        $simpan=array(
            'nama_pegawai'=>$a,
            'tanggal_seleksi'=>$b,
            'lokasi'=>$c

        );
        $model = new M_model();
        $model->simpan('seleksi',$simpan);
        return redirect()->to('/home/seleksi');
    }

    public function edit_seleksi($id)
    {
        $model = new M_model();
        $where=array('id_seleksi'=>$id);
        $kui['ferdi']=$model->getRow('seleksi',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_seleksi',$kui);
        echo view('footer');
    }

    public function aksi_edit_seleksi()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
        $nama_pegawai= $this->request->getPost('nama_pegawai');
         $tanggal_seleksi= $this->request->getPost('tanggal_seleksi');
         $lokasi= $this->request->getPost('lokasi');

         $where=array('id_seleksi'=>$id);
         $simpan=array(
            'nama_pegawai'=>$nama_pegawai,
            'tanggal_seleksi'=>$tanggal_seleksi,
            'lokasi'=>$lokasi

         );
         $model = new M_model();
         $model->edit('seleksi', $simpan, $where);
         return redirect()->to('/home/seleksi');
    }

    public function hapus_seleksi($id)
    {
        $model = new M_model();
        $where=array('id_seleksi'=>$id);
        $model->hapus('seleksi',$where);
        return redirect()->to('/home/seleksi');
    }

     public function pengajian()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('pengajian');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_pengajian');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_pengajian()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('pengajian');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_pengajian',$kui);
        echo view('footer');
    }

    public function aksi_tambah_pengajian()
    {
        $a= $this->request->getPost('nama');
        $b= $this->request->getPost('tanggal_gajian');
        $c= $this->request->getPost('nominal');
        $d= $this->request->getPost('catatan');

        $simpan=array(
            'nama'=>$a,
            'tanggal_gajian'=>$b,
            'nominal'=>$c,
            'catatan'=>$d

        );
        $model = new M_model();
        $model->simpan('pengajian',$simpan);
        return redirect()->to('/home/pengajian');
    }

    public function edit_pengajian($id)
    {
        $model = new M_model();
        $where=array('id_pengajian'=>$id);
        $kui['ferdi']=$model->getRow('pengajian',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_pengajian',$kui);
        echo view('footer');
    }

    public function aksi_edit_pengajian()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama= $this->request->getPost('nama');
         $tanggal_gajian= $this->request->getPost('tanggal_gajian');
         $nominal= $this->request->getPost('nominal');
         $catatan= $this->request->getPost('catatan');

         $where=array('id_pengajian'=>$id);
         $simpan=array(
            'nama'=>$nama,
            'tanggal_gajian'=>$tanggal_gajian,
            'nominal'=>$nominal,
            'catatan'=>$catatan

         );
         $model = new M_model();
         $model->edit('pengajian', $simpan, $where);
         return redirect()->to('/home/pengajian');
    }

    public function hapus_pengajian($id)
    {
        $model = new M_model();
        $where=array('id_pengajian'=>$id);
        $model->hapus('pengajian',$where);
        return redirect()->to('/home/pengajian');
    }











    public function laporan_pengajian()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        $kui['kunci']='view_pengajian';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function cari_pengajian()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi'] = $model->filter('pengajian', $awal, $akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\pengajian\public\assets\KOP_PH.jpg');

        // $kui['foto'] = base64_encode($img);


        echo view('c_p',$kui);

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function pdf_pengajian()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter('pengajian',$awal,$akhir);
        $img = file_get_contents(
            'C:\xampp\htdocs\pegawai\public\assets\KOP_PH.jpg');

        $kui['foto'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->loadHtml(view('c_p',$kui));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function excel_pengajian()
    {
    // if(session()->get('level')== 2) {

    $model=new M_model();
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter('pengajian',$awal,$akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Tanggal Gajian')
    ->setCellValue('B1', 'Catatan');
    // ->setCellValue('C1', 'Jarak')
    // // ->setCellValue('D1', 'Due Date')
    // ->setCellValue('D1', 'Suhu')
    // ->setCellValue('E1', 'Tanggal Perjalanan');

    $column=2;

    foreach($data as $data){

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->tanggal_gajian)
        ->setCellValue('B'. $column, $data->catatan);
        // ->setCellValue('C'. $column, $data->jarak)
        // // ->setCellValue('D'. $column, $data->tgl_jatuh_tempo)
        // ->setCellValue('D'. $column, $data->suhu)
        // ->setCellValue('E'. $column, $data->tanggal_perjalanan);

        // $total += $data->jumlah_gaji;

        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'Pengajian Pegawai';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
}
