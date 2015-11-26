
Potato 后台管理
是一项开源项目，是一个简单的cms后台管理。是用codeIgniter框架amazeui后台模板，模板引擎使用的是Smarty，富文本编辑器使用kindeditor，时间选择器使用的是amazeui的datetimepicker插件。

目录说明：
Potato  |--application  |                       此目录为项目目录
                        |--cache                ci缓存目录
                        |--config               ci配置目录，里面包含所有的配置
                        |--controllers          项目控制器目录，里面包含后台管理目录admin
                        |--core                 ci扩展核心类目录
                        |--helpers              辅助类库
                        |--hooks                钩子目录
                        |--language             语言包目录
                        |--libraries            扩展类目录
                        |--logs                 日志目录
                        |--models               模型类库目录
                        |--third_party          第三方类库
                        |--view                 视图目录，admin为后台模板目录，home为前台，errors为错误目录
                        
        |--public       |                       此目录为公共目录，开发读写权限
                        |--captcha              验证码图片目录
                        |--upload               文件上传目录，里面包含图片文件
        |--runtime      |                       项目缓存目录
                        |--session              用户session目录
                        |--templates_c            smarty缓存目录
        |--style        |                       项目样式公共目录
                        |--admin                后台样式目录
                        |--home                 前台样式目录
                        |--picker               插件目录
        |--system  此目录为ci框架系统目录
        |--ci_potato.sql                        项目数据数据
        




安装说明：
        1、首先在自己的数据库中创建自己的数据库。
        2、把ci_potato.sql导入到数据库
        3、配置application/database.php 修改数据库配置文件
        4、后台url是，http://www.domain.com/index.php/admin/login/login      默认账户是：admin密码123456