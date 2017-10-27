<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Head-->
    <?php include 'common/head.php' ?>
</head>
<body>
<div class="app" id="app">
    <!--    Sidebar-->
    <?php include 'common/aside.php' ?>
    <!--    Content-->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <!--        Header-->
        <?php include 'common/header.php' ?>
        <div ui-view class="app-body" id="view">
            <!--            Content-->
            <div class="item">
                <div class="item-bg">
                    <img src="<?php echo base_url() ?>assets/images/a1.jpg" class="blur opacity-3">
                </div>
                <div class="p-a-md">
                    <div class="row m-t">
                        <div class="col-sm-7">
                            <a href="" class="pull-left m-r-md">
            <span class="avatar w-96">
              <img src="<?php echo base_url() ?>assets/images/a1.jpg">
              <i class="on b-white"></i>
            </span>
                            </a>
                            <div class="clear m-b">
                                <h3 class="m-a-0 m-b-xs">Jean Reyes</h3>
                                <p class="text-muted"><span class="m-r">UX/UI Director</span> <small><i class="fa fa-map-marker m-r-xs"></i>London, UK</small></p>
                                <div class="block clearfix m-b">
                                    <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook indigo"></i>
                                    </a>
                                    <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter light-blue"></i>
                                    </a>
                                    <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-google-plus red"></i>
                                    </a>
                                    <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin cyan-600"></i>
                                    </a>
                                </div>
                                <a href="" class="btn btn-sm warn btn-rounded m-b">Follow</a>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <p class="text-md profile-status">I am feeling good!</p>
                            <button class="btn btn-sm white" data-toggle="collapse" data-target="#editor">Edit</button>
                            <div class="collapse box m-t-sm" id="editor">
                                <textarea class="form-control no-border" rows="2" placeholder="Type something..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dker p-x">
                <div class="row">
                    <div class="col-sm-6 push-sm-6">
                        <div class="p-y text-center text-sm-right">
                            <a href="" class="inline p-x text-center">
                                <span class="h4 block m-a-0">2k</span>
                                <small class="text-xs text-muted">Followers</small>
                            </a>
                            <a href="" class="inline p-x b-l b-r text-center">
                                <span class="h4 block m-a-0">250</span>
                                <small class="text-xs text-muted">Following</small>
                            </a>
                            <a href="" class="inline p-x text-center">
                                <span class="h4 block m-a-0">89</span>
                                <small class="text-xs text-muted">Activities</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 pull-sm-6">
                        <div class="p-y-md clearfix nav-active-primary">
                            <ul class="nav nav-pills nav-sm">
                                <li class="nav-item active">
                                    <a class="nav-link" href="" data-toggle="tab" data-target="#tab_1">Activities</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" data-toggle="tab" data-target="#tab_2">Stream</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" data-toggle="tab" data-target="#tab_3">Friends</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" data-toggle="tab" data-target="#tab_4">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding">
                <div class="row">
                    <div class="col-sm-8 col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane p-v-sm active" id="tab_1">
                                <div class="streamline b-l m-b m-l">
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?php echo base_url() ?>assets/images/a0.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">2 minutes ago</div>
                                            <div class="sl-author">
                                                <a href="">Peter Joo</a>
                                            </div>
                                            <div>
                                                <p>Check your Internet connection</p>
                                            </div>
                                            <div class="sl-footer">
                                                <a href="" ui-toggle-class="" class="btn white btn-xs">
                                                    <i class="fa fa-fw fa-star-o text-muted inline"></i>
                                                    <i class="fa fa-fw fa-star text-danger none"></i>
                                                </a>
                                                <a href="" class="btn white btn-xs" data-toggle="collapse" data-target="#reply-1">
                                                    <i class="fa fa-fw fa-mail-reply text-muted"></i>
                                                </a>
                                            </div>
                                            <div class="box collapse m-a-0" id="reply-1">
                                                <form>
                                                    <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>
                                                </form>
                                                <div class="box-footer clearfix">
                                                    <button class="btn btn-info pull-right btn-sm">Post</button>
                                                    <ul class="nav nav-pills nav-sm">
                                                        <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-camera text-muted"></i></a></li>
                                                        <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-video-camera text-muted"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?php echo base_url() ?>assets/images/a1.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">9:30</div>
                                            <div class="sl-author">
                                                <a href="">Mike</a>
                                            </div>
                                            <div>
                                                <p>Meeting with tech leader</p>
                                            </div>
                                            <div class="sl-footer">
                                                <a href="" ui-toggle-class="" class="btn white btn-xs">
                                                    <i class="fa fa-fw fa-star-o text-muted inline"></i>
                                                    <i class="fa fa-fw fa-star text-danger none"></i>
                                                </a>
                                                <a href="" class="btn white btn-xs" data-toggle="collapse" data-target="#reply-2">
                                                    <i class="fa fa-fw fa-mail-reply text-muted"></i>
                                                </a>
                                            </div>
                                            <div class="box collapse in m-a-0" id="reply-2">
                                                <form>
                                                    <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>
                                                </form>
                                                <div class="box-footer clearfix">
                                                    <button class="btn btn-info pull-right btn-sm">Post</button>
                                                    <ul class="nav nav-pills nav-sm">
                                                        <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-camera text-muted"></i></a></li>
                                                        <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-video-camera text-muted"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?php echo base_url() ?>assets/images/a2.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">8:30</div>
                                            <div class="sl-author">
                                                <a href="">Moke</a>
                                            </div>
                                            <div>
                                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                                                <p>
                      <span class="inline w-lg w-auto-xs p-a-xs b dark-white">
                        <img src="<?php echo base_url() ?>assets/images/c0.jpg" class="w-full">
                      </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?php echo base_url() ?>assets/images/a3.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Wed, 25 Mar</div>
                                            <p>Finished task <a href="" class="text-info">Testing</a>.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?php echo base_url() ?>assets/images/a4.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Thu, 10 Mar</div>
                                            <p>Trip to the moon</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?php echo base_url() ?>assets/images/a3.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sat, 5 Mar</div>
                                            <p>Prepare for presentation</p>
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante soe aiea ose dos soois.</p>
                                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?php echo base_url() ?>assets/images/a2.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sun, 11 Feb</div>
                                            <p><a href="" class="text-info">Jessi</a> assign you a task <a href="" class="text-info">Mockup Design</a>.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?php echo base_url() ?>assets/images/a5.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Thu, 17 Jan</div>
                                            <p>Follow up to close deal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-v-sm" id="tab_2">
                                <div class="streamline b-l m-b m-l">
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">2 minutes ago</div>
                                            <p>Check your Internet connection</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">9:30</div>
                                            <p>Meeting with tech leader</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-success">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">8:30</div>
                                            <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Wed, 25 Mar</div>
                                            <p>Finished task <a href="" class="text-info">Testing</a>.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Thu, 10 Mar</div>
                                            <p>Trip to the moon</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sat, 5 Mar</div>
                                            <p>Prepare for presentation</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sun, 11 Feb</div>
                                            <p><a href="" class="text-info">Jessi</a> assign you a task <a href="" class="text-info">Mockup Design</a>.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Thu, 17 Jan</div>
                                            <p>Follow up to close deal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-v-sm" id="tab_3">
                                <div class="row row-sm"><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a0.jpg" alt="..."> <i class="on b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">Crystal Guerrero</a></div><small class="text-muted text-ellipsis">Designer, Blogger</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a1.jpg" alt="..."> <i class="on b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">James Garcia</a></div><small class="text-muted text-ellipsis">Writter, Mag Editor</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a2.jpg" alt="..."> <i class="away b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">Jean Schneider</a></div><small class="text-muted text-ellipsis">Designer, Blogger</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a3.jpg" alt="..."> <i class="busy b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">Joe Holmes</a></div><small class="text-muted text-ellipsis">Designer, Blogger</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a4.jpg" alt="..."> <i class="on b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">Judith Garcia</a></div><small class="text-muted text-ellipsis">Writter, Mag Editor</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a5.jpg" alt="..."> <i class="on b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">Judy Woods</a></div><small class="text-muted text-ellipsis">Designer, Blogger</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a6.jpg" alt="..."> <i class="on b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">OlsJesse Russell</a></div><small class="text-muted text-ellipsis">Designer, Blogger</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a7.jpg" alt="..."> <i class="away b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">Richard Carr</a></div><small class="text-muted text-ellipsis">Writter, Mag Editor</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 avatar"><img src="../assets/images/a8.jpg" alt="..."> <i class="busy b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">Sara King</a></div><small class="text-muted text-ellipsis">Designer, Blogger</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 circle amber avatar">D <i class="busy b-white bottom"></i></span></a><div class="list-body"><div class="text-ellipsis"><a href="">Douglas Torres</a></div><small class="text-muted text-ellipsis">Blogger</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 circle blue">J</span></a><div class="list-body"><div class="text-ellipsis"><a href="">Jeremy Scott</a></div><small class="text-muted text-ellipsis">Blogger</small></div></div></div><div class="col-xs-6 col-lg-4"><div class="list-item box r m-b"><a herf="" class="list-left"><span class="w-40 circle green">M</span></a><div class="list-body"><div class="text-ellipsis"><a href="">Melissa Garza</a></div><small class="text-muted text-ellipsis">Blogger</small></div></div></div></div>
                            </div>
                            <div class="tab-pane p-v-sm" id="tab_4">
                                <div class="row m-b">
                                    <div class="col-xs-6">
                                        <small class="text-muted">Cell Phone</small>
                                        <div class="_500">1243 0303 0333</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <small class="text-muted">Family Phone</small>
                                        <div class="_500">+32(0) 3003 234 543</div>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-6">
                                        <small class="text-muted">Reporter</small>
                                        <div class="_500">Coch Jose</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <small class="text-muted">Manager</small>
                                        <div class="_500">James Richo</div>
                                    </div>
                                </div>
                                <div>
                                    <small class="text-muted">Bio</small>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <div>
                            <div class="box">
                                <div class="box-header">
                                    <h3>Who to follow</h3>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list no-border p-b">
                                    <li class="list-item">
                                        <a herf="" class="list-left">
                    <span class="w-40 avatar">
                      <img src="<?php echo base_url() ?>assets/images/a4.jpg" alt="...">
                      <i class="on b-white bottom"></i>
                    </span>
                                        </a>
                                        <div class="list-body">
                                            <div><a href="">Chris Fox</a></div>
                                            <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <a herf="" class="list-left">
                    <span class="w-40 avatar">
                      <img src="<?php echo base_url() ?>assets/images/a5.jpg" alt="...">
                      <i class="on b-white bottom"></i>
                    </span>
                                        </a>
                                        <div class="list-body">
                                            <div><a href="">Mogen Polish</a></div>
                                            <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <a herf="" class="list-left">
                    <span class="w-40 avatar">
                      <img src="<?php echo base_url() ?>assets/images/a6.jpg" alt="...">
                      <i class="busy b-white bottom"></i>
                    </span>
                                        </a>
                                        <div class="list-body">
                                            <div><a href="">Joge Lucky</a></div>
                                            <small class="text-muted text-ellipsis">Art director, Movie Cut</small>