<!doctype html>
<html class="no-js h-100" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MIRDR - @yield('title')</title>
        <link rel="icon" href="{{asset('logo/logo.png')}}" sizes="20x20" type="image/png">
        <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @include('layouts.link.css')
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </head>
    <body class="h-100">
        <div class="color-switcher animated">
            <h5>Accent Color</h5>
            <ul class="accent-colors">
                <li class="accent-primary active" data-color="primary">
                    <i class="material-icons">check</i>
                </li>
                <li class="accent-secondary" data-color="secondary">
                    <i class="material-icons">check</i>
                </li>
                <li class="accent-success" data-color="success">
                    <i class="material-icons">check</i>
                </li>
                <li class="accent-info" data-color="info">
                    <i class="material-icons">check</i>
                </li>
                <li class="accent-warning" data-color="warning">
                    <i class="material-icons">check</i>
                </li>
                <li class="accent-danger" data-color="danger">
                    <i class="material-icons">check</i>
                </li>
            </ul>
            <div class="actions mb-4">
                <a class="mb-2 btn btn-sm btn-primary w-100 d-table mx-auto extra-action" href="https://designrevision.com/downloads/shards-dashboard-lite/">
                <i class="material-icons">cloud</i> Download</a>
                <a class="mb-2 btn btn-sm btn-white w-100 d-table mx-auto extra-action" href="https://designrevision.com/docs/shards-dashboard-lite">
                <i class="material-icons">book</i> Documentation</a>
            </div>
            <div class="social-wrapper">
                <div class="social-actions">
                    <h5 class="my-2">Help us Grow</h5>
                    <div class="inner-wrapper">
                        <a class="github-button" href="https://github.com/DesignRevision/shards-dashboard" data-icon="octicon-star" data-show-count="true" aria-label="Star DesignRevision/shards-dashboard on GitHub">Star</a>
                        <!-- <iframe style="width: 91px; height: 21px;"src="https://yvoschaap.com/producthunt/counter.html#href=https%3A%2F%2Fwww.producthunt.com%2Fr%2Fp%2F112998&layout=wide" width="56" height="65" scrolling="no" frameborder="0" allowtransparency="true"></iframe> -->
                    </div>
                </div>
                <div id="social-share" data-url="https://designrevision.com/downloads/shards-dashboard-lite/" data-text="🔥 Check out Shards Dashboard Lite, a free and beautiful Bootstrap 4 admin dashboard template!" data-title="share"></div>
                <div class="loading-overlay">
                    <div class="spinner"></div>
                </div>
            </div>
            <div class="close">
                <i class="material-icons">close</i>
            </div>
        </div>
        <div class="color-switcher-toggle animated pulse infinite">
            <i class="material-icons">settings</i>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- Main Sidebar -->
                <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                    <div class="main-navbar">
                        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                                <div class="d-table m-auto">
                                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 40px;" src="{{asset('logo/logo.png')}}" alt="MIRDR-ADMIN">
                                    
                                </div>
                            </a>
                            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                            <i class="material-icons">&#xE5C4;</i>
                            </a>
                        </nav>
                    </div>
                    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
                        <div class="input-group input-group-seamless ml-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> 
                        </div>
                    </form>
                    <div class="nav-wrapper">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('admin')) active @endif " href="index.html">
                                <i class="material-icons">https</i>
                                <span>Administración</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('admin/eventos')) active @endif " href="components-blog-posts.html">
                                <i class="material-icons">event</i>
                                <span>Eventos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="add-new-post.html">
                                <i class="material-icons">calendar_today</i>
                                <span>Eventos especiales</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="form-components.html">
                                <i class="material-icons">linked_camera</i>
                                <span>Multimedia</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="tables.html">
                                <i class="material-icons">favorite</i>
                                <span>Oracion</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </aside>
                <!-- End Main Sidebar -->
                <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                    <div class="main-navbar sticky-top bg-white">
                        <!-- Main Navbar -->
                        <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                            <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                                <div class="input-group input-group-seamless ml-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                    <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> 
                                </div>
                            </form>
                            <ul class="navbar-nav border-left flex-row ">
                                <li class="nav-item border-right dropdown notifications">
                                    <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="nav-link-icon__wrapper">
                                            <i class="material-icons">&#xE7F4;</i>
                                            <span class="badge badge-pill badge-danger">2</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">
                                            <div class="notification__icon-wrapper">
                                                <div class="notification__icon">
                                                    <i class="material-icons">&#xE6E1;</i>
                                                </div>
                                            </div>
                                            <div class="notification__content">
                                                <span class="notification__category">Analytics</span>
                                                <p>Your website’s active users count increased by
                                                    <span class="text-success text-semibold">28%</span> in the last week. Great job!
                                                </p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="notification__icon-wrapper">
                                                <div class="notification__icon">
                                                    <i class="material-icons">&#xE8D1;</i>
                                                </div>
                                            </div>
                                            <div class="notification__content">
                                                <span class="notification__category">Sales</span>
                                                <p>Last week your store’s sales count decreased by
                                                    <span class="text-danger text-semibold">5.52%</span>. It could have been worse!
                                                </p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle mr-2" src="images/avatars/0.jpg" alt="User Avatar">
                                    <span class="d-none d-md-inline-block">Sierra Brooks</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-small">
                                        <a class="dropdown-item" href="user-profile-lite.html">
                                        <i class="material-icons">&#xE7FD;</i> Profile</a>
                                        <a class="dropdown-item" href="components-blog-posts.html">
                                        <i class="material-icons">vertical_split</i> Blog Posts</a>
                                        <a class="dropdown-item" href="add-new-post.html">
                                        <i class="material-icons">note_add</i> Add New Post</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">
                                        <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                                    </div>
                                </li>
                            </ul>
                            <nav class="nav">
                                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                                <i class="material-icons">&#xE5D2;</i>
                                </a>
                            </nav>
                        </nav>
                    </div>
                    <!-- / .main-navbar -->
                    <div class="main-content-container container-fluid px-4">
                        @yield('content')
                    </div>
                    <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                        <ul class="nav">
                            
                        </ul>
                        <span class="copyright ml-auto my-auto mr-2">Copyright © 2019
                        <a href="https://designrevision.com" rel="nofollow">MIRDR-ADMIN</a>
                        </span>
                    </footer>
                </main>
            </div>
        </div>
        
        @include('layouts.script.js')
    </body>
</html>

