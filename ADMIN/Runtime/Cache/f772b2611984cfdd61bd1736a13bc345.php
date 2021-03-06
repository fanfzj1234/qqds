<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  

    <link rel="stylesheet" href="__CSS__/loading_style.css" media="screen" type="text/css" />

</head>

<body>

  <svg class='no-area'>
<filter id='light-top'>
<feGaussianBlur in='SourceAlpha' stdDeviation='4' result='blur'/>
<feSpecularLighting surfaceScale='4' specularConstant='1' specularExponent='20' lighting-color='#eee' in='blur' result='highlight'>
<fePointLight x='700' y='-1300' z='1000'/>
</feSpecularLighting>
<feComposite in='highlight' in2='SourceAlpha' operator='in' result='highlight'/>
<feComposite in='SourceGraphic' in2='highlight' operator='arithmetic' k1='0' k2='1' k3='1' k4='0'/>
</filter>

<filter id='light2'>
<feGaussianBlur in='SourceAlpha' stdDeviation='2' result='blur'/>
<feSpecularLighting in='blur' surfaceScale='4' specularConstant='1' specularExponent='14' lighting-color='#eee' result='specOut'>
<fePointLight x='-8000' y='-10000' z='5000'/>
</feSpecularLighting>
<feComposite in='specOut' in2='SourceAlpha' operator='in' result='light'/>
<feComposite in='SourceGraphic' in2='light' operator='arithmetic' k1='0' k2='1' k3='1' k4='0'/>
</filter>

<filter id='distant1'>
<feGaussianBlur in='SourceAlpha' stdDeviation='4' result='blur'/>
<feSpecularLighting in='blur' surfaceScale='2' specularConstant='1.2' specularExponent='12' lighting-color='#eee' result='specOut'>
<feDistantLight azimuth='200' elevation='20'/>
</feSpecularLighting>
<feComposite in='specOut' in2='SourceAlpha' operator='in' result='light'/>
<feComposite in='SourceGraphic' in2='light' operator='arithmetic' k1='0' k2='1' k3='1' k4='0'/>
</filter>

<filter id='distant-top'>
<feGaussianBlur in='SourceAlpha' stdDeviation='12' result='blur'/>
<feSpecularLighting in='blur' surfaceScale='10' specularConstant='2' specularExponent='12' lighting-color='#fff' result='specOut'>
<feDistantLight azimuth='90' elevation='140'/>
</feSpecularLighting>
<feComposite in='specOut' in2='SourceAlpha' operator='in' result='light'/>
<feComposite in='SourceGraphic' in2='light' operator='arithmetic' k1='0' k2='1' k3='1' k4='0'/>
</filter>

<filter id='distant-front'>
<feGaussianBlur in='SourceAlpha' stdDeviation='24 8' result='blur'/>
<feSpecularLighting in='blur' surfaceScale='14' specularConstant='1' specularExponent='32' lighting-color='#fff' result='specOut'>
<feDistantLight azimuth='90' elevation='90'/>
</feSpecularLighting>
<feComposite in='specOut' in2='SourceAlpha' operator='in' result='light'/>
<feComposite in='SourceGraphic' in2='light' operator='arithmetic' k1='0' k2='1' k3='1' k4='0'/>
</filter>

<filter id='diff1'>
<feDiffuseLighting in='SourceGraphic' diffuseConstant='1.2' lighting-color='#fff' result='diffOut'>
<fePointLight x='100' y='0' z='100'/>
</feDiffuseLighting>
<feComposite in='diffOut' in2='SourceAlpha' operator='in' result='light'/>
<feComposite in='SourceGraphic' in2='light' operator='arithmetic' k1='1' k2='0' k3='0' k4='0'/>
</filter>

<filter id='dilate6'><feMorphology operator='dilate' radius='6'/></filter>
<filter id='dilate10'><feMorphology operator='dilate' radius='10'/></filter>
<filter id='erode2'><feMorphology operator='erode' radius='2'/></filter>
</svg>

<!--For Firefox-->
<style>
.test:after{filter:url(#light-top)}
.dilate:before{filter:url(#dilate10)}
.dilate:after{filter:url(#dilate6)}
.erode:after{filter:url(#erode2)}
.distant1:after{filter:url(#distant1)}
.distant-top:after{filter:url(#distant-top)}
.distant-front:after{filter:url(#distant-front)}
.diff1{filter:url(#diff1)}
.bevel,.bevel:after{filter:url(#light2)}
</style>

<div style="text-align:center;clear:both;">
</div>

<h1 class='outlinedB'>Loading...</h1>



</body>

</html>