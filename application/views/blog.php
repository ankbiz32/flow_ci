

<section class="blog-main">
    <div class="wrapper">
        <div class="blog-contents">
            <div class="blog-contents-inner">
                <?php 
                    $blogset = $blogData['results'];
                    if($blogset){
                    foreach($blogset as $datas){
                ?>
                <div class="blog-post">
                    <div class="post-img" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?=base_url()?>assets/images/<?=$datas->img?>') center no-repeat; background-size: cover;"><a href="<?=base_url('Home/blog_post/').$datas->bid?>#main"></a> </div>
                    <div class="post-content">
                        <h3 class="post-head slab">
                            <a href="<?=base_url('Home/blog_post/').$datas->bid?>#main" class="txt-black"><?=$datas->heading?></a>
                        </h3>
                        <p class="post-info">
                            <span class="post-date"><i class="far fa-calendar"></i>&nbsp;<?=date('d-m-Y',strtotime($datas->date))?></span>
                            <!-- <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fdigikraftsocial.com%2FBlog%2Fblog_post%2F<?=$datas->bid?>&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->

                        </p>
                    </div>    
                </div>
                <?php }}?>
            </div>
            <?php if($blogData['links']){?>
                <p class="page-no">Go to page  : &emsp; <?php echo $blogData['links']; ?></p>
            <?php }?>
        </div>

    