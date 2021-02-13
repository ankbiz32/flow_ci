<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-selection__choice__display{
    color:black !important;      
    }
</style>

<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="ml-2 text-dark"><?= isset($blog) ? '<i class="fas fa-edit"></i>&nbsp;&nbsp;Edit blog' : '+&nbsp;&nbsp;Add blog' ?></h4>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
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
                    <form role="form" method="post" action="<?= isset($blog) ? base_url('Edit/updateBlog/'.$blog->id) : base_url('Add/saveBlog') ?>" enctype="multipart/form-data">
                        
                     <?php if(isset($blog)){?>
                        <p><strong>Current image :</strong> <img src="<?=base_url('assets/images/').$blog->img?>" alt="" width="90"></p>   
                     <?php }?>   
                        <div class="row mb-4">
                            <div class="form-group col-md-6">
                                <label for="img" class="text-sm mr-2 pt-2">Image <?= isset($blog) ? '' : '<span class="text-danger">*</span>' ?> :</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img" <?= isset($blog) ? '' : 'required' ?>>
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date" class="text-sm mr-2 pt-2">Date <span class="text-danger">*</span> :</label>
                                <input type="date" value="<?= isset($blog) ? date('Y-m-d',strtotime($blog->date)) : '' ?>" class="form-control" name="date" id="date" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="category_id" class="text-sm mr-2 pt-2">Category <span class="text-danger">*</span> :</label>
                                <select name="category_id" class="form-control" id="category_id" required>
                                    <option value="">-- Select any category --</option>
                                    <?php foreach($categories as $cat){?>
                                        <option value="<?=$cat->id?>" <?=isset($blog)?( $blog->category_id==$cat->id?' selected':'' ):''?>><?=$cat->category?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date" class="text-sm mr-2 pt-2">Tags (optional) :</label>
                                <select name="tags[]" id="tags" class="form-control" multiple>
                                    <?php if(isset($blog) && $blog->tags){
                                        $tags=explode('|',$blog->tags);
                                        foreach($tags as $t){?>
                                        <option value="<?=$t?>" selected><?=$t?></option>
                                    <?php } }?>
                                
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="heading" class="text-sm mr-2 pt-2">Heading <span class="text-danger">*</span> :</label>
                                <input type="text" value="<?= isset($blog) ? $blog->heading : '' ?>" class="form-control" name="heading" id="heading" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="short_descr" class="text-sm mr-2 pt-2">Short description (optional) :</label>
                                <input type="text" value="<?= isset($blog) ? $blog->short_descr : '' ?>" class="form-control" name="short_descr" id="short_descr">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="editor" class="text-sm mr-2 pt-2">Blog content <span class="text-danger">*</span> :</label>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $('#tags').select2({
        tags:true
    });

    $(document).ready(function() {
        $('#editor').summernote({
            height:500
        });
    });
</script>


