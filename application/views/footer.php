
    <section class="contact-sec" id='contact'>
        <div class="blobs">
            <div class="blob-yellow"></div>
            <div class="blob-baige"></div>
        </div>
        <div class="container">
            <div class="row flex-wrap-reverse">
               <div class="col-sm-7 form-con">
                   <h1>REACH US</h1>
                   <p>Tap in to the flow with us by sending us a message. Our team will reach out to you shortly.</p>
                   <form class="" action="<?=base_url('enquire')?>" method="POST">
                        <div class="row justify-content-between">
                            <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                <input name="name" type="text" class="" required>
                                <label for="pname">Your name *</label>
                            </div>
                            <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                <input name="org_name" type="text" required>
                                <label for="pname">Organisation name *</label>
                            </div>
                            <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                <input name="email" type="email" required>
                                <label for="pname">Email *</label>
                            </div>
                            <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                <input name="phone" type="text" required>
                                <label for="pname">Contact no. *</label>
                            </div>
                            <div class="col-12 float-group">
                                <textarea name="message" rows="4" maxlength="300"></textarea>
                                <label for="pname">Enter your message here</label>
                            <small class="d-block text-right text-muted"> (Max. 300 characters)</small>
                            </div>
                        </div>
                        <button type="submit" class="btn"> SEND MESSAGE </button>
                    </form>
               </div>
               <div class="col-sm-5 image mb-sm-0 mb-5">
                   <img src="<?=base_url()?>assets/images/5.png" alt="">
               </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="env">
            <img src="<?=base_url()?>assets/images/newsletter.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <h1>NEWSLETTER</h1>
                    <p>Subscribe to our newsletter for the latest updates.</p>
                </div>
                <div class="col-sm-6">
                    <form action="<?=base_url('subscribe')?>" method="POST">
                        <div class="input-grp">
                            <input type="email" name="email" placeholder="Enter your email here" required>
                            <button type="submit">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 mb-sm-0 mb-5">
                    <img src="<?=base_url()?>assets/images/flow-logo.png" alt="">
                </div>
                <div class="col-sm-6 mb-sm-0 mb-5">
                    <h5 class="mb-sm-4 mb-3">TAP INTO THE <span class="flow-mark ml-1">
                        <span class="f mr-1">f</span>
                        <span class="l mr-1">l</span>
                        <span class="o mr-2">o</span>
                        <span class="w ">w</span>
                    </span> &nbsp; AT:</h5>
                    <div class="row ml-0">
                        <div class="col-sm-6 info">
                            <div class="row flex-nowrap">
                                <div class=""><i class="fa fa-map-marker-alt"></i></div>
                                <div class="col">
                                    <?=nl2br($profile->address)?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 info">
                            <div class="row flex-nowrap">
                                <div class=""><i class="fa fa-phone"></i></div>
                                <div class="col">
                                    <?=$profile->phone1?>
                                    <br>
                                    <?=$profile->phone2?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 info">
                            <div class="row flex-nowrap">
                                <div class=""><i class="fa fa-envelope"></i></div>
                                <div class="col">
                                    <?=$profile->email?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="row flex-nowrap">
                                <div class="">
                                   <a target="_blank" href="<?=$profile->fblink?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408.785 408.788">
                                            <path id="facebook" d="M353.7,0H55.087A55.085,55.085,0,0,0,0,55.085V353.7a55.084,55.084,0,0,0,55.085,55.085H202.362l.251-146.078H164.662a8.954,8.954,0,0,1-8.954-8.92l-.182-47.087a8.955,8.955,0,0,1,8.955-8.989h37.882v-45.5c0-52.8,32.247-81.55,79.348-81.55h38.65a8.955,8.955,0,0,1,8.955,8.955v39.7a8.955,8.955,0,0,1-8.95,8.955l-23.719.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285a8.954,8.954,0,0,1,8.892,10.009l-5.581,47.087a8.955,8.955,0,0,1-8.892,7.9H266.323l-.251,146.078H353.7A55.084,55.084,0,0,0,408.787,353.7V55.085A55.086,55.086,0,0,0,353.7,0Z" transform="translate(-0.002)" />
                                        </svg>
                                    </a>

                                   <a target="_blank"  href="<?=$profile->instalink?>">
                                        <svg viewBox="0 0 512.00096 512.00096" xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm-117.40625 395.996094c-77.195312 0-139.996094-62.800782-139.996094-139.996094s62.800782-139.996094 139.996094-139.996094 139.996094 62.800782 139.996094 139.996094-62.800782 139.996094-139.996094 139.996094zm143.34375-246.976563c-22.8125 0-41.367188-18.554687-41.367188-41.367187s18.554688-41.371094 41.367188-41.371094 41.371094 18.558594 41.371094 41.371094-18.558594 41.367187-41.371094 41.367187zm0 0"/><path d="m256 146.019531c-60.640625 0-109.980469 49.335938-109.980469 109.980469 0 60.640625 49.339844 109.980469 109.980469 109.980469 60.644531 0 109.980469-49.339844 109.980469-109.980469 0-60.644531-49.335938-109.980469-109.980469-109.980469zm0 0"/><path d="m399.34375 96.300781c-6.257812 0-11.351562 5.09375-11.351562 11.351563 0 6.257812 5.09375 11.351562 11.351562 11.351562 6.261719 0 11.355469-5.089844 11.355469-11.351562 0-6.261719-5.09375-11.351563-11.355469-11.351563zm0 0"/></svg>
                                   </a>

                                   <a target="_blank"  href="<?=$profile->linkedinlink?>">
                                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"/></svg>  
                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-sm-0 mb-2">
                    <h5 class="mb-sm-4 mb-3">QUICK LINKS:</h5>
                    <div class="row">
                        <a href="<?=base_url()?>" class="col-4 mb-2">Home</a>
                        <a href="<?=base_url('events')?>" class="col-4 mb-2">Events</a>
                        <a href="<?=base_url('about-us')?>" href="about.html" class="col-4 mb-2">About us</a>
                        <a href="<?=base_url('contact-us')?>" class="col-4 mb-2">Contact</a>
                        <a href="<?=base_url('gallery')?>" class="col-4 mb-2">Gallery</a>
                        <!-- <a class="col-4 mb-2">Programs</a> -->
                        <!-- <a class="col-4 mb-2">Site map</a> -->
                        <!-- <a href="privacy-policy.html" class="col-4 mb-2">Privacy Policy</a> -->
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-sm-6 text-sm-left text-center">
                    <p>Copyright &copy; <?=date('Y')?> | All rights reserved with FLOW</p>
                </div>
                <div class="col-sm-6 text-sm-right text-center">
                    <p>
                        Powered by: <a href="http://digikraftsocial.com">DIGIKRAFT SOCIAL</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-body bg-yellow p-sm-5 p-4">
            
            </div>
          </div>
        </div>
    </div>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/js/float_label.js"></script>
    <script src="<?=base_url()?>assets/js/spotlight.bundle.js"></script>
    <script src="<?=base_url()?>assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        //  Sweet alert for normal response
        var base_url = '<?=base_url()?>';
        $(document).ready(function(){
            const Toast = Swal.mixin({
                showConfirmButton: false,
                timer: 6000
            });

            <?php if($this->session->flashdata('success') || $message = $this->session->flashdata('failed')):
                $class = $this->session->flashdata('success') ? 'success' : 'error';
            ?>
                
                Toast.fire({
                    icon: '<?=$class?>',
                    text: '<?= $this->session->flashdata('success'); ?>
                            <?= $this->session->flashdata('failed'); ?>'
                });
            <?php 
                endif;
            ?>
        });

        
        $(".events-sec").on("click", ".dtl-btn", function(){
            var id=$(this).data('id');
            $.ajax({
                url: '<?=base_url("event")?>',
                type:'post',
                data: {id: id},
                beforeSend : function(){
                    $('#eventModal .modal-body').html('<div class="d-flex justify-content-center align-items-center"> Loading...</div>');
                    $('#eventModal').modal('show');
                },
                success: function(response){
                    res=JSON.parse(response);
                    if(res.img_src){
                        var body= `
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <img src="<?=base_url()?>assets/images/`+res.img_src+`" alt="">
                                <h3 class="mb-4 mt-3 text-center" id="evHeading">`+res.heading+`</h3>
                                    
                                <span class="d-block">Venue: <strong>`+res.venue+`</strong></span>
                                <span class="d-block">Date:  <strong>`+res.date+`</strong></span>
                                <br>
                                <p>`+res.full_descr+`</p>
                            `;
                    }else{
                        var body= `
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="mb-4 mt-3 text-center" id="evHeading">`+res.heading+`</h3>
                                    
                                <span class="d-block">Venue: <strong>`+res.venue+`</strong></span>
                                <span class="d-block">Date:  <strong>`+res.date+`</strong></span>
                                <br>
                                <p>`+res.full_descr+`</p>
                            `;
                    }
                   
                    $('#eventModal .modal-body').html(body);
                },
                error: function(response){
                    $('#eventModal .modal-body').html('Something went wrong. Please try again in some time.');
                }
            });
        });
    </script> 
</body>
</html>
