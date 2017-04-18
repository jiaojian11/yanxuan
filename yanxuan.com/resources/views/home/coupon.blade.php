@extends('home.layout.index')
@section('contents')
	<link rel="stylesheet" href="/homeCSS/css/confirm-50583dcc19.css">
	<link rel="stylesheet" href="/homeCSS/css/list-f833c2a8ed.css">
	<link rel="stylesheet" href="/homeCSS/css/cart-52e20e8dc4.css">
	<link rel="stylesheet" href="/homeCSS/css/style-7d9bd7818b.css">
	<!-- <link rel="stylesheet" href="/homeCSS/css/style-7d9bd7818b.css"> -->
	<style>
	@charset "UTF-8";
	.ml3 {
	    margin-left: 3px;
	}
	.mr20 {
	    margin-right: 20px;
	}
	.ml40 {
	    margin-left: 40px;
	}
	.pad4 {
	    padding: 4px 0;
	}
	.m-userInfoForm {
	    border: 1px solid #e8e8e8;
	    display: block;
	    font-size: 14px;
	    padding: 33px 0;
	    width: 890px;
	}
	.m-userInfoForm .item {
	    height: 34px;
	    line-height: 34px;
	    margin-bottom: 20px;
	    margin-left: 60px;
	}
	.m-userInfoForm .item .label {
	    width: 70px;
	}
	.m-userInfoForm .item .label-1 {
	    width: 85px;
	}
	.m-userInfoForm .item .content {
	    margin-left: 48px;
	}
	.m-userInfoForm .item .content-1 {
	    margin-left: 33px;
	}
	.m-userInfoForm .item .content-1 .link {
	    margin-left: 20px;
	}
	.m-userInfoForm .item .w-button {
	    border-color: #ddd;
	}
	.m-userInfoForm .item .unit {
	    margin: 0 20px 0 6px;
	    vertical-align: middle;
	}
	.m-userInfoForm .item .warn {
	    color: #d4282d;
	    font-size: 12px;
	    text-align: center;
	    width: 144px;
	}
	.m-userInfoForm .item .errorMsg {
	    margin-left: 8px;
	    margin-top: 9px;
	}
	.m-userInfoForm .item .errorMsg .icon {
	    margin-right: 3px;
	}
	.m-userInfoForm .splitLine {
	    border-bottom: 1px dashed #e8e8e8;
	    margin-bottom: 23px;
	    margin-left: 50px;
	    margin-right: 50px;
	    padding-top: 19px;
	}
	.m-userInfoForm .thirdLoginLogo {
	    margin-left: 10px;
	    margin-top: -5px;
	    vertical-align: middle;
	}
	.m-pop-unbind .content {
	    font-size: 18px;
	    padding-bottom: 28px;
	    padding-top: 88px;
	    text-align: center;
	}
	.m-pop-unbind .comfirm {
	    text-align: center;
	}
	.m-pop-unbind .comfirm .cancel {
	    margin-right: 8px;
	}
	.collecitonList{
		float:left;
		margin-left:20px;
	}


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

	.section2 .price {
		font-size: 38px
	}

	.section2 .price:before {
		font-size: 30px
	}

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

	.section3 .price:before {
		font-size: 20px
	}

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
		font: 24px SimHei;
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

	.price:before,del:before {
		content: '¥'
	}

	.price:before {
		font: 30px 'Mircosoft YaHei'
	}

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



	</style>
	
	<div class="g-bd" style="height:1150px;background:white;"> 
	 <div class="g-row"> 
	  <div class="g-sub"> 
	   <div class="m-userinfo"> 
	    <div id="j-sideAvatarWarp" class="w-avatar"> 
	     <img width="100px" height="100px" id="j-sideAvatar" alt="头像" src="/homeCSS{{$data->u_pic}}" /> 
	     
	     <div class="mask"></div> 
	    </div> 
	    <div id="j-sideNickname" title="m18255442900" class="w-nickname">
	     {{$data->u_account}}
	    </div> 
	    <a target="" href="" class="w-levelname"> 
	     <div id="j-logo" class="logo hidden"></div> <span title="普通用户" class="w-icon-member member-top-vip0"></span><span class="levelname" title="严选会员">积分:{{$data->u_integral}}</span> </a> 
	    <a href="/home/out" class="w-button switch"> 切换帐号 </a> 
	   </div> 
	   <!-- 新人不展示邀请返利 --> 
	   
	   <div class="m-menu"> 
	    <a class="w-menu-item " href="/home/personal">个人信息</a> 
	    <a class="w-menu-item " href="/home/order">订单管理</a> 
	    <a class="w-menu-item " href="/home/address">地址管理</a> 
	    <a class="w-menu-item active" href="/home/coupon">优惠券</a> 
	   <!--  <a class="w-menu-item " href="/user/giftCard">礼品卡</a>  -->
	    <a class="w-menu-item " href="/home/favorites">收藏夹</a> 
	   <!--  <a class="w-menu-item " href="/user/securityCenter">帐号安全</a> 
	    <a class="w-menu-item " href="/expert/user?_stat_referer=myList">我的甄选家</a>  -->
	   </div> 
	  </div>
		<div class="g-main">
		
 			<div class="m-filter" data-reactid=".0.0" >
 		     <ul id="j-orderFilter" class="w-tabs" data-reactid=".0.0.0" style="background:white;">
 		      <li style="background:white;" id="all" class="j-tabsItem item active" data-target="#j-allOrderPanel" data-reactid=".0.0.0.$0"><a href="javascript:;" data-reactid=".0.0.0.$0.0">可使用</a></li>
 		      <li style="background:white;" id="daifukuan" class="j-tabsItem item " data-target="#j-unpayedOrderPanel" data-reactid=".0.0.0.$1"><a href="javascript:;" data-reactid=".0.0.0.$1.0">已失效&nbsp;<span class="orderItemNum"></span></a></li>
 		     </ul>
 		    </div>

			<div class="m-panels" data-reactid=".0.2">
			 <div class="m-panel" id="j-allOrderPanel" data-reactid=".0.2.0" style="display: block;">
			  <div data-reactid=".0.2.0.0">
			   
			



					 @foreach($datas as $k=>$v)
					  <li class="item" style="margin-top:10px;float:left;margin-left:0px;"> 

						@if( time() < $v->c_overTime) 

			             <div class="j-coupon w-coupon coupon-l coupon-func" data-id="69307292"  id="hao" style="display:block;"> 
			             @else
			             <div class="j-coupon w-coupon coupon-l coupon-disabled" data-id="69307292"  id="hao" style="display:none;"> 
			             @endif

			               <div class="inner"> 
			                <div class="desc">
			                 满减优惠券
			                </div> 
			                <div class="range"> 
			                 <span class="text"> 商品总金额满<span class="man">{{$v->c_claim}}</span>元  减<span class="jian">{{$v->c_money}}</span>元</span> 
			                 <div class="couponInfo w-toolTip w-toolTip-coupon"> 
			                  <i class="w-icon-normal icon-normal-couponInfo toolTip-toggle"></i> 
			                  <div class="toolTip-cnt"> 
			                   <i class="toolTip-triangle"></i> 
			                   <p class="toolTip-inner">商品总金额满{{$v->c_claim}}元  减{{$v->c_money}}元</p> 
			                  </div> 
			                 </div> 
			                </div> 
			                <div class="validity"> 
			                 <span class="f-fl" style="margin-left:35px;"> 有效期&nbsp;:&nbsp;{{date('Y/m/d',$v->c_beginTime)}}-{{date('Y/m/d',$v->c_overTime)}} </span> 
			                </div> 
			                <div></div> 
			               </div>
			              </div>
			          </li>
					  @endforeach	









 		       <div class="m-pager j-pager" data-reactid=".0.2.0.0.1"></div>
 		      </div>
 		     </div>
 		     <div class="m-panel" id="j-unpayedOrderPanel" data-reactid=".0.2.1"></div>
 		     <div class="m-panel" id="j-undeliveredOrderPanel" data-reactid=".0.2.2"></div>
 		     <div class="m-panel" id="j-unfetchedOrderPanel" data-reactid=".0.2.3"></div>
 		     <div class="m-panel" id="j-uncommentedOrderPanel" data-reactid=".0.2.4"></div>
 		    </div>
 		   </div>
 		  </div> 
		
		  </div>











	   </div> 
	  </div>
	

@endsection

@section('js')

	<script>

		$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		});



	$('document').ready(function(){
	    /*
	     * 生成级联菜单
	     */
	     $('select[name=year]').change(function(){
	    var i=1945;
	    var date = new Date();
	    year = date.getFullYear();//获取当前年份
	    var dropList;
	    
	    $('select[name=year]').html(dropList);//生成年份下拉菜单
	    var monthly;
	    for(month=1;month<13;month++){
	        monthly = monthly + "<option value='"+month+"'>"+month+"</option>";
	    }
	    $('select[name=month]').html("<option value='0'>"+'--'+"</option>"+monthly);//生成月份下拉菜单
	    var dayly;
	    for(day=1;day<=31;day++){
	        dayly = dayly + "<option value='"+day+"'>"+day+"</option>";
	    }
	    $('select[name=day]').html("<option value='0'>"+'--'+"</option>"+dayly);//生成天数下拉菜单
	    /*
	     * 处理每个月有多少天---联动
	     */
	    $('select[name=month]').change(function(){
	        var currentDay;
	        var Flag = $('select[name=year]').val();
	        var currentMonth = $('select[name=month]').val();
	        switch(currentMonth){
	            case "1" :
	            case "3" :
	            case "5" :
	            case "7" :
	            case "8" :
	            case "10" :
	            case "12" :total = 31;break;
	            case "4" :
	            case "6" :
	            case "9" :
	            case "11" :total = 30;break;
	            case "2" :
	                if((Flag%4 == 0 && Flag%100 != 0) || Flag%400 == 0){
	                    total = 29;
	                }else{
	                    total = 28;
	                }
	            default:break;
	        }
	        for(day=1;day <= total;day++){
	            currentDay = currentDay + "<option value='"+day+"'>"+day+"</option>";
	        }
	        $('select[name=day]').html("<option value='0'>"+'--'+"</option>"+currentDay);//生成日期下拉菜单
	        })
	    })
	})

	//绑定可使用单击事件
	$('#all').click(function(){

		$('#all').attr('class','j-tabsItem item active');
		$('#daifukuan').removeAttr('class');
		$('#daifukuan').attr('class','j-tabsItem item');
		$('.coupon-func').css('display','block');
		$('.coupon-disabled').css('display','none');
		
	})
	


	//绑定已失效单击事件
	$('#daifukuan').click(function(){

		$('#daifukuan').attr('class','j-tabsItem item active');
		$('#all').removeAttr('class');
		$('#all').attr('class','j-tabsItem item');
		$('.coupon-func').css('display','none');
		$('.coupon-disabled').css('display','block');
	})



	</script>
@endsection