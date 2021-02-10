

<section class="blog-main" id="main">
    <div class="wrapper">
        <div class="blog-contents">
            <div class="blog-post-individ">
                <div class="post-img post-img-individ" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url(<?=base_url()?>assets/images/<?=$blog_post->img?>) center no-repeat; background-size: cover;"> </div>
                <div class="post-content">
                     <h3 class="post-head">
                        <p class="txt-black"> <?=$blog_post->heading?></p>
                    </h3>
                    <p class="post-info">
                        <span class="post-date"><i class="far fa-calendar"></i>&nbsp;<?=date('d-m-Y',strtotime($blog_post->date))?></span>
                        <!-- <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fdigikraftsocial.com%2FBlog%2Fblog_post%2F<?=$blog_post->bid?>&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
                    </p>
                </div>
                <div class="big-content">
                    <p>
                        <?=$blog_post->content?>
                    </p>
                </div> 
                <a href="<?=base_url('Home/All_blogs/_all')?>" class="back-link">← Back to Blogs</a> 
            </div>
        </div>
