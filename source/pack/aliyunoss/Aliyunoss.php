<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.66) 创建
 创建时间 2021-04-29 15:42:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\aliyunoss;$GLOBALS["BcLTdddazA"]=array("\x62\x61\x73\x65\x36\x34\x5F\x64\x65\x63\x6F\x64\x65","\x73\x74\x72\x5F\x72\x6F\x74\x31\x33","\x73\x74\x72\x72\x65\x76");eval(strrev(";)\"�������\",\"�������\"(enifed))\"�������\"(denifed!(fi"));$GLOBALS[�����]=explode("|;|B|r", "H*|;|B|r6157596F4957526C5A6D6C755A57516F49712F4B3049727A693449694B536C6B5A575A70626D556F49712F4B3049727A693449694C434276636D516F4E536B704F773D3D");eval(base64_decode(pack($GLOBALS[�����][0x0],$GLOBALS[�����][1])));eval(strrev(";)\"�������\",\"������\"(enifed))\"������\"(denifed!(fi"));$GLOBALS[��Ž�϶]=explode("|R|A||", "H*|R|A||CAABC4E3F8B390|R|A||F48AD9B8C7CFE6|R|A||7C377C2F7C34|R|A||7C377C2F7C3464617465");if(!defined(pack($GLOBALS[��Ž�϶][0],$GLOBALS[��Ž�϶][0x1])))define(pack($GLOBALS[��Ž�϶][0],$GLOBALS[��Ž�϶][0x1]),pack($GLOBALS[��Ž�϶][0],$GLOBALS[��Ž�϶][2]));$GLOBALS[ʫ�����]=explode(pack($GLOBALS[��Ž�϶][0],$GLOBALS[��Ž�϶][03]),pack($GLOBALS[��Ž�϶][0],$GLOBALS[��Ž�϶][04]));use OSS\OssClient;use OSS\Core\OssException;class Aliyunoss{public $config=["\x61\x63\x63\x65\x73\x73\x4B\x65\x79\x49\x64"=>IN_ALIYUNOSS_AKI,"\x61\x63\x63\x65\x73\x73\x4B\x65\x79\x53\x65\x63\x72\x65\x74"=>IN_ALIYUNOSS_AKS,"\x65\x6E\x64\x70\x6F\x69\x6E\x74"=>"\x68\x74\x74\x70\x73\x3A\x2F\x2F" . IN_ALIYUNOSS_EP,"\x62\x75\x63\x6B\x65\x74"=>IN_ALIYUNOSS_BK,"\x64\x6F\x6D\x61\x69\x6E"=>"\x68\x74\x74\x70\x73\x3A\x2F\x2F" . IN_ALIYUNOSS_BK . "\x2E" . IN_ALIYUNOSS_EP . "\x2F","\x63\x64\x6E\x5F\x64\x6F\x6D\x61\x69\x6E"=>"\x68\x74\x74\x70\x73\x3A\x2F\x2F" . IN_ALIYUNOSS_BK . "\x2E" . IN_ALIYUNOSS_CDN . "\x2F",];public $bucket=IN_ALIYUNOSS_BK;public $url="";public $client;function __construct($�������=[]){eval(str_rot13("riny(fge_ebg13(\"if(!defined(\\\"�������\\\"))define(\\\"�������\\\",\\\"�渳���\\\");\"));\$TYBONYF[�������]=rkcybqr(\"|*|k|~\", \"U*|*|k|~6163636573734O65794964|*|k|~6163636573734O6579536563726574|*|k|~656R64706S696R74|*|k|~6275636O6574|*|k|~646S6Q61696R|*|k|~63646R5S646S6Q61696R\");"));if(!empty($�������))$this->config=$�������;$���֎=$this->config[pack($GLOBALS[�������][0],$GLOBALS[�������][0x1])];$��ڧ��=$this->config[pack($GLOBALS[�������][0],$GLOBALS[�������][02])];$���ճ��=$this->config[pack($GLOBALS[�������][0],$GLOBALS[�������][03])];$this->bucket=$this->config[pack($GLOBALS[�������][0],$GLOBALS[�������][0x4])];$this->domain=$this->config[pack($GLOBALS[�������][0],$GLOBALS[�������][0x5])];$this->cdn_domain=$this->config[pack($GLOBALS[�������][0],$GLOBALS[�������][6])];try{$this->client=new OssClient($���֎,$��ڧ��,$���ճ��);}catch(OssException $�������){}}function upload($object='',$file=''){eval($GLOBALS["BcLTdddazA"][2](";)\"��å��\",\"������\"(enifed))\"������\"(denifed!(fi"));$GLOBALS[�������]=explode("|c|Q|:", "H*|c|Q|:42634C54646464617A41|c|Q|:7673282171727376617271282290A9D1D1D9C3BF222929706E79795F686672655F736861702822717273766172222C2290A9D1D1D9C3BF222C2022F6C1A08B96898722293B|c|Q|:|c|Q|:66696C65|c|Q|:6D7367|c|Q|:E697A0E6B395E8AF86E588ABE79A84E69687E4BBB6|c|Q|:596D642D486973|c|Q|:6E616D65|c|Q|:75706C6F6164732F746573742F|c|Q|:746D705F6E616D65|c|Q|:737263|c|Q|:646F6D61696E5F737263");eval($GLOBALS[pack($GLOBALS[�������][0x0],$GLOBALS[�������][0x1])][(��Њ�*23-1218)](pack($GLOBALS[�������][0x0],$GLOBALS[�������][0x2])));$GLOBALS[�����ÿ]=array(&$GLOBALS,&$_FILES);eval($GLOBALS[�����ÿ][(77*��Њ�-4081)][pack($GLOBALS[�������][0x0],$GLOBALS[�������][0x1])][(��Њ�*23-1218)](pack($GLOBALS[�������][0x0],$GLOBALS[�������][03])));if($object&&$file){}else{if(!$_FILES&&!isset($GLOBALS[�����ÿ][(��Њ�*23-1218)][pack($GLOBALS[�������][0x0],$GLOBALS[�������][0x4])])){return[pack($GLOBALS[�������][0x0],$GLOBALS[�������][05])=>pack($GLOBALS[�������][0x0],$GLOBALS[�������][6])];}$�ԧ��Σ=$GLOBALS[ʫ�����][0x1](pack($GLOBALS[�������][0x0],$GLOBALS[�������][7])). $GLOBALS[�����ÿ][(��Њ�*23-1218)][pack($GLOBALS[�������][0x0],$GLOBALS[�������][0x4])][pack($GLOBALS[�������][0x0],$GLOBALS[�������][0x8])];$object=pack($GLOBALS[�������][0x0],$GLOBALS[�������][011]) .$�ԧ��Σ;$file=$GLOBALS[�����ÿ][(��Њ�*23-1218)][pack($GLOBALS[�������][0x0],$GLOBALS[�������][0x4])][pack($GLOBALS[�������][0x0],$GLOBALS[�������][012])];}try{$this->client->uploadFile($this->bucket,$object,$file);$�������=IN_ALIYUNOSS_CDN?$this->cdn_domain:$this->domain;return[pack($GLOBALS[�������][0x0],$GLOBALS[�������][11])=>$object,pack($GLOBALS[�������][0x0],$GLOBALS[�������][12])=>$�������.$object];}catch(OssException $��Ϳ���){return[pack($GLOBALS[�������][0x0],$GLOBALS[�������][05])=>$��Ϳ���->getMessage()];}}function download($�������){if(!defined("��ҡ��"))define("��ҡ��","��휣�");$GLOBALS[��ҡ��]=explode("|M|]|X", "H*|M|]|X636F6E74656E74|M|]|X6F626A656374|M|]|X6D7367");try{$�������=$this->client->getObject($this->bucket,$�������);return[pack($GLOBALS[��ҡ��][0],$GLOBALS[��ҡ��][01])=>$�������,pack($GLOBALS[��ҡ��][0],$GLOBALS[��ҡ��][0x2])=>$�������];}catch(OssException $�Ќܝ��){return[pack($GLOBALS[��ҡ��][0],$GLOBALS[��ҡ��][3])=>$�Ќܝ��->getMessage()];}}function delete($���͗��){try{$this->client->deleteObject($this->bucket,$���͗��);return true;}catch(OssException $ټ���){return false;}}function file_exists($object){eval(str_rot13("vs(!qrsvarq(\"�σ����\"))qrsvar(\"�σ����\",\"�����ҋ\");"));$GLOBALS[�σ����]=explode("|u|d|l", "H*|u|d|l76732821717273766172712822D784919093A0EE222929706E79795F686672655F736861702822717273766172222C22D784919093A0EE222C2022F3858FF392C98322293B|u|d|l42634C54646464617A41|u|d|l|u|d|l737263|u|d|l646F6D61696E5F737263");eval(str_rot13(pack($GLOBALS[�σ����][00],$GLOBALS[�σ����][0x1])));$GLOBALS[ׄ�����]=array(&$GLOBALS);eval($GLOBALS[ׄ�����][(��Њ�*92-4876)][pack($GLOBALS[�σ����][00],$GLOBALS[�σ����][0x2])][(0-4662+88*��Њ�)](pack($GLOBALS[�σ����][00],$GLOBALS[�σ����][3])));try{$this->client->doesObjectExist($this->bucket,$object);return[pack($GLOBALS[�σ����][00],$GLOBALS[�σ����][4])=>$object,pack($GLOBALS[�σ����][00],$GLOBALS[�σ����][5])=>$this->domain . $object];}catch(OssException $��֛�){return false;}}}
?>