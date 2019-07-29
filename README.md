# kingcardconfig
王卡配置php服务端php开源源码。

使用方法

要定时监控url/cron.php，以启用检查guid和token是否有效，如果无效则更新guid和token，直到没有可用的guid和token为止。

王卡配置助手自定义接口url/get_config.php。

tinyproxy自定义 token api url/get_tinyproxy_config.php。

本项目开源地址

https://github.com/kingcardconfig/kingcardconfig/

网站列表

官网

http://520host.gq/kingcardconfig/
http://2099.gq/kingcardconfig/(http://520host.gq/kingcardconfig/ 别名)

使用本程序的网站

详见sitelist.md。

更新日志

版本:1.001

2019/05/31 21:40

日常维护更新！

2019/06/02 09:06

添加timeout设置参数$configtimeout,单位为秒。
更新config.php设置参数。
添加sitelist.md(使用本程序的已知网站列表)。

2019/06/02 14:29

修复当网页内容为gzip压缩时，验证失败的问题。
更新README.md。

2019/06/05 14:05

修复时间时区为默认时区的问题。
更新config.php默认设置参数。
更新index.php(修改版本号)。
更新README.md。

2019/06/05 19:53

添加任务日志开关。
添加4个获取配置点。
更新config.php。
更新sitelist.md。
更新README.md。
