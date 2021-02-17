
    <section class="hero-sec blog-post-hero">
        <div class="bg-img" style="background:linear-gradient(rgba(255,255,255,0.6),rgba(255,255,255,0.6)) , url('<?=base_url()?>assets/images/<?=$blog->img?>')"></div>
        <div class="container">
            <div class="intro">
                <h1><?=$blog->heading?></h1>
                <h4></h4>
                <p class="mt-4 mb-5 mx-auto"></p>
                <a href="#post" id="nextPage" class="link">
                    <small class="text-dark">READ THIS BLOG</small>
                    <div class="mouse">
                        <span class="m_scroll_arrows unu"></span>
                        <span class="m_scroll_arrows doi"></span>
                        <span class="m_scroll_arrows trei"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="blobs">
            <div class="blob-pink"></div>
        </div>
    </section>

    <style>
        body{
            overflow: unset;
        }
        article *{
            font-family: "poppins" , 'Segoe UI', Tahoma, Verdana, sans-serif !important;
        }
    </style>

    <main class="all-blogs" id="post">
        <div class="container">
            <div class="row ">
                <div class="col-md-8">
                    <div class="post-content pr-sm-5">
                        <h2 class="mb-3"><strong><?=$blog->heading?></strong></h2>
                        <p><?=$blog->short_descr?></p>
                        <div class="row mb-4">
                            <div class="col-sm-5">
                                <div class="text-muted"><i class="fa fa-list"> </i>&nbsp; category : <a href="<?=base_url('blog/category/').$blog->cat_id.'/'.$blog->category?>" class="cat-link"><?=$blog->category?></a></div>
                                <div class="text-muted"><i class="far fa-calendar-alt"> </i>&nbsp; Posted on : <?=date('d-m-Y',strtotime($blog->date))?></div>
                            </div>
                            <div class="col-sm-7 mt-sm-0 mt-3 text-sm-right">
                                <div class="a2a">
                                    <?php $url=base_url('blog/').$blog->id.'/'.$blog->url_slug?>
                                    <a href="https://www.addtoany.com/add_to/facebook?linkurl=<?=$url?>&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/facebook.svg" width="32" height="32" style="background-color:#333"></a>
                                    <a href="https://www.addtoany.com/add_to/twitter?linkurl=<?=$url?>&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg" width="32" height="32" style="background-color:#333"></a>
                                    <a href="https://www.addtoany.com/add_to/whatsapp?linkurl=<?=$url?>&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/whatsapp.svg" width="32" height="32" style="background-color:#333"></a>
                                    <a href="https://www.addtoany.com/add_to/telegram?linkurl=<?=$url?>&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/telegram.svg" width="32" height="32" style="background-color:#333"></a>
                                    <a href="https://www.addtoany.com/add_to/copy_link?linkurl=<?=$url?>&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/link.svg" width="32" height="32" style="background-color:#333"></a>
                                </div>
                                <!-- <div class="a2a_kit a2a a2a_kit_size_32 a2a_default_style" data-a2a-url="<?=$url?>">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_whatsapp"></a>
                                    <a class="a2a_button_telegram"></a>
                                    <a class="a2a_button_copy_link"></a>
                                </div>
                                <script>
                                    var a2a_config = a2a_config || {};
                                    a2a_config.onclick = 1;
                                </script>
                                <script async src="https://static.addtoany.com/menu/page.js"></script> -->
                            </div>
                        </div>
                        <img class="post-img" src="<?=base_url()?>assets/images/<?=$blog->img?>" alt="">
                        <article class="mt-4 mb-4">
                            <?=$blog->content?>
                        </article>
                        <p class="tag-list mb-5">
                            <i class="fa fa-tag"></i> <strong>Tags:</strong> &nbsp;  
                            <?php $tags=explode('|',$blog->tags);
                                $lastKey = array_key_last($tags);
                            foreach($tags as $k=>$v){ 
                                if($k == $lastKey) {?>
                                    <a href="<?=base_url('blog/tag/').$v?>" class="mr-1"><?=$v?></a> 
                               <?php } else{?>
                                    <a href="<?=base_url('blog/tag/').$v?>" class="mr-1"><?=$v?>, </a> 
                               <?php } }?>
                        </p>

                        <a href="<?=base_url('blog')?>" class="sec-btn back-btn">← Back to blogs</a>
                    </div>
                </div>

                <div class="aside col-md-4 pr-sm-0 mt-sm-0 mt-5">
                    <div class="card">
                        <div class="card-title mb-2">
                            <p class="text-center rounded-3 font-weight-bold bg-dark text-white py-2">Recent posts</p>
                        </div>
                        <div class="card-body p-0">
                            
                        <?php foreach($recent as $r){?>
                            <a href="<?=base_url('blog/').$r->id.'/'.$r->url_slug?>" class="card-text mb-3 px-3 d-flex flex-row flex-nowrap align-items-start">
                                <img src="<?=base_url()?>assets/images/<?=$r->img?>" alt="" width="60" height="60" style="object-fit: cover;">
                                <div class="content ml-3">
                                    <h6 class="mb-1"><?=$r->heading?></h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt"> </i>&nbsp; <?=date('d-m-Y',strtotime($r->date))?></small>
                                </div>
                            </a>
                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

