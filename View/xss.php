<?php include('header.php');?>

<div id="content">
<div id="post">
<h1>AMP - XSS </h1>

<p>Amysql/Config.php 配置:</p>

<p>安全过滤:
<?php echo $Config['Filter'] ? '开启' : '已关闭(强烈建议开启)';?></p>
<p>XSS防范:
<?php echo $Config['XSS'] ? '开启' : '已关闭';?></p>


<p>XSS攻击防范测试</p>
<p>下面输出打印POST数据或是MySQL、逻辑等数据XXS测试。</p>
<pre>
<p>$_GET *********** <a href="index.php?c=index&a=xss&name=amp'mvc">过滤测试</a>
<?php print_r($_GET); ?>
</p>
<p>$_POST ***********
<?php print_r($_POST); ?>
</p>
$xss ***********
<?php print_r($xss); ?>
</pre>


</div>
</div>



<?php include('footer.php');?>