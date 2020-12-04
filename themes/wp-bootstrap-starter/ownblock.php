
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<style>

.container {
  width: 960px;
  margin: 50px auto;
  padding: 5px;
  padding-left: 20px;
  psdding-right: 0;
}

.box {
  width: 24%;
  height: 250px;
  margin: 0.2%;
  padding: 15px;
  box-sizing: border-box;
  display: inline-block;
  background: #036C81;
  position: relative;
  overflow: hidden;
  box-shadow: 0 0 5px rgba(0,0,0,0.4);
  cursor: pointer;
}
.box .icon-cont {
  border: 6px solid rgba(255,255,255,0.3);
  border-radius: 50%;
  width: 75px;
  height: 75px;
  margin: 20px auto;
  display: block; 
  text-align: center;
  
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  z-index: 5;
  
  box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);
}
.box .icon-cont i {
  color: #fff;
  opacity: 0.6;
  font-size: 2.5em;
  line-height: 75px;
}
.box:hover .icon-cont {
  -webkit-animation: shady 4s linear infinite;
          animation: shady 4s linear infinite;
}

@-webkit-keyframes shady {
  0% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
  20% {box-shadow: 0 0 0 100px rgba(255,255,255,0), 0 0 0 0px rgba(3, 108, 129, 0);}
  20.1% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
  50% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
  70% {box-shadow: 0 0 0 100px rgba(255,255,255,0), 0 0 0 0px rgba(3, 108, 129, 0);}
  70.1% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
  100% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
}

@keyframes shady {
  0% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
  20% {box-shadow: 0 0 0 100px rgba(255,255,255,0), 0 0 0 0px rgba(3, 108, 129, 0);}
  20.1% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
  50% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
  70% {box-shadow: 0 0 0 100px rgba(255,255,255,0), 0 0 0 0px rgba(3, 108, 129, 0);}
  70.1% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
  100% {box-shadow: 0 0 0 0px rgba(255,255,255,0.5), 0 0 0 0px rgba(3, 108, 129, 0.5);}
}

.box h3 {
  color: #fff;
  font-family: 'Open Sans', Arial, sans-serif;
  font-weight: 300;
  font-size: 24px;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;
  padding: 15px;
  border-bottom: 1px solid rgba(255,255,255,0);
  
  position: absolute;
  top: 125px;
  width: 70%;
  left: 10%;
  z-index: 4;
}
.box ul {
  font-family: 'Open Sans', Arial, sans-serif;
  color: #fff;
  font-size: 13px;
  line-height: 28px;
  text-indent: 14px;
  margin: 25px;
  margin-top: 380px;
  list-style-type: disc;
}
.box ul.hidden {
  opacity: 0;
}
.box a.expand {
  width: 35px;
  height: 35px;
  background: #fff;
  font-weight: 600;
  color: #036C81;
  display: block;
  margin: 15px auto 25px;
  text-align: center;
  line-height: 35px;
  cursor: pointer;
  
  position: absolute;
  left: 0;
  right: 0;
  bottom: 10px;
  
}
.box a.expand span.minus {
  opacity: 0;
}
.box a.expand span.plus {
  opacity: 1;
  padding-left: 5px;
}
.box.selected a.expand {
  display: block;
  position: absolute;
  left: 180px;
  right: -29px;
  bottom: -39px;
  width: 80px;
  height: 50px;
  background: #eee;
  color: #036C81;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.box.selected a.expand span {
  display: block;
  position: absolute;
  top: -4px;
  left: 38px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  font-size: 24px;
}
.box.selected a.expand span.minus {
  opacity: 1;
}
.box.selected a.expand span.plus {
  opacity: 0;
}
.box.selected .icon-cont {
  -webkit-transform: scale(1.5,1.5);
          transform: scale(1.5,1.5);
  opacity: 0.3;
  position: absolute;
  top: -20px;
  left: -5px;
  right: 180px;
}
.box.selected:hover .icon-cont {
  -webkit-animation: none;
          animation: none;
}
.box.selected h3 {
  padding: 32px 15px 15px 15px;
  border-bottom: 1px solid rgba(255,255,255,0.3);
  
  width: 70%;
  top: 16px;
  left: 10%;
}
.box.selected ul.hidden {
  opacity: 1;
  margin-top: 95px;
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
<div class="container">
<div class="box first">
<span class="icon-cont"><i class="fa fa-rocket"></i></span>
<h3>Creative</h3>
<ul class="hidden">
<li>Lorem ipsum dolor</li>
<li>Set amet consecuter</li>
<li>Lorem ipsum dolor</li>
<li>Set amet consecuter</li>
</ul>
<a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
</div>
<div class="box second">
<span class="icon-cont"><i class="fa fa-edit"></i></span>
<h3>Interactive</h3>
<ul class="hidden">
<li>Lorem ipsum dolor</li>
<li>Set amet consecuter</li>
<li>Lorem ipsum dolor</li>
<li>Set amet consecuter</li>
</ul>
<a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
</div>
<div class="box third">
<span class="icon-cont"><i class="fa fa-desktop"></i></span>
<h3>Media</h3>
<ul class="hidden">
<li>Lorem ipsum dolor</li>
<li>Set amet consecuter</li>
<li>Lorem ipsum dolor</li>
<li>Set amet consecuter</li>
</ul>
<a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
</div>
<div class="box fourth">
<span class="icon-cont"><i class="fa fa-coffee"></i></span>
<h3>Events</h3>
<ul class="hidden">
<li>Lorem ipsum dolor</li>
<li>Set amet consecuter</li>
<li>Lorem ipsum dolor</li>
<li>Set amet consecuter</li>
</ul>
<a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
</div>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script id="rendered-js">
$('.box').click(function () {
  $(this).toggleClass('selected');

});
//# sourceURL=pen.js
    </script>
