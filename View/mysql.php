<?php include('header.php');?>

<div id="content">
<div id="post">
<h1>AMP - MySQL </h1>

<p>Notice:</p>
<p>应用MySQL，需先配置/Amysql/config.php文件当中的MySQL链接信息。</p>

<p>控制器调用Model示例代码：<font style="color:green">// $this -> datas = $this -> _model('indexs') -> databases();</font></p>
<p style="color:green">//代码解释: 载入indexs模型文件的indexs模型对象, 执行模型的databases方法 取得数据直接赋值模板变量datas</p>
<pre>
<?php
	print_r($datas);
?>
</pre>

</div>
</div>



<?php include('footer.php');?>