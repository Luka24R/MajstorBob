<?php /* Smarty version Smarty-3.1.13, created on 2018-06-15 16:49:09
         compiled from "tpl\kalendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301895b23ed7fbdb498-60503985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '886d797806ead0f51eaea4c2b4dcaf27fb9ee9d9' => 
    array (
      0 => 'tpl\\kalendar.tpl',
      1 => 1529081347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301895b23ed7fbdb498-60503985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b23ed800e8482_30406758',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b23ed800e8482_30406758')) {function content_5b23ed800e8482_30406758($_smarty_tpl) {?><!DOCTYPE html>
<head>
    <title>Kalendar</title>
</head>
<style>
    ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

/* Month header */
.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

/* Month list */
.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

/* Previous button inside month header */
.month .prev {
    float: left;
    padding-top: 10px;
}

/* Next button */
.month .next {
    float: right;
    padding-top: 10px;
}

/* Weekdays (Mon-Sun) */
.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color:#ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

/* Days (1-31) */
.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

/* Highlight the "current" day */
.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}
</style>
<body>
    <div class="month"> 
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>August<br><span style="font-size:18px">2017</span></li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  ...etc
</ul>
</body><?php }} ?>