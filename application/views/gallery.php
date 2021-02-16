

    <section class="hero-sec sub-page gallery-hero-sec pb-sm-5 pb-0">
        <div class="container">
            <div class="intro">
                <h1 class="mb-2">Gallery </h1>
                <p class="mt-4 mb-5 mx-auto">Experience tapping into the Flow with some stills and glimpses of our programs</p>
            </div>
        </div>
        <div class="blobs">
            <div class="blob-pink"></div>
            <div class="blob-baige"></div>
        </div>
    </section>

    <section class="gallery-sec gallery-sec-main" id='gallery'>
        <!-- <div class="blobs">
            <div class="blob-baige"></div>
            <div class="blob-teal"></div>
            <div class="blob-pink"></div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row content">
                        <a class="col-sm-4 spotlight">
                            <iframe src="https://www.youtube.com/embed/pZATNcM3yQY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </a>
                        <?php foreach($gallery as $g){
                            if($g->img_or_vid=='vid'){?>
                                <a class="col-sm-4 spotlight">
                                    <iframe src="<?=$g->img_src?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </a>
                            <?php } else{?>
                                <a href="<?=base_url('assets/images/').$g->img_src?>" class="col-sm-4 spotlight">
                                    <img src="<?=base_url('assets/images/').$g->img_src?>" alt="">
                                </a>
                            <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
