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
  <!-- List Data -->
  <a href="<?php echo base_url(); ?>petugas/create" class="btn btn-success btn-linking">Tambah Data Petugas</a>
  <div class="box" style="margin-top: 8px;">
    <div class="box-header with-border">
      <h3 class="box-title">List Petugas</h3>
      <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool"  data-toggle="tooltip" title="Collapse">
          <i class="fa fa-refresh" onclick="refreshTable('#tableData')"></i></button>
        <button type="button" class="btn btn-box-tool" id="btn-collapse" onclick="collapseBox(this)" title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <table id="tableData" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Kode Petugas</th>
              <th>Nama Petugas</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($dataPetugas as $petugas){ ?>
              <tr>
                <td><?php echo $petugas->kode_petugas; ?></td>
                <td><?php echo $petugas->nama; ?></td>
                <td><?php echo $petugas->alamat; ?></td>
                <td>
                  <a href="<?php echo base_url('petugas/'.$petugas->kode_petugas); ?>" class='btn btn-xs btn-warning'><i class='fa fa-pencil'></i> Edit</a>
                  <button class='btn btn-xs btn-danger' onclick="deleteData(<?php echo $petugas->kode_petugas; ?>)"><i class='fa fa-trash'></i> Delete</button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
</section>
<!-- /.content -->
  </div>
  <script>
  $(function(){
    $('#tableData').DataTable();
  })
  function deleteData(kode_petugas){
    if(confirm("Apakah anda yakin menghapus data ini ?")){
      $.ajax({
        method : 'POST',
        url : '<?php echo base_url("petugas/delete");?>',
        data : {kode_petugas: kode_petugas},
        success : function(data){
          location.reload(true);
        },
        error: function( json ){
          alert("Gagal menghapus data !");
        }
      })
    }
  }
</script>