<?php

class Magic{

	private $string = 'this is a string';

	private $age = '20';
	/* 
	 * 功能 构造函数，实例化类的时候执行
	 */
	public function __construct(){
		echo "this is __construct function";
	}

	/* 
	 * 功能 转化字符串函数，当实例化的类被当做字符时执行
	 */
	public function __toString(){
		return 'I am a class,but now I return u a string';
	}

	/* 
	 * 功能 先知函数，当实例化的类被当做方法使用时候执行
	 */
	public function __invoke(){
		echo 'I am a class . if u use me as a function,I will call __invoke!';
	}

	/* 
	 * 功能 克隆函数，当实例化的类被克隆时执行
	 */
	public function __clone(){
		echo 'who want clone me?';
		$this->string = 'I wont give u my string';
	}

	/* 
	 * 功能 获取对象属性方法，当对象不存在指定属性的时候调用
	 * @param $string 对象的属性方法
	 */
	public function __get($string){
		return 'this class dont have the attribute that name is '.$string;
	}

	/* 
	 * 功能 设置对象属性方法，当对象不存在指定属性的时候调用
	 * @param protertyName 对象的属性名称
	 * @param value 对象的属性值
	 */
	public function __set($protertyName,$value){
		$this->$protertyName = $value;
	}

	/* 
	 * 功能 使用isset函数对类中不存在的属性进行操作时候调用方法
	 * @param protertyName 对象的属性名称
	 */
	public function __isset($protertyName){
		echo 'the '.$protertyName.' is not exist in this class';
	}

	/* 
	 * 功能 删除类之中不存在的属性调用的方法
	 * @param protertyName 删除对象的属性名称
	 */
	public function __unset($protertyName){
		echo 'u cant unset not exist attribute that named '.$protertyName;
	}

	/* 
	 * 功能 调用类中不存在的函数时调用的方法
	 * @param functionName 方法名称
	 * @param arrayParams 方法里面的参数
	 */
	public function __call($functionName,$arrayParams){
		echo 'I dont have the function named that '.$functionName;
	}

	/* 
	 * 功能 调用类中不存在的静态函数时调用的方法
	 * @param functionName 方法名称
	 * @param arrayParams 方法里面的参数
	 */
	public static function __callStatic($functionName,$arrayParams){
		echo 'I dont have the static funcntion that named '.$functionName;
	}

	/* 
	 * 功能 执行串行化调用的方法
	 * return array 保留的数据类型
	 */
	public function __sleep(){
		return ['string'];
	}

	/* 
	 * 功能 执行反串行化调用的方法
	 */
	public function __wakeup(){
		$this->string='my string now is unserialized string';
	}

	/* 
	 * 功能 执行var_dump函数打印实例化类时执行的方法
	 */
	public function __debugInfo(){
		return [
			'string'=>$this->string,
			'age'=>'sorry,I dont want tell u my real age',
		];
	}

	/* 
	 * 功能 执行var_export函数打印实例化类时执行的方法
	 */
	public static function __set_state($array){
		$magic = new Magic;
		$magic->string=$array[0];
		return $magic;
	}

	/* 
	 * 功能 析构函数，类被摧毁时执行
	 */
	public function __destruct(){
		echo 'Now I am gone!';
	}

}

$magic = new Magic;//调用__construct方法

//echo $magic;调用__toString方法

//$magic();调用__invoke方法

//$magic2 = clone $magic;调用__clone方法

//echo $magic->tangxiaoguang;调用__get方法

//$magic->tangxiaoguang='是帅哥';调用__set方法

//isset($magic->tangxiaoguang);调用__isset方法

//unset($magic->tangxiaoguang);调用__unset方法

//$magic->tangxiaoguang();调用__call方法

//$magic::tangxiaoguang();调用__callStatic方法

//serialize($magic);调用__sleep函数执行串行化

//unserialize($magic);调用__wakeup函数执行反串行化

// var_dump($magic);调用__debugInfo方法

//var_export($magic);调用__set_state方法

//$magic = null;调用__destruct方法

?>