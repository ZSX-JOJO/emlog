<?php
/*
Plugin Name: 小贴士
Version: 2.0
Plugin URL:
Description: 这是世界上第一个emlog插件，它会在你的管理页面送上一句温馨的小提示。
Author: emlog官方
Author URL: https://www.emlog.net
*/

!defined('EMLOG_ROOT') && exit('access deined!');

$array_tips = [
	'为防文章丢失，emlog会在你书写文章的时候为你自动保存',
	'你可以把你未写完的文章保存到草稿箱里',
	'大尺寸的图片上传时会自动生成缩略图，从而加快页面加载速度',
	'请关注后台首页的官方信息栏目，这里有最新的动态',
	'你可以把图片嵌入到内容中，让你的文章图文并茂',
	'你可以在写文章的时候为文章设置访问密码，只让你授予密码的人访问',
	'emlog支持多人联合撰写',
	'emlog支持自建页面，并且可以上传照片，为自己做一个图文并茂的自我介绍页吧',
	'新建一个允许发表评论的页面，你会发现其实它还是一个简单的留言板',
	'检查你的站点目录下是否存在安装文件：install.php，有的话请删除它',
	'使用chrome浏览器，更好的体验emlog',
	'从明天起，做一个幸福的人',
];

function tips() {
	global $array_tips;
	$i = mt_rand(0, count($array_tips) - 1);
	$tip = $array_tips[$i];
	echo "<div id=\"tip\"> $tip</div>";
}

addAction('adm_main_top', 'tips');

function tips_css() {
	echo "<style type='text/css'>
    #tip{
        background:url(../content/plugins/tips/icon_tips.gif) no-repeat left 3px;
        padding:3px 18px;
        margin:5px 0px;
        font-size:12px;
        color:#999999;
    }
    </style>\n";
}

addAction('adm_head', 'tips_css');
