<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\Program Files\WWW\av_movie\public/../application/index\view\index\index.html";i:1509185765;s:81:"D:\Program Files\WWW\av_movie\public/../application/index\view\common\header.html";i:1509101078;s:81:"D:\Program Files\WWW\av_movie\public/../application/index\view\common\footer.html";i:1509100946;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="OrcasThemes">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title><?php echo $title; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="__INDEX_CSS__/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="__INDEX_CSS__/screen.css">
    <link rel="stylesheet" href="__INDEX_CSS__/animation.css">
    <!--[if IE 7]>

    <![endif]-->
    <link rel="stylesheet" href="__INDEX_CSS__/font-awesome.css">
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="__INDEX_CSS__/ie.css" type="text/css" media="screen, projection">
    <![endif]-->
    <link href="__INDEX_CSS__/frank.min.css" rel="stylesheet">
</head>
<body>
<!-- HOME 1 -->
<div id="home1" class="container-fluid standard-bg">
    <!-- HEADER -->
    <div class="row header-top">
        <div class="col-lg-3 col-md-6 col-sm-5 col-xs-8">
            <a class="main-logo" href="#"><img src="__INDEX_IMG__/main-logo.png" class="main-logo" alt="易游AV首页" title="易游AV首页"></a>
        </div>
        <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">
            <img src="__INDEX_IMG__/banners/banner-sm.png" class="img-responsive" alt="Buy Now">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-7 hidden-xs">
            <div class="right-box">
                <button type="button" class="access-btn" data-toggle="modal" data-target="#enquirypopup">登入</button>
            </div>
        </div>
    </div>
    <!-- MENU -->
    <div class="row home-mega-menu ">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse js-navbar-collapse megabg dropshd ">
                    <ul class="nav navbar-nav">
                        <li style="font-family: 'Microsoft Yahei', sans-serif" ><a href="<?php echo url('/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('/index/video'); ?>">播放列表</a></li>
                        <li><a href="<?php echo url('login'); ?>">用户注册</a></li>
                        <li><a href="<?php echo url('contact'); ?>">留言</a></li>
                    </ul>
                    <div class="search-block">
                        <form>
                            <input type="search" placeholder="Search">
                        </form>
                    </div>
                </div>
                <!-- /.nav-collapse -->
            </nav>
        </div>
    </div>

<!-- CORE -->
<div class="row">
        <!-- HOME MAIN POSTS -->
        <div class="col-lg-12 col-md-12">
            <section id="home-main">
                <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>Av视频</h2>
                <div class="row">
                    <!-- ARTICLES -->
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row auto-clear">
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <article class="col-lg-3 col-md-6 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="afterglow post-thumb" href="<?php echo $vo['vod_url']; ?>" data-lity="">
                                            <span class="play-btn-border" title="Play">
                                                <i class="fa fa-play-circle headline-round" aria-hidden="true"></i>
                                            </span>
                                                <div class="cactus-note ct-time font-size-1">
                                                    <span><?php echo $vo['vod_time']; ?></span>
                                                </div>
                                                <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="<?php echo $v_alt; ?>">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#"><?php echo $vo['vod_name']; ?></a>
                                            </h4>
                                            <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="clearfix spacer"></div>
                    </div>
                    <!-- RIGHT ASIDE -->
                    <div class="col-lg-3 hidden-md col-sm-12 text-center top-sidebar">
                        <!-- SUBSCRIBE BOX -->
                        <div class="subscribe-box">
                            <h2 class="icon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>留言</h2>
                            <!-- SUBSCRIBE FIELD -->
                            <form name="search-submit" method="post" action="#" id="subscribe-submit">
                                <fieldset class="search-fieldset">
                                    <textarea rows="5" name="comment" id="comment" cols="5" placeholder="信息"></textarea>
                                    <input id="subscribe" type="text" name="search" size="12" class="search-field" placeholder="你的QQ" value="">
                                    <input id="subscribe1" type="text" name="search" size="12" class="search-field" placeholder="你的电话" value="">
                                    <button class="subscribe-btn" type="submit" title="提交">提交</button>
                                </fieldset>
                            </form>
                        </div>
                        <!-- SIDEBAR ADVERTISE BOX -->

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- TABS -->

<!-- MAIN -->
<div id="main" class="container-fluid">
    <div class="container-fluid">
        <!-- SIDEBAR -->
        <div class="col-lg-2 hidden-md hidden-sm hidden-xs">
            <aside class="dark-bg sidebar">
                <h2 class="icon"><i class="fa fa-flag" aria-hidden="true"></i>New</h2>
                <article class="col-md-12 post post-medium">
                    <div class="row">
                        <div class="col-md-12 thumbr">
                            <div class="flag flag1"><i class="fa fa-star"></i></div>
                            <a class="post-thumb" href="" data-lity>
                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                            </a>
                        </div>
                        <div class="col-md-12 infor">
                            <h4>
                                <a class="title" href="#">1</a>
                            </h4>
                            <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="clearfix spacer"></div>
                <article class="reviews">
                    <h2 class="icon"><i class="fa fa-star" aria-hidden="true"></i>HOT</h2>
                    <!-- POST L size -->
                    <div class="post post-medium">
                        <div class="thumbr">
                            <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                <img class="review img-responsive" src="__INDEX_IMG__/thumbs/thumb-review.jpg" alt="#">
                            </a>
                        </div>
                    </div>
                </article>
                <div class="clearfix spacer"></div>
                <!-- SIDEBAR ADVERTISE BOX -->

            </aside>
        </div>
        <!-- MAIN CONTENT -->
        <div class="col-lg-10 col-md-12">
            <!-- EDITORS CHOICE -->
            <div class="clearfix"></div>
            <!-- MAIN ROLL ADVERTISE BOX -->
            <!-- CURRENTLY VIEWING -->
            <section id="cur-view">
                <h2 class="icon"><i class="fa fa-flag" aria-hidden="true"></i>最新AV</h2>
                <div class="row auto-clear">
                    <!-- POST L size -->
                    <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                        <div class="thumbr">
                            <a class="post-thumb" href="" data-lity>
                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                            </a>
                        </div>
                        <div class="infor">
                            <h4>
                                <a class="title" href="#">1</a>
                            </h4>
                            <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                    </article>
                    <!-- POST L size -->
                    <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                        <div class="thumbr">
                            <a class="post-thumb" href="" data-lity>
                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                            </a>
                        </div>
                        <div class="infor">
                            <h4>
                                <a class="title" href="#">1</a>
                            </h4>
                            <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                    </article>
                    <!-- POST L size -->
                    <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                        <div class="thumbr">
                            <a class="post-thumb" href="" data-lity>
                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                            </a>
                        </div>
                        <div class="infor">
                            <h4>
                                <a class="title" href="#">1</a>
                            </h4>
                            <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                    </article>
                    <!-- POST L size -->
                    <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                        <div class="thumbr">
                            <a class="post-thumb" href="" data-lity>
                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                            </a>
                        </div>
                        <div class="infor">
                            <h4>
                                <a class="title" href="#">1</a>
                            </h4>
                            <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                    </article>
                    <!-- POST L size -->
                    <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                        <div class="thumbr">
                            <a class="post-thumb" href="" data-lity>
                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                            </a>
                        </div>
                        <div class="infor">
                            <h4>
                                <a class="title" href="#">1</a>
                            </h4>
                            <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                    </article>
                    <!-- POST L size -->
                    <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                        <div class="thumbr">
                            <a class="post-thumb" href="" data-lity>
                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                            </a>
                        </div>
                        <div class="infor">
                            <h4>
                                <a class="title" href="#">1</a>
                            </h4>
                            <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <div class="clearfix spacer"></div>
            <!-- REVIEWS -->
            <section id="main-reviews">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                    <h2 class="icon"><i class="fa fa-star" aria-hidden="true"></i>最热AV</h2>
                    <div class="carousel-control-box">
                        <a class="left carousel-control" href="#myCarousel2"  role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                        <a class="right carousel-control" href="#myCarousel2"  role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row auto-clear">

                                <article class="reviews col-lg-2 col-md-4 col-sm-6 post post-medium">
                                    <div class="thumbr">
                                        <a class="post-thumb" href="" data-lity>
                                            <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                            <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                            <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                                        </a>
                                    </div>
                                    <div class="infor">
                                        <h4>
                                            <a class="title" href="#">1</a>
                                        </h4>
						   <span class="posts-txt" title="Posts from Channel">
						   <i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half"></i>
                                        </div>
                                    </div>
                                </article>


                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">1</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">1</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">1</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">1</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">1</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row auto-clear">
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">1</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">1</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">1</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">2</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">3</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="reviews col-lg-2 col-md-4 col-sm-4">
                                    <!-- POST L size -->
                                    <div class="post post-medium">
                                        <a class="thumbr post-thumb" href="#">
                                            <span class="review-number">4.5</span>
                                            <img src="__INDEX_IMG__/thumbs/thumb-s.jpg" class="review img-responsive" alt="Client">
                                        </a>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">5</a>
                                            </h4>
                                            <div class="ratings">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- CHANNELS -->
<div id="channels-block" class="container-fluid channels-bg">
    <div class="container-fluid ">
        <div class="col-md-12">
            <!-- CHANNELS -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- BOTTOM BANNER -->
<div id="bottom-banner" class="container text-center">
    <!-- BOTTOM ADVERTISE BOX -->
    <a href="" class="banner-xl">
        <img src="__INDEX_IMG__/banners/banner-xl.png" class="img-responsive" alt="易游AV" title="易游AV">
    </a>
</div>
<!-- FOOTER -->
<div id="footer" class="container-fluid footer-background">
    <div class="container">
        <footer>
            <!-- SECTION FOOTER -->
            <div class="row">
                <!-- SOCIAL -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="row auto-clear">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="social">
                                <li class="social-facebook">易游论坛<a href="#" class=""></a></li>
                                <li class="social-google-plus">易游游戏中心<a href="#" class=""></a></li>
                                <li class="social-twitter">易游官网<a href="#" class=""></a></li>
                                <li class="social-youtube">易游直播<a href="#" class=""></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <p class="social-rss text-center">易游集团旗下产品</p>
                        </div>
                        <div class="col-md-8">
                        </div>
                    </div>
                </div>
                <!-- TAGS -->
                <!-- POST -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h2 class="title">公司宣传视频</h2>
                    <div class="row auto-clear">
                        <div class="col-lg-3 col-md-3 col-sm-3 post post-medium">
                            <div class="thumbr">
                                <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 post post-medium">
                            <div class="thumbr">
                                <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 post post-medium">
                            <div class="thumbr">
                                <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 post post-medium">
                            <div class="thumbr">
                                <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="__INDEX_IMG__/thumbs/thumb-s.jpg" alt="#">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LINKS -->
            </div>
            <div class="row copyright-bottom">
                <div class="col-md-12 text-center">
                    <i style="font-size:12px;">
                        重要声明：本网站是以即时线上上涨档案/内容的方式运作运作，
                        色天使对所有档案/内容的真实性.完整性及立场等，
                        不负任何法律责任。而一切档案/内容之言只代表内容发布者个人意见，
                        并非本网站之立场，用户不应相信内容，并应自行判断档案/内容的真实性。
                        关于情形下，用户应寻求专业意见（如涉及医疗，法律或投资等问题）。
                        由于本网站由于本网站受到「即时下载档案/內容」运作方式所限制，
                        故不能完全监察所有档案/內容，若读者发现有档案/內容出现问题，
                        请联络我們。色天使有权删除任何档案/內容及拒绝任何人士下载档案/內容，同时亦有不刪除档案/內容的权利。
                        切勿宣传粗言、诽谤、渲染色情暴力或人身攻击的言论，敬请自律。本网站保留一切法律权利。
                    </i>
                    <p style="color:red">Copyright &copy; 2017-2020 易游网络</p>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- JAVA SCRIPT -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="__INDEX_JS__/jquery-1.12.1.min.js"></script>
<script src="__INDEX_JS__/bootstrap.min.js"></script>
<script src="__INDEX_JS__/frank.min.js"></script>
<script>
    $(".nav .dropdown").hover(function() {
        $(this).find(".dropdown-toggle").dropdown("toggle");
    });
</script>
<!-- MODAL -->
<div id="enquirypopup" class="modal fade in " role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content row">
            <div class="modal-header custom-modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>用户登入</h2>
            </div>
            <div class="modal-body">
                <form name="info_form" class="form-inline" action="#" method="post">
                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-sm-12">
                        <button class="subscribe-btn pull-right" type="submit" title="Subscribe">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
