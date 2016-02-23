# MoeCDN-Universal-PHP
MoeNet Public libraries CDN PHP universal version   
本项目由 Kenvix 维护 - http://zhizhe8.net       
注意：如果MoeCDN有提供对于您的程序的定制版本，强烈建议您优先使用定制的MoeCDN
## 我们提供各项加速服务

### 免费 Gravatar 头像加速
将 gravatar.com 的原有域名，直接指向 gravatar.moefont.com 即可     
如果需要 HTTPS 支持，请使用 gravatar-ssl.moefont.com ，* 非 HTTPS 站点请勿使用 *       

### 免费 GoogleApis 加速
使用谷歌公共库可以加快网页加载速度，但是，众所周知的原因，在中国您不能享受这一点      
但是现在，您只需替换googleapis.com为cdn.moefont.com即可享受这一切
         
例如：      
fonts.googleapis.com -> cdn.moefont.com/fonts       
ajax.googleapis.com -> cdn.moefont.com/ajax

### 使用方法
在您的PHP程序中加入以下代码即可使用 MoeCDN      
```php
include 'moecdn.php';
```
注意：如果你发现周围不是PHP代码而是别的东西，则需要写成
```php
<?php include 'moecdn.php'; ?>
```
### 代码库地址
Git@OSC: http://git.oschina.net/kenvix/MoeCDN-EMLOG       
Github: https://github.com/MoeNetwork/MoeCDN-Universal-PHP