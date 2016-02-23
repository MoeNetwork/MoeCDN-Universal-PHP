<?php require 'moecdn.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="charset" content="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoeCDN演示</title>
</head>
<body>
<fieldset>
    <legend>用法</legend>
    <?php highlight_string('<?php include \'moecdn.php\'; ?>') ?>
</fieldset>
<br/>
<fieldset>
    <legend>Gravatar 演示</legend>
    链接中的 <b>3.gravatar.com</b> 将会被替换为 MoeCDN 的地址
    <br/><br/>
    http://3.gravatar.com/avatar/9f9f47246fb5e0cde72ff1c879e629c6?s=160&d=mm
    <br/><br/>
    <img src="http://3.gravatar.com/avatar/9f9f47246fb5e0cde72ff1c879e629c6?s=160&d=mm">
</fieldset>
<br/>
<fieldset>
    <legend>项目自述</legend>
    <pre><?php echo file_get_contents('README.md') ?></pre>
</fieldset>
<br/>
<fieldset>
    <legend>授权协议</legend>
    <pre><?php echo file_get_contents('LICENSE') ?></pre>
</fieldset>
</body>
</html>