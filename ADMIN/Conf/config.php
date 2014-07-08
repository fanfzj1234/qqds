﻿ <?php

return array(
	//'配置项'=>'配置值'

	    'SHOW_PAGE_TRACE'=>true,//开启页面trace
		//'SHOW_RUN_TIME'    => true, // 运行时间显示
        //'SHOW_ADV_TIME'    => true, // 显示详细的运行时间
        //'SHOW_DB_TIMES'    => true, // 显示数据库查询和写入次数
        //'SHOW_CACHE_TIMES' => true, // 显示缓存操作次数
        //'SHOW_USE_MEM'     => true, // 显示内存开销
        //'SHOW_LOAD_FILE'   => true, // 显示加载文件数
        //'SHOW_FUN_TIMES'   => true, // 显示函数调用次数

		'URL_HTML_SUFFIX'=>'xml|html|shtml',//配置伪静态
		'URL_CASE_INSENSITIVE' =>true,//url大小写
		
	//	 'URL_ROUTER_ON' => true, //URL路由
	//	 'URL_MODEL' => '2',//去掉index.php
		
		'OUTPUT_ENCODE'=>false,

		//数据库配置信息
         'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'dzsw', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => 'koala19920716', // 密码
        'DB_PORT'   => 3306, // 端口
	    'DB_PREFIX' => 'sw_', // 数据库表前缀 
        
		//模板变量输出格式
	    //'TMPL_L_DELIM'=>'[{',
        //'TMPL_R_DELIM'=>'}]',
		
         //'DB_SQL_BUILD_CACHE' => true,    // SQL缓存
        // 'DB_SQL_BUILD_QUEUE' => 'xcache',// SQL缓存方式
         //'DB_SQL_BUILD_LENGTH' => 20,     // SQL缓存的队列长度


        'TMPL_PARSE_STRING'=>array(
             '__CSS__'=>'/qdds/Public/Css',
             '__JS__'=>'/qdds/Public/Js',
	         '__IMG__'=>'/qdds/Public/images',
             '__ckeditor__'=>'/qdds/Public/ckeditor',
	      ),	
	      'TZYE'=>"<!DOCTYPE html><html><head><meta charset='UTF-8'><title>跳转提示</title>
		<style>body {font-family: 'Avenir', 'Helvetica Neue', Helvetica, Arial, sans-serif;background: #79a8ae;color: #666;font-size: 16px;line-height: 1.5em;}
			h1 {color: #111;margin: 0 0 12px 0;font-size: 24px;line-height: 1.5em;}
            p {margin: 0 0 10x 0;}a:hover {border-bottom-color: #888;}
            a {color: #888;text-decoration: none;border-bottom: 1px solid #ccc;}         
            body,.overlay {-webkit-perspective: 1000;-webkit-perspective-origin-y: 25%;}
            .body--ready {/* Ideasbackground: -webkit-linear-gradient(top, #e2b986 -10%, #241c35 140%);background: -webkit-linear-gradient(top, #c97369 -40%, #241c35 130%); background: -webkit-linear-gradient(top, #fac4c4 -10%, #606386 140%);background: -webkit-linear-gradient(top, #519ab0 0%, #414A6D 110%);background: -webkit-linear-gradient(top, rgb(129, 0, 170) 0%, rgb(43, 4, 114) 110%);background: -webkit-linear-gradient(top, rgb(163, 235, 189) 0%, rgb(16, 93, 145) 110%);background: -webkit-linear-gradient(top, rgb(165, 103, 189) 0%, rgb(75, 233, 214) 120%);*/
            background: -webkit-linear-gradient(top, rgb(203, 235, 219) 0%, rgb(55, 148, 192) 120%);background: -moz-linear-gradient(top, rgb(203, 235, 219) 0%, rgb(55, 148, 192) 120%);background: -o-linear-gradient(top, rgb(203, 235, 219) 0%, rgb(55, 148, 192) 120%);background: -ms-linear-gradient(top, rgb(203, 235, 219) 0%, rgb(55, 148, 192) 120%);background: linear-gradient(top, rgb(203, 235, 219) 0%, rgb(55, 148, 192) 120%);}
            .body--ready .overlay {-webkit-transition: -webkit-transform 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1),opacity 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1);
             -moz-transition: -moz-transform 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1),opacity 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1);
             -ms-transition: -ms-transform 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1),opacity 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1);
             -o-transition: -o-transform 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1),opacity 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1);
             transition: transform 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1),opacity 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1);}
            .ui {position: absolute;left: 50%;bottom: 5%;width: 300px;margin-left: -150px;}
            .ui-input {width: 100%;height: 50px;background: none;font-size: 24px;font-weight: bold;color: #fff;text-align: center;border: none;border-bottom: 2px solid white;}
            .ui-input:focus {outline: none;border: none;border-bottom: 2px solid white;}
            .ui-return {display: none;position: absolute;top: 20px;right: 0;
  padding: 3px 2px 0 2px;
  font-size: 10px;
  line-height: 10px;
  color: #fff;
  border: 1px solid #fff;
}

.ui--enter .ui-return {
  display: block;
}

.ui--wide {
  width: 76%;
  margin-left: 12%;
  left: 0;
}

.ui--wide .ui-return {
  right: -20px;
}

.help {
  position: absolute;
  top: 40px;
  right: 40px;
  width: 25px;
  height: 25px;
  text-align: center;
  font-size: 13px;
  line-height: 27px;
  font-weight: bold;
  cursor: pointer;
  background: #fff;
  color: #79a8ae;
  opacity: .9;

  -webkit-transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -moz-transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -ms-transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -o-transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
}

.help:hover {
  opacity: 1;
}

.overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 550px;
  height: 490px;
  margin: -260px 0 0 -275px;
  opacity: 0;

  -webkit-transform: rotateY(90deg);
  -moz-transform: rotateY(90deg);
  -ms-transform: rotateY(90deg);
  -o-transform: rotateY(90deg);
  transform: rotateY(90deg);
}

.overlay--visible {
  opacity: 1;

  -webkit-transform: rotateY(0);
  -moz-transform: rotateY(0);
  -ms-transform: rotateY(0);
  -o-transform: rotateY(0);
  transform: rotateY(0);
}

.ui-share,
.ui-details {
  opacity: .9;
  background: #fff;
  z-index: 2;
}

.ui-details-content,
.ui-share-content {
  padding: 100px 50px;
}

.commands {
  margin: 0;
  padding: 0;
  list-style: none;
  cursor: pointer;
}

.commands-item {
  font-size: 12px;
  line-height: 22px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 20px;
  background: #fff;
  margin-top: 1px;
  color: #333;
  opacity: .9;

  -webkit-transition: -webkit-transform 0.7s cubic-bezier(0.694, 0.0482, 0.335, 1),
                      opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -moz-transition: -moz-transform 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1),
                      opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -ms-transition: -ms-transform 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1),
                      opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -o-transition: -o-transform 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1),
                      opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  transition: transform 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1),
                      opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
}

.commands-item--gap {
  margin-top: 9px;
}

.commands-item:hover {
  opacity: 1;
}

.commands-item:hover .commands-item-action {
  background: #333;
}

.commands-item a {
  display: inline-block;
}

.commands-item-mode {
  display: inline-block;
  margin-left: 3px;
  font-style: italic;
  color: #ccc;
}

.commands-item-title {
  display: inline-block;
  width: 150px;
}

.commands-item-info {
  display: inline-block;
  width: 300px;
  font-size: 14px;
  text-transform: none;
  letter-spacing: 0;
  font-weight: normal;
  color: #aaa;
}

.commands-item-action {
  display: inline-block;
  float: right;
  margin-top: 3px;
  text-transform: uppercase;
  font-size: 10px;
  line-height: 10px;
  color: #fff;
  background: #90c9d1;
  padding: 5px 10px 4px 10px;
  border-radius: 3px;
}

.commands-item:first-child {
  margin-top: 0;
}

.twitter-share {
  position: absolute;
  top: 4px;
  right: 20px;
}


.tabs-labels {
  margin-bottom: 9px;
}

.tabs-label {
  display: inline-block;
  background: #fff;
  padding: 10px 20px;
  font-size: 12px;
  line-height: 22px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #333;
  opacity: .5;
  cursor: pointer;
  margin-right: 2px;

  -webkit-transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -moz-transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -ms-transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  -o-transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
  transition: opacity 0.1s cubic-bezier(0.694, 0.0482, 0.335, 1);
}

.tabs-label:hover {
  opacity: .9;
}

.tabs-label--active {
  opacity: .9;
}

.tabs-panel {
  display: none;
}

.tabs-panel--active {
  display: block;
}

.tab-panel {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}

.touch .ui-input {
  display: none;
}
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type='button'],input[type='reset'],input[type='submit']{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type='checkbox'],input[type='radio']{-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type='number']::-webkit-inner-spin-button,input[type='number']::-webkit-outer-spin-button{height:auto}input[type='search']{-webkit-appearance:textfield;-moz-box-sizing:content-box;box-sizing:content-box}input[type='search']::-webkit-search-cancel-button,input[type='search']::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}

 </style>

</head>

<body>
<div style='text-align:center;clear:both;position:absolute;top:0;left:260px'>
<script src='/gg_bd_ad_720x90.js' type='text/javascript'></script>
<script src='/follow.js' type='text/javascript'></script>
</div>
<canvas class='canvas'></canvas>

<div class='help'>?</div>

<div class='ui'>
 <input class='ui-input' type='text'/>
  <span class='ui-return'>↵</span>
</div>

<div class='overlay'>
  <div class='tabs'>
    <div class='tabs-labels'><span class='tabs-label'>Commands</span><span class='tabs-label'>Info</span><span class='tabs-label'>Share</span></div>

    <div class='tabs-panels'>
      <ul class='tabs-panel commands'>
        <li class='commands-item'><span class='commands-item-title'>Text</span><span class='commands-item-info' data-demo='Hello :)'>Type anything</span><span class='commands-item-action'>Demo</span></li>
        <li class='commands-item'><span class='commands-item-title'>Countdown</span><span class='commands-item-info' data-demo='#countdown 10'>#countdown<span class='commands-item-mode'>number</span></span><span class='commands-item-action'>Demo</span></li>
        <li class='commands-item'><span class='commands-item-title'>Time</span><span class='commands-item-info' data-demo='#time'>#time</span><span class='commands-item-action'>Demo</span></li>
        <li class='commands-item'><span class='commands-item-title'>Rectangle</span><span class='commands-item-info' data-demo='#rectangle 30x15'>#rectangle<span class='commands-item-mode'>width x height</span></span><span class='commands-item-action'>Demo</span></li>
        <li class='commands-item'><span class='commands-item-title'>Circle</span><span class='commands-item-info' data-demo='#circle 25'>#circle<span class='commands-item-mode'>diameter</span></span><span class='commands-item-action'>Demo</span></li>

        <li class='commands-item commands-item--gap'><span class='commands-item-title'>Animate</span><span class='commands-item-info' data-demo='The time is|#time|#countdown 3|#icon thumbs-up'><span class='commands-item-mode'>command1</span>&nbsp;|<span class='commands-item-mode'>command2</span></span><span class='commands-item-action'>Demo</span></li>
      </ul>

      <div class='tabs-panel ui-details'>
        <div class='ui-details-content'>
          <h1>Shape Shifter</h1>
          <p>An experiment by <a href='//www.kennethcachia.com' target='_blank'>Kenneth Cachia</a></p>
          <p><a href='//fortawesome.github.io/Font-Awesome/#icons-new' target='_blank'>Font Awesome</a> is being used to render all #icons.</p>

          <br/><p>Visit <a href='http://www.kennethcachia.com/shape-shifter/?a=#icon thumbs-up' target='_blank'>Shape Shifter</a> to use icons.</p>
        </div>
      </div>

      <div class='tabs-panel ui-share'>
        <div class='ui-share-content'>
          <h1>Sharing</h1>
          <p>Simply add <em>?a=</em> to the current URL to share any static or animated text. Examples:</p>
          <p>
            <a href='http://www.kennethcachia.com/shape-shifter?a=Hello' target='_blank'>www.kennethcachia.com/shape-shifter?a=Hello</a><br/>
            <a href='http://www.kennethcachia.com/shape-shifter?a=Hello|#countdown 3' target='_blank'>www.kennethcachia.com/shape-shifter?a=Hello|#countdown 3</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

  <script language='JavaScript'>
  	
/*

  Shape Shifter
  =============
  A canvas experiment by Kenneth Cachia
  http://www.kennethcachia.com

  Updated code
  ------------
  https://github.com/kennethcachia/Shape-Shifter 

*/


var S = {
  init: function () {
    var action = window.location.href,
        i = action.indexOf('?a=');

    S.Drawing.init('.canvas');
    document.body.classList.add('body--ready');

    if (i !== -1) {
      S.UI.simulate(decodeURI(action).substring(i + 3));
    } else {
      S.UI.simulate('欢迎你的到来|请先登录|谢谢~|#time|#countdown 5||');
    }

    S.Drawing.loop(function () {
      S.Shape.render();
    });
  }
};


S.Drawing = (function () {
  var canvas,
      context,
      renderFn
      requestFrame = window.requestAnimationFrame       ||
                     window.webkitRequestAnimationFrame ||
                     window.mozRequestAnimationFrame    ||
                     window.oRequestAnimationFrame      ||
                     window.msRequestAnimationFrame     ||
                     function(callback) {
                       window.setTimeout(callback, 1000 / 60);
                     };

  return {
    init: function (el) {
      canvas = document.querySelector(el);
      context = canvas.getContext('2d');
      this.adjustCanvas();

      window.addEventListener('resize', function (e) {
        S.Drawing.adjustCanvas();
      });
    },

    loop: function (fn) {
      renderFn = !renderFn ? fn : renderFn;
      this.clearFrame();
      renderFn();
      requestFrame.call(window, this.loop.bind(this));
    },

    adjustCanvas: function () {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    },

    clearFrame: function () {
      context.clearRect(0, 0, canvas.width, canvas.height);
    },

    getArea: function () {
      return { w: canvas.width, h: canvas.height };
    },

    drawCircle: function (p, c) {
      context.fillStyle = c.render();
      context.beginPath();
      context.arc(p.x, p.y, p.z, 0, 2 * Math.PI, true);
      context.closePath();
      context.fill();
    }
  }
}());


S.UI = (function () {
  var input = document.querySelector('.ui-input'),
      ui = document.querySelector('.ui'),
      help = document.querySelector('.help'),
      commands = document.querySelector('.commands'),
      overlay = document.querySelector('.overlay'),
      canvas = document.querySelector('.canvas'),
      interval,
      isTouch = false, //('ontouchstart' in window || navigator.msMaxTouchPoints),
      currentAction,
      resizeTimer,
      time,
      maxShapeSize = 30,
      firstAction = true,
      sequence = [],
      cmd = '#';

  function formatTime(date) {
    var h = date.getHours(),
        m = date.getMinutes(),
    m = m < 10 ? '0' + m : m;
    return h + ':' + m;
  }

  function getValue(value) {
    return value && value.split(' ')[1];
  }

  function getAction(value) {
    value = value && value.split(' ')[0];
    return value && value[0] === cmd && value.substring(1);
  }

  function timedAction(fn, delay, max, reverse) {
    clearInterval(interval);
    currentAction = reverse ? max : 1;
    fn(currentAction);

    if (!max || (!reverse && currentAction < max) || (reverse && currentAction > 0)) {
      interval = setInterval(function () {
        currentAction = reverse ? currentAction - 1 : currentAction + 1;
        fn(currentAction);

        if ((!reverse && max && currentAction === max) || (reverse && currentAction === 0)) {
          clearInterval(interval);
        }
      }, delay);
    }
  }

  function reset(destroy) {
    clearInterval(interval);
    sequence = [];
    time = null;
    destroy && S.Shape.switchShape(S.ShapeBuilder.letter(''));
  }

  function performAction(value) {
    var action,
        value,
        current;

    overlay.classList.remove('overlay--visible');
    sequence = typeof(value) === 'object' ? value : sequence.concat(value.split('|'));
    input.value = '';
    checkInputWidth();

    timedAction(function (index) {
      current = sequence.shift();
      action = getAction(current);
      value = getValue(current);

      switch (action) {
        case 'countdown':
          value = parseInt(value) || 10;
          value = value > 0 ? value : 10;

          timedAction(function (index) {
            if (index === 0) {
              if (sequence.length === 0) {
                S.Shape.switchShape(S.ShapeBuilder.letter(''));
              } else {
                performAction(sequence);
              }
            } else {
              S.Shape.switchShape(S.ShapeBuilder.letter(index), true);
            }
          }, 1000, value, true);
          break;

        case 'rectangle':
          value = value && value.split('x');
          value = (value && value.length === 2) ? value : [maxShapeSize, maxShapeSize / 2];

          S.Shape.switchShape(S.ShapeBuilder.rectangle(Math.min(maxShapeSize, parseInt(value[0])), Math.min(maxShapeSize, parseInt(value[1]))));
          break;

        case 'circle':
          value = parseInt(value) || maxShapeSize;
          value = Math.min(value, maxShapeSize);
          S.Shape.switchShape(S.ShapeBuilder.circle(value));
          break;

        case 'time':
          var t = formatTime(new Date());

          if (sequence.length > 0) {
            S.Shape.switchShape(S.ShapeBuilder.letter(t));
          } else {
            timedAction(function () {
              t = formatTime(new Date());
              if (t !== time) {
                time = t;
                S.Shape.switchShape(S.ShapeBuilder.letter(time));
              }
            }, 1000);
          }
          break;

        default:
          S.Shape.switchShape(S.ShapeBuilder.letter(current[0] === cmd ? 'What?' : current));
      }
    }, 2000, sequence.length);
  }

  function checkInputWidth(e) {
    if (input.value.length > 18) {
      ui.classList.add('ui--wide');
    } else {
      ui.classList.remove('ui--wide');
    }

    if (firstAction && input.value.length > 0) {
      ui.classList.add('ui--enter');
    } else {
      ui.classList.remove('ui--enter');
    }
  }

  function bindEvents() {
    document.body.addEventListener('keydown', function (e) {
      input.focus();

      if (e.keyCode === 13) {
        firstAction = false;
        reset();
        performAction(input.value);
      }
    });

    input.addEventListener('input', checkInputWidth);
    input.addEventListener('change', checkInputWidth);
    input.addEventListener('focus', checkInputWidth);

    help.addEventListener('click', function (e) {
      overlay.classList.toggle('overlay--visible');
      overlay.classList.contains('overlay--visible') && reset(true);
    });

    commands.addEventListener('click', function (e) {
      var el,
          info,
          demo,
          tab,
          active,
          url;

      if (e.target.classList.contains('commands-item')) {
        el = e.target;
      } else {
        el = e.target.parentNode.classList.contains('commands-item') ? e.target.parentNode : e.target.parentNode.parentNode;
      }

      info = el && el.querySelector('.commands-item-info');
      demo = el && info.getAttribute('data-demo');
      url = el && info.getAttribute('data-url');

      if (info) {
        overlay.classList.remove('overlay--visible');

        if (demo) {
          input.value = demo;

          if (isTouch) {
            reset();
            performAction(input.value);
          } else {
            input.focus();
          }
        } else if (url) {
          //window.location = url;
        }
      }
    });

    canvas.addEventListener('click', function (e) {
      overlay.classList.remove('overlay--visible');
    });
  }

  function init() {
    bindEvents();
    input.focus();
    isTouch && document.body.classList.add('touch');
  }

  // Init
  init();

  return {
    simulate: function (action) {
      performAction(action);
    }
  }
}());


S.UI.Tabs = (function () {
  var tabs = document.querySelector('.tabs'),
      labels = document.querySelector('.tabs-labels'),
      triggers = document.querySelectorAll('.tabs-label'),
      panels = document.querySelectorAll('.tabs-panel');

  function activate(i) {
    triggers[i].classList.add('tabs-label--active');
    panels[i].classList.add('tabs-panel--active');
  }

  function bindEvents() {
    labels.addEventListener('click', function (e) {
      var el = e.target,
          index;

      if (el.classList.contains('tabs-label')) {
        for (var t = 0; t < triggers.length; t++) {
          triggers[t].classList.remove('tabs-label--active');
          panels[t].classList.remove('tabs-panel--active');

          if (el === triggers[t]) {
            index = t;
          }
        }

        activate(index);
      }
    });
  }

  function init() {
    activate(0);
    bindEvents();
  }

  // Init
  init();
}());


S.Point = function (args) {
  this.x = args.x;
  this.y = args.y;
  this.z = args.z;
  this.a = args.a;
  this.h = args.h;
};


S.Color = function (r, g, b, a) {
  this.r = r;
  this.g = g;
  this.b = b;
  this.a = a;
};

S.Color.prototype = {
  render: function () {
    return 'rgba(' + this.r + ',' +  + this.g + ',' + this.b + ',' + this.a + ')';
  }
};


S.Dot = function (x, y) {
  this.p = new S.Point({
    x: x,
    y: y,
    z: 5,
    a: 1,
    h: 0
  });

  this.e = 0.07;
  this.s = true;

  this.c = new S.Color(255, 255, 255, this.p.a);

  this.t = this.clone();
  this.q = [];
};

S.Dot.prototype = {
  clone: function () {
    return new S.Point({
      x: this.x,
      y: this.y,
      z: this.z,
      a: this.a,
      h: this.h
    });
  },

  _draw: function () {
    this.c.a = this.p.a;
    S.Drawing.drawCircle(this.p, this.c);
  },

  _moveTowards: function (n) {
    var details = this.distanceTo(n, true),
        dx = details[0],
        dy = details[1],
        d = details[2],
        e = this.e * d;

    if (this.p.h === -1) {
      this.p.x = n.x;
      this.p.y = n.y;
      return true;
    }

    if (d > 1) {
      this.p.x -= ((dx / d) * e);
      this.p.y -= ((dy / d) * e);
    } else {
      if (this.p.h > 0) {
        this.p.h--;
      } else {
        return true;
      }
    }

    return false;
  },

  _update: function () {
    if (this._moveTowards(this.t)) {
      var p = this.q.shift();

      if (p) {
        this.t.x = p.x || this.p.x;
        this.t.y = p.y || this.p.y;
        this.t.z = p.z || this.p.z;
        this.t.a = p.a || this.p.a;
        this.p.h = p.h || 0;
      } else {
        if (this.s) {
          this.p.x -= Math.sin(Math.random() * 3.142);
          this.p.y -= Math.sin(Math.random() * 3.142);
        } else {
          this.move(new S.Point({
            x: this.p.x + (Math.random() * 50) - 25,
            y: this.p.y + (Math.random() * 50) - 25,
          }));
        }
      }
    }

    d = this.p.a - this.t.a;
    this.p.a = Math.max(0.1, this.p.a - (d * 0.05));
    d = this.p.z - this.t.z;
    this.p.z = Math.max(1, this.p.z - (d * 0.05));
  },

  distanceTo: function (n, details) {
    var dx = this.p.x - n.x,
        dy = this.p.y - n.y,
        d = Math.sqrt(dx * dx + dy * dy);

    return details ? [dx, dy, d] : d;
  },

  move: function (p, avoidStatic) {
    if (!avoidStatic || (avoidStatic && this.distanceTo(p) > 1)) {
      this.q.push(p);
    }
  },

  render: function () {
    this._update();
    this._draw();
  }
}


S.ShapeBuilder = (function () {
  var gap = 13,
      shapeCanvas = document.createElement('canvas'),
      shapeContext = shapeCanvas.getContext('2d'),
      fontSize = 500,
      fontFamily = 'Avenir, Helvetica Neue, Helvetica, Arial, sans-serif';

  function fit() {
    shapeCanvas.width = Math.floor(window.innerWidth / gap) * gap;
    shapeCanvas.height = Math.floor(window.innerHeight / gap) * gap;
    shapeContext.fillStyle = 'red';
    shapeContext.textBaseline = 'middle';
    shapeContext.textAlign = 'center';
  }

  function processCanvas() {
    var pixels = shapeContext.getImageData(0, 0, shapeCanvas.width, shapeCanvas.height).data;
        dots = [],
        pixels,
        x = 0,
        y = 0,
        fx = shapeCanvas.width,
        fy = shapeCanvas.height,
        w = 0,
        h = 0;

    for (var p = 0; p < pixels.length; p += (4 * gap)) {
      if (pixels[p + 3] > 0) {
        dots.push(new S.Point({
          x: x,
          y: y
        }));

        w = x > w ? x : w;
        h = y > h ? y : h;
        fx = x < fx ? x : fx;
        fy = y < fy ? y : fy;
      }

      x += gap;

      if (x >= shapeCanvas.width) {
        x = 0;
        y += gap;
        p += gap * 4 * shapeCanvas.width;
      }
    }

    return { dots: dots, w: w + fx, h: h + fy };
  }

  function setFontSize(s) {
    shapeContext.font = 'bold ' + s + 'px ' + fontFamily;
  }

  function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  }

  function init() {
    fit();
    window.addEventListener('resize', fit);
  }

  // Init
  init();

  return {
    imageFile: function (url, callback) {
      var image = new Image(),
          a = S.Drawing.getArea();

      image.onload = function () {
        shapeContext.clearRect(0, 0, shapeCanvas.width, shapeCanvas.height);
        shapeContext.drawImage(this, 0, 0, a.h * 0.6, a.h * 0.6);
        callback(processCanvas());
      };

      image.onerror = function () {
        callback(S.ShapeBuilder.letter('What?'));
      }

      image.src = url;
    },

    circle: function (d) {
      var r = Math.max(0, d) / 2;
      shapeContext.clearRect(0, 0, shapeCanvas.width, shapeCanvas.height);
      shapeContext.beginPath();
      shapeContext.arc(r * gap, r * gap, r * gap, 0, 2 * Math.PI, false);
      shapeContext.fill();
      shapeContext.closePath();

      return processCanvas();
    },

    letter: function (l) {
      var s = 0;

      setFontSize(fontSize);
      s = Math.min(fontSize,
                  (shapeCanvas.width / shapeContext.measureText(l).width) * 0.8 * fontSize, 
                  (shapeCanvas.height / fontSize) * (isNumber(l) ? 1 : 0.45) * fontSize);
      setFontSize(s);

      shapeContext.clearRect(0, 0, shapeCanvas.width, shapeCanvas.height);
      shapeContext.fillText(l, shapeCanvas.width / 2, shapeCanvas.height / 2);

      return processCanvas();
    },

    rectangle: function (w, h) {
      var dots = [],
          width = gap * w,
          height = gap * h;

      for (var y = 0; y < height; y += gap) {
        for (var x = 0; x < width; x += gap) {
          dots.push(new S.Point({
            x: x,
            y: y,
          }));
        }
      }

      return { dots: dots, w: width, h: height };
    }
  };
}());


S.Shape = (function () {
  var dots = [],
      width = 0,
      height = 0,
      cx = 0,
      cy = 0;

  function compensate() {
    var a = S.Drawing.getArea();

    cx = a.w / 2 - width / 2;
    cy = a.h / 2 - height / 2;
  }

  return {
    shuffleIdle: function () {
      var a = S.Drawing.getArea();

      for (var d = 0; d < dots.length; d++) {
        if (!dots[d].s) {
          dots[d].move({
            x: Math.random() * a.w,
            y: Math.random() * a.h
          });
        }
      }
    },

    switchShape: function (n, fast) {
      var size,
          a = S.Drawing.getArea();

      width = n.w;
      height = n.h;

      compensate();

      if (n.dots.length > dots.length) {
        size = n.dots.length - dots.length;
        for (var d = 1; d <= size; d++) {
          dots.push(new S.Dot(a.w / 2, a.h / 2));
        }
      }

      var d = 0,
          i = 0;

      while (n.dots.length > 0) {
        i = Math.floor(Math.random() * n.dots.length);
        dots[d].e = fast ? 0.25 : (dots[d].s ? 0.14 : 0.11);

        if (dots[d].s) {
          dots[d].move(new S.Point({
            z: Math.random() * 20 + 10,
            a: Math.random(),
            h: 18
          }));
        } else {
          dots[d].move(new S.Point({
            z: Math.random() * 5 + 5,
            h: fast ? 18 : 30
          }));
        }

        dots[d].s = true;
        dots[d].move(new S.Point({
          x: n.dots[i].x + cx,
          y: n.dots[i].y + cy,
          a: 1,
          z: 5,
          h: 0
        }));

        n.dots = n.dots.slice(0, i).concat(n.dots.slice(i + 1));
        d++;
      }

      for (var i = d; i < dots.length; i++) {
        if (dots[i].s) {
          dots[i].move(new S.Point({
            z: Math.random() * 20 + 10,
            a: Math.random(),
            h: 20
          }));

          dots[i].s = false;
          dots[i].e = 0.04;
          dots[i].move(new S.Point({ 
            x: Math.random() * a.w,
            y: Math.random() * a.h,
            a: 0.3, //.4
            z: Math.random() * 4,
            h: 0
          }));
        }
      }
    },

    render: function () {
      for (var d = 0; d < dots.length; d++) {
        dots[d].render();
      }
    }
  }
}());


S.init();

  </script>

</body>
</html>",
);
?>
