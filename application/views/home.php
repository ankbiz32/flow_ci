
    <?php if($popup->status==1){?>
        <script>
                $(document).ready(function(){
                    setTimeout(function () {
                        $("#adModal").modal('show');
                    }, 3000);
                });
            </script>

            <div id="adModal" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content rounded-0">
                        <div class="modal-header p-0">
                            <img src="<?=base_url()?>assets/images/<?=$popup->img_src?>" alt="" style="width: 100%; height: unset;">
                            <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
            </div>
    <?php }?>
    

    <section class="hero-sec">
        <div class="container">
            <div class="intro">
                <h1>Hi! I am&nbsp;
                    <span class="flow-mark">
                        <span class="f mr-sm-0 mr-1">f</span>
                        <span class="l mr-sm-0 mr-1">l</span>
                        <span class="o mr-sm-0 mr-1">o</span>
                        <span class="w mr-sm-0 mr-1">w</span>
                    </span> 
                </h1>
                <h4><span class="flow-blue">F</span>ree to <span class="flow-red">L</span>earn <span class="flow-orange">O</span>ur <span class="flow-yellow">W</span>ay</h4>
                <p class="mt-4 mb-5 mx-auto">It all began with a question, ‘What was something that was not a part of my education, but I wish it was!’</p>
                <a href="#about" id="nextPage" class="link">
                    <small class="text-dark">FLOW BELOW</small>
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

    <section class="about-sec" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <img src="<?=base_url()?>assets/images/about1.png" alt="">
                </div>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-7 mt-sm-0 mt-5 content-con">
                    <div class="content">
                        <h2 class="mb-3"> <span class="flow-mark">
                            <span class="f mr-2">f</span>
                            <span class="l mr-1">l</span>
                            <span class="o mr-1">o</span>
                            <span class="w mr-1">w</span>
                        </span> &nbsp;is... here</h2>
                        <p class="mb-4"><strong>Flow</strong> began with an idea of a world with a vision of kinder kids, emotionally learned beings, socially inclusive students with a sense of community spirit, humane communication, happier folks, facilitating We(s) in the world of I(s) and of people in touch with their inner world with all of its landscapes, flowers, dreams and power. With research of over 1 year, we have wrapped it all up in our program,' Free to Learn Our Way'</p>
                        <a href="<?=base_url('about-us')?>" class="sec-btn">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="events-sec" id='events'>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 heading">
                    <h1>CURRENT EVENTS</h1>
                    <a href="<?=base_url('events')?>" class="sec-btn">SEE ALL</a>
                </div>
                <div class="col-sm-10">
                    <div class="row justify-content-between">
                    <?php foreach($events as $e){?>
                        <div class="col-sm-5 mb-4 content">
                            <div class="blob-bg">
                            </div>
                            <h4><?=$e->heading?></h4>
                            <p class="mb-2"><?=$e->short_descr?></p>
                            <small class="d-block"><i class="fa fa-map-marker-alt"></i> <?=$e->venue?></small>
                            <small class="d-block mt-1"><i class="fa fa-calendar-alt"></i> <?=$e->date?></small>
                            <button type="button" class="sec-btn d-inline-block mt-4 mb-3 dtl-btn"  data-id="<?=$e->id?>">
                                DETAILS
                            </button>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-sec" id='gallery'>
        <div class="blobs">
            <div class="blob-baige"></div>
            <div class="blob-teal"></div>
            <div class="blob-pink"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 heading">
                    <h1>OUR GALLERY</h1>
                    <a href="<?=base_url('gallery')?>" class="sec-btn">SEE ALL</a>
                </div>
                <div class="col-sm-10">
                    <div class="row no-gutters content">
                        <a href="<?=base_url()?>assets/images/12.jpeg" class="col-sm-4 spotlight">
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

    <section class="feedbacks-sec" id='feedbacks'>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 heading">
                    <h1>FEEDBACKS</h1>
                </div>
                <div class="col-sm-10">
                    <div class="feedback-container owl-carousel owl-theme">

                        <?php foreach($feedbacks as $f){?>
                            <div class="feedback wow slideInRight" data-wow-offset="200">
                                <h3 class="sans"><?=$f->name?></h3>
                                <em>- <?=$f->help_text?></em>
                                <div class="rating"></div>
                                <p class="msg">
                                    <?=$f->message?>
                                </p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
