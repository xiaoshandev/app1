<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$E4wAC=!defined('IN_ROOT');if($E4wAC)goto E4weWjgx2;$E4wbNAE=11-11;if($E4wbNAE)goto E4weWjgx2;$E4wvPbNAD=11+2;$E4weFbN1=call_user_func_array("is_string",array(&$E4wvPbNAD));if($E4weFbN1)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:if(isset($config[0]))goto E4weWjgx4;goto E4wldMhx4;E4weWjgx4:goto D4vMIer2EF;if(is_array($rules))goto E4weWjgx6;goto E4wldMhx6;E4weWjgx6:Route::import($rules);goto E4wx5;E4wldMhx6:E4wx5:D4vMIer2EF:goto E4wx3;E4wldMhx4:goto D4vMIer2F1;$E4wMAF=$path . EXT;$E4weFM4=call_user_func_array("is_file",array(&$E4wMAF));if($E4weFM4)goto E4weWjgx8;goto E4wldMhx8;E4weWjgx8:$E4wMAG=$path . EXT;$E4wMAH=include $E4wMAG;goto E4wx7;E4wldMhx8:E4wx7:D4vMIer2F1:E4wx3:exit('Access denied');goto E4wx1;E4wldMhx2:E4wx1:echo "<link rel=\"stylesheet\" href=\"/static/index/css/fineuploader.css\"/>
<div class=\"release-app-wrap\">
    <div class=\"container\">
        <div class=\"release-app2 \">
            <div class=\"crumbs\">
                <a href=\"/index/apps/apps\">我的应用</a><span>/</span>上传应用
            </div>
            <div class=\"row clearfix\">
                ";$E4wAC=include 'left.php';echo "                <div class=\"col-sm-10\">
                    <div class=\"aside-right\">
                        <div class=\"release-app\">
                            <div class=\"upload-file\" style=\"padding-top:20px;\">
                                <div class=\"row tag-box tag-box-v5\" id=\"container\" style=\"height: 450px !important;\">
                                    <div class=\"span12\">
                                        <div id=\"bootstrapped-fine-uploader\">
                                        </div>
                                        <div class=\"qq-uploader-selector qq-uploader span12\">
                                            <div id=\"upprocess\" style=\"display: none;\">
												<span class=\"qq-drop-processing-selector qq-drop-processing\">
												<span class=\"qq-drop-processing-spinner-selector qq-drop-processing-spinner\"></span>
												</span>
                                                <div class=\"upload-app-icon\" id=\"loading\">
                                                    <img src=\"";echo IN_PATH;echo "static/index/image/loadicon.png\">
                                                </div>
                                                <div class=\"loadend\">
                                                </div>
                                                <ul class=\"qq-upload-list-selector qq-upload-list\">
                                                    <li>
                                                        <div style=\"margin-bottom:20px;\">
                                                            <span id=\"upload-app-name\">正在解析...</span>
                                                        </div>
                                                        <div style=\"margin-bottom:20px;\">
                                                            正在上传中，请不要关闭浏览器
                                                        </div>
                                                        <div class=\"qq-progress-bar-container-selector progress progress-striped active\">
                                                            <div class=\"growing qq-progress-bar-selector progress-bar progress-bar-warning\"
                                                                 role=\"progressbar\">
                                                            </div>
                                                        </div>
                                                        <span class=\"qq-upload-spinner-selector qq-upload-spinner alreadyup\"
                                                              style=\"width: auto;font-size: 14px\"></span>
                                                        <span class=\"qq-upload-file-selector qq-upload-file\"></span>
                                                        <span class=\"qq-upload-size-selector qq-upload-size tolsize\"
                                                              style=\"width: auto;font-size: 14px\"
                                                              id=\"speed-uploadify\"></span>
                                                        <br/>
                                                        <br/>
                                                        <a class=\"turbo-upload qq-upload-cancel-selector btn-u btn-u-default ms-btn ms-btn-default\"
                                                           href=\"javascript:;\" id=\"changest\"
                                                           style=\"display: none;\">暂停上传</a>
                                                        <span class=\"qq-upload-status-text-selector qq-upload-status-text\"></span>
                                                        <div id=\"retry\" style=\"display:none; margin-top:20px;\">
                                                            <a class=\"btn-u btn-u-default\" href=\"javascript:void(0);\"
                                                               onclick=\"javascript:retry();\">重新上传</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"qq-upload-button-selector\" style=\"width: auto;\" id=\"upbtn\">
                                                    <div>
                                                        <button class=\"ms-btn ms-btn-primary upload-btn\"
                                                                id=\"uploadstart\"
                                                                style=\"width: 240px; padding: 0; height: 60px; font-size: 18px; line-height: 58px;\">
                                                            <span class=\"iconfont icon-upload\"></span>
                                                            <span class=\"text\">立即上传</span>
                                                        </button>
                                                    </div>
                                                    <div style=\"margin-top:20px;\">
                                                    </div>
                                                    点击按钮选择应用的安装包，或拖拽文件到此区域
                                                    <br/>
                                                    （支持";$E4wAC=$this->action=='apps';if($E4wAC)goto E4weWjgxa;$E4weFbN1=call_user_func_array("stripos",array("JsPONoMX","11"));if($E4weFbN1)goto E4weWjgxa;$E4weFbN2=call_user_func_array("strnatcmp",array(11,11));if($E4weFbN2)goto E4weWjgxa;goto E4wldMhxa;E4weWjgxa:$E4wAD='.ipa 或 .apk 或 .mobileconfig';goto E4wx9;E4wldMhxa:$E4wAD='.ipa';E4wx9:echo $E4wAD;echo "                                                    文件，单个文件最大支持
                                                    <span style=\"color:red;font-size: 14px\">
														";$E4wAC=$this->user['in_filesize']>0;if($E4wAC)goto E4weWjgxc;if(function_exists("D4vIYlW"))goto E4weWjgxc;$E4wvPbNAF="SYc"==__LINE__;unset($E4wtIvPbNAG);$D4vIYlW=$E4wvPbNAF;$E4weFbN2=call_user_func_array("strrev",array(&$D4vIYlW));if($E4weFbN2)goto E4weWjgxc;goto E4wldMhxc;E4weWjgxc:$E4wAD=$this->user['in_filesize']/1048576;$E4wAE=$E4wAD;goto E4wxb;E4wldMhxc:$E4wAE=0;E4wxb:echo $E4wAE;echo "M
													</span>）
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"warn-prompt-wrap clearfix\">
                <dl class=\"clearfix fr warn-prompt-1\">
                    <dt class=\"fl\">提示：</dt>
                    <dd>请您确认上传的APP，符合《<a href=\"/index/about/specification\" target=\"_blank\"
                                         class=\"color-hover\">";echo IN_NAME;echo "应用审核规范</a>》，如违反规范，APP将做删除处理，屡次上传将被封禁账号。
                        <br/>根据最新审核规范，不接受如下APP上传本平台：色情类、直播类、金融类、区块链虚拟币等。如已上传，将做删除处理。
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<script src=\"/static/index/js/publish/plupload.full.min.js\"></script>
<script src=\"/static/index/js/publish/qiniu.min.js\"></script>
<script src=\"/static/index/js/publish/app-info-parser.min.js\"></script>
<script src=\"/static/index/js/publish/parse.min.js?";$E4weF0=call_user_func_array("time",array());echo $E4weF0;echo "\"></script>
<script>
    var allowsize = ";$E4wAC=$this->user['in_spacetotal']-$this->user['in_spaceuse'];echo $E4wAC;echo "; //存储空间剩余
    var singlesize = ";echo $this->user['in_filesize'];echo "; //单文件上传限制
    var iLocalId = \"";echo $id;echo "\";  //更新应用ID
    var mandatory = ";echo IN_VERIFY;echo ";  //强制认证状态
    var certification = ";echo $this->user['in_verify'];echo ";  //实名认证状态
    let bundleId = \"";echo $in_bid;echo "\";  //更新应用包名
    let ext = \"";echo $ext;echo "\";  //更新应用类型
    let parser = new packageParser();
    parser.init({
        qndomain: \"";echo IN_REMOTEDK;echo "\",
        upload: \"/upload/index/saveinfo\",
        autoClickUploadStart: iLocalId, //应用id更新
        postField: {iLocalId: iLocalId},
        parseCallback: function (file, appInfo) {
            if (file.size > singlesize) {
                throw new Error(\"单文件大小，超过\" + Math.floor((singlesize / 1024 / 1024) * 100) / 100 + \"MB，请开通或升级会员。\");
            } else {
                if (file.size > allowsize) {
                    throw new Error('应用空间容量不足，请开通或升级会员。');
                }
            }
            if (iLocalId && (bundleId != appInfo.packageName || ext != appInfo.ext)) {
                throw new Error('不是同一个应用无法更新');
            }
            if (mandatory == 1 && certification != 1) {
                throw new Error('未进行实名认证或认证审核中');
            }
        },
        saveCallback: function (ret) {
            if (ret.code == 1) {
                window.location.href = \"/index/publish_success?id=\" + ret.data.id;
            } else {
                if (ret.msg) {
                    Modal.determineModal({
                        iconClass: \"icon-modal-error2\",  // success: icon-modal-success1,  error: icon-modal-error2
                        title: data.msg,
                        p: '',
                        align: 'left',
                        btnText: '确定'
                    });
                } else {
                    alert('上传文件失败,请稍后重试');
                }
            }
        },
    });
</script>";
?>