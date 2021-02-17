
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fas fa-clone nav-icon"></i> &nbsp;&nbsp;Popup Screen</h1>
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
              <div class="card-header">
                <h2 class="card-title"></h2> <br>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Popup image</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Enquiries-->
                    <?php foreach($data as $d){?>
                      <tr>
                        <td>
                            <img src="<?=base_url('assets/images/').$d->img_src?>" alt="" width="250">
                            <br><br>
                            <button class="btn  btn-outline-primary" data-toggle="modal" data-target="#image">Change image</button>
                        </td>
                        <td><?=($d->status=='1')?'<span class="text-success">ACTIVE</span>':'<span class="text-secondary">IN-ACTIVE</span>'?></td>
                        <td>
                        <?php if($d->status==1){?>
                          <a href="<?=base_url('Edit/popupStatus/'.$d->id.'/0')?>" class="btn del-btn btn-sm btn-danger mb-1" title="Change status">De-activate</a>
                        <?php } else{?>
                          <a href="<?=base_url('Edit/popupStatus/'.$d->id.'/1')?>" class="btn del-btn btn-sm btn-success mb-1" title="Change status">Activate</a>
                        <?php }?>
                        </td>
                      </tr>

                      <div class="modal fade" id="image">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Change popup image:</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="post" action="<?=base_url();?>Edit/popupImg/<?=$d->id?>" enctype="multipart/form-data">
                                
                                <div class="form-group col" id="file_div">
                                    <label for="img">Upload image:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input form-control" id="img" name="img" required>
                                        <label class="custom-file-label" for="img">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    <?php }?>
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
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Init Datatable -->
<script>
  $(function () {
    $('#bookdt').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true,
      "order": [[ 5, "asc" ]]
    });
  });
</script>
