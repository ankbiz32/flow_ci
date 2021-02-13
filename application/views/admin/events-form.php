<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">

<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="ml-2 mb-2 text-dark"><?=isset($data)? '<i class="fa fa-edit"></i>':'+'?>&nbsp;&nbsp;<?=isset($data) ? 'Edit ' : 'Add '?>Event</h4>
            </div><!-- /.col -->
            <div class="col-sm-6 mb-2">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/events')?>">Events</a></li>
                  <li class="breadcrumb-item active"><?=isset($data) ? 'Edit ' : 'Add '?>event</li>
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
                    <div class="form-group">
                        <label for="heading">Heading <span class="text-danger">*</span> :</label>
                        <input type="text" name="heading" id="heading" class="form-control" value="<?=isset($data->heading) ? $data->heading : '' ?>" required>
                    </div>
                    
                    <div class="form-group mb-0">
                        <label for="img" class="text-sm mr-2 pt-2">Image for event (optional):</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img" name="img">
                            <label class="custom-file-label" for="customFile">Choose image</label>
                        </div>
                    </div>
                    <?php if(isset($data)){
                        if($data->img_src){
                    ?>
                    <div class="row  mt-2">
                        <div class="col">
                            <img src="<?=base_url('assets/images/').$data->img_src?>" alt="" height="60"> <br>
                            <a href="<?=base_url('Edit/delEventImage/'.$data->id)?>" class="text-danger">x Remove this image</a>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="row mt-0">
                        <div class="col">
                            <em class="text-muted">No image was uploaded for this event</em>
                        </div>
                    </div>
                    <?php } }?>

                    <div class="row mt-4">
                        <div class="form-group col-sm-6">
                            <label for="date">Date <span class="text-danger">*</span> :</label>
                            <input type="text" name="date" id="date" class="form-control" value="<?=isset($data->date) ? $data->date : '' ?>" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="venue">Venue <span class="text-danger">*</span> :</label>
                            <input type="text" name="venue" id="venue" class="form-control" value="<?=isset($data->venue) ? $data->venue : '' ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="short_descr">Short descr. (optional):</label>
                        <input type="text" name="short_descr" id="short_descr" class="form-control" value="<?=isset($data->short_descr) ? $data->short_descr : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="full_descr">Full descr. <span class="text-danger">*</span> :</label>
                        <textarea name="full_descr" id="full_descr" class="form-control" rows="10" required><?=isset($data->full_descr) ? $data->full_descr : null ?></textarea>
                    </div>

                    <a href="<?=base_url('Admin/events')?>" class="btn btn-default">Cancel</a> 
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

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#full_descr').summernote({
            height: 300
        });
    });

    

    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

</script>
