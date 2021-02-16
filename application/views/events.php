

    <section class="hero-sec">
        <div class="container">
            <div class="intro">
                <h1>Events</h1>
                <h4></h4>
                <p class="mt-4 mb-5 mx-auto">See all the events that are happening</p>
                <a href="#events" id="nextPage" class="link">
                    <small class="text-dark">SEE EVENTS</small>
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


    <section class="events-sec subpage" id='events'>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row justify-content-between">
                      <?php foreach($events as $e){?>
                          <div class="col-sm-5 mb-4 content">
                              <div class="blob-bg">
                              </div>
                              <h4><?=$e->heading?></h4>
                              <p class="mb-2"><?=$e->short_descr?></p>
                              <small class="d-block"><i class="fa fa-map-marker-alt"></i> <?=$e->venue?></small>
                              <small class="d-block mt-1"><i class="fa fa-calendar-alt"></i> <?=$e->date?></small>
                              <button type="button" class="sec-btn d-inline-block mt-4 mb-3 dtl-btn" data-toggle="modal" data-target="#eventModal" data-id="<?=$e->id?>">
                                  DETAILS
                              </button>
                          </div>
                      <?php }?>
                    </div>
                </div>
            </div>
            
            <?php if(isset($pages) && $pages!=''){?>
                <p class="page-no">Go to page  : &emsp; <?php echo $pages; ?></p>
            <?php }?>
        </div>
    </section>
    



