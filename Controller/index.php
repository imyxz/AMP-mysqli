<?php

class index extends AmysqlController
{
	// 默认首页
	function IndexAction()
	{
		$this -> title = 'AMP 1.5 - PHPMVC框架';		// 直接赋值模板
		$this -> _view('index');					// 载入index模板
	}

	// mysql数据调用页面
	function mysql()
	{
		$this -> datas = '调用Model示例代码未打开。';
		// [MySQL] 载入indexs模型文件的indexs模型对象, 执行模型的databases方法 取得数据直接赋值模板变量datas
		// $this -> datas = $this -> _model('indexs') -> databases();
		$this -> title = 'MySQL - AMP';	
		$this -> _view('mysql');					// 载入mysql模板
	}


	// 数据调试页面
	function debug()
	{
		global $Amysql;								// 系统运行所有关联的模块
		$this -> _echo($Amysql);					// 信息调试方法 网页源代码中查看

		$this -> title = 'Echo - AMP';	
		$this -> datas = array('PHPMVC' => 'AMP', 'Version' => '1.5', 'Update' => '2012-10-08', 'By' => 'http://amysql.com'); // Array赋值
		$this -> _view('debug');						// 载入echo模板
	}
	
	// 过滤、XSS测试 
	function xss()
	{
		$this -> title = 'Echo - XSS';
		$_POST['xss'] = '<script>alert("POST XSS")</script>';	// POST XSS
		$temp = '<script>alert("XSS&")</script>';				// MySQL等数据 XSS
		$this -> xss = $temp;
		$this -> _view('xss');									// 载入xss模板
	}

}