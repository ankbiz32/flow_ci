<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">

<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="ml-2 text-dark"><?= isset($blog) ? '<i class="fas fa-edit"></i>&nbsp;&nbsp;Edit blog' : '+&nbsp;&nbsp;Add blog' ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?=base_url('Admin/Blog')?>">Blogs</a></li>
                <li class="breadcrumb-item active"><?= isset($blog) ? 'Edit' : 'Add new' ?> Blog</li>
                </ol>
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
                <div class="card-body">
                    <form role="form" method="post" action="<?= isset($blog) ? base_url('Edit/Blog/'.$blog->bid) : base_url('Add/Blog') ?>" enctype="multipart/form-data">
                        <div class="row mb-4">
                            <div class="input-group col-md-6 mr-3">
                                <label for="img" class="text-sm mr-2 pt-2">Choose:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img" <?= isset($blog) ? '' : 'required' ?>>
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="featured" class="mr-1 text-sm pt-2">Featured:</label>
                                <input type="checkbox" <?php if(isset($blog) AND $blog->featured=='1'){echo 'checked';}?> name="featured" id="featured" value='1' style="width:20px; height:20px; margin-top:10px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="heading" class="text-sm mr-2 pt-2">Heading:</label>
                                <input type="text" value="<?= isset($blog) ? $blog->heading : '' ?>" class="form-control" name="heading" id="heading" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="editor" class="text-sm mr-2 pt-2">Blog content:</label>
                                <textarea name="content" id="editor"  rows="10" class="form-control"><?= isset($blog) ? $blog->content : '' ?></textarea>
                            </div>
                        </div>
                        <div class="row ml-1">
                            <a href="<?=base_url('Admin/Blog')?>" class="btn btn-secondary mr-3 col-md-2"><strong>x</strong> Cancel</a>
                            <button type="submit" class="btn btn-primary col-md-2"><?= isset($blog) ? '<i class="fa fa-recycle"></i> Update' : '<strong>+ </strong> Post' ?></button>
                        </div>
                    </form>
                
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->


<!-- Summernote Rich text editor -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>

<script>
    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(document).ready(function() {
        $('#editor').summernote();
    });
</script>


