
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('Admin')?>" class="brand-link ml-1">
      <span class="brand-text text-lg"><img src="<?=base_url('assets/images/logo-image.png')?>" alt="" height="50" class=""> <strong class="ml-2">Admin </strong>Panel</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=base_url('Admin/adminProfile')?>" class="d-block"> <?php echo $this->session->user->fname .'&nbsp;' . $this->session->user->lname ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=base_url('Admin')?>" class="nav-link <?php if($this->uri->segment(1)=="Admin" AND $this->uri->segment(2)=="" AND $this->uri->segment(3)==""){echo ' CustomActive';}?> >">
              <i class="fas fa-columns nav-icon"></i>
              <p>Enquiries</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/subscriptions')?>" class="nav-link <?php if($this->uri->segment(2)=="subscriptions"){echo ' CustomActive';}?> >">
              <i class="fas fa-rss nav-icon"></i>
              <p>Subscriptions</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Blog')?>" class="nav-link <?php if($this->uri->segment(2)=="Blog"){echo ' CustomActive';}?>">
              <i class="fas fa-blog nav-icon"></i>
              <p>Blog</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/events')?>" class="nav-link <?php if($this->uri->segment(2)=="events"){echo ' CustomActive';}?>">
              <i class="fas fa-calendar-alt nav-icon"></i>
              <p>Events</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/feedbacks')?>" class="nav-link <?php if($this->uri->segment(2)=="feedbacks"){echo ' CustomActive';}?>">
              <i class="fas fa-comment nav-icon"></i>
              <p>Feedbacks</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/gallery')?>" class="nav-link <?php if($this->uri->segment(2)=="gallery"){echo ' CustomActive';}?>">
              <i class="fas fa-image nav-icon"></i>
              <p>Gallery</p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="<?=base_url('Admin/popup')?>" class="nav-link <?php if($this->uri->segment(2)=="popup"){echo ' CustomActive';}?> >">
              <i class="far fa-clone nav-icon"></i>
              <p>Popup screen</p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="<?=base_url('Admin/webProfile')?>" class="nav-link <?php if($this->uri->segment(2)=="webProfile"){echo ' CustomActive';}?>">
              <i class="fa fa-globe nav-icon"></i>
              <p>FLOW Web profile</p>
            </a>
          </li>

          <!-- <li class="nav-item has-treeview <?php /* if($this->uri->segment(2)=="adminMainGall" OR $this->uri->segment(2)=="adminCaterGall"){echo ' menu-open';} */?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallery
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="<?/* echo base_url('welcome/adminMainGall') */?>" class="nav-link <?php /* if($this->uri->segment(2)=="adminMainGall"){echo ' CustomActive';} */?>">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Main Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php /* echo base_url('welcome/adminCaterGall') */?>" class="nav-link <?php /* if($this->uri->segment(2)=="adminCaterGall"){echo ' CustomActive';} */?>">
                  <i class="fas fa-circle nav-icon"></i>
                  <p class='text-muted'>Catering Gallery</p>
                </a>
              </li>
            </ul> -->
          </li>

          <li class="nav-item mt-4" id="website-link">
            <a href="<?=base_url()?>" target=_blank class="nav-link">
              <i class="fas fa-external-link-alt nav-icon"></i>
              <p>Open Website</p>
            </a>
          </li>
          
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>