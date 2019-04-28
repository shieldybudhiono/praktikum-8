<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajement Buku
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Home</a></li>
        <li class="active">Buku</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content">
  <!-- List Data -->
  <a href="<?php echo base_url(); ?>buku/create" class="btn btn-success btn-linking">Tambah Data Buku</a>
  <div class="box" style="margin-top: 8px;">
    <div class="box-header with-border">
      <h3 class="box-title">List Buku</h3>
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
              <th>Kode Register</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($dataBuku as $buku){ ?>
              <tr>
                <td><?php echo $buku->kode_register; ?></td>
                <td><?php echo $buku->judul_buku; ?></td>
                <td><?php echo $buku->pengarang; ?></td>
                <td><?php echo $buku->penerbit; ?></td>
                <td><?php echo $buku->tahun_terbit; ?></td>
                <td>
                  <a href="<?php echo base_url('buku/'.$buku->kode_register); ?>" class='btn btn-xs btn-warning'><i class='fa fa-pencil'></i> Edit</a>
                  <button class='btn btn-xs btn-danger' onclick="deleteData(<?php echo $buku->kode_register; ?>)"><i class='fa fa-trash'></i> Delete</button>
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
  function deleteData(kode_register){
    if(confirm("Apakah anda yakin menghapus data ini ?")){
      $.ajax({
        method : 'POST',
        url : '<?php echo base_url("buku/delete");?>',
        data : {kode_register: kode_register},
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