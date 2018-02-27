<?php
$role = $this->session->userdata('role');
?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Property Common Header | <?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <?php $this->load->view('common/head'); ?>
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner">
                <div class="page-logo">
                    <a href="#">
                        <img src="<?php echo site_url('assets/admin/layout4/img/logo-light.png') ?>" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <div class="page-top">
                    <form class="search-form" action="" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm" placeholder="Search Order Number.." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                            </span>
                        </div>
                    </form>
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide">
                            </li>
                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-success">
                                        7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">12 pending</span> notifications</h3>
                                        <a href="extra_profile.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span>
                                                        New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                        Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span>
                                                        Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        Database overloaded 68%. 
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                        Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span>
                                                        System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator hide">
                            </li>
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile">
                                        Nick </span>
                                    <img alt="" class="img-circle" src="<?php echo site_url('assets/admin/layout4/img/avatar.png') ?>"/>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="extra_profile.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Admin/logout') ?>">
                                            <i class="icon-key"></i> Log Out 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark">
                                <a href="<?php echo site_url('Admin/logout') ?>" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li <?php if($this->uri->segment(1)== "Admin" && $this->uri->segment(2)== ""){echo "class='start active'"; } ?>>
                            <a href="<?php echo site_url('Admin') ?>">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li <?php if(($this->uri->segment(1)== "Plan" && $this->uri->segment(2)== "") || ($this->uri->segment(1)== "Planwise" && $this->uri->segment(2)== "") || ($this->uri->segment(1)== "Price" && $this->uri->segment(2)== "") || ($this->uri->segment(1)== "Priority" && $this->uri->segment(2)== "")){echo "class='active open'"; } ?>>
                            <a href="javascript:;">
                                <i class="icon-grid"></i>
                                <span class="title">Masters</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($this->uri->segment(1)== "Plan" && $this->uri->segment(2)== ""){echo "class='active'"; } ?>>
                                    <a href="<?php echo site_url('Plan') ?>">
                                        <i class="icon-wallet"></i>
                                        Plans
                                    </a>
                                </li>
                                <li <?php if($this->uri->segment(1)== "Planwise" && $this->uri->segment(2)== ""){echo "class='active'"; } ?>>
                                    <a href="<?php echo site_url('Planwise') ?>">
                                        <i class="icon-globe"></i>
                                        State and County</a>
                                </li>
                                <li <?php if($this->uri->segment(1)== "Price" && $this->uri->segment(2)== ""){echo "class='active'"; } ?>>
                                    <a href="<?php echo site_url('Price') ?>">
                                        <i class="fa fa-dollar"></i>
                                        Price</a>
                                </li>
                                <li <?php if($this->uri->segment(1)== "Priority" && $this->uri->segment(2)== ""){echo "class='active'"; } ?>>
                                    <a href="<?php echo site_url('Priority') ?>">
                                        <i class="icon-map"></i>
                                        Priority</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>