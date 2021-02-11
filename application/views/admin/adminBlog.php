
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="ml-2 text-dark"><i class="fas fa-blog"></i>&nbsp;&nbsp;Blogs</h4>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header row">
                <h2 class="card-title">Your blogs:</h2> <br>
                <a href="<?=base_url('Add/blog')?>" class="btn btn-primary btn-sm ml-auto">+Add new Blog</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Blog no.</th>
                      <th>Image</th>
                      <th>Heading</th>
                      <th>Posted on</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($blogs as $blog){?>
                      <tr>
                        <td class="text-center"><?=$blog->id?> </td>
                        <td><img src="<?=base_url()?>assets/images/<?=$blog->img?>" alt="img" height="80"></td>
                        <td><?=$blog->heading?></td>
                        <td><?=date('d-m-Y',strtotime($blog->date))?></td>
                        <td>
                          <a href="<?=base_url('Delete/blog/'.$blog->id)?>" onclick="confirmation(event)" class="btn btn-sm del-btn btn-danger mb-1" title="Delete Blog"><i class="fa fa-trash-alt"></i></a>
                          <a href="<?=base_url('Edit/blog/'.$blog->id)?>" class="btn btn-sm btn-primary mb-1" title="Edit Blog"><i class="fa fa-edit"></i></a>
                        </td>
                      </tr>
                    <?php }?>

                    <!-- display data-->
                    
                  
                  </tbody>
                </table>

              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Init Datatable -->
<script>
  $(function () {
    $('#bookdt').DataTable({
      "aaSorting": [],
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true
    });
  });
</script>
