
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="ml-2 mb-2 text-dark"><?=isset($notice)? '<i class="fa fa-edit"></i>':'+'?>&nbsp;&nbsp;<?=isset($notice) ? 'Edit ' : 'Add '?>Announcement</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 mb-2">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/Announcement')?>">Announcement</a></li>
                  <li class="breadcrumb-item active"><?=isset($notice) ? 'Edit ' : 'Add '?>Announcement</li>
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
                    <!-- <div class="row"> -->
                        <div class="form-group">
                            <label for="content">Announcement:</label>
                            <textarea class="form-control" name="content" id="content" rows="5" required><?=isset($notice->content) ? $notice->content : null ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file_or_link">Upload file or link ?</label>
                            <select name="file_or_link" id="file_or_link" class="form-control">
                              <option value="">--- Choose one ---</option>
                              <option value="f" <?php if(isset($notice->file_or_link) AND $notice->file_or_link==='f'){echo ' selected';} ?>>File</option>
                              <option value="l" <?php if(isset($notice->file_or_link) AND $notice->file_or_link==='l'){echo ' selected';} ?>>Link</option>
                            </select>
                        </div>
                        <!-- <div class="form-group" id="link_div">
                            <label for="link_src">Link:</label>
                            <input type="text" name="link_src" class="form-control" id="link_src" required>
                        </div>
                        <div class="form-group" id="file_div">
                            <label for="img">File for Announcement:</label>
                            <?php if (isset($notice->file_src) AND $notice->file_src!='_blank_'){ ?>}
                                <p class="text-muted">( Choose only if you want to change the current file )</p>
                            <?php }?>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="notice_file" name="notice_file">
                            <label class="custom-file-label" for="customFile">Choose File</label>
                            </div>
                        </div> -->
                    <!-- </div> -->
                    <a href="<?=base_url('Admin/Announcement')?>" class="btn btn-default">Cancel</a> 
                    <?php if (isset($notice)){?>
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

  $('#file_or_link').change(function(){
    if( $(this).val() == 'l'){
        $('<div class="form-group mt-4" id="link_div"><label for="link_src">Link:</label><input type="text" name="link_src" class="form-control" id="link_src" required></div>').insertAfter($("#file_or_link"));
        $("#file_div").remove();
    }else if($(this).val() == 'f'){
      $('<div class="form-group mt-4" id="file_div"><label for="img">File for Announcement:</label><?php if (isset($notice->file_src) AND $notice->file_src!='_blank_'){ ?>}<p class="text-muted">( Choose only if you want to change the current file )</p><?php }?><div class="custom-file"><input type="file" class="custom-file-input form-control" id="notice_file" name="notice_file" required><label class="custom-file-label" for="customFile">Choose File</label> </div></div>').insertAfter($("#file_or_link"));
      $("#link_div").remove();
    }
});

<?php if (isset($notice)){?>
  if( $("#file_or_link").val() == 'l'){
        $('<div class="form-group mt-4" id="link_div"><label for="link_src">Link:</label><input type="text" name="link_src" class="form-control" value="<?=$notice->link_src?>" id="link_src" ></div>').insertAfter($("#file_or_link"));
        $("#file_div").remove();
    }else if($("#file_or_link").val() == 'f'){
      $('<div class="form-group mt-4" id="file_div"><label for="img">File for Announcement:</label><?php if (isset($notice->file_src) AND $notice->file_src!='_blank_'){ ?>}<p class="text-muted">( Choose only if you want to change the current file )</p><?php }?><div class="custom-file"><input type="file" class="custom-file-input form-control" id="notice_file" name="notice_file" ><label class="custom-file-label" for="customFile">Choose File</label> </div></div>').insertAfter($("#file_or_link"));
      $("#link_div").remove();
    }
  <?php }?>

</script>
