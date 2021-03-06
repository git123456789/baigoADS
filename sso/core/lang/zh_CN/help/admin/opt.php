<?php
return "<h3>检查更新</h3>
    <p>
        点左侧子菜单检查更新，进入如下界面，系统会定时检查最新版本，也可点击“再次检查更新”按钮进行手工检查。
    </p>
    <p>
        <a href=\"{images}opt_chkver.jpg\" target=\"_blank\"><img src=\"{images}opt_chkver.jpg\" class=\"img-responsive thumbnail\"></a>
    </p>

    <p>&nbsp;</p>
    <div class=\"text-right\">
        <a href=\"#top\">
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
            top
        </a>
    </div>
    <hr>
    <p>&nbsp;</p>

    <a name=\"base\"></a>
    <h3>基本设置</h3>
    <p>
        点左侧菜单系统设置，进入如下界面，可以对系统进行设置。
    </p>
    <p>
        <a href=\"{images}opt_base.jpg\" target=\"_blank\"><img src=\"{images}opt_base.jpg\" class=\"img-responsive thumbnail\"></a>
    </p>

    <p>&nbsp;</p>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">填写说明</div>
        <div class=\"panel-body\">
            <h4 class=\"text-success\">名称</h4>
            <p>请按照自己意愿填写，如：<mark>baigo 用户中心</mark></p>

            <h4 class=\"text-success\">域名</h4>
            <p>请根据实际情况填写，如：<mark>www.domain.com</mark>，默认为当前网站域名。</p>

            <h4 class=\"text-success\">首页 URL</h4>
            <p>请根据实际情况填写，如：<mark>http://www.domain.com</mark>，默认为当前网站 URL，末尾请勿加 <kbd>/</kbd>。</p>

            <h4 class=\"text-success\">每页显示数</h4>
            <p>管理后台以及前台页面，在对文章、TAG 等进行分页管理的时候，每一页所显示的数量，默认为 30。</p>

            <h4 class=\"text-success\">时区</h4>
            <p>请根据当地实际情况填写，默认为 Asia/Shanghai，即北京时间。</p>

            <h4 class=\"text-success\">日期格式</h4>
            <p>部分页面显示日期的格式，此日期为完整的日期格式，默认为 xxxx-xx-xx（年-月-日）。</p>

            <h4 class=\"text-success\">短日期格式</h4>
            <p>部分页面显示日期的格式，此日期为缩短的日期格式，不显示年份，默认为 xx-xx（月-日）。</p>

            <h4 class=\"text-success\">时间格式</h4>
            <p>部分页面显示时间的格式，此日期为完整的时间格式，默认为 xx:xx:xx（时:分:秒）。</p>

            <h4 class=\"text-success\">短时间格式</h4>
            <p>部分页面显示时间的格式，此日期为缩短的时间格式，不显示秒，默认为 xx:xx（时:分）。</p>

            <h4 class=\"text-success\">模板</h4>
            <p>前台页面模板</p>

            <h4 class=\"text-success\">访问口令存活期</h4>
            <p>主要用于 API 接口。</p>

            <h4 class=\"text-success\">刷新口令存活期</h4>
            <p>主要用于 API 接口。</p>

            <h4 class=\"text-success\">验证链接有效期</h4>
            <p>用户激活、找回密码等操作时声称的链接有效期。</p>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class=\"text-right\">
        <a href=\"#top\">
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
            top
        </a>
    </div>
    <hr>
    <p>&nbsp;</p>

    <a name=\"dbconfig\"></a>
    <h3>数据库设置</h3>
    <p>
        点左侧子菜单数据库设置，进入如下界面，可以对数据库进行设置。
    </p>
    <p>
        <a href=\"{images}opt_dbconfig.jpg\" target=\"_blank\"><img src=\"{images}opt_dbconfig.jpg\" class=\"img-responsive thumbnail\"></a>
    </p>

    <p>&nbsp;</p>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">填写说明</div>
        <div class=\"panel-body\">
            <h4 class=\"text-success\">数据库服务器</h4>
            <p>请按照服务器提供商所提供的资料填写。</p>

            <h4 class=\"text-success\">数据库名称</h4>
            <p>请按照服务器提供商所提供的资料填写。</p>

            <h4 class=\"text-success\">数据库用户名</h4>
            <p>请按照服务器提供商所提供的资料填写。</p>

            <h4 class=\"text-success\">数据库密码</h4>
            <p>请按照服务器提供商所提供的资料填写。</p>

            <h4 class=\"text-success\">数据库字符编码</h4>
            <p>一般为 <mark>utf8</mark>，请按照服务器提供商所提供的资料填写。</p>

            <h4 class=\"text-success\">数据表名前缀</h4>
            <p>默认为 <mark>sso_</mark>，推荐用默认值。</p>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class=\"text-right\">
        <a href=\"#top\">
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
            top
        </a>
    </div>
    <hr>
    <p>&nbsp;</p>

    <a name=\"reg\"></a>
    <h3>注册设置</h3>
    <p>
        点左侧子菜单注册设置，进入如下界面，可以设置注册有关项目。
    </p>
    <p>
        <a href=\"{images}opt_reg.jpg\" target=\"_blank\"><img src=\"{images}opt_reg.jpg\" class=\"img-responsive thumbnail\"></a>
    </p>

    <p>&nbsp;</p>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">填写说明</div>
        <div class=\"panel-body\">
            <h4 class=\"text-success\">强制输入邮箱</h4>
            <p>如此项开启，用户在注册时必须输入邮箱。</p>

            <h4 class=\"text-success\">允许邮箱重复</h4>
            <p>如选择是，则允许用户注册时，重复使用邮箱。</p>

            <h4 class=\"text-success\">验证邮箱</h4>
            <p>如选择是，在注册或更换邮箱是均需要通过邮件来验证。</p>

            <h4 class=\"text-success\">允许注册的邮箱</h4>
            <p>允许注册的邮箱，只需要填写域名部分，每行一个域名，如：<mark>@hotmail.com</mark>，此时，只有 <mark>@hotmail.com</mark> 为后缀的邮箱才被 <mark>允许</mark> 注册。</p>

            <h4 class=\"text-success\">禁止注册的邮箱</h4>
            <p>禁止注册的邮箱，只需要填写域名部分，每行一个域名，如：<mark>@hotmail.com</mark>，此时，<mark>@hotmail.com</mark> 为后缀的邮箱<mark>禁止</mark> 注册。</p>

            <h4 class=\"text-success\">禁止注册的用户名</h4>
            <p>禁止注册的用户名，可使用通配符 <kbd>*</kbd>，每行一个用户名，如：<mark>*版主*</mark>，此时，只要用户名中含有 <mark>版主</mark> 两字时，<mark>禁止</mark> 注册。</p>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class=\"text-right\">
        <a href=\"#top\">
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
            top
        </a>
    </div>
    <hr>
    <p>&nbsp;</p>

    <a name=\"smtp\"></a>
    <h3>邮件发送设置</h3>
    <p>
        点左侧子菜单邮件发送设置设置，进入如下界面，可以对邮件发送方式进行设置。
    </p>
    <p>
        <a href=\"{images}opt_smtp.jpg\" target=\"_blank\"><img src=\"{images}opt_smtp.jpg\" class=\"img-responsive thumbnail\"></a>
    </p>

    <p>&nbsp;</p>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">填写说明</div>
        <div class=\"panel-body\">
            <h4 class=\"text-success\">SMTP 服务器</h4>
            <p>SMTP 服务器地址，详情请咨询您的邮箱服务商。</p>

            <h4 class=\"text-success\">服务器端口</h4>
            <p>服务器端口，详情请咨询您的邮箱服务商，默认为 25。</p>

            <h4 class=\"text-success\">服务器是否需要验证</h4>
            <p>服务器是否需要验证，详情请咨询您的邮箱服务商，大部分 SMTP 服务器都需要验证。</p>

            <h4 class=\"text-success\">用户名</h4>
            <p>用于验证的用户名。</p>

            <h4 class=\"text-success\">密码</h4>
            <p>用于验证的密码。</p>

            <h4 class=\"text-success\">发送邮箱</h4>
            <p>收件人收到邮件时显示的发送邮箱。</p>

            <h4 class=\"text-success\">回复邮箱</h4>
            <p>收件人需要回复时的邮箱。</p>
        </div>
    </div>";
