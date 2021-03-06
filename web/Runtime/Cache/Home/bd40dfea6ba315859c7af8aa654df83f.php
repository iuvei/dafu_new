<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title><?php echo GetVar('webtitle');?></title>
	<meta name="keywords" content="<?php echo GetVar('keywords');?>" />
	<meta name="description" content="<?php echo GetVar('description');?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >

	<link rel="stylesheet" href="/resources/css2/bootstrap.min.css">
	<link rel="stylesheet" href="/resources/css2/reset.css">
	<link rel="stylesheet" href="/resources/css2/icon.css">
	<link rel="stylesheet" href="/resources/css2/header.css">
	<link rel="stylesheet" href="/resources/css2/record.css">
	<link rel="stylesheet" href="/resources/css2/userInfo.css">
	<link rel="stylesheet" href="/resources/css2/footer.css">
	<link rel="stylesheet" href="/resources/js2/layer/skin/default/layer.css">
	<script type="text/javascript" src="/resources/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/resources/js/artDialog.js"></script>

	<script>
		var ISLOGIN = "<?php echo ($userinfo["id"]); ?>";
	</script>
	<script src="/resources/js/index.js"></script>
</head>
<body>
<!--header start-->
<script>
    var WebConfigs = {
        "ROOT" : "",
        'IMG' : "/resources/images",
    }
</script>
<script type="text/javascript" src="/resources/js/jquery-3.1.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/headernav.css" />
<script type="text/javascript" src="/resources/js/artDialog.js"></script>
<script type="text/javascript" src="/resources/js/way.min.js"></script>
<script type="text/javascript" src="/resources/main/common.js"></script>
<header class="header" style="height:35px;">
    <div class="container claerfix">
        <div class="pull-left">
            Hi，欢迎来到<?php echo GetVar('webtitle');?>！
        </div>

        <?php if(!empty($userinfo["username"])): ?><div class="pull-right user_login_info">
                <ul>
                    <!--<p class="margin_0">性别：<span><?php if(($userinfo['sex']) == "1"): ?>男<?php endif; if(($userinfo['sex']) == "2"): ?>女<?php endif; if(($userinfo['sex']) == ""): ?>保密<?php endif; ?></span></p>-->
                    <li class="user_login_info1">
                        <a  href="<?php echo U('Member/index');?>" class="user_header" data-html="true" class="user_header" data-container="body" data-toggle="popover" data-placement="bottom"data-content='<div class="ceng"><div class="media"><div class="media-left"><a href="<?php echo U('Member/index');?>"><img src="<?php echo ($userinfo["face"]); ?>" alt="" class="media-boject img-circle"></a><p><?php echo ($userinfo["username"]); ?></p></div><div class="media-body" style="padding-bottom:10px;">
                <p class="margin_0">账号：<span><?php echo ($userinfo["username"]); ?></span></p>
                <p class="margin_0">等级：<span><?php echo ($userinfo["groupname"]); ?></span></p>
                <p class="margin_0">头衔：<span><?php if(($userinfo['groupname']) == "代理"): ?>总代理 <?php else: echo ($userinfo["touhan"]); endif; ?></span></p>
                <p class="margin_0">累积中奖：<span><?php echo (session('okamountcount')); ?></span></p>
            </div>
            <div class="media-footer">
                <?php if(is_array($_SESSION['k3names'])): $i = 0; $__LIST__ = $_SESSION['k3names'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Game/k3');?>?code=<?php echo ($value['cpname']); ?>" title="<?php echo ($value["cptitle"]); ?>" class="color_res" style="font-size:5px;"><span style="color:#333;display: block;margin-top:4px;"><?php echo (substr($value["cptitle"],0,6)); ?></span><i class="iconfont">&#xe607;</i></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div></div></div>'>
    <img class="img-circle"  src="<?php echo ($userinfo["face"]); ?>" alt="">
    <?php echo ($userinfo['username']); ?>
    </a>
    <a class="user_info" style="display:none">
        0
    </a>
    <div class="info_sum_box" style="display: none;">
        <div class="info_sum clearfix">
            <a href="" class="pull-left">
                我的未读消息
                (<em>0</em>)
            </a>
            <a href="" class="pull-right">
                更多
            </a>
        </div>
    </div>
    </li>
    <li class="user_login_info2">
        <a href="<?php echo U('Member/index');?>" class="my_account">
            我的账户
            <i class="iconfont">&#xe6a1;</i>
        </a>
        <div class="user_login_info2_list" style="display:none;">
            <i class="user_login_info2_i"></i>
            <?php if($userinfo["proxy"] == '1'): ?><a href="<?php echo U('Member/Agent');?>">代理中心</a><?php endif; ?>
            <a href="<?php echo U('Member/betRecord');?>">投注记录</a>
            <a href="<?php echo U('Account/dealRecord');?>">交易记录</a>
            <a href="<?php echo U('Member/ziliao');?>">个人信息</a>
            <a href="<?php echo U('Member/index');?>">安全中心</a>
        </div>
    </li>
    <li class="user_login_info3">
        余额：
						<span class="show_money">
							<em class="smallmoney" style="color:#F70B0F;"><?php echo ($userinfo['balance']); ?></em>
							<i class="iconfont refresh_money">&#xe602;</i>
							<em class="hide_money_btn">隐藏</em>
						</span>
						<span class="hide_money" style="display:none;">
							已隐藏
							<em class="show_money_btn">显示</em>
						</span>
    </li>
    <li class="xima l">洗码：<span class="c-green" style="color:green;" way-data="user.xima">0</span></li>
    <li class="user_login_info4">
        <a href="<?php echo U('Account/bankRecharge');?>">充值</a>
    </li>
    <li class="user_login_info5">
        <a href="<?php echo U('Account/withdrawals');?>">提现</a>
    </li>
    <li class="user_login_info6">
        <a href="<?php echo U('Public/LoginOut');?>">退出</a>
    </li>
    <li>
        <a href="<?php echo GetVar('kefuthree');?>"    target="_blank"   class="keufBox" style="margin-left: 0px;"></a>
    </li>
    <li style="padding:0;line-height: 49px;">
        <a href="<?php echo GetVar('kefuqq');?>"    target="_blank">
            <img src="/resources/images/qq.gif" width="20" height="20" style="vertical-align: super;" />
        </a>
    </li>
    </ul>
    </div>
    <?php else: ?>
    <div class="pull-right user_login_info ">
        <a style="margin:0;float:left;" href="<?php echo U('Public/login');?>">亲，请登录</a>
        <em style="margin:0 3px;color:#ccc;float:left;">|</em>
        <a style="float:left;" href="<?php echo U('Public/register');?>">用户注册</a>
        <em style="margin:0 3px;color:#ccc;float:left;">|</em>
        <a style="float:left;" href="<?php echo U('Agent/index');?>" >代理中心</a>
        <a href="<?php echo GetVar('kefuthree');?>"    target="_blank"   class="keufBox pull-left"></a>
        <a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo GetVar('kefuqq');?>&site=qq&menu=yes"    target="_blank">
            <img src="/resources/images/qq.gif" width="20" height="20" style="vertical-align: super;float:left;margin-top:4px;" />
        </a>

    </div><?php endif; ?>
    </div>
</header>

<script>
    var ISLOGIN = "<?php echo ($userinfo["id"]); ?>";
</script>

<style>

</style>

<div class="header head8">
   <div class="nav">
    <div class="container fix">
     <h3><a href="/"><img style="width: 210px;" src="/903435630347672970.png" /></a></h3> 
     <!----> 
     <ul class="navItem fix flr" style="position: relative;">
      <li class="" id="navIndex"><a href="/">首页</a></li> 
      <!---->
	  <li class="" id="navZRVideo"><a href="<?php echo U('Index/zrvideo');?>">真人视讯</a></li>
      <li class="" id="navLottery"><a href="<?php echo U('Index/lottery');?>">购彩大厅</a></li> 
      <!---->
      <li class="" id="navActivity"><a href="<?php echo U('Activity/index');?>">活动中心</a></li> 
      <!---->
      <li class="" id="navMobile"><a href="<?php echo U('Index/mobile');?>">手机购彩</a></li> 
      <!---->
      <li class="" id="navSecurityCenter"><a href="<?php echo U('Member/index');?>">我的账户</a></li> 
      <!---->
      <li class="" id="navHelp"><a href="<?php echo U('News/lists',array('catid'=>33));?>">帮助指南</a></li> 
      <!----> 
      <span></span>
     </ul>
    </div>
   </div>
  </div>
  

 
<script>
    $(function () {
        $('.refresh_money').click(function () {
            $.ajax({
                url:"<?php echo U('Account/refreshmoney');?>",
                type:'POST',
                success :function (data) {
                    $('.smallmoney').html(data);
                }
            })
        })

    })
</script>
	<script src="/resources/js2/require.js" data-main="/resources/js2/homePage"></script>
	<div class="vip_info clearfix container">
		<div class="pull-left vip_list">
    <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 账号管理</h3>
        <a href="<?php echo U('Member/ziliao');?>">个人信息</a>
        <a href="<?php echo U('Member/index');?>">安全中心</a>
        <a href="<?php echo U('Member/bankcard');?>">银行卡管理</a>
    </div>
	 <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 额度管理</h3>
        <a href="<?php echo U('Member/quota');?>">额度转让</a>
  
    </div>
    <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 投注管理</h3>
        <a href="<?php echo U('Member/betRecord');?>">投注记录</a>
     <!--   <a href="seekRecord.html">追号记录</a>-->
    </div>
    <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 资金管理</h3>
        <a href="<?php echo U('Account/dealRecord');?>">交易记录</a>
        <a href="<?php echo U('Account/todayLoss');?>">今日盈亏</a>
    </div>
    <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 消息管理</h3>
       <!-- <a href="<?php echo U('Member/stationMail');?>">站内信</a>-->
        <a href="<?php echo U('Home/Member/gglist');?>">网站公告</a>
    </div>
</div>
		<div class="pull-right vip_info_pan">
			<div class="vip_info_title">
			</div>
			<div class="vip_info_content betRecord_main">
				<div class="betRecord_top">
					<strong>今日概况</strong>
					<span>投注金额：<em><?php echo ($touzhujine); ?>元</em></span>
					<span>中奖金额：<em><?php echo ($allokamount); ?>元</em></span>
					<span>盈利：<em><?php echo ($allokamount-$touzhujine); ?>元</em></span>
				</div>
				<div class="betRecord_tab clearfix">
					<div class="category pull-left">
						<em class="tle">彩种：</em>
						<div class="form-group">
							<select name="lotteryId" id="lottery_code" onchange="chaxun();" class="form-control" id="">
								<option value="0">全部彩票</option> <?php echo ($cp[name]); ?> 
								<?php if(is_array($ALLCP)): $i = 0; $__LIST__ = $ALLCP;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cp[name]); ?>"  <?php if(($cp[name]) == $_GET['name']): ?>selected="selected"<?php endif; ?> ><?php echo ($cp[title]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div>
					<div class="bet_time pull-left" id="time-box">
						<em class="tle">时间：</em>
						<span class="bet_common_bor <?php if($_GET['atime']== 1): ?>active<?php endif; ?>" value="1"  onclick="chaxun('1',null);">今天</span>
						<span class="bet_common_bor <?php if($_GET['atime']== 2): ?>active<?php endif; ?>" value="2" onclick="chaxun('2',null);">昨天</span>
						<span class="bet_common_bor <?php if($_GET['atime']== 3): ?>active<?php endif; ?>" value="3" onclick="chaxun('3',null);">七天</span>
					</div>
					<span class="bet_status pull-left" id="status-box">
						<em class="tle">状态：</em>
						<span class="bet_common_bor a_item  <?php if($_GET['a_item']== 1): ?>active<?php endif; ?>" value="1""  onclick="chaxun(null,'1');">全部</span>
						<span class="bet_common_bor a_item  <?php if($_GET['a_item']== 2): ?>active<?php endif; ?>" value="2""  onclick="chaxun(null,'2');">已中奖</span>
						<span class="bet_common_bor a_item  <?php if($_GET['a_item']== 3): ?>active<?php endif; ?>" value="3""  onclick="chaxun(null,'3');">未中奖</span>
						<span class="bet_common_bor a_item  <?php if($_GET['a_item']== 4): ?>active<?php endif; ?>" value="4""  onclick="chaxun(null,'4');">等待开奖</span>
					</div>


									<div class="bet_info  col-sm-12">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>彩种</th>
								<th>期号</th>
								<th>投注内容</th>
								<th>投注金额</th>
								<th>开奖号码</th>
								<th>奖金</th>
								<th>状态</th>
								<th>投注时间</th>
								<!--<th>操作项</th>-->
							</tr>
						</thead>
						<tbody>
						<?php if(is_array($tzlist)): $i = 0; $__LIST__ = $tzlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($vo["cptitle"]); ?></td>
								<td><?php echo ($vo["expect"]); ?></td>
								<td class="ytzcode"><span class="ytzcodes"><?php echo ($vo["playtitle"]); ?>--<?php echo ($vo["tzcode"]); ?></span></td>
								<td><?php echo ($vo["amount"]); ?></td>
								<td><?php echo ($vo["opencode"]); ?></td>
								<td><?php echo ($vo["okamount"]); ?></td>
								<td>
									<?php if($vo[isdraw] == 0): ?>未开奖
										<?php elseif($vo[isdraw] == 1): ?>
										<span style="color:red">已中奖</span>
										<?php elseif($vo[isdraw] == -1): ?>
										<span style="color:green">未中奖</span>
										<?php elseif($vo[isdraw] == -2): ?>
										<span style="color:grey">已撤单</span><?php endif; ?>
								</td>
								<td><?php echo (date("m-d H:i:s",$vo["oddtime"])); ?></td>
					<!--			<td>
									<?php if($vo[isdraw] == 0): ?><a href="javascript:void" class="chedan_btn" style="color:red"  onclick="Order_chedan('<?php echo ($vo[id]); ?>','<?php echo ($vo[trano]); ?>',this)">撤单</a> <?php elseif($vo[isdraw] == -2): ?>已撤消 <?php else: ?>已关闭<?php endif; ?>
								</td>-->
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				<!-- 如果没有查到就显示这个 -->
				<div class="no_result" style="display:none;">
					暂无记录
				</div>
<!--				<ul class="pagination bet_paging">
					<li><a href="">上一页</a></li>
					<li class="active"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">下一页</a></li>
					<li><a href="">共 <em class="color_res">0</em> 页</a></li>
				</ul>-->
				<div class="page" id="page"><?php echo ($pageshow); ?></div>
				<div class="prompt">
					<i class="iconfont">&#xe659;</i>
					温馨提示：投注记录最多只保留7天。
				</div>
				</div>


			</div>
		</div>
	</div>
<footer class="footer" style="clear:both">
    <div class="footer_main">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 footer_left padding_0">
                    <div class="footer_common_title">
                        <h2>技术支持 <span>Technical support</span></h2>
                    </div>
                    <div class="clearfix footer_l_content">
                        <a href="">
                            <div class="pull-left">
                                <img src="/resources/images/dafayun.png" alt="">
                            </div>
                            <p class="pull-left">
                                <span><?php echo GetVar('webtitle');?>系统</span>
                                <span>专业彩票系统平台</span>
                            </p>
                        </a>
                    </div>
                    <i></i>
                </div>
                <div class="col-xs-4 footer_middle">
                    <div class="footer_common_title">
                        <h2>服务体验 <span>Service experience</span></h2>
                        <div class="footer_m_content">
                            <div class="clearfix enter">
                                <span class="pull-left">昨日充值到账平均时间</span>
                                <p class="bar pull-left margin_0">
                                    <span class="bar_red"></span>
                                </p>
                                <span class="miao pull-left"><em>53</em> 秒</span>
                            </div>
                            <div class="clearfix enter">
                                <span class="pull-left">昨日提现到账平均时间</span>
                                <p class="bar pull-left margin_0">
                                    <span class="bar_blue"></span>
                                </p>
                                <span class="miao pull-left"><em>17'40</em> 秒</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 footer_right">
                    <div class="footer_common_title">
                        <h2>充值展示 <span>Recharge method</span></h2>
                    </div>
                    <div class="chongzhi_img_box">
                        <span class="chongzhi_img1"></span>
                        <span class="chongzhi_img2"></span>
                        <span class="chongzhi_img3"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_other">
        <div class="container">
            <p class="footer_link">
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>3]);?>?About ">关于我们</a>
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>56]);?>?About">联系我们</a>
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>57]);?>?About">商务合作</a>
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>58]);?>?About">法律声明</a>
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>59]);?>?About">隐私声明</a>
            </p>
            <p class="footer_copyright">
                Copyright ©  <?php echo GetVar('webtitle');?>  Reserved | 18+
            </p>
        </div>
    </div>
</footer>
<?php if($_COOKIE['showgg']== '1' && $_SESSION['userinfo']!= ''): ?><div class="notice">
    <div class="noticCon">
        <h3>网站最新公告 <a class="iconfont icon-guanbi-copy closeNotice"></a></h3>
     <ul>
         <?php if(is_array($gglist)): $k = 0; $__LIST__ = array_slice($gglist,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li><a href=<?php echo U('Member/ggshow',array('aid'=>$vo['id']));?>><?php echo ($vo["title"]); ?><br>[<?php echo (date("Y-m-d H:i:s",$vo["oddtime"])); ?>]</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    </div>
</div><?php endif; ?> 
<script>
    $('.notice').find('.closeNotice').click(function (){
     
        $('.notice').hide();
        $.ajax({
            url : "<?php echo U('Common/closegg');?>",
            type:"POST",
        })
    })
</script>
<div class="loginCengBox">
	<div class="loginCeng">
		<div class="loginCengH">
			<h3>温馨提示</h3>
			<span class="loginCengClose">
				<i class="iconfont icon-guanbi-copy"></i>
			</span>
		</div>
		<div class="loginCengB">
		
		</div>
		<div class="loginCengF">
			<button type="submit" >确定</button>
		</div>
	</div>
</div>


<div class="modal fade ytz_model" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">投注内容</h4>
            </div>
            <div class="modal-body" style="word-wrap:break-word ;">
                ----
            </div>
        </div>
    </div>
</div>

<script>
	function chaxun(t,s){
		var name=$("#lottery_code").val();
		 
		if(t){
			var atime = t;
		}else{
			var atime = $('#time-box span.active').attr('value');
		}
		if(s){
			var a_item = s;
		}else{
			var a_item = $('#status-box span.active').attr('value');
		}
		var url = ''+"/Member.betRecord.name."+name+".atime."+atime+".a_item."+a_item;
		window.location.href = url;
	}
 
</script>

</body>
</html>