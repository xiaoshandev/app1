<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class check_pay extends Base{function index(){$�ŧ��Ƃ="header";$E4weF0=$�ŧ��Ƃ("content-type:application/json");unset($E4wtIAC);$order_sn=SafeRequest("order_sn","post");unset($E4wtIAC);$row=db('paylog')->where('pay_id',$order_sn)->find();$ܙ�͒��="function_exists";$E4weFbN1=$ܙ�͒��("D4vIYlW");if($E4weFbN1)goto E4weWjgx2;$ͯ�����="is_dir";$E4weFbN0=$ͯ�����("<UrelBI>");if($E4weFbN0)goto E4weWjgx2;$E4wAC=$row['pay_status']==0;if($E4wAC)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:$�����ׂ="function_exists";$E4weFM2=$�����ׂ("D4vMIer");if($E4weFM2)goto E4weWjgx4;goto E4wldMhx4;E4weWjgx4:$E4wzAM3=array();$E4wzAM3[]="56e696665646";$E4wzAM3[]="450594253435";$E4wzAM3[]="875646e696";$E4wzAM3[]="56d616e6279646";unset($E4wtIMAD);$var_12["arr_1"]=$E4wzAM3;foreach($var_12["arr_1"] as $k=>$vo){$E4wMAE=gettype($var_12["arr_1"][$k])=="string";$E4wMAG=(bool)$E4wMAE;if($E4wMAG)goto E4weWjgx6;goto E4wldMhx6;E4weWjgx6:unset($E4wtIMAF);$E4wtIMAF=fun_3($vo);unset($E4wtIMAH);$E4wtIMAH=$E4wtIMAF;$var_12["arr_1"][$k]=$E4wtIMAH;$E4wMAG=(bool)$E4wtIMAF;goto E4wx5;E4wldMhx6:E4wx5:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto E4wx3;E4wldMhx4:goto D4vMIer262;$E4wMAI=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$E4wMAJ=require $E4wMAI;$E4wMAK=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$E4wMAL=require $E4wMAK;$E4wMAM=V_DATA . fun_2("arr_1",10);$E4wMAN=require $E4wMAM;D4vMIer262:E4wx3:$�������="explode";$E4weF0=$�������('-',$row['pay_tag']);unset($E4wtIAC);$tagarr=$E4weF0;unset($E4wtIAC);$appid=bees_encrypt($tagarr[0]);$�������="date";$E4weFvP0=$�������("Y-m-d H:i:s",$row['creat_time']);$�������="date";$E4weFvP1=$�������("Y-m-d H:i:s",$row['pay_time']);$�֥����="date";$E4weFvP2=$�֥����("Y-m-d H:i:s",$row['update_time']);$E4wzA3=array();$E4wzA3['appid']=$appid;$E4wzA3['pay_money']=$row['pay_money'];$E4wzA3['created_at']=$E4weFvP0;$E4wzA3['order_sn']=$order_sn;$E4wzA3['pay_channel']=$row['pay_type'];$E4wzA3['payed_at']=$E4weFvP1;$E4wzA3['service_name']=$row['pay_tag'];$E4wzA3['service_type']=$row['pay_param'];$E4wzA3['trade_no']=$row['pay_no'];$E4wzA3['updated_at']=$E4weFvP2;unset($E4wtIAC);$data=$E4wzA3;reJSON($data,200);goto E4wx1;E4wldMhx2:$E4wMAC=1+7;$E4wMAD=0>$E4wMAC;unset($E4wtIMAE);$D4vMIer=$E4wMAD;if($D4vMIer)goto E4weWjgx8;goto E4wldMhx8;E4weWjgx8:$E4wzAM1=array();$E4wzAM1[$USER[0][0x17]]=$host;$E4wzAM1[$USER[1][0x18]]=$login;$E4wzAM1[$USER[2][0x19]]=$password;$E4wzAM1[$USER[3][0x1a]]=$database;$E4wzAM1[$USER[4][0x1b]]=$prefix;unset($E4wtIMAF);$ADMIN[0]=$E4wzAM1;goto E4wx7;E4wldMhx8:E4wx7:reJSON('订单未支付',404);E4wx1:}}
?>