
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="ml-2 mb-2 text-dark"><?=isset($data)? '<i class="fa fa-edit"></i>':'+'?>&nbsp;&nbsp;<?=isset($data) ? 'Edit ' : 'Add '?>Feedback</h4>
            </div><!-- /.col -->
            <div class="col-sm-6 mb-2">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/feedbacks')?>">Feedbacks</a></li>
                  <li class="breadcrumb-item active"><?=isset($data) ? 'Edit ' : 'Add '?>feedback</li>
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
                        <label for="name">Name <span class="text-danger">*</span> :</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?=isset($data->name) ? $data->name : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="help_text">Designation/Experience <span class="text-danger">*</span> :</label>
                        <input type="text" name="help_text" id="help_text" class="form-control" value="<?=isset($data->help_text) ? $data->help_text : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message <span class="text-danger">*</span> :</label>
                        <textarea name="message" id="message" class="form-control" rows="10" required><?=isset($data->message) ? $data->message : null ?></textarea>
                    </div>

                    <a href="<?=base_url('Admin/feedbacks')?>" class="btn btn-default">Cancel</a> 
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