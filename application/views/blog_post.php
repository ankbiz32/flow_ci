<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#36B8AA">
    <meta name="description" content="Flow - Raipur (CG). (+91) 9766720007">

    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Flow - Raipur (CG). (+91) 9766720007">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?=base_url()?>assets/images/flow-logo.png">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Flow - Raipur">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:image:src" content="<?=base_url()?>assets/images/flow-logo.png">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Flow - Raipur">
    <meta name="og:description" content="">
    <meta name="og:image" content="<?=base_url()?>assets/images/flow-logo.png">
    <meta name="og:url" content="https://www.flowmenow.com/">
    <meta name="og:site_name" content="Flow">
    <meta name="og:type" content="website">

    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/images/favicon.png" sizes="32x32" type="image/png">

    <title>Flow</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/float_label.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/nav.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style_ref.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <header class="py-4 blur">
        <div class="blur-bg" id="blurbg"></div>
        <div class="container wrapper d-flex justify-content-between align-items-center">
            <a href="" class="logo">
                <img src="<?=base_url()?>assets/images/flow-logo.png" alt="" height="90">
            </a>
            <input type="checkbox" id="navcheck" role="button" title="menu">
            <label for="navcheck" aria-hidden="true" title="menu" class="navchecklabel d-flex align-items-center">
                <span class="burger">
                    <span class="bar">
                    </span>
                </span>
                <h5 class="menu-txt-1">Menu</h5>
                <h5 class="menu-txt-2">Close</h5>
            </label>
            <nav id="menu">
                <a href="index.html">HOME</a>
                <a href="about.html">ABOUT</a>
                <a href="events.html">EVENTS</a>
                <a onclick="openDrop()" class="btnDrop">
                    PROGRAMS 
                    <i class="fa fa-caret-down fa-sm"></i>
                    <div class="openDrop" id="openDrop">
                        <a href="program-flow.html" class="drop-item">
                            <strong>Student program - </strong>
                            <br>
                            Free To Learn Our Way (FLOW)
                        </a>
                        <br>
                        <hr>
                        <a href="program-wolf.html" class="drop-item">
                            <strong>Teachers program - </strong>
                            <br>
                            Workshops On Wellness & Facilitation (WOLF)
                        </a>
                    </div>
                </a>
                <a href="#">BLOG</a>
                <a href="contact.html">CONTACT</a>
            </nav>
        </div>
    </header>

    <section class="hero-sec blog-post-hero">
        <div class="bg-img" style="background:linear-gradient(rgba(255,255,255,0.6),rgba(255,255,255,0.6)) , url('<?=base_url()?>assets/images/2.jpg')"></div>
        <div class="container">
            <div class="intro">
                <h1>Heading for the blog will be shown here</h1>
                <h4></h4>
                <p class="mt-4 mb-5 mx-auto">Short description of the blog will be here. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, cum quae! Enim eius asperiores pariatur!</p>
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
    </style>

    <main class="all-blogs" id="post">
        <div class="container">
            <div class="row ">
                <div class="col-md-8">
                    <div class="post-content pr-sm-5">
                        <h2 class="mb-3"><strong>Heading for the blog will be shown here. Lorem ipsum dolor sit amet consectetur.</strong></h2>
                        <p>Short description of the blog will be here. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, cum quae! Enim eius asperiores pariatur!</p>
                        <div class="row mb-4">
                            <div class="col-sm-5">
                                <small class="text-muted"><i class="far fa-calendar-alt"> </i>&nbsp; Posted on : 10-02-2021</small></div>
                                <div class="col-sm-7 mt-sm-0 mt-3 text-sm-right">
                                    <div class="a2a">
                                        <a href="https://www.addtoany.com/add_to/facebook?linkurl=http%3A%2F%2Fexample.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/facebook.svg" width="32" height="32" style="background-color:#333"></a>
                                        <a href="https://www.addtoany.com/add_to/twitter?linkurl=http%3A%2F%2Fexample.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg" width="32" height="32" style="background-color:#333"></a>
                                        <a href="https://www.addtoany.com/add_to/whatsapp?linkurl=http%3A%2F%2Fexample.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/whatsapp.svg" width="32" height="32" style="background-color:#333"></a>
                                        <a href="https://www.addtoany.com/add_to/telegram?linkurl=http%3A%2F%2Fexample.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/telegram.svg" width="32" height="32" style="background-color:#333"></a>
                                        <a href="https://www.addtoany.com/add_to/copy_link?linkurl=http%3A%2F%2Fexample.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/link.svg" width="32" height="32" style="background-color:#333"></a>
                                    </div>
                                    <!-- <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="http://example.com">
                                        <a class="a2a_button_facebook"></a>
                                        <a class="a2a_button_twitter"></a>
                                        <a class="a2a_button_email"></a>
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
                        <img class="post-img" src="<?=base_url()?>assets/images/2.jpg" alt="">
                        <article class="mt-4 mb-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, itaque. Voluptatibus, rerum! Nobis eveniet in voluptatibus reprehenderit saepe deserunt atque fugit consectetur quo est? Necessitatibus ipsum facere delectus iusto temporibus?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt perferendis accusamus minima aspernatur eligendi consectetur consequuntur et fugit, sed doloremque!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet maxime ab doloremque recusandae a animi ipsa ut consequuntur, repudiandae inventore vero ratione minima repellendus perspiciatis dolorum libero. Officia error sapiente magni adipisci placeat atque expedita modi unde, dignissimos iure vel quibusdam alias maxime reiciendis illum tempora nam id! Repudiandae omnis commodi aut quos reprehenderit sunt et! Ducimus blanditiis iure omnis, sequi consequatur ut fuga sint illum ipsa porro, quidem commodi ea rem? Laboriosam, in repellat veniam recusandae laborum, voluptates nobis autem accusantium voluptas consectetur pariatur dolorum. Molestias facere aut veniam? Nihil quibusdam ut nobis consequatur accusamus impedit totam consectetur facere temporibus error vero tempora, modi et corrupti hic quod, voluptate laudantium dicta sequi perspiciatis! Delectus perferendis veniam odit unde nulla!</p>
                        </article>

                        <a href="" class="sec-btn back-btn">← Back to blogs</a>
                    </div>
                </div>

                <div class="aside col-md-4 pr-sm-0">
                    <div class="card">
                        <div class="card-title mb-2">
                            <p class="text-center rounded-3 font-weight-bold bg-dark text-white py-2">Recent posts</p>
                        </div>
                        <div class="card-body p-0">
                            <a href="" class="card-text mb-3 px-3 d-flex flex-row flex-nowrap align-items-start">
                                <img src="<?=base_url()?>assets/images/2.jpg" alt="" width="60" height="60" style="object-fit: cover;">
                                <div class="content ml-3">
                                    <h6 class="mb-1">Lorem ipsum, dolor sit amet co adipisicing elit. Dolorem, similique!</h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt"> </i>&nbsp; 10-02-2021</small>
                                </div>
                            </a>
                            <a href="" class="card-text mb-3 px-3 d-flex flex-row flex-nowrap align-items-start">
                                <img src="<?=base_url()?>assets/images/2.jpg" alt="" width="60" height="60" style="object-fit: cover;">
                                <div class="content ml-3">
                                    <h6 class="mb-1">Lorem ipsum, dolor sit amet co adipisicing elit. Dolorem, similique!</h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt"> </i>&nbsp; 10-02-2021</small>
                                </div>
                            </a>
                            <a href="" class="card-text mb-3 px-3 d-flex flex-row flex-nowrap align-items-start">
                                <img src="<?=base_url()?>assets/images/2.jpg" alt="" width="60" height="60" style="object-fit: cover;">
                                <div class="content ml-3">
                                    <h6 class="mb-1">Lorem ipsum, dolor sit amet co adipisicing elit. Dolorem, similique!</h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt"> </i>&nbsp; 10-02-2021</small>
                                </div>
                            </a>
                            <a href="" class="card-text mb-3 px-3 d-flex flex-row flex-nowrap align-items-start">
                                <img src="<?=base_url()?>assets/images/2.jpg" alt="" width="60" height="60" style="object-fit: cover;">
                                <div class="content ml-3">
                                    <h6 class="mb-1">Lorem ipsum, dolor sit amet co adipisicing elit. Dolorem, similique!</h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt"> </i>&nbsp; 10-02-2021</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>









   

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
                   <form class="" action="#">
                        <div class="row justify-content-between">
                            <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                <input name="name" type="text" class="" required>
                                <label for="pname">Your name *</label>
                            </div>
                            <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                <input name="email" type="text" required>
                                <label for="pname">Organisation name *</label>
                            </div>
                            <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                <input name="email" type="text" required>
                                <label for="pname">Email *</label>
                            </div>
                            <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                <input name="email" type="text" required>
                                <label for="pname">contact no. *</label>
                            </div>
                            <div class="col-12 float-group">
                                <textarea name="message" rows="4"></textarea>
                                <label for="pname">Enter your message here</label>
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
                    <p>SIgn up to our newsletter for latest updates.</p>
                </div>
                <div class="col-sm-6">
                    <form action="" action="POST">
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
                    <h5 class="mb-sm-4 mb-3">TAP INTO THE FLOW AT :</h5>
                    <div class="row ml-0">
                        <div class="col-sm-6 info">
                            <div class="row flex-nowrap">
                                <div class=""><i class="fa fa-map-marker-alt"></i></div>
                                <div class="col">
                                    D-11, Quoram, VIP Square <br>
                                    GE Road, Raipur <br>
                                    Chhattisgarh (492001)
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 info">
                            <div class="row flex-nowrap">
                                <div class=""><i class="fa fa-phone"></i></div>
                                <div class="col">
                                    0771-4902000 <br>
                                    +91-9766720007
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 info">
                            <div class="row flex-nowrap">
                                <div class=""><i class="fa fa-envelope"></i></div>
                                <div class="col">
                                    info@flowmenow.com
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="row flex-nowrap">
                                <div class="">
                                   <a target="_blank" href="https://www.facebook.com/FlowMeNow/">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408.785 408.788">
                                            <path id="facebook" d="M353.7,0H55.087A55.085,55.085,0,0,0,0,55.085V353.7a55.084,55.084,0,0,0,55.085,55.085H202.362l.251-146.078H164.662a8.954,8.954,0,0,1-8.954-8.92l-.182-47.087a8.955,8.955,0,0,1,8.955-8.989h37.882v-45.5c0-52.8,32.247-81.55,79.348-81.55h38.65a8.955,8.955,0,0,1,8.955,8.955v39.7a8.955,8.955,0,0,1-8.95,8.955l-23.719.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285a8.954,8.954,0,0,1,8.892,10.009l-5.581,47.087a8.955,8.955,0,0,1-8.892,7.9H266.323l-.251,146.078H353.7A55.084,55.084,0,0,0,408.787,353.7V55.085A55.086,55.086,0,0,0,353.7,0Z" transform="translate(-0.002)" />
                                        </svg>
                                    </a>

                                   <a target="_blank"  href="https://www.instagram.com/flowmenow.co/">
                                        <svg viewBox="0 0 512.00096 512.00096" xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm-117.40625 395.996094c-77.195312 0-139.996094-62.800782-139.996094-139.996094s62.800782-139.996094 139.996094-139.996094 139.996094 62.800782 139.996094 139.996094-62.800782 139.996094-139.996094 139.996094zm143.34375-246.976563c-22.8125 0-41.367188-18.554687-41.367188-41.367187s18.554688-41.371094 41.367188-41.371094 41.371094 18.558594 41.371094 41.371094-18.558594 41.367187-41.371094 41.367187zm0 0"/><path d="m256 146.019531c-60.640625 0-109.980469 49.335938-109.980469 109.980469 0 60.640625 49.339844 109.980469 109.980469 109.980469 60.644531 0 109.980469-49.339844 109.980469-109.980469 0-60.644531-49.335938-109.980469-109.980469-109.980469zm0 0"/><path d="m399.34375 96.300781c-6.257812 0-11.351562 5.09375-11.351562 11.351563 0 6.257812 5.09375 11.351562 11.351562 11.351562 6.261719 0 11.355469-5.089844 11.355469-11.351562 0-6.261719-5.09375-11.351563-11.355469-11.351563zm0 0"/></svg>
                                   </a>

                                   <a target="_blank"  href="https://www.linkedin.com/company/flowmenow">
                                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"/></svg>  
                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-sm-0 mb-2">
                    <h5 class="mb-sm-4 mb-3">QUICK LINKS :</h5>
                    <div class="row">
                        <a href="index.html" class="col-4 mb-2">Home</a>
                        <a href="events.html" class="col-4 mb-2">Events</a>
                        <a href="about.html" href="about.html" class="col-4 mb-2">About us</a>
                        <a href="contact.html" class="col-4 mb-2">Contact</a>
                        <!-- <a class="col-4 mb-2">Gallery</a> -->
                        <!-- <a class="col-4 mb-2">Programs</a> -->
                        <a class="col-4 mb-2">Site map</a>
                        <!-- <a href="privacy-policy.html" class="col-4 mb-2">Privacy Policy</a> -->
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-sm-6 text-sm-left text-center">
                    <p>Copyright &copy; 2021 | All rights reserved with FLOW</p>
                </div>
                <div class="col-sm-6 text-sm-right text-center">
                    <p>
                        Powered by: <a href="http://digikraftsocial.com">DIGIKRAFT SOCIAL</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/js/float_label.js"></script>
    <script src="<?=base_url()?>assets/js/spotlight.bundle.js"></script>
    <script src="<?=base_url()?>assets/js/app.js"></script>
</body>
</html>
