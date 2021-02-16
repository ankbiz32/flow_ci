

    <section class="hero-sec">
        <div class="container">
            <div class="intro">
                <h1>Welcome to our blog</h1>
                <h4></h4>
                <p class="mt-4 mb-5 mx-auto">It all began with a question, ‘What was something that was not a part of my education, but I wish it was!’</p>
                <a href="#about" id="nextPage" class="link">
                    <small class="text-dark">READ MORE</small>
                    <div class="mouse">
                        <span class="m_scroll_arrows unu"></span>
                        <span class="m_scroll_arrows doi"></span>
                        <span class="m_scroll_arrows trei"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="blobs">
            <div class="blob-baige"></div>
            <div class="blob-pink"></div>
            <div class="blob-teal"></div>
            <div class="blob-yellow"></div>
        </div>
    </section>

    <style>
        body{
            overflow: unset;
        }
    </style>

    <main class="all-blogs">
        <div class="container">
            <div class="row ">
                <div class="col-md-8">
                    <div class="row">
                        <?php foreach($blogs as $b){?>
                            <div class="col-md-6 mb-5">
                                <div onclick="redirectTo('<?=base_url('blog/').$b->id.'/'.$b->url_slug?>')" class="blog-card card mb-4 border-0 h-100" style="color:#222">
                                    <img class="card-img-top" src="<?=base_url()?>assets/images/<?=$b->img?>" style="object-fit: cover;" height="200" alt="image">
                                    <div class="card-body">
                                        <h5 class="mb-2"><strong><?=$b->heading?></strong></h5>
                                        <small class="text-muted">Category: <a href="<?=base_url('blog/category/').$b->cat_id.'/'.$b->category?>" class="cat-link"><?=$b->category?></a></small>
                                        <br>
                                        <small class="text-muted">Posted on: <?=date('d-m-Y',strtotime($b->date))?></small>
                                        <p class="card-text text-black mt-2"><?=(strlen($b->short_descr) > 100) ? substr($b->short_descr,0,100).'...' :$b->short_descr?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="<?=base_url('blog/').$b->id.'/'.$b->url_slug?>" class="btn btn-sm btn-outline-dark">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
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
            
            <?php if(isset($pages) && $pages!=''){?>
                <p class="page-no">Go to page  : &emsp; <?php echo $pages; ?></p>
            <?php }?>
        </div>
    </main>

    <script>
        function redirectTo(sUrl) {
            window.location = sUrl
        }
    </script>