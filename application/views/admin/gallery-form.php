
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="ml-2 mb-2 text-dark"><?=isset($data)? '<i class="fa fa-edit"></i>':'+'?>&nbsp;&nbsp;<?=isset($data) ? 'Edit ' : 'Add '?>Image</h4>
            </div><!-- /.col -->
            <div class="col-sm-6 mb-2">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/gallery')?>">Gallery</a></li>
                  <li class="breadcrumb-item active"><?=isset($data) ? 'Edit ' : 'Add '?>image</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

        <div class="row mt-2">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-body">
                <form role="form" method="post" action="<?=$submissonPath?>" enctype="multipart/form-data">
                    <div class="form-group col-sm-6" id="file_div">
                        <label for="img">Upload image:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="img" name="img" required>
                            <label class="custom-file-label" for="img">Choose File</label>
                        </div>
                    </div>
                    <a href="<?=base_url('Admin/gallery')?>" class="btn btn-default">Cancel</a> 
                    <?php if (isset($data)){?>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-recycle"></i>&nbsp;Update</button>
                    <?php } else{?>
                        <button type="submit" class="btn btn-primary">+ Add</button>
                    <?php }?>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<script>
    
// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>