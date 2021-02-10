        <aside class="blog-sidebar">

            <div class="recent">
                <h4 class="slab">Recent Posts &nbsp; <i class="fa fa-file"></i> : <span class="sidebar-green-line"></span></h4>
                <?php $c=0; 
                while($c<4){
                    if( isset($blogData['results'][$c]) ){?>
                        <a href="<?=base_url('Home/blog_post/').$blogData['results'][$c]->bid?>#main" class="recent-post">
                            <img src='<?=base_url()?>assets/images/<?=$blogData['results'][$c]->img?>' alt="">
                            <div class="recent-content">
                                <h5><?=$blogData['results'][$c]->heading?></h5>
                                <p class="post-info">
                                    <span class="post-date"><i class="far fa-calendar"></i>&nbsp;<?=date('d-m-y',strtotime($blogData['results'][$c]->date))?></span>
                                </p>
                            </div>
                        </a>
                    <?php }
                    $c++;
                }?>
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
</script>
