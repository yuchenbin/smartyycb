<style>
    li {
        line-height: 25px;
        zoom: 1;
    }
    li em {
        float: left;
        width: 100px;
        font-style: normal;
    }
    span{
        font-style: normal;
    }
    .tit{
        padding-top: 15px;
        font:normal bold 14px/20px arial,sans-serif;
    }
    .system{
        font:normal bold 12px/20px arial,sans-serif;
    }
</style>
<div id="container">
    <div id="navTab" class="tabsPage">
        <div class="tabsPageHeader">
            <div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
                <ul class="navTab-tab">
                    <li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
                </ul>
            </div>
            <div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
            <div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
            <div class="tabsMore">more</div>
        </div>
        <ul class="tabsMoreList">
            <li><a href="javascript:;">我的主页</a></li>
        </ul>
        <div class="navTab-panel tabsPageContent layoutBox">
            <div class="page unitBox">
                <div class="accountInfo tit" >
                    欢迎来到 后台管理系统
                </div>
                <div class="pageFormContent" layoutH="80" style="margin-right:230px">
                    <div class="system">系统信息</div>
                    <div style="padding: 5px 10px 20px;color: #666;">

                        <ul>
                            <li>
                                <em>操作系统</em>
                                <span><?php echo $systeminfo['system_os'] ?></span> 
                            </li>
                            <li> 
                                <em>运行环境</em> 
                                <span><?php echo $systeminfo['environment'] ?></span>
                            </li>
                            <li>
                                <em>PHP运行方式</em> 
                                <span><?php echo $systeminfo['phpapi'] ?></span>
                            </li>
                            <li> 
                                <em>MYSQL版本</em>
                                <span><?php echo $systeminfo['mysqlver'] ?></span> 
                            </li>
                            <li> 
                                <em>浏览器版本</em>
                                <span><?php echo $systeminfo['browser'][0] . "&nbsp;" . $systeminfo['browser'][1] ?></span> 
                            </li>
                            <li> 
                                <em>上传附件限制</em> 
                                <span><?php echo $systeminfo['filelimit'] ?></span> 
                            </li>
                            <li>
                                <em>执行时间限制</em> 
                                <span><?php echo $systeminfo['execlimit'] ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="system">个人信息</div>
                    <div style="padding: 5px 10px 20px;color: #666;">

                        <ul>
                            <li>
                                <em>上次登录时间</em>
                                <span>2014-06-06 06:06:06</span> 
                            </li>
                            <li> 
                                <em>上次登录ip</em> 
                                <span>172.0.0.1</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
