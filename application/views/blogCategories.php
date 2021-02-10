

<section class="blog-main">
    <div class="wrapper">
        <div class="blog-contents">
            <div class="blog-post category-block">
                <h3 style="text-align:left;" class="brdr-btm">Blog categories :</h3> <br>
                <div class="categories-flexed">
                    <?php foreach ($blogCategories as $blogCategory){?>
                            <p class="cat-name"><a href="<?=base_url('Blog/All_blogs/').$blogCategory->category?>" class="cat-name-link"><?=$blogCategory->category?></a></p>
                    <?php }?>
                </div>
            </div>
        </div>
