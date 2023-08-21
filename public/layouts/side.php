<?php
$pro1 = Template::findOrFail(1);
$user = User::count();
$menu = Menu::count();
$module = Module::count();
$page = Page::count();
$slider = Slider::count();
$social = Social::count();
$services = Services::count();
$blog = Blog::count();
$blogCat = Blog_category::count();
$team = Team::count();
$client = Client::count();
$gallery = Gallery::count();
$galcat = Gallerycat::count();
$counter = Counter::count();
$testimonial = Testimonials::count();
$faqs = Faqs::count();
$lead = Lead::count();
?>

<div class="sidebar-wrapper sidebar-theme">
  <nav id="sidebar">
    <div class="shadow-bottom"></div>
    <ul class="list-unstyled menu-categories" id="accordionExample">
      <li class="menu"> <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg> <span>Dashboard</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
          <li> <a href="<?= TP_BACK_SIDE ?>user/log_history"> Login Log </a> </li>
          <li> <a href="<?= TP_BACK_SIDE ?>template/backnow_history"> Backup </a> </li>

        </ul>
      </li>
      <li class="menu"> <a href="#lead" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg> <span>Lead</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="lead" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>lead/add">Add Lead</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>lead/show">Show Lead(<?= $lead ?>)</a></li>
		  
         </ul>
      </li> 
	  <li class="menu"> <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
              <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
              <rect x="9" y="9" width="6" height="6"></rect>
              <line x1="9" y1="1" x2="9" y2="4"></line>
              <line x1="15" y1="1" x2="15" y2="4"></line>
              <line x1="9" y1="20" x2="9" y2="23"></line>
              <line x1="15" y1="20" x2="15" y2="23"></line>
              <line x1="20" y1="9" x2="23" y2="9"></line>
              <line x1="20" y1="14" x2="23" y2="14"></line>
              <line x1="1" y1="9" x2="4" y2="9"></line>
              <line x1="1" y1="14" x2="4" y2="14"></line>
            </svg> <span>Menu</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>menu/add">Add Menu</a></li>
          <li><a href="<?= TP_BACK_AD ?>menu.php?act=menu">Show Menu(<?= $menu ?>)</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>menu_type/add">Add Menu Type</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>menu_type/show">Show Menu Type</a></li>
        </ul>
      </li>

      <li class="menu"> <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>CMS</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>page/add">Add Page</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>page/show">Show Page(<?= $page ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#module" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Module</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="module" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>module/add">Add Module</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>module/show">Show Module(<?= $module ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#slider" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Slider</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="slider" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>slider/add">Add Slider</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>slider/show">Show Slider(<?= $slider ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#counter" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Counter</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="counter" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>counter/add">Add Counter</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>counter/show">Show Counter(<?= $counter ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Services</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="services" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>services/add">Add Services</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>services/show">Show Services(<?= $services ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#testimonial" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Testimonial</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="testimonial" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>testimonials/add">Add Testimonial</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>testimonials/show">Show Testimonial(<?= $testimonial ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#blog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Blog</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="blog" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>blog/add">Add Blog</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>blog/show">Show Blog(<?= $blog ?>)</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>blog_category/add">Add Blog Category</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>blog_category/show">Show Blog Category(<?= $blogCat ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#team" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Team</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="team" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>team/add">Add Team</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>team/show">Show Team(<?= $team ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#gallery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Gallery</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="gallery" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>gallerycat/add">Add Gallery Category</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>gallerycat/show">Show Gallery Category(<?= $galcat ?>)</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>gallery/add">Add Gallery</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>gallery/show">Show Gallery(<?= $gallery ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#client" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Client</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="client" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>client/add">Add Client</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>client/show">Show Client(<?= $client ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#faqs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Faqs</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="faqs" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>faqs/add">Add Faqs</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>faqs/show">Show Faqs(<?= $faqs ?>)</a></li>
        </ul>
      </li>
      <li class="menu"> <a href="#social" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg> <span>Social</span> </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="social" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>social/add">Add Social</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>social/show">Show Social(<?= $social ?>)</a></li>
        </ul>
      </li>

      <li class="menu"> <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg> <span>User</span>
          </div>
          <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg> </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="user" data-parent="#accordionExample">
          <li><a href="<?= TP_BACK_SIDE ?>user/add">Add User</a></li>
          <li><a href="<?= TP_BACK_SIDE ?>user/show">Show User(<?= $user ?>)</a></li>
        </ul>
      </li>

      <li class="menu"> <a href="<?= TP_BACK_SIDE ?>settings" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
              <circle cx="12" cy="12" r="3"></circle>
              <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
              </path>
            </svg> <span>Site Settings</span> </div>
        </a>
      </li>
      <li class="menu"> <a href="<?= TP_BACK_SIDE ?>filemanager" aria-expanded="false" class="dropdown-toggle">
          <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
              <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
              <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
            </svg> <span>File Manager</span> </div>
        </a> </li>
    </ul>
  </nav>
</div>