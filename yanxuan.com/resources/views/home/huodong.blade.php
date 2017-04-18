@extends('home.layout.index')

@section('contents')

	<style>
		
		.m-toast {
		    bottom: 0;
		    height: 100%;
		    left: 0;
		    position: fixed;
		    right: 0;
		    top: 0;
		    width: 100%;
		    z-index: 99999;
		}
		.m-toast .u-toast {
		    background: #000 none repeat scroll 0 0;
		    border-radius: 37px;
		    color: #fff;
		    font-size: 14px;
		    left: 50%;
		    line-height: 18px;
		    opacity: 0.75;
		    padding: 10px 30px;
		    position: absolute;
		    top: 50%;
		    transform: translate3d(-50%, -50%, 0px);
		    transition: opacity 0.5s ease-in 0s;
		    white-space: nowrap;
		}
		.m-pop-addcart {
		    height: 100%;
		    left: 0;
		    position: fixed;
		    top: 0;
		    width: 100%;
		    z-index: 99999;
		}
		.m-pop-addcart .cl::after, .m-pop-addcart .cl::before, .m-pop-addcart .info-txt .item::after, .m-pop-addcart .info-txt .item::before {
		    content: "";
		    display: table;
		    line-height: 0;
		}
		.m-pop-addcart .cl::after, .m-pop-addcart .info-txt .item::after {
		    clear: both;
		}
		.m-pop-addcart .fl, .m-pop-addcart .fr, .m-pop-addcart .info-txt .con, .m-pop-addcart .info-txt .tt {
		    display: inline-block;
		}
		.m-pop-addcart .fl, .m-pop-addcart .info-txt .con, .m-pop-addcart .info-txt .tt {
		    float: left;
		}
		.m-pop-addcart .fr {
		    float: right;
		}
		.m-pop-addcart .cart-close {
		    background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAYBAMAAAD9m0v1AAAAJ1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADdEvm1AAAADHRSTlMAYDCf788Qv99QQCD64iwKAAAAjklEQVQY003OMQ6CQBCF4X/dhMSOGO0sKLDHqAdAbyCRxoaGE5BwAE7CVbgZk2Uyw2v2bb7N5nHCcpw5F3aTGt7aU1PUYhi+4Hjp0nGYErVsKXPgJbRhDXEExwdgGCtwHNilr/FkTb97eauyxj/5gGMpTdBJcHQS/HW6KyW2thndHRZQ/MNVCXgW3MEwXwEuJhBmqtgLPQAAAABJRU5ErkJggg==") no-repeat scroll 0 0 / 100% auto;
		    display: block;
		    height: 24px;
		    position: absolute;
		    right: 10px;
		    top: 10px;
		    width: 25px;
		}
		.m-pop-addcart .sku-mask {
		    background-color: #000;
		    height: 100%;
		    opacity: 0.5;
		    width: 100%;
		}
		.m-pop-addcart .pop-main {
		    background-color: #fff;
		    left: 50%;
		    margin-left: -430px;
		    margin-top: -190px;
		    min-height: 340px;
		    padding: 20px;
		    position: absolute;
		    top: 50%;
		    width: 720px;
		}
		.m-pop-addcart .hide {
		    display: none;
		}
		.m-pop-addcart .show {
		    display: block;
		}
		.m-pop-addcart .sku-img {
		    border: 1px solid #e8e8e8;
		    width: 338px;
		}
		.m-pop-addcart .sku-img img {
		    background-color: #f4f4f4;
		    display: block;
		    height: 338px;
		    width: 338px;
		}
		.m-pop-addcart .info-txt {
		    margin-left: 20px;
		    max-height: 340px;
		    overflow-y: auto;
		    width: 359px;
		}
		.m-pop-addcart .info-txt .name {
		    font-size: 20px;
		    font-weight: 700;
		    line-height: 20px;
		    margin-bottom: 7px;
		}
		.m-pop-addcart .info-txt .prize {
		    color: #d7282d;
		    font-size: 28px;
		    line-height: 30px;
		    margin-left: 2px;
		    margin-top: 20px;
		}
		.m-pop-addcart .info-txt .prize .rmb {
		    color: #d7282d;
		    font-size: 18px;
		    line-height: 30px;
		    margin-left: 0;
		}
		.m-pop-addcart .info-txt .item {
		    margin-top: 10px;
		}
		.m-pop-addcart .info-txt .tt {
		    color: #666;
		    float: left;
		    font-size: 12px;
		    font-weight: 400;
		    line-height: 30px;
		    width: 54px;
		}
		.m-pop-addcart .info-txt .con {
		    font-size: 0;
		    width: 305px;
		}
		.m-pop-addcart .info-txt .con .tag {
		    border: 1px solid #ddd;
		    color: #333;
		    cursor: pointer;
		    display: inline-block;
		    font-size: 12px;
		    margin-bottom: 10px;
		    margin-right: 10px;
		    overflow: hidden;
		    vertical-align: middle;
		}
		.m-pop-addcart .info-txt .con .checked {
		    border-color: #b4a078;
		    position: relative;
		}
		.m-pop-addcart .info-txt .con .tag .txt {
		    line-height: 28px;
		    padding: 0 10px;
		}
		.m-pop-addcart .info-txt .con .checked::after {
		    background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTMyIDc5LjE1OTI4NCwgMjAxNi8wNC8xOS0xMzoxMzo0MCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUuNSAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzRGMTlGMENGRDk5MTFFNkI0MTI5Mjc4QkEwRUMxM0EiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzRGMTlGMERGRDk5MTFFNkI0MTI5Mjc4QkEwRUMxM0EiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3NEYxOUYwQUZEOTkxMUU2QjQxMjkyNzhCQTBFQzEzQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3NEYxOUYwQkZEOTkxMUU2QjQxMjkyNzhCQTBFQzEzQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pri/LygAAABdSURBVHjaYvTJLGQgFuQZvvrPRIpiEM1EimKiNCArJqgBXTFeDdgU49SATfGk82KMWDWAFMMk0RVjaEA2GaYIRmMEK7JiGBtdMVwDNjfDxNDlGHfNiv7PQAIACDAAPvA1OzlG3lwAAAAASUVORK5CYII=") no-repeat scroll 0 0;
		    bottom: 0;
		    content: "";
		    height: 12px;
		    position: absolute;
		    right: 0;
		    width: 12px;
		}
		.m-pop-addcart .info-txt .con .disabled {
		    border: 1px dashed #e4e4e4;
		    color: #ccc;
		    cursor: not-allowed;
		}
		.m-pop-addcart .m-add-btns {
		    margin-top: 30px;
		}
		.m-pop-addcart .u-btn {
		    background-color: #f5f5f5;
		    border: 1px solid #ccc;
		    border-radius: 2px;
		    color: #333;
		    display: inline-block;
		    font-size: 12px;
		    height: 28px;
		    letter-spacing: normal;
		    line-height: 26px;
		    padding: 0;
		    text-align: center;
		    text-decoration: none;
		    width: 96px;
		}
		.m-pop-addcart .u-btn-yellow {
		    background-color: #b4a078;
		    border: 1px solid #b4a078;
		    color: #fff;
		    font-size: 18px;
		    height: 49px;
		    line-height: 47px;
		    width: 168px;
		}
		.m-pop-addcart .u-btn-yellow.disabled {
		    background: #ccc none repeat scroll 0 0;
		    border-color: #ccc;
		}
		.m-pop-addcart .m-selnum {
		    border: 1px solid #ddd;
		    display: inline-block;
		    overflow: hidden;
		}
		.m-pop-addcart .m-selnum .less, .m-pop-addcart .m-selnum .more, .m-pop-addcart .m-selnum .u-input {
		    background: #fff none repeat scroll 0 0;
		    cursor: pointer;
		    float: left;
		    height: 30px;
		    line-height: 28px;
		    position: relative;
		    width: 36px;
		}
		.m-pop-addcart .m-selnum .less {
		    border-right: 1px solid #ddd;
		}
		.m-pop-addcart .m-selnum .less::before {
		    background: #999 none repeat scroll 0 0;
		    content: "";
		    height: 2px;
		    left: 12px;
		    overflow: hidden;
		    position: absolute;
		    top: 15px;
		    width: 10px;
		}
		.m-pop-addcart .m-selnum .more {
		    border-left: 1px solid #ddd;
		}
		.m-pop-addcart .m-selnum .more::after, .m-pop-addcart .m-selnum .more::before {
		    background: #999 none repeat scroll 0 0;
		    content: "";
		    height: 2px;
		    overflow: hidden;
		    position: absolute;
		    width: 2px;
		}
		.m-pop-addcart .m-selnum .more::after {
		    left: 12px;
		    top: 15px;
		    width: 10px;
		}
		.m-pop-addcart .m-selnum .more::before {
		    height: 10px;
		    left: 16px;
		    top: 11px;
		}
		.m-pop-addcart .m-selnum .u-input {
		    border: 0 none;
		    border-radius: 0;
		    color: #333;
		    font-size: 12px;
		    margin: 0;
		    text-align: center;
		    width: 60px;
		}

	</style>

	<style>* {
		margin: 0;
		padding: 0
	}

	.psc-m-hd {
		position: relative;
		width: 100%;
		height: 240px;
		z-index: 99
	}

	.psc-m-hdiframe,.psc-m-hdiframe iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		overflow: hidden
	}

	.psc-m-hdiframe {
		height: 242px
	}

	.psc-m-hdiframe iframe {
		height: 470px;
		border: 0;
		background: 0 0
	}

	.psc-m-hdiframe.hover {
		height: 470px
	}

	.psc-m-hdiframe.fixed {
		position: fixed;
		height: 65px
	}

	.psc-m-hdiframe.fixed.hover {
		height: 380px
	}

	.psc-g-ft {
		border: 0;
		height: 503px;
		height: 507px\9;
		width: 100%;
		overflow: hidden;
		display: block
	}

	.psc-m-loginbox,.psc-m-loginbox .bg {
		top: 0;
		left: 0;
		width: 100%;
		height: 100%
	}

	.psc-m-loginbox {
		position: fixed;
		display: none;
		z-index: 100
	}

	.psc-m-loginbox .bg {
		display: block;
		position: absolute;
		background: #000;
		opacity: .8;
		z-index: 0;
		filter: alpha(opacity=80)
	}

	.psc-m-youlogin {
		position: absolute;
		width: 302px;
		min-height: 280px;
		top: 50%;
		left: 50%;
		margin: -206px 0 0 -216px;
		padding: 30px 40px 0;
		background-color: #FFF;
		border: 1px solid transparent;
		opacity: 0;
		-webkit-transform: scale(.9);
		-moz-transform: scale(.9);
		-ms-transform: scale(.9);
		-o-transform: scale(.9);
		transform: scale(.9);
		z-index: 1
	}

	.psc-f-fadeIn {
		display: block;
		opacity: 1;
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
		-webkit-transition: all .2s ease-out .1s;
		-moz-transition: all .2s ease-out .1s;
		-o-transition: all .2s ease-out .1s;
		transition: all .2s ease-out .1s
	}

	.psc-m-hd-login h2 {
		text-align: left;
		font-size: 18px;
		font-weight: 700;
		color: #333;
		line-height: 18px
	}

	.psc-u-close {
		position: absolute;
		width: 24px;
		height: 24px;
		top: 20px;
		right: 20px;
		cursor: pointer;
		background: url(https://mimg.127.net/hz/uploader/20160309/14575123070030581.png) no-repeat
	}

	.psc-u-close:hover {
		background-position: 0 -24px
	}

	.psc-m-mn {
		width: 300px
	}

	.m-fixedtool {
		position: fixed;
		left: 50%;
		bottom: 91px;
		margin-left: 560px;
		cursor: default;
		width: 60px;
		height: 61px;
		z-index: 99;
		padding-top: 116px
	}

	.u-customerService,.u-goTop {
		display: block;
		width: 60px;
		height: 48px;
		padding-top: 12px;
		background: #333;
		color: #fff;
		font-size: 12px;
		line-height: 12px;
		text-align: center;
		margin-bottom: 1px
	}

	.u-customerService:hover,.u-goTop:hover {
		background: #ab2b2b
	}

	.u-goTop {
		display: none;
		height: 44px;
		padding-top: 16px
	}

	.u-goTop.active {
		display: block
	}

	.u-customerService i,.u-goTop i {
		display: inline-block;
		width: 9px;
		height: 5px;
		margin-bottom: 10px;
		background: url(https://mimg.127.net/hxm/yanxuan-web/p/20150730/style/img/fixedtool-scd3b9d9795-9eefc911ae.png) no-repeat
	}

	.u-customerService i {
		width: 21px;
		height: 21px;
		background-position: 0 -5px;
		margin-bottom: 5px
	}

	.u-customerService p,.u-goTop p {
		font-size: 12px;
		color: #fff;
		font-weight: 400;
		font-family: 'Heiti SC','Lucida Grande','Hiragino Sans GB','Hiragino Sans GB W3',verdana
	}

	.ysf-online-kefu {
		display: none!important
	}

	.m-toast {
		position: fixed;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		width: 100%;
		height: 100%
	}

	.u-toast {
		position: absolute;
		line-height: 18px;
		top: 50%;
		left: 50%;
		transform: translate3d(-50%,-50%,0);
		-webkit-transform: translate3d(-50%,-50%,0);
		background: rgba(0,0,0,.3);
		padding: 10px 30px;
		border-radius: 37px;
		color: #fff
	}

	@media (min-width:320px) and (max-width:1150px) {
		.m-fixedtool {
			left: auto;
			margin-left: 0;
			right: 0
		}
	}</style>

	<style>* {
		margin: 0;
		padding: 0
	}

	.psc-m-hd {
		position: relative;
		width: 100%;
		height: 240px;
		z-index: 99
	}

	.psc-m-hdiframe,.psc-m-hdiframe iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		overflow: hidden
	}

	.psc-m-hdiframe {
		height: 242px
	}

	.psc-m-hdiframe iframe {
		height: 470px;
		border: 0;
		background: 0 0
	}

	.psc-m-hdiframe.hover {
		height: 470px
	}

	.psc-m-hdiframe.fixed {
		position: fixed;
		height: 65px
	}

	.psc-m-hdiframe.fixed.hover {
		height: 380px
	}

	.psc-g-ft {
		border: 0;
		height: 503px;
		height: 507px\9;
		width: 100%;
		overflow: hidden;
		display: block
	}

	.psc-m-loginbox,.psc-m-loginbox .bg {
		top: 0;
		left: 0;
		width: 100%;
		height: 100%
	}

	.psc-m-loginbox {
		position: fixed;
		display: none;
		z-index: 100
	}

	.psc-m-loginbox .bg {
		display: block;
		position: absolute;
		background: #000;
		opacity: .8;
		z-index: 0;
		filter: alpha(opacity=80)
	}

	.psc-m-youlogin {
		position: absolute;
		width: 302px;
		min-height: 280px;
		top: 50%;
		left: 50%;
		margin: -206px 0 0 -216px;
		padding: 30px 40px 0;
		background-color: #FFF;
		border: 1px solid transparent;
		opacity: 0;
		-webkit-transform: scale(.9);
		-moz-transform: scale(.9);
		-ms-transform: scale(.9);
		-o-transform: scale(.9);
		transform: scale(.9);
		z-index: 1
	}

	.psc-f-fadeIn {
		display: block;
		opacity: 1;
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
		-webkit-transition: all .2s ease-out .1s;
		-moz-transition: all .2s ease-out .1s;
		-o-transition: all .2s ease-out .1s;
		transition: all .2s ease-out .1s
	}

	.psc-m-hd-login h2 {
		text-align: left;
		font-size: 18px;
		font-weight: 700;
		color: #333;
		line-height: 18px
	}

	.psc-u-close {
		position: absolute;
		width: 24px;
		height: 24px;
		top: 20px;
		right: 20px;
		cursor: pointer;
		background: url(/homeCSS/images/14575123070030581.png) no-repeat
	}

	.psc-u-close:hover {
		background-position: 0 -24px
	}

	.psc-m-mn {
		width: 300px
	}

	.m-fixedtool {
		position: fixed;
		left: 50%;
		bottom: 91px;
		margin-left: 560px;
		cursor: default;
		width: 60px;
		height: 61px;
		z-index: 99;
		padding-top: 116px
	}

	.u-customerService,.u-goTop {
		display: block;
		width: 60px;
		height: 48px;
		padding-top: 12px;
		background: #333;
		color: #fff;
		font-size: 12px;
		line-height: 12px;
		text-align: center;
		margin-bottom: 1px
	}

	.u-customerService:hover,.u-goTop:hover {
		background: #ab2b2b
	}

	.u-goTop {
		display: none;
		height: 44px;
		padding-top: 16px
	}

	.u-goTop.active {
		display: block
	}

	.u-customerService i,.u-goTop i {
		display: inline-block;
		width: 9px;
		height: 5px;
		margin-bottom: 10px;
		background: url() no-repeat
	}

	.u-customerService i {
		width: 21px;
		height: 21px;
		background-position: 0 -5px;
		margin-bottom: 5px
	}

	.u-customerService p,.u-goTop p {
		font-size: 12px;
		color: #fff;
		font-weight: 400;
		font-family: 'Heiti SC','Lucida Grande','Hiragino Sans GB','Hiragino Sans GB W3',verdana
	}

	.ysf-online-kefu {
		display: none!important
	}

	.m-toast {
		position: fixed;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		width: 100%;
		height: 100%
	}

	.u-toast {
		position: absolute;
		line-height: 18px;
		top: 50%;
		left: 50%;
		transform: translate3d(-50%,-50%,0);
		-webkit-transform: translate3d(-50%,-50%,0);
		background: rgba(0,0,0,.3);
		padding: 10px 30px;
		border-radius: 37px;
		color: #fff
	}

	@media (min-width:320px) and (max-width:1150px) {
		.m-fixedtool {
			left: auto;
			margin-left: 0;
			right: 0
		}
	}</style>
	<style>a,body {
		color: #666
	}

	.g-main,.m-1090,.section,body {
		position: relative
	}

	.u-coupon a,a {
		cursor: pointer
	}

	.m-ctrl a,.m-info a,.mfrs,.section0 .btn,.section0 .m-bd,.section4:before,.u-coupon a,table {
		text-align: center
	}

	a,blockquote,body,dd,del,div,dl,dt,h3,i,iframe,img,li,object,span,table,td,textarea,th,ul {
		margin: 0;
		padding: 0;
		font-style: normal;
		border: 0;
		vertical-align: baseline
	}

	img {
		border: 0;
		vertical-align: bottom
	}

	i.cart,i.coupon {
		vertical-align: -6px
	}

	table {
		border-collapse: collapse
	}

	body {
		width: 100%;
		min-width: 1090px;
		height: auto;
		z-index: 1;
		font: 12px/20px 'Microsoft Yahei',STHeiti
	}

	a {
		text-decoration: none;
		outline: 0
	}

	li {
		list-style: none
	}

	em {
		font-style: normal
	}

	i {
		display: inline-block;
		background: url(/homeCSS/images/14895619333690560.png) no-repeat
	}

	i.tuijian {
		float: left;
		background-position: 0 -319px;
		width: 120px;
		height: 95px
	}

	i.code {
		width: 100px;
		height: 130px;
		background-position: 0 -124px
	}

	i.back,i.kefu {
		width: 36px;
		height: 26px;
		margin: 0 6px
	}

	i.kefu {
		background-position: 5px -89px
	}

	i.back:after,i.kefu:after {
		display: block;
		width: 100%;
		margin-top: 20px;
		font-size: 8px;
		text-align: center
	}

	i.back:after {
		content: '回顶部';
		letter-spacing: -1px
	}

	i.kefu:after {
		content: '客服'
	}

	i.back {
		background-position: -33px -89px
	}

	i.cart,i.coupon {
		width: 20px;
		height: 20px
	}

	i.cart {
		background-position: -30px -261px
	}

	i.coupon {
		background-position: -1px -259px
	}

	.m-1090 {
		width: 1090px;
		margin: 0 auto
	}

	.g-main {
		-webkit-animation: fadeIn 1.5s;
		animation: fadeIn 1.5s
	}

	.section {
		width: 100%;
		height: auto;
		overflow: hidden
	}

	.section0 {
		height: 1700px;
		background: url(/homeCSS/images/14895414005360418.png)
	}

	.section2 {
		height: 860px;
		background: url(/homeCSS/images/14895414000280417.png)
	}

	.section3 {
		background: url(/homeCSS/images/14895414009350419.png);
		padding-bottom: 100px
	}

	.section4 {
		height: 555px;
		background-color: #ccced3;
		overflow: visible
	}

	.section2 .tit {
		font-size: 28px;
		color: #000;
		padding: 20px 0 10px
	}

	.section2 .subtit {
		font-size: 14px;
		color: #373a3b
	}

	/*.section2 .price {
		font-size: 38px
	}*/

	/*.section2 .price:before {
		font-size: 30px
	}*/

	.section2 .buy,.section2 .org {
		font-size: 18px
	}

	.section2 i.coupon {
		background-position: 0 -282px;
		width: 30px;
		height: 30px
	}

	.section2 i.cart {
		background-position: -42px -282px;
		width: 35px;
		height: 32px;
		vertical-align: -7px
	}

	.section2 .buy {
		width: 200px;
		height: 36px;
		line-height: 36px;
		margin: 0 20px;
		vertical-align: 5px
	}

	.section2 .u-btm {
		padding-top: 6px
	}

	/*.section3 .price:before {
		font-size: 20px
	}*/

	.section3 .m-goods {
		padding-top: 186px
	}

	.section4:before {
		content: '*该价格为商品制造厂商零售市场指导价';
		font: 16px STFangsong;
		color: rgba(68,68,68,.5);
		position: absolute;
		top: -30px;
		display: block;
		width: 100%
	}

	.line {
		width: 100%;
		height: 40px;
		background: url(/homeCSS/images/14895414020740424.png) center no-repeat
	}

	.line.one {
		background-position: 0 0;
		margin-top: 6px
	}

	.line.two {
		background-position: 0 -39px;
		margin-top: 50px
	}

	.lingqu {
		display: none;
		position: absolute;
		right: 96px;
		top: 35px;
		width: 25px;
		height: 69px;
		background: #a2d2d6;
		color: #fff;
		font-size: 16px;
		padding-top: 6px;
		z-index: 2
	}

	.section0 .img {
		position: absolute;
		top: 0;
		left: -125px
	}

	.m-imgs a,.section0 .img0,.section0 .img2 {
		position: relative
	}

	.section0 .m-1090 {
		margin-top: 70px
	}

	.section0 .m-bd {
		width: auto;
		padding-left: 280px;
		height: auto;
		overflow: hidden;
		padding-bottom: 20px
	}

	.section0 .m-imgs {
		width: 100%;
		margin-top: 75px
	}

	.section0>div.imgpos {
		position: relative;
		height: 600px
	}

	.section0 .btn {
		display: block;
		width: 320px;
		height: 58px;
		line-height: 58px;
		font-size: 28px;
		color: #fff;
		background-color: #e46257;
		margin: 16px auto;
		-webkit-border-radius: 4px;
		border-radius: 4px
	}

	.m-imgs span,.section0 p {
		font-size: 16px
	}

	.m-imgs a {
		float: left;
		width: 33%
	}

	.m-imgs span {
		display: block;
		position: absolute;
		left: 0;
		bottom: -20px;
		padding-left: 85px;
		color: #de2d42
	}

	.m-couponwrap {
		position: relative;
		overflow: hidden;
		padding: 6px 0 25px;
		margin-left: -25px
	}

	.u-coupon {
		position: relative;
		float: left;
		width: 393px;
		height: 147px;
		margin: 15px 0 0 20px;
		-webkit-transition: all ease 1s;
		transition: all ease 1s
	}

	.u-coupon:before {
		position: absolute;
		right: 0;
		top: 0;
		content: '';
		width: 80px;
		height: 146px;
		/*此处为优惠券背景颜色*/
		background: #f492a9;
		z-index: 0;
		border-width: 0 1px 1px 0;
		border-style: solid;
		border-color: #ccc;
		-webkit-transition: all ease 1s;
		transition: all ease 1s
	}

	.u-coupon a,.u-coupon i {
		z-index: 2;
		display: block
	}

	.u-coupon.active:before {
		/*此处为鼠标放入颜色*/
		background: #8fbfd6
	}

	.u-coupon.active:hover:before {
		background: #59a1c3
	}



	/*不可领取*/
	.u-coupon.poster:before {
		background: gray;
	}

	.u-coupon.poster:hover:before {
		background: gray;
	}
	
	/*不可领取*/

	.u-coupon:hover:before {
		background: #eb708a
	}

	.u-coupon i {
		width: 393px;
		height: 158px;
		background: url(/homeCSS/images/14895413989020410.png) center no-repeat;
		position: relative
	}

	.u-coupon i.q25 {
		background-position: 0 -168px
	}

	.u-coupon i.q45 {
		background-position: 0 0
	}

	.u-coupon i.q85 {
		background-position: 0 -335px
	}

	.u-coupon i.q175 {
		background-position: 0 -500px
	}

	.u-coupon a {
		position: absolute;
		right: 0;
		top: 0;
		width: 80px;
		line-height: 30px;
		padding-top: 15px;
		font-size: 24px;
		color: #fff
	}

	.m-slidebox {
		height: 520px;
		margin-top: 220px
	}

	.m-slidwrap,.m-slidwrap li {
		height: 100%;
		overflow: hidden
	}

	.m-slidwrap {
		position: relative;
		width: 690px;
		padding-left: 400px
	}

	.imgpos,.m-ctrl,.m-slidwrap li {
		position: absolute
	}

	.m-slidwrap li {
		float: left;
		opacity: 0;
		filter: alpha(opacity=0);
		z-index: 0;
		width: auto;
		-webkit-transition: all 1s ease;
		transition: all 1s ease
	}

	.m-slidwrap li.active {
		display: block;
		opacity: 1;
		filter: alpha(opacity=100);
		z-index: 2
	}

	.m-slidwrap li .link {
		display: block;
		width: 523px;
		height: 400px;
		overflow: hidden
	}

	.m-ctrl {
		left: 50px;
		top: 0
	}

	.m-ctrl a {
		display: block;
		width: 112px;
		height: 114px;
		margin-bottom: 18px;
		border: 1px solid #fff;
		background: rgba(189,199,206,.35);
		-webkit-border-radius: 100%;
		border-radius: 100%;
		-webkit-transition: all 1s ease;
		transition: all 1s ease
	}

	.buy,.m-goods-item .link,.m-info a,.u-btm>span {
		display: inline-block
	}

	.m-ctrl a:hover {
		background: rgba(189,199,206,.8)
	}

	.imgpos {
		left: 50%;
		margin-left: -960px
	}

	.m-goods-item,.m-list {
		position: relative;
		overflow: hidden
	}

	.tit {
		font-size: 16px;
		color: #5c5c5c
	}

	.subtit {
		font-size: 18px
	}

	.price {
		font-size: 24px ;
		color: #de2d42
	}

	.buy,.org {
		font-size: 12px
	}

	.org {
		color: #929292
	}

	.mfrs {
		margin-top: 14px
	}

	.buy {
		width: 76px;
		height: 24px;
		line-height: 23px;
		color: #fff;
		background: #e72626;
		margin: 0 8px 0 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px
	}

	.m-goods-item .link,.m-goods-item .link img,.u-desc {
		width: 100%
	}

	.u-btm>span {
		vertical-align: -4px;
		padding: 0 2px 0 3px
	}

	/*.price:before,del:before {
		content: '¥'
	}*/

	/*.price:before {
		font: 30px 'Mircosoft YaHei'
	}*/

	.mfrs {
		float: right;
		height: 18px;
		line-height: 18px;
		padding: 0 5px;
		border: 1px solid #cdcdcd;
		font-size: 12px;
		color: #929292
	}

	.m-middle .u-btm,.m-middle .u-desc {
		text-align: right;
		position: absolute
	}

	.m-goods {
		overflow: hidden
	}

	.m-goods-item {
		height: auto;
		margin-left: -13px
	}

	.m-goods-item.rt>img,.m-list {
		float: left;
		margin-left: 13px
	}

	.m-goods-item .m-info {
		width: 100%;
		height: auto;
		text-align: right;
		-webkit-box-sizing: border-box;
		box-sizing: border-box
	}

	.m-goods-item .link {
		height: 340px;
		overflow: hidden
	}

	.m-list {
		width: 262px;
		height: 466px;
		margin-top: 60px
	}

	.m-list .u-btm,.m-list img {
		-webkit-transition: all ease 1s;
		transition: all ease 1s
	}

	.m-list:hover img {
		-webkit-transform: scale(1.1,1.1);
		transform: scale(1.1,1.1)
	}

	.m-list:hover .u-btm {
		bottom: 0
	}

	.m-list .tit {
		padding: 40px 0 10px;
		letter-spacing: 1px
	}

	.m-goods-item>img {
		width: 263px;
		height: 549px;
		margin-top: -23px
	}

	.m-list.m-middle {
		width: 536px;
		height: 464px;
		padding: 1px 0 0 1px;
		-webkit-box-sizing: border-box;
		box-sizing: border-box
	}

	.m-menu,.m-middle .u-desc {
		-webkit-box-sizing: border-box
	}

	.m-list.m-middle .link {
		height: 464px
	}

	.m-middle .u-btm {
		left: 0;
		bottom: -60px;
		width: 100%;
		height: 50px;
		background: rgba(0,0,0,.67);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)
	}

	.m-middle .m-info {
		top: 0;
		left: 0
	}

	.m-middle .u-desc {
		top: 0;
		left: 0;
		padding-right: 16px;
		box-sizing: border-box
	}

	.m-menu,.tipMsg {
		text-align: center
	}

	.m-middle .tit {
		font-size: 26px;
		color: #373737;
		padding-top: 65px
	}

	.m-middle .subtit {
		font-size: 20px;
		padding-top: 10px;
		font-family: PingFangSC
	}

	.m-middle del {
		font-size: 16px
	}

	/*.m-middle .price {
		font: 34px SimHei;
		color: #fff;
		padding-top: 6px
	}*/

	.m-middle .buy {
		height: 35px;
		line-height: 35px;
		padding: 0 16px;
		font-size: 18px;
		vertical-align: 4px
	}

	.m-middle i.cart {
		background-position: -88px -282px;
		width: 34px;
		height: 34px;
		vertical-align: -10px;
		margin-right: 16px
	}

	.m-middle i.coupon {
		width: 30px;
		height: 30px;
		line-height: 30px;
		text-align: center;
		background: #e72626;
		font: 20px SimHei;
		color: #fff;
		vertical-align: 5px;
		margin-right: 4px;
		-webkit-border-radius: 100%;
		border-radius: 100%
	}

	.m-middle i.coupon:before {
		content: '券';
		vertical-align: -4px
	}

	.m-goods-item.lf,.m-goods-item.rt {
		padding-top: 130px
	}

	.m-goods-item.lf .m-list,.m-goods-item.lf img {
		float: right
	}

	.m-goods-item.rt {
		margin-left: -13px
	}

	.m-goods-item.lf img {
		float: right;
		margin-left: 13px
	}

	.m-goods-item.f1:before,.m-goods-item.f2:before,.m-goods-item.f3:before,.m-goods-item.f4:before {
		position: absolute;
		top: 115px;
		content: '';
		display: block;
		width: 328px;
		height: 50px;
		background: url(/homeCSS/images/14895413995680415.png)
	}

	.m-goods-item.f1:before {
		left: 288px;
		background-position: 0 0
	}

	.m-goods-item.f2:before {
		right: 278px;
		background-position: 0 -72px
	}

	.m-goods-item.f3:before {
		left: 288px;
		background-position: 0 -145px
	}

	.m-goods-item.f4:before {
		right: 278px;
		background-position: 0 -215px
	}

	.m-rule {
		font-size: 14px;
		color: #3f4042;
		line-height: 30px;
		padding: 40px 40px 0
	}

	.m-rule dt {
		font-size: 24px;
		padding-bottom: 10px
	}

	.m-toolbar {
		display: none;
		position: fixed;
		z-index: 88;
		right: 50px;
		top: 50%;
		margin-top: -260px;
		width: 120px;
		height: 594px;
		background-color: #feedf1;
		border-style: solid;
		border-color: #ceacb4;
		border-width: 1px
	}

	.m-menu a,.m-menu span {
		display: block
	}

	.m-toolbar:before {
		position: absolute;
		left: 0;
		top: -32px;
		content: url(/homeCSS/images/14895619333690560.png);
		height: 86px;
		display: block;
		overflow: hidden
	}

	.m-menu {
		height: auto;
		overflow: hidden;
		background: #fffcfc;
		margin: 56px 6px 5px;
		box-sizing: border-box
	}

	.m-menu a {
		position: relative;
		line-height: 30px;
		font-size: 14px;
		color: #383838;
		margin: 5px 0
	}

	.m-menu a:first-child {
		margin-top: 12px
	}

	.m-menu a:hover {
		background: #f4a0b5
	}

	.m-menu span>a {
		display: inline-block;
		margin-top: 10px;
		opacity: .5
	}

	.g-pop,.layer {
		display: none;
		position: fixed
	}

	.m-menu span>a:first-child {
		border-right: 1px solid #d0c2c6
	}

	.m-menu span>a:hover {
		background: #fffcfc;
		opacity: 1
	}

	.m-menu span.on {
		border-top: 1px solid rgba(0,0,0,.18);
		padding-top: 10px;
		margin-top: 20px
	}

	a.share {
		background: #f8587e;
		-webkit-border-radius: 30px;
		border-radius: 30px;
		color: #fff;
		margin-top: 10px
	}

	.layer {
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 100;
		background-color: #000;
		opacity: .6;
		filter: alpha(opacity=60);
		zoom: 1
	}

	.g-pop {
		left: 50%;
		top: 50%;
		margin: -291px 0 0 -315px;
		width: 582px;
		height: 462px;
		z-index: 101;
		-webkit-animation-duration: 1.4s;
		animation-duration: 1.4s;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both
	}

	.J_lingqu .m-middle .buy {
		width: auto!important
	}

	.m-middle.f1 .tit:after,.m-middle.f2 .tit:after,.m-middle.f3 .tit:after,.m-middle.f4 .tit:after {
		display: block;
		font: 20px SimHei;
		color: #5c5c5c;
		padding: 10px 0 0
	}

	.m-middle.f4 .tit:after {
		content: '软糯Q萌，香甜不腻'
	}

	.m-middle.f3 .tit:after {
		content: '100%美利奴澳毛'
	}

	.m-middle.f2 .tit:after {
		content: '细微颗粒，亲肤舒适'
	}

	.m-middle.f1 .tit:after {
		content: 'PC材质，减负轻盈'
	}

	.m-middle.f1:before,.m-middle.f2:before,.m-middle.f3:before,.m-middle.f4:before {
		content: '';
		position: absolute;
		left: -1px;
		top: -1px;
		width: 100px;
		height: 98px;
		background: url(/homeCSS/images/14895619333690560.png) no-repeat;
		z-index: 2
	}

	.m-middle.f1:before,.m-middle.f2:before,.m-middle.f4:before {
		background-position: 0 -332px
	}

	.m-middle.f3:before {
		background-position: 0 -434px
	}

	.tipMsg {
		position: absolute;
		bottom: -20px;
		left: 50%;
		margin-left: -70px;
		z-index: 5;
		font-size: 16px;
		color: #fff;
		background: rgba(0,0,0,.7);
		width: 140px;
		padding: 8px 0;
		opacity: 0;
		filter: alpha(opacity=0);
		-webkit-border-radius: 40px;
		border-radius: 40px
	}

	.tipMsg.on {
		-webkit-animation: floatDown .9s;
		animation: floatDown .9s
	}

	.close {
		display: block;
		position: absolute;
		right: -52px;
		top: 0;
		font-size: 50px;
		z-index: 2;
		width: 50px;
		height: 50px;
		background: #17191d
	}

	.close:after,.close:before {
		content: '';
		width: 1px;
		height: 100%;
		background: #989898;
		position: absolute
	}

	.close:before {
		-webkit-transform: rotate(45deg);
		transform: rotate(45deg);
		right: 50%
	}

	.close:after {
		-webkit-transform: rotate(-45deg);
		transform: rotate(-45deg);
		left: 50%
	}

	a.a1 img,a.a2 img {
		margin-top: 10px
	}

	a.a3 img {
		margin-right: -5px
	}

	a.a4 img {
		margin-left: -10px
	}

	@media (max-width:1200px) {
		.m-toolbar {
			display: none!important
		}
	}

	@media (max-width:1440px) and (min-width:1091px) {
		.m-toolbar {
			right: 0!important;
			-webkit-transform: scale(.8,.8);
			transform: scale(.8,.8)
		}
	}

	@-webkit-keyframes bounceInDown {
		0% {
			opacity: 0;
			-webkit-transform: translateY(-6000px);
			transform: translateY(-6000px)
		}

		60% {
			opacity: 1;
			-webkit-transform: translateY(30px);
			transform: translateY(30px)
		}

		80% {
			-webkit-transform: translateY(-10px);
			transform: translateY(-10px)
		}

		100% {
			-webkit-transform: translateY(0);
			transform: translateY(0)
		}
	}

	@keyframes bounceInDown {
		0% {
			opacity: 0;
			-webkit-transform: translateY(-6000px);
			-ms-transform: translateY(-6000px);
			transform: translateY(-6000px)
		}

		60% {
			opacity: 1;
			-webkit-transform: translateY(30px);
			-ms-transform: translateY(30px);
			transform: translateY(30px)
		}

		80% {
			-webkit-transform: translateY(-10px);
			-ms-transform: translateY(-10px);
			transform: translateY(-10px)
		}

		100% {
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			transform: translateY(0)
		}
	}

	.bounceInDown {
		-webkit-animation-name: bounceInDown;
		animation-name: bounceInDown
	}

	@-webkit-keyframes bounceOutUp {
		0% {
			-webkit-transform: translateY(0);
			transform: translateY(0)
		}

		20% {
			opacity: 1;
			-webkit-transform: translateY(20px);
			transform: translateY(20px)
		}

		100% {
			opacity: 0;
			-webkit-transform: translateY(-2000px);
			transform: translateY(-2000px)
		}
	}

	@keyframes bounceOutUp {
		0% {
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			transform: translateY(0)
		}

		20% {
			opacity: 1;
			-webkit-transform: translateY(20px);
			-ms-transform: translateY(20px);
			transform: translateY(20px)
		}

		100% {
			opacity: 0;
			-webkit-transform: translateY(-2000px);
			-ms-transform: translateY(-2000px);
			transform: translateY(-2000px)
		}
	}

	.bounceOutUp {
		-webkit-animation-name: bounceOutUp;
		animation-name: bounceOutUp
	}

	@-webkit-keyframes floatDown {
		0% {
			bottom: 0;
			opacity: 0;
			filter: alpha(opacity=0)
		}

		25% {
			bottom: 15px;
			opacity: .5;
			filter: alpha(opacity=50)
		}

		50% {
			bottom: 25px;
			opacity: 1;
			filter: alpha(opacity=100)
		}

		75% {
			bottom: 35px;
			opacity: .5;
			filter: alpha(opacity=50)
		}

		100% {
			bottom: 60px;
			opacity: 0;
			filter: alpha(opacity=0)
		}
	}

	@keyframes floatDown {
		0% {
			bottom: 0;
			opacity: 0;
			filter: alpha(opacity=0)
		}

		25% {
			bottom: 15px;
			opacity: .5;
			filter: alpha(opacity=50)
		}

		50% {
			bottom: 25px;
			opacity: 1;
			filter: alpha(opacity=100)
		}

		75% {
			bottom: 35px;
			opacity: .5;
			filter: alpha(opacity=50)
		}

		100% {
			bottom: 60px;
			opacity: 0;
			filter: alpha(opacity=0)
		}
	}

	@-webkit-keyframes fadeIn {
		0% {
			opacity: 0
		}

		100% {
			opacity: 1
		}
	}

	@keyframes fadeIn {
		0% {
			opacity: 0
		}

		100% {
			opacity: 1
		}
	}</style><style type="text/css">
	.post_adtop_main,.area.topad,[class*="top_ad"],.ga-1200_125,[id^="tadv_"],.channel_ad_2016,[ne-module$="_ad.js"],.mod_index_ad,.mod_ad_text {
	display: none!important;
	display: none
	}

	iframe[src^=""] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	iframe[src^=""] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	img[src^=""] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	iframe[src^=""] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	iframe[src^=""] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	iframe[src^=""][src*=""] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	.head-main > .youdao {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}[class^="ad-"] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}[class^="ad ad-"] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}[class^="gg2"] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}[class^="ad_"] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}[class^="ad2"] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}[class$="bottom_ad"] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	iframe[src^=""] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	iframe[src^=""] {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}

	.ad-area,.ad-sub,.float-bar,.tab-ad,.ad-main,.top-gg-area,#addiv,.top-gg,.ggarea,.gg,.content-ad,.gg300,.btm-ad,.ad360,.adRPicText,.endAd550,.kaola-ad,.ad960 {
	display: none;
	position: absolute;
	top: -1000000px;
	visibility: hidden
	}</style>
	<!-- 头部图片 -->
	
	   
	    <div class="section section0">
	     <div class="imgpos">
	      <img class="img0" src="/homeCSS/images/14895625756780563.jpg" /> 
	      <img class="img2" src="/homeCSS/images/14895625751790562.jpg" />
	     </div>
	     <img class="imgpos" src="/homeCSS/picture/14895413992790412.png" />
	     <div class="m-1090">
	      <img src="/homeCSS/images/14895413990520411.png" class="img" />
	      <div class="m-bd">
	       <div class="line one"></div>
	       <div class="m-couponwrap">

			@if(!empty($ci) && !empty($do))
			@foreach($ci as $k=>$v)
			@if(in_array("$v->c_id",$do))
	        <div class="u-coupon active" >
	         <i class="q{{$v->c_money}}" ></i> 
			
	         <span class="lingqu" style="display:block" >已领取</span> 
	         <a data-psc-stat="0e68495830b5a873044e14b09fb0eb7e"  href="/home/coupon"  class="J_getCoupon" data-coupon="1" href="/">立<br />即<br />查<br />看</a>
	         
	         @elseif($v->c_status == 1)
	         	<div class="u-coupon" >
	         	<i class="q{{$v->c_money}}" ></i> 
	         	<span class="lingqu">已领取</span> 
	         	<a data-psc-stat="0e68495830b5a873044e14b09fb0eb7e"  c_id="{{$v->c_id}}"  class="J_getCoupon hao" data-coupon="1" href="javascript:;"  >点<br />击<br />领<br />取</a>
	         @else	
	         	<div class="u-coupon poster" >
	         	<i class="q{{$v->c_money}}" ></i> 
	         	<span class="lingqu">已领取</span> 
	         	<a data-psc-stat="0e68495830b5a873044e14b09fb0eb7e"  c_id="{{$v->c_id}}"  class="J_getCoupon ius" data-coupon="1" href="javascript:;"  >不<br />可<br />领<br />取</a>
	         @endif
	        </div>
			@endforeach
			@else

			@foreach($ci as $key=>$value)
			@if($value->c_status == 1)
			<div class="u-coupon" >
			 <i class="q{{$value->c_money}}" ></i> 
			 <span class="lingqu">已领取</span> 

			 <a data-psc-stat="0e68495830b5a873044e14b09fb0eb7e"  c_id="{{$value->c_id}}"  class="J_getCoupon hao" data-coupon="1" href="javascript:;">点<br />击<br />领<br />取</a>
			 <div class="tipMsg " >
			  领券成功
			 </div>
			</div>
			@else
			<div class="u-coupon poster" >
			 <i class="q{{$value->c_money}}" ></i> 
			 <span class="lingqu">不可领取</span> 

			 <a data-psc-stat="0e68495830b5a873044e14b09fb0eb7e"  c_id="{{$value->c_id}}"  class="J_getCoupon opopop" data-coupon="1" href="javascript:;">不<br />可<br />领<br />取</a>
			 <div class="tipMsg " >
			  领券成功
			 </div>
			</div>
			@endif
			@endforeach
			

			@endif


	        



	       </div>
	       <div class="line two"></div>
	       <div class="m-imgs">
	        <a data-psc-stat="e74534afc2f24c141ad616b48190fe1c" target="_blank" href="javascript:;"><img alt="好的生活，没那么贵" src="/homeCSS/images/14895414026620429.png" />  </a>
	        <a data-psc-stat="1bb7d0b21186ce90d95c01e95dcd1393" target="_blank" href="javascript:;"><img alt="好的生活，没那么贵" src="/homeCSS/images/14895413980170403.png" /></a>
	        <a data-psc-stat="ab0b4af07ae8d222a5d54bc5aacd4c3c" target="_blank" href="javascript:;"><img alt="好的生活，没那么贵" src="/homeCSS/images/14896432319200721.png" /></a>
	       </div>
	      </div>
	     </div>
	    </div>
	    
	    <div class="section section3">
	     <img alt="好的生活，没那么贵" src="/homeCSS/picture/14895413994310414.png" data-original="" class="imgpos" />
	     <div class="m-goods m-1090">
	      <div class="m-goods-item rt f1">
	       <img alt="好的生活，没那么贵" class="J_lazyload" src="/homeCSS/picture/14895414011510420.jpg" data-original="/homeCSS/images/14895414011510420.jpg" style="display: block;" />

	       <!-- 大图 -->
	       <div class="m-list m-middle f1">
	        <a data-psc-stat="b969bd3487f85d141c191a42653e9d81" class="link" target="_blank" href="/home/xiangqing?id=13&gcid=27&gcpid=3"><img alt="好的生活，没那么贵" class="J_lazyload" src="/homeCSS/picture/14895460274880485.jpg" data-original="/homeCSS/picture/14895460274880485.jpg" style="display: inline;" /></a>
	        <div class="m-info">
	         <div class="u-desc">
	          <p class="tit">20寸纯PC&quot;铝框&quot;登机箱</p>
	         </div>
	         <div class="u-btm">
	          <i class="coupon"></i> 
	          <span class="price">304.00</span> 
	          <span class="org">
	           <del>
	            349.0
	           </del> </span>
	          <a data-psc-stat="b969bd3487f85d141c191a42653e9d81" target="_blank" href="/home/xiangqing?id=13&gcid=27&gcpid=3" class="buy">购买</a>
	          
	         </div>
	        </div>
	       </div>
			<!-- 大图结束 -->

			@foreach($wei as $k=>$v)
			@foreach($sio[$k] as $key=>$value)
	       <div class="m-list m-load"> 
	        <a class="link" target="_blank" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}"><img alt="好的生活，没那么贵" class="J_lazyload" src="{{explode(',',$v->g_pic)[4]}}" data-original="{{explode(',',$v->g_pic)[4]}}" style="display: inline;" /></a>
	        <div class="m-info"> 
	         <div class="u-desc">
	          <span class="mfrs">{{$value->m_name}}</span> 
	          <p class="tit">{{$v->g_name}}</p> 
	         </div> 
	         <div class="u-btm">
	          <span class="price">{{$v->g_price}}.00</span> 
	          <a target="_blank" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}" class="buy">立即购买</a>
	          
	         </div>
	        </div>
	       </div>
			@endforeach
			@endforeach

	       




	      </div>
	      <div class="m-goods-item lf f2">
	       <img alt="好的生活，没那么贵" class="J_lazyload" src="/homeCSS/images/14895414012770421.jpg" data-original="/homeCSS/images/14895414012770421.jpg" style="display: block;" />


	       <div class="m-list m-middle f2">
	        <a data-psc-stat="a0c197d52945311cb40099926ea0cc11" class="link" target="_blank" href="/home/xiangqing?id=14&gcid=57&gcpid=7"><img alt="好的生活，没那么贵" class="J_lazyload" src="/homeCSS/images/14895042706310373.jpg" data-original="/homeCSS/images/14895042706310373.jpg" style="display: block;" /></a>
	        <div class="m-info">
	         <div class="u-desc">
	          <p class="tit">日式多功能颈枕 针织款</p>
	         </div>
	         <div class="u-btm">
	         <i class="coupon"></i> 
	          <span class="price">69.00</span> 
	          <span class="org">
	           <del>
	            349.0
	           </del> </span>
	          <a data-psc-stat="a0c197d52945311cb40099926ea0cc11" target="_blank" href="/home/xiangqing?id=14&gcid=57&gcpid=7" class="buy">购买</a>
	          
	         </div>
	        </div>
	       </div>


			@foreach($iis as $keys=>$values)
			@foreach($iiss[$keys] as $a=>$b)
	       <div class="m-list m-load"> 
	        <a class="link" target="_blank" href="/home/xiangqing?id={{$values->g_id}}&gcid={{$values->gc_id}}&gcpid={{$values->gc_pid}}"><img alt="好的生活，没那么贵" class="J_lazyload" src="{{explode(',',$values->g_pic)[4]}}" data-original="/homeCSS/images/14895079551330385.jpg" style="display: block;" /></a>
	        <div class="m-info"> 
	         <div class="u-desc">
	          <span class="mfrs">{{$b->m_name}}</span> 
	          <p class="tit">{{$values->g_name}}</p> 
	         </div> 
	         <div class="u-btm">
	          <span class="price">{{$values->g_price}}.00</span>
	          <span class="org">
	           <del>
	            58*
	           </del></span> 
	          <a target="_blank" href="/home/xiangqing?id={{$values->g_id}}&gcid={{$values->gc_id}}&gcpid={{$values->gc_pid}}" class="buy">立即购买</a> 
	          
	         </div>
	        </div>
	       </div>
			@endforeach
			@endforeach


	      </div>
	      
	      
	     </div>
	    </div>
	    <div class="section section4">
	     <dl class="m-rule m-1090">
	      <dt>
	       <b>活动规则</b>
	      </dt>
	      <dd>
	       1、活动时间：2017年03月19日至2017年03月25日
	      </dd>
	      <dd>
	       2、在优惠券右侧直接点击领取即可获相应优惠券，可领取优惠券种类含：满199减25，满299减45，满499减85，满999减175，每种优惠券每个帐号限领一次。
	      </dd>
	      <dd>
	       3、全场购物订单满109元赠经典纯色防滑人字拖，满699元赠女式长柄素色晴雨伞，满1699赠韩式帆布电脑双肩包，赠品数量有限，先到先得，每个订单只能领取
	      </dd>
	      <dd>
	       一个赠品，请在购物车内手动添加您想要的赠品尺寸或型号，否则视为放弃赠品。
	      </dd>
	      <dd>
	       4、限时购商品不可使用优惠券，不享受全场满赠。
	      </dd>
	      <dd>
	       5、优惠券使用规则为：
	      </dd>
	      <dd>
	       (1) 单笔订单只能使用1张优惠券，不能同时使用多张优惠券；
	      </dd>
	      <dd>
	       (2) 请在有效期内使用优惠券，未使用的优惠券过期后，将自动作废；
	      </dd>
	      <dd>
	       (3) 优惠券严禁出售或转让，如经发现并证实的，该券将予以作废处理；
	      </dd>
	      <dd>
	       (4) 使用优惠券支付的订单，若产生退货，优惠券均不退回，退款金额按优惠后的小计金额退款；
	      </dd>
	      <dd>
	       (5) 网易严选邮费是10元，全场满88元包邮。
	      </dd>
	      <dd>
	       6、本次活动的所有数据统计均以网易严选活动组织方的统计为准，如被发现有违规行为（如恶意刷订单获取奖品等违反活动公平性的问题），严选活动组织方将取消你本次活动资格。
	      </dd>
	     </dl>
	    </div>
	    

	    
	      <div style="height:116px;"> 
	       <div class="footer-more-trigger" style="left:50%;top:auto;border:none;padding:0;"> 
	        <div class="footer-more-trigger" style="left:-960px;top:auto;border:none;padding:0;"> 
	         <div style="width:1920px;left:-485px;background:#000000; padding-bottom:5px; padding-top:5px;"> 
	          <div style=" overflow:hidden;font-family:微软雅黑;zoom:1;margin:12px auto;width:948px; background:#f5f5f5;height:80px;border:1px solid #000000;"> 
	           <div style="float:left;width:80px;height:80px;text-align:center;font-size:30px;font-family:微软雅黑;color:#000000;border-right:1px solid #000000;"> 
	            <h3 style="width:80px;line-height:40px;margin-top:10px;">券</h3> 
	            <span style="display:block;width:100%;text-transform:uppercase;font-size:12px;line-height:20px;">quan</span> 
	           </div> 
	           <div style=" overflow:hidden;width:697px;height:80px;float:left;"> 
	            <a style="width:231px;float:left;_display:inline;color:#000000;border-right: 1px solid #000000;height:80px;overflow:hidden;background:url(http://img04.taobaocdn.com/imgextra/i4/770458061/TB2bcVEcpXXXXXNXpXXXXXXXXXX-770458061.jpg) 50% 0 no-repeat;" href="http://taoquan.taobao.com/coupon/index.htm" target="_blank"> <span style=" display:block;text-align:right;margin-top:8px;float:left;width:115px;"> <b style="display:block;font-size: 50px;font-family:arial;"><span style="font-size:12px;color:#000000;">&yen;</span>3</b> </span> <span style=" display:block;margin:0 auto;height:80px;float:right;width:115px;"> <b style="display: block;margin-top:18px;font-size:18px;font-family:微软雅黑;">优惠券</b> <span style="display:block;line-height:20px;height:20px;overflow:hidden;font-size:12px;font-family:微软雅黑;">实付满98元</span> </span> </a> 
	            <a style="width:231px;float:left;_display:inline;color:#000000;border-right: 1px solid #000000;height:80px;overflow:hidden;background:url(http://img04.taobaocdn.com/imgextra/i4/770458061/TB2bcVEcpXXXXXNXpXXXXXXXXXX-770458061.jpg) 50% 0 no-repeat;" href="http://taoquan.taobao.com/coupon/index.htm" target="_blank"> <span style=" display:block;text-align:right;margin-top:8px;float:left;width:115px;"> <b style="display:block;font-size: 50px;font-family:arial;"><span style="font-size:12px;color:#000000;">&yen;</span>5</b> </span> <span style=" display:block;margin:0 auto;height:80px;float:right;width:115px;"> <b style="display: block;margin-top:18px;font-size:18px;font-family:微软雅黑;">优惠券</b> <span style="display:block;line-height:20px;height:20px;overflow:hidden;font-size:12px;font-family:微软雅黑;">实付满198元</span> </span> </a> 
	            <a style="width:231px;float:left;_display:inline;color:#000000;border-right: 1px solid #000000;height:80px;overflow:hidden;background:url(http://img04.taobaocdn.com/imgextra/i4/770458061/TB2bcVEcpXXXXXNXpXXXXXXXXXX-770458061.jpg) 50% 0 no-repeat;" href="http://taoquan.taobao.com/coupon/index.htm" target="_blank"> <span style=" display:block;text-align:right;margin-top:8px;float:left;width:115px;"> <b style="display:block;font-size: 50px;font-family:arial;"><span style="font-size:12px;color:#000000;">&yen;</span>10</b> </span> <span style=" display:block;margin:0 auto;height:80px;float:right;width:115px;"> <b style="display: block;margin-top:18px;font-size:18px;font-family:微软雅黑;">优惠券</b> <span style="display:block;line-height:20px;height:20px;overflow:hidden;font-size:12px;font-family:微软雅黑;">实付满698元</span> </span> </a> 
	           </div> 
	           <a href="" target="_blank" style="float:left;width:170px;height:68px;padding-top:12px;font-size:24px;font-family:微软雅黑;font-weight:bold;text-align:center;text-decoration:none;color:#000000;background:url(http://img04.taobaocdn.com/imgextra/i4/770458061/TB2bcVEcpXXXXXNXpXXXXXXXXXX-770458061.jpg) 50% 0 no-repeat;"> <span style="display:block;line-height:30px;">收藏</span> <span style="display:block;font-size:14px;font-family:arial;line-height:16px;text-transform:uppercase;">BOOK MARK</span> </a> 
	          </div> 
	         </div> 
	        </div> 
	       </div> 
	      </div> 
	     </body>
	    </html>
	    <!-- 购物车 -->

	      <div class="m-pop-addcart" style="display:none">
	       <div class="sku-mask"></div>
	       <div class="pop-main show" >
	        <a class="cart-close J_skuClose" href="javascript:;"></a>
	        <div class="cart-info cl" style="width:800px">
	         <div class="sku-img fl">
	          <img src="/homeCSS/images/a56f5c64b73af59fdfa7ee3980e59f62.png?imageView&amp;quality=90&amp;thumbnail=430x430"  />
	         </div>
	         <div class="info-txt fl" style="">
	          <div class="acttitle">
	           <h3 class="name">日式多功能颈枕 针织款</h3>
	          </div>
	          <div class="prize">
	           <div class="tt">
	            售价
	           </div>
	           <div>
	            <span class="rmb">&yen;</span>
	            <span class="J_skuPrice">69</span>
	           </div>
	          </div>
	          <ul class="spec-data" id="J_skuDetail">
	           <li class="item"><h2 class="tt">颜色</h2>
	            <div class="con">
	             <a title="浅棕条纹" class="tag J_skuTag" data-id="1006002" name="s0" rel="0"><img src="/homeCSS/images/a01ea2508ce5bd80b7b7aaab9f278327.png?imageView&amp;quality=90&amp;thumbnail=48x48" /></a>
	             <a title="粉灰条纹" class="tag J_skuTag" data-id="1006015" name="s0" rel="1"><img src="/homeCSS/images/c12769d4cbbe2f1acc66745dd0c7562b.png?imageView&amp;quality=90&amp;thumbnail=48x48" /></a>
	             <a title="深棕条纹" class="tag J_skuTag" data-id="1006016" name="s0" rel="2"><img src="/homeCSS/images/86da5abbd06d9178918fdcca03a803af.png?imageView&amp;quality=90&amp;thumbnail=48x48" /></a>
	             <a title="浅灰纯色" class="tag J_skuTag" data-id="1006017" name="s0" rel="3"><img src="/homeCSS/images/d1450238a4a8867e0e4571080aab86b6.png?imageView&amp;quality=90&amp;thumbnail=48x48" /></a>
	            </div></li>
	          </ul>
	          <p class="J_skuTips" style="font-size: 12px;margin-left: 54px;line-height: 12px;color: #d4282d;"></p>
	          <div class="item">
	           <div class="tt">
	            数量
	           </div>
	           <div class="con">
	            <div class="m-selnum J_skuQuantity">
	             <div class="less"></div>
	             <input type="tel" name="nums" value="1" class="u-input J_skuInput" />
	             <div class="more"></div>
	            </div>
	           </div>
	          </div>
	          <div class="m-add-btns">
	           <a class="u-btn u-btn-yellow J_addSkuCart" data-num="1" href="javascript:;">加入购物车</a>
	          </div>
	         </div>
	        </div>
	       </div>
	      </div>


	 	<!-- 购物车结束 -->
	   
		
		
@endsection

@section('js')
	<script>
	//优惠券点击领取
		$(function(){
			$('.hao').click(function(){
				// alert(222);此处需要发送ajax  省略未写 如果成功则执行下方代码
				var stu = $(this);
				//发送ajax
					$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				var c_id = $(this).attr('c_id');
				// console.log(c_id);
				$.post('/home/huodong',{c_id:c_id},function(data){
					if(data){
						setTimeout(function(){
							stu.html('立<br />即<br />查<br />看');
							stu.parents('.u-coupon').addClass('active');
							// stu.parents('.u-coupon').attr('disabled','disabled');
							stu.attr('href','/home/coupon');
							stu.removeClass('hao');
							stu.prev().show();
						},800)
						// var str = $(this).attr('data-coupon');
						// $('.tipMsg :eq(str)').addClass('on');
						stu.next().addClass('on');
					}else{
						alert('领取失败');
					}
				})
				
			})
		})

	//购物车页面
		$(function(){
			$('.cart').click(function(){
				// alert(222);
				//在此需要发送ajax  后自行添加  成功后则执行下方代码
				$('.m-pop-addcart').fadeIn(300);
			})

			$('.J_skuClose').click(function(){
				$('.m-pop-addcart').fadeOut(200);
			})
		})

		//购物车数量增加减少 parseInt("1234blue")
		// var i = parseInt($('.J_skuInput').val());
		$('.more').click(function(){
			i = parseInt($('.J_skuInput').val());
			i += 1;
			$('.J_skuInput').val(i);
		})
		$('.less').click(function(){
			i = parseInt($('.J_skuInput').val());
			i -= 1;
			if(i<=1){
				i = 1;
			}
			$('.J_skuInput').val(i);
		})

	</script>
@endsection
