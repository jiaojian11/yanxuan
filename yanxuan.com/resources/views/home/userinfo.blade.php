@extends('home.layout.index')
@section('contents')

	<link rel="stylesheet" href="/homeCSS/css/list-f833c2a8ed.css">
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
	</style>

	  <div class="g-bd" style="height:650px"> 
	   <div class="g-row"> 
	    <div class="g-sub"> 
	     <div class="m-userinfo"> 
	      <div id="j-sideAvatarWarp" class="w-avatar"> 
	       <img width="100px" height="100px" id="j-sideAvatar" alt="头像" src="http://yanxuan.nosdn.127.net/c3a03895c73694d922310c76e4915cdb.png?imageView&amp;quality=95" /> 
	       <div class="modifyAvatar w-icon-normal icon-normal-camera"></div> 
	       <div class="mask"></div> 
	      </div> 
	      <div id="j-sideNickname" title="m18255442900" class="w-nickname">
	       m18255442900
	      </div> 
	      <a target="_blank" href="/membership/index" class="w-levelname"> 
	       <div id="j-logo" class="logo hidden"></div> <span title="普通用户" class="w-icon-member member-top-vip0"></span><span class="levelname" title="严选会员">普通用户</span> </a> 
	      <a href="/u/logout?callback=/u/loginurs" class="w-button switch"> 切换帐号 </a> 
	     </div> 
	     <!-- 新人不展示邀请返利 --> 
	     
	     <div class="m-menu"> 
	      <a class="w-menu-item active" href="/user/info">个人信息</a> 
	      <a class="w-menu-item " href="/order/myList">订单管理</a> 
	      <a class="w-menu-item " href="/address/list">地址管理</a> 
	      <a class="w-menu-item " href="/coupon">优惠券</a> 
	      <a class="w-menu-item " href="/user/giftCard">礼品卡</a> 
	      <a class="w-menu-item " href="/item/userCollection">收藏夹</a> 
	      <a class="w-menu-item " href="/user/securityCenter">帐号安全</a> 
	      <a class="w-menu-item " href="/expert/user?_stat_referer=myList">我的甄选家</a> 
	     </div> 
	    </div> 
	    <div class="g-main"> 
	     <div id="j-userinfoForm">
	      <form class="m-userInfoForm">
	       <div class="item">
	        <label class="label f-left userId"><span>用</span><span class="ml3">户</span><span class="ml3">ID</span></label>
	        <div class="content f-left">
	         43788896
	        </div>
	       </div>
	       <div class="item">
	        <label class="label f-left">帐 号</label>
	        <div class="content f-left">
	         m18255442900@163.com
	        </div>
	       </div>
	       <div class="item">
	        <label class="label f-left">昵 称</label>
	        <div class="content f-left">
	         <input type="text" maxlength="20" value="m18255442900" name="nickname" class="w-ipt w-ipt-l" />
	        </div>
	        <div class="w-errorMsg f-left errorMsg" id="j-error">
	         <i class="icon w-icon-normal icon-normal-disable"></i>
	         <span class="text" id="j-errorText"></span>
	        </div>
	       </div>
	       <div class="item">
	        <label class="label f-left">性 别</label>
	        <div class="content f-left">
	         <div class="w-radio f-left s-gold">
	          <input type="radio" value="0" id="male" name="gender" class="raido" />
	          <label class="ml3" for="male">男</label>
	         </div>
	         <div class="w-radio f-left ml40 s-gold">
	          <input type="radio" value="1" id="female" name="gender" class="radio" />
	          <label class="ml3" for="female">女</label>
	         </div>
	        </div>
	       </div>
	       <div class="item">
	        <label class="label f-left">手机号码</label>
	        <div class="content f-left">
	         <span class="j-bindMobileShow mr20 f-hide">null</span>
	         <a href="/user/securityCenter/bindMobile" class="w-link">绑定手机号码</a>
	        </div>
	       </div>
	       <div class="item">
	        <label class="label f-left">出生日期</label>
	        <div class="content f-left j-birthdayParent">
	         <div>
	          <select value="" name="year" class="w-select w-select-s pad4 j-birthdayYear"><option selected="selected" value="0">--</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select> 
	          <label class="unit">年</label> 
	          <select value="" name="month" class="w-select w-select-s pad4 j-birthdayMonth"> <option selected="selected" value="0">--</option> </select> 
	          <label class="unit">月</label> 
	          <select value="" name="day" class="w-select w-select-s pad4 j-birthdayDay"> <option selected="selected" value="0">--</option> </select> 
	          <label class="unit">日</label> 
	         </div>
	        </div>
	       </div>
	       <div id="j-staffInfo"></div>
	       <div class="splitLine"></div>
	       <div class="item">
	        <label class="label f-left">&nbsp;</label>
	        <div class="content f-left">
	         <div class="w-button w-button-primary w-button-l j-submit">
	          保存
	         </div>
	         <div class="warn j-warn"></div>
	        </div>
	       </div>
	      </form>
	     </div> 
	    </div> 
	   </div> 
	  </div>
	

@endsection

@section('js')

	<script>
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
	</script>
@endsection