<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajement Petugas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-child"></i> Home</a></li>
        <li class="active">Petugas</li>
      </ol>
    </section>

<!-- Main content -->
<section class="content">
  <div class="callout callout-success" style="display: none">
    <h4>Selamat!</h4>
    <p>Berhasil Memperbaharui Data.</p>
  </div>
  <div class="callout callout-danger" style="display: none">
    <h4>Peringatan!</h4>
    <p></p>
  </div>
  <a href="<?php echo base_url('/petugas'); ?>" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali ke List Petugas</a>
  <form id="formInput" method="POST">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Data Petugas</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" value="<?php echo $dataPetugas['nama']; ?>" class="form-control" placeholder="Masukan nama..." required>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat..." required value="<?php echo $dataPetugas['alamat']; ?>">
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer clearfix">
        <button type="submit" class="btn btn-success">Simpan Data Petugas</button>
      </div>
    </div>
  </form>
</section>
<!-- /.content -->
<script>
$(function(){
  $("#formInput").submit(function(e){
    dataForm = $(this).serializeArray();
    $.ajax({
      method : 'POST',
      url : '<?php echo base_url("petugas/".$dataPetugas['kode_petugas']."/update");?>',
      data : dataForm,
      success : function(data){
        console.log(data);
        if(data){
          $('.callout-success').fadeIn();
          setTimeout(function(){ 
          $('.callout-success').fadeOut("slow");
          }, 3000);
        }else {
          $('.callout-danger').find('p').html("Gagal memperbaharui data");
          $('.callout-danger').fadeIn();
          setTimeout(function(){ 
          $('.callout-danger').fadeOut("slow");
          }, 3000); 
        }
      },
      error: function( json )
        {
          $('.callout-danger').find('p').html("Gagal memperbaharui data");
          $('.callout-danger').fadeIn();
          setTimeout(function(){ 
          $('.callout-danger').fadeOut("slow");
          }, 3000);          
        }
    })
    e.preventDefault();
  });
})
</script>
  </div>