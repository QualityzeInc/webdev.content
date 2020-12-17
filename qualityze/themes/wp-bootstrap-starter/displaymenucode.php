

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - Bootstrap 3 Show Many Slide One Carousel</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<style>
.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 15px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 15px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -25%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 25%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1,
  .carousel-showmanymoveone .carousel-inner .cloneditem-2 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(25%, 0, 0);
            transform: translate3d(25%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-25%, 0, 0);
            transform: translate3d(-25%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5 {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
            transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
            transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.container {
  margin-bottom: 50px;
}
body {
  font-family: 'Bitter', sans-serif;
  color: #E54A41;
  background-image: url('//static.rtpdesign.co.uk/blog/img/background.png');
  background-repeat: no-repeat;
  background-position: right top;
  background-size: 20%;
}
p {
  font-family: 'Open Sans', sans-serif;
  color: #333;
  margin-bottom: 2em;
}
h2 {
  margin: 2em 0 1em;
}
.logo {
  margin: 20px auto;
  height: 100px;
}
@media only screen and (min-width: 768px) {
  .logo {
    margin: 28px;
    float: left;
  }
}
.title {
  padding: 28px;
  display: table-cell;
  position: relative;
  vertical-align: middle;
  text-align: center;
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Bitter" rel="stylesheet" type="text/css">
<h1></h1>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="carousel carousel-showmanymoveone slide" id="carousel123">
<div class="carousel-inner">
<div class="item active">
<div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="https://placehold.it/500/0054A6/fff/&amp;text=1" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="https://placehold.it/500/002d5a/fff/&amp;text=2" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="https://placehold.it/500/d6d6d6/333&amp;text=3" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="https://placehold.it/500/002040/eeeeee&amp;text=4" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="https://placehold.it/500/0054A6/fff/&amp;text=5" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="https://placehold.it/500/002d5a/fff/&amp;text=6" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="https://placehold.it/500/eeeeee&amp;text=7" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-4 col-md-2"><a href="#"><img src="https://placehold.it/500/40a1ff/002040&amp;text=8" class="img-responsive"></a></div>
</div>
</div>
<a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
<a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
<h2>Second carousel test</h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="carousel carousel-showmanymoveone slide" id="carouselABC">
<div class="carousel-inner">
<div class="item active">
<div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="https://placehold.it/500/0054A6/fff/&amp;text=A" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="https://placehold.it/500/002d5a/fff/&amp;text=B" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="https://placehold.it/500/d6d6d6/333&amp;text=C" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="https://placehold.it/500/002040/eeeeee&amp;text=D" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="https://placehold.it/500/0054A6/fff/&amp;text=E" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="https://placehold.it/500/002d5a/fff/&amp;text=F" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="https://placehold.it/500/eeeeee&amp;text=G" class="img-responsive"></a></div>
</div>
<div class="item">
<div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="https://placehold.it/500/40a1ff/002040&amp;text=H" class="img-responsive"></a></div>
</div>
</div>
<a class="left carousel-control" href="#carouselABC" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
<a class="right carousel-control" href="#carouselABC" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>
</div>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script id="rendered-js">
(function () {
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // https://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
})();

(function () {
  $('.carousel-showmanymoveone .item').each(function () {
    var itemToClone = $(this);

    for (var i = 1; i < 6; i++) {if (window.CP.shouldStopExecution(0)) break;
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone().
      addClass("cloneditem-" + i).
      appendTo($(this));
    }window.CP.exitedLoop(0);
  });
})();
//# sourceURL=pen.js
    </script>
</body>
</html>
