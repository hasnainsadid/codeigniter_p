<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= site_url('assets/images/logo.svg') ?>" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="/"><img src="<?= site_url('assets/images/logo-mini.svg') ?>" alt="logo" /></a>
    </div>
    <ul class="nav">
        <!-- profile -->
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="<?= site_url('assets/images/faces/face15.jpg') ?>" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>

        <!-- Dashboard -->
        <li class="nav-item menu-items">
            <a class="nav-link" href="/">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- packages -->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Packages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/packages">All Packages</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/packages/create">Add New Package</a></li>
                </ul>
            </div>
        </li>

        <!-- Booking -->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">Booking</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/booking"> All Booking </a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Pending Booking </a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Confirmed Booking </a></li>
                </ul>
            </div>
        </li>

        <!-- Services -->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="service">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="service">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/services">All Services</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/services/create">Add New Service</a></li>
                </ul>
            </div>
        </li>

        <!-- Blog -->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Blog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/blog">All Blogs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/blog/create">Add New Blog</a></li>
                </ul>
            </div>
        </li>

        <!-- Testimonial -->
        <li class="nav-item menu-items">
            <a class="nav-link" href="/testimonial">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Testimonial</span>
            </a>
        </li>

        <!-- Guides -->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#guides" aria-expanded="false" aria-controls="guides">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Guides</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guides">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/guides">All Guides</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/messages/unread">Add New Guides</a></li>
                </ul>
            </div>
        </li>

        <!-- Messages -->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#message" aria-expanded="false" aria-controls="message">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Messages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="message">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/messages">All Messages</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/messages/unread">Unread Messages</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>