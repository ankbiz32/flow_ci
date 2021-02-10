
<link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.min.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/css/owl.theme.default.min.css')?>">

<!-- Hero -->
<div class="hero2">
    <div class="overlay"></div>
    <div class="wrapper">
        <?php $this->load->view('nav'); ?>
        <div class="welcome">
            <h1 class="DKSBhead">Digi Kraft Social <span class='blog-head-text'>&nbsp;Blog&nbsp;</span></h1>
        </div>
    </div> <!-- Wrapper ends -->
</div> <!-- Hero ends -->


<section class="blog-hero">
    <div class="wrapper">
        <div class="caro owl-carousel" id="caro">
            <?php foreach($blogs as $blog){
                if($blog->featured=='1'){?>
                    <div class="featured item" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.5) ), url(<?=base_url()?>assets/images/<?=$blog->img?>) center no-repeat; background-size: cover;">
                        <span class="feat-txt">FEATURED</span>
                        <div class="block-content">
                            <a href="<?=base_url('Blog?category=').$blog->category?>" class="post-category">
                            <?=$blog->category?>
                            </a>
                            <h3 class="post-head">
                            <a href="<?=base_url('Blog/blog_post/').$blog->bid?>"> <?=$blog->heading?></a>
                            </h3>
                            <p class="post-info">
                                <span class="posted-by"> <i class="far fa-user"></i>&nbsp; <?=$blog->author?></span>
                                <span class="post-date"> <i class="far fa-calendar"></i>&nbsp; <?=date('d-m-Y',strtotime($blog->date))?></span>
                            </p>
                        </div>
                    </div>
                    <!-- <div class="featured item" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.5) ), url(assets/images/smm.png) center no-repeat; background-size: cover;">
                        <span class="feat-txt">FEATURED</span>
                        <div class="block-content">
                            <a href="" class="post-category">
                                Social Media
                            </a>
                            <h3 class="post-head">
                            <a href="#">Pressure of social Media marketing on Big companies</a>
                            </h3>
                            <p class="post-info">
                                <span class="posted-by"> <i class="far fa-user"></i>&nbsp; Ankur</span>
                                <span class="post-date"> <i class="far fa-calendar"></i>&nbsp; 10-05-2019</span>
                            </p>
                        </div>
                    </div>-->
            <?php }
            }?>
        </div>
        <div class="recent-blocks">
            <?php if(isset($blogs[0])){?>
                <div class="upper-blocks">
                    <div class="upleft-block" onclick="redirectTo('<?=base_url()?>/Blog/blog_post/<?=$blogs[0]->bid?>')" style="background:linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.5) ), url('<?=base_url()?>assets/images/<?=$blogs[0]->img?>') center no-repeat; background-size: cover;">
                        <div class="block-content">
                            <a href="<?=base_url('Blog?category=').$blogs[0]->category?>" class="post-category">
                            <?=$blogs[0]->category?>
                            </a>
                            <h4 class="post-head">
                                <a href="<?=base_url('Blog/blog_post/').$blogs[0]->bid?>"> <?=$blogs[0]->heading?></a>
                            </h4>
                            <p class="post-info">
                                <span class="posted-by"> <i class="far fa-user"></i>&nbsp; <?=$blogs[0]->author?></span>
                                <span class="post-date"> <i class="far fa-calendar"></i>&nbsp; <?=date('d-m-Y',strtotime($blogs[0]->date))?></span>
                            </p>
                        </div>
                    </div>
                    <?php if(isset($blogs[1])){?>
                        <div class="upright-block" onclick="redirectTo('<?=base_url()?>/Blog/blog_post/<?=$blogs[1]->bid?>')" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.5) ), url('<?=base_url()?>assets/images/<?=$blogs[1]->img?>') center no-repeat; background-size: cover;">
                            <div class="block-content">
                                <a href="<?=base_url('Blog?category=').$blogs[1]->category?>" class="post-category">
                                <?=$blogs[1]->category?>
                                </a>
                                <h4 class="post-head">
                                    <a href="<?=base_url('Blog/blog_post/').$blogs[1]->bid?>"><?=$blogs[1]->heading?></a>
                                </h4>
                                <p class="post-info">
                                    <span class="posted-by"> <i class="far fa-user"></i>&nbsp; <?=$blogs[1]->author?></span>
                                    <span class="post-date"> <i class="far fa-calendar"></i>&nbsp; <?=date('d-m-Y',strtotime($blogs[1]->date))?></span>
                                </p>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="lower-blocks">
                    <?php if(isset($blogs[2])){?>
                        <div class="lowleft-block" onclick="redirectTo('<?=base_url()?>/Blog/blog_post/<?=$blogs[2]->bid?>')" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.5) ), url('<?=base_url()?>assets/images/<?=$blogs[2]->img?>') center no-repeat; background-size: cover;">
                            <div class="block-content">
                                <a href="<?=base_url('Blog?category=').$blogs[2]->category?>" class="post-category">
                                <?=$blogs[2]->category?>
                                </a>
                                <h4 class="post-head">
                                    <a href="<?=base_url('Blog/blog_post/').$blogs[2]->bid?>"><?=$blogs[2]->heading?></a>
                                </h4>
                                <p class="post-info">
                                    <span class="posted-by"> <i class="far fa-user"></i>&nbsp; <?=$blogs[2]->author?></span>
                                    <span class="post-date"> <i class="far fa-calendar"></i>&nbsp;<?=date('d-m-Y',strtotime($blogs[2]->date))?></span>
                                </p>
                            </div>
                        </div>
                    <?php }?>
                    <?php if(isset($blogs[3])){?>
                        <div class="lowright-block" onclick="redirectTo('<?=base_url()?>/Blog/blog_post/<?=$blogs[3]->bid?>')" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.5) ), url('<?=base_url()?>assets/images/<?=$blogs[3]->img?>') center no-repeat; background-size: cover;">
                            <div class="block-content">
                                <a href="<?=base_url('Blog?category=').$blogs[3]->category?>" class="post-category">
                                <?=$blogs[3]->category?>
                                </a>
                                <h4 class="post-head">
                                    <a href="<?=base_url('Blog/blog_post/').$blogs[3]->bid?>"><?=$blogs[3]->heading?></a>
                                </h4>
                                <p class="post-info">
                                    <span class="posted-by"> <i class="far fa-user"></i>&nbsp; <?=$blogs[3]->author?></span>
                                    <span class="post-date"> <i class="far fa-calendar"></i>&nbsp;<?=date('d-m-Y',strtotime($blogs[3]->date))?></span>
                                </p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>
</section>

<section class="blog-main">
    <div class="wrapper">
        <div class="blog-contents">
            <?php 
                if($blogsByCatg!='0'){
                    $blogset = $blogsByCatg;
                }
                else{
                    $blogset = $blogs;
                }
                foreach($blogset as $blog){
            ?>
            <div class="blog-post">
                <div class="post-img" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?=base_url()?>assets/images/<?=$blog->img?>') center no-repeat; background-size: cover;"><a href="<?=base_url('Blog/blog_post/').$blog->bid?>"></a> </div>
                <div class="post-content">
                    <a href="<?=base_url('Blog?category=').$blog->category?>" class="post-category"><?=$blog->category?> </a>
                    <h3 class="post-head">
                        <a href="<?=base_url('Blog/blog_post/').$blog->bid?>" class="txt-black"><?=$blog->heading?></a>
                    </h3>
                    <p class="post-info">
                        <span class="posted-by"><i class="far fa-user"></i>&nbsp;<?=$blog->author?></span>
                        <span class="post-date"><i class="far fa-calendar"></i>&nbsp;<?=date('d-m-Y',strtotime($blog->date))?></span>
                    </p>
                </div>    
            </div>
            <?php }?>
        </div>

        <aside class="blog-sidebar">
            <div class="recent">
                <h4>Recent Posts : <span class="sidebar-green-line"></span></h4>
                <?php $c=0; 
                while($c<3){
                    if( isset($blogs[$c]) ){?>
                        <a href="<?=base_url('Blog/blog_post/').$blogs[$c]->bid?>" class="recent-post">
                            <img src='<?=base_url()?>assets/images/<?=$blogs[$c]->img?>' alt="<?=$blogs[$c]->category?>">
                            <div class="recent-content">
                                <h5><?=$blogs[$c]->heading?></h5>
                                <p class="post-info">
                                    <span class="posted-by"><i class="far fa-user"></i>&nbsp;<?=$blogs[$c]->author?></span>
                                    <span class="post-date"><i class="far fa-calendar"></i>&nbsp;<?=date('d-m-y',strtotime($blogs[$c]->img))?></span>
                                </p>
                            </div>
                        </a>
                    <?php }
                    $c++;
                }?>
                <!-- <a href="#" class="recent-post">
                    <img src='assets/images/creative design.jpg' alt="Creative">
                    <div class="recent-content">
                        <h5>Overcoming the pressure of writing</h5>
                        <p class="post-info">
                            <span class="posted-by"><i class="far fa-user"></i>&nbsp;Vikas</span>
                            <span class="post-date"><i class="far fa-calendar"></i>&nbsp;18-02-2019</span>
                        </p>
                    </div>
                </a>-->
            </div>

            <div class="blog-categories">
                <h4>Categories : <span class="sidebar-green-line"></span></h4>
                <div class="sidebar-cat-flexed">
                    <?php $f=0; while($f<4){?>
                    <a href="<?=base_url('Blog?category=').$blogCategories[$f]->category?>" class="sidebar-category">- <?=$blogCategories[$f]->category?></a>
                    <?php $f++;}?>
                </div>
                <a href="<?=base_url('Blog/categories')?>" class="sidebar-category all-categ-link">See all →</a>
            </div>
        </aside>
    </div>

</section>


<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>

<script type="text/javascript">
    // page redirection
        function redirectTo(sUrl) {
            window.location = sUrl
        }

    // owl carousel init & options
        var catg = $('#caro');
        catg.owlCarousel({
            // margin: 10,
            loop: true,
            nav: true,
            // stagePadding: 50,
            responsiveRefreshRate:5,
            navSpeed:50,
            autoplay:true,
            autoplayHoverPause:true,
            // autoplayTimeout:5000,
            dots: false,
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1
                },
                700: {
                    items: 1
                },
                1500: {
                    items: 1
                }
            }
        })
</script>
