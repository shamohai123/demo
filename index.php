<?php

function gen()
{
    while(true){
        yield "gen\n";
    }
}


$gen = gen();
var_dump($gen);
var_dump($gen instanceof Iterator);
echo "hello, world!";

exit;


ini_set('display_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect("localhost", "root", "");
if (!$conn) { 
	die("连接错误: " . mysqli_connect_error()); 
} 
mysqli_select_db($conn, "ram");
mysqli_query($conn, "set names 'utf8'");

while (true) {
	$sql = 'select * from table1 where id= ' . $i; // 数据表中id是连续的
	$res = mysqli_query($conn, $sql);
	
	if (!$res) {
		break;
	}
	$sql = 'insert into table2 set content=' . json_encode($res);
	mysqli_query($conn, $sql);
	$i++;
	echo "$i: ".memory_get_usage()."B\n";
}







exit;
echo "初始: ".memory_get_usage()."B\n";


$arr1 = [];
for ($i = 1; $i <= 1000; $i++) {
	$arr1[] = $i;
}
echo "初始: ".memory_get_usage()."B\n";
$arr1 = [];
for ($j = 1000; $j >= 1; $j--) {
	$arr1[] = $j;
}
echo "初始: ".memory_get_usage()."B\n";
















exit;
declare(ticks=2);

// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

$a = 1;

if ($a > 0) {
    $a += 2;
    print($a . "\n");
}







exit;
class A {
	public $test = 2;
	
}


$a = new A();

$b = $a;

$a->test = 3;


echo $b->test;










exit;
    setcookie("tttttttttttttttttttt", "bar1111111111111111111111111111111", time() + 3600, "/", "baidu.com");
	echo 111;
	
	exit;
//$str = trim('13983980703?');

//echo json_encode($str, JSON_UNESCAPED_UNICODE);

echo strtotime('2019-05-06');


exit;
echo 111;



echo sha1('asdja9q45439^&*(a;sdjfk*&^%QFV!@#$RTHHUI' . '12345678');



exit;
function getAgeByBirthday($birthday)
    {
        $birthdayTm = strtotime($birthday);
        if ($birthdayTm === false) {
            return false;
        }
        list($y1, $m1, $d1) = explode("-", date("Y-m-d", $birthdayTm));
        $now = strtotime("now");
        list($y2, $m2, $d2) = explode("-", date("Y-m-d", $now));
        $age = $y2 - $y1;
        if ((int)($m2 . $d2) < (int)($m1 . $d1))
            $age -= 1;
        return $age;
    }

echo date('Y-m-d H:i:s', 1513612800);

exit;

echo strtotime('2017/8/25') . "<br>";
echo strtotime('2017/08/25') . "<br>";








exit;
date_default_timezone_set("Asia/Shanghai");

echo sprintf('%.2f', 1 / 3) *100 .'%';


exit;

// 用户定义的错误处理函数
function myErrorHandler($errno, $errstr, $errfile, $errline) {
	echo "<b>Custom error:</b> [$errno] $errstr<br>";
	echo " Error on line $errline in $errfile<br>";
}

// 设置用户定义的错误处理函数
set_error_handler("myErrorHandler");

require 'test';

exit;
$date = '2018-03-23 18:00:00';

echo substr($date,0,-3);

$minute =  strtotime('2018-03-23 19:00:00') - $start;
$second[floor($minute/9/60)] = date('Y-m-d H:i:s', $start + floor($minute/9));
$second[floor($minute/3/60)] = $start + floor($minute/3);
$second[floor($minute*2/3/60)] = $start + floor($minute*2/3);
$second[floor($minute*8/9/60)] = $start + floor($minute*8/9);


var_dump($second);
			
			
			
			
			
exit;			
/**
 * 根据开始时间和结束时间计算中间十一分钟开始和结束时间--精确到秒 
 * 参数精确到分钟，忽略秒
 * @param int $start  开始时间
 * @param int $end   结束时间
 * return mixed
 */
function getMiddleTime($start, $end) 
{
	$start = strtotime(date('Y-m-d H:i:00', $start));
	$end = strtotime(date('Y-m-d H:i:00', $end));
	if($end - $start <= 600) {
		return false;
	}
	return [
		'start' => date('Y-m-d H:i:s', $start + ($end - $start)/2 - 300),
		'end' => date('Y-m-d H:i:s', $start + ($end - $start)/2 + 360 - 1)
	];
}

exit;

function exception_handler($exception) {
  echo "出错了: " , $exception->getMessage(), "\n";
}

function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";
}

//set_error_handler('customError');

//throw new Exception('Uncaught Exception');
//echo "Not Executed\n";

//func();

//echo $notice;





































exit;

echo date('Y-m-d H:i:s', 1524844800);
exit;
try
 {
	 //echo 111;
 checkNum(2);
 //If the exception is thrown, this text will not be shown
 echo 'If you see this, the number is 1 or below';
 }

//捕获异常
catch(Exception $e)
 {
 echo 'Message: ' .$e->getMessage() . '222222222222222';
 }
 
 function checkNum($number)
 {
 if($number>1)
  {
  throw new Exception("Value must be 1 or below");
  }
 return true;
 }
exit;
function genTree5($items) {
    foreach ($items as $item)
        $items[$item['pid']]['son'][$item['id']] = &$items[$item['id']];
    return isset($items[0]['son']) ? $items[0]['son'] : array();
}
  
/**
 * 将数据格式化成树形结构
 * @author Xuefen.Tong
 * @param array $items
 * @return array
 */
function genTree9($items) {
    $tree = array(); //格式化好的树
    foreach ($items as $item)
        if (isset($items[$item['pid']])) {
            $items[$item['pid']]['son'][] = &$items[$item['id']];
        } else {
            $tree[] = &$items[$item['id']];
		}
    return $tree;
}
  
$items = array(
    1 => array('id' => 1, 'pid' => 0, 'name' => '江西省'),
    2 => array('id' => 2, 'pid' => 0, 'name' => '黑龙江省'),
    3 => array('id' => 3, 'pid' => 1, 'name' => '南昌市'),
    4 => array('id' => 4, 'pid' => 2, 'name' => '哈尔滨市'),
    5 => array('id' => 5, 'pid' => 2, 'name' => '鸡西市'),
    6 => array('id' => 6, 'pid' => 4, 'name' => '香坊区'),
    7 => array('id' => 7, 'pid' => 4, 'name' => '南岗区'),
    8 => array('id' => 8, 'pid' => 6, 'name' => '和兴路'),
    9 => array('id' => 9, 'pid' => 7, 'name' => '西大直街'),
    10 => array('id' => 10, 'pid' => 8, 'name' => '东北林业大学'),
    11 => array('id' => 11, 'pid' => 9, 'name' => '哈尔滨工业大学'),
    12 => array('id' => 12, 'pid' => 8, 'name' => '哈尔滨师范大学'),
    13 => array('id' => 13, 'pid' => 1, 'name' => '赣州市'),
    14 => array('id' => 14, 'pid' => 13, 'name' => '赣县'),
    15 => array('id' => 15, 'pid' => 13, 'name' => '于都县'),
    16 => array('id' => 16, 'pid' => 14, 'name' => '茅店镇'),
    17 => array('id' => 17, 'pid' => 14, 'name' => '大田乡'),
    18 => array('id' => 18, 'pid' => 16, 'name' => '义源村'),
    19 => array('id' => 19, 'pid' => 16, 'name' => '上坝村'),
);
echo "<pre>";
print_r(genTree5($items));
print_r(genTree9($items));

exit;

$video_list = [
	[
		'uri' => '11111111111111111111111',
		'start_time' => '1521094829',
		'stop_time' => '1521095372'
	],
	[
		'uri' => '222222222222222222222222222',
		'start_time' => '1521095851',
		'stop_time' => '1521095860'
	],
	[
		'uri' => '3333333333333333333333',
		'start_time' => '1521096187',
		'stop_time' => '1521096580'
	],
	[
		'uri' => '444444444444444444444444444444',
		'start_time' => '1521099290',
		'stop_time' => '1521099772'
	],
	[
		'uri' => '6666666666666666666666666666666666666',
		'start_time' => '1521101603',
		'stop_time' => '1521102099'
	],
	[
		'uri' => '6666666666666666666666666666666666666',
		'start_time' => '1521101603',
		'stop_time' => '1521102099'
	]
];

var_dump(test($video_list));
function test($arr)
{
	if(is_array($arr)) {
		foreach($arr as &$v) {
			$v = serialize($v);
		}
		$arr = array_unique($arr);
		foreach($arr as &$v) {
			$v = unserialize($v);
		}
		return $arr;
	}
	return [];
}


exit;
date_default_timezone_set("Asia/Shanghai");  

$video_list = [
	[
		'uri' => '11111111111111111111111',
		'start_time' => '1521094829',
		'stop_time' => '1521095372'
	],
	[
		'uri' => '222222222222222222222222222',
		'start_time' => '1521095851',
		'stop_time' => '1521095860'
	],
	[
		'uri' => '3333333333333333333333',
		'start_time' => '1521096187',
		'stop_time' => '1521096580'
	],
	[
		'uri' => '444444444444444444444444444444',
		'start_time' => '1521099290',
		'stop_time' => '1521099772'
	],
	[
		'uri' => '5555555555555555555555555555555555',
		'start_time' => '1521100137',
		'stop_time' => '1521100520'
	],
	[
		'uri' => '6666666666666666666666666666666666666',
		'start_time' => '1521101603',
		'stop_time' => '1521102099'
	]
];
$start = strtotime('2018-03-15 14:20:00');
foreach($video_list as $v) {
	echo date('Y-m-d H:i:s', $v['start_time']) . '~~' . date('Y-m-d H:i:s', $v['start_time']) . "\r\n";
}

//开课 10，30，60，80截图
$second = [10=>$start+10*60, 30=>$start+30*60, 60=>$start+60*60, 80=>$start+80*60];

$time_point = [];
foreach($second as $k=>$sec) {
	$status = 0;
	$time = [];
	foreach($video_list as $video_list_item) {
		if($sec >= $video_list_item['start_time'] && $sec <= $video_list_item['stop_time']) {
			$time['status'] = $status = 1;
			$time['time'] = ($sec - $video_list_item['start_time']) * 1000;
			$time['minute'] = $k;
			$time['uri'] = $video_list_item['uri'];
			break;
		}
	}
	if($status == 0) {
		$value = [];
		foreach($video_list as $video_list_item) {
			$value[] = $video_list_item['start_time'] - $sec;
			$value[] = $video_list_item['stop_time'] - $sec;
		}
var_dump($value);
		$value2 = $value;
		$count = count($value2);
		$key = 0;
		for($i = 1; $i < $count; $i++) {
			if(abs($value[0]) > abs($value[$i])) {
				$value[0] = $value[$i];
				$key = $i;
			}
		}
		$index = floor($key/2);
echo $key  . "\r\n";
		$remainder = $key%2;
		if($remainder == 0) {
			$time_index = 'start_time';
			$time['time'] = 1000;
		} else {
			$time_index = 'stop_time';
			$time['time'] = ($video_list[$index]['stop_time'] - $video_list[$index]['start_time']-10) * 1000;
		}
		$time['status'] = 2;
		$time['minute'] = floor(($video_list[$index][$time_index] - $start)/60);
		$time['uri'] = $video_list[$index]['uri'];
	}
	$time_point[] = $time;
	
	//exit;
}

var_dump($time_point);
exit;









echo date('Y-m-d H:i:s', 1520853517); exit;


$arr1 = [1, 10, 95, 100,1000];
$arr2 = [['start'=>2,'end'=>8],['start'=>20,'end'=>30],['start'=>150,'end'=>800],['start'=>900,'end'=>1000],['start'=>2000,'end'=>3000]];



foreach($arr1 as $v1) {
	$status = false;
	foreach($arr2 as $v2) {
		if($v1 <= $v2['start']) {
			break;
		}
		if($v1 >= $v2['start'] && $v1 <= $v2['end']) {
			$status = true;
			echo $v1 . "<br/>";
			break;
		}
	}
	if(!$status) {
		$value = [];
		foreach($arr2 as $v2) {
			$value[] = $v2['start'] - $v1;
			$value[] = $v2['end'] - $v1;
		}
		$value2 = $value;
		$count = count($value2);
		$key = 0;
		for($i = 1; $i < $count; $i++) {
			if(abs($value[0]) > abs($value[$i])) {
				$value[0] = $value[$i];
				$key = $i;
			} else {
				break;
			}
		}
		echo $v1 + $value[$key] . "<br/>";
	}
} 













exit;
$people = array("Bill", "Steve", "Mark", "David");

echo current($people) . "<br>";
echo next($people) . "<br>";

echo reset($people);


exit;

$path = "vars.txt";
$file = fopen($path, "r"); 
$mainVoicePlay = 0;

$str = '';
while(!feof($file))
{
	$line = trim(fgets($file));
	if ($line != '') {
		$year = substr($line, 0, 4);
		if ($year == 2010 || $year == 2011) {
			$u = 'U8';
		} elseif ($year == 2008 || $year == 2009) {
			$u = 'U10';
		} elseif ($year == 2006 || $year == 2007) {
			$u = 'U12';
		} elseif ($year == 2004 || $year == 2005) {
			$u = 'U14';
		} else {
			$u = 'XXXXXXXXX';
		}
		echo $u . "\r\n";
	} else {
		echo "\r\n";
	}
}




exit;
$mergeList = [['MergeURL' => 'http://dongyin.oss-cn-beijing.aliyuncs.com/record/test/100/2018-03-01-16%3A02%3A53_2018-03-01-16%3A02%3A59.mp4'],
                      ['MergeURL' => 'http://dongyin.oss-cn-beijing.aliyuncs.com/record/test/100/2018-03-01-16%3A07%3A41_2018-03-01-16%3A07%3A43.mp4']];
echo json_encode($mergeList);
exit;

date_default_timezone_set("Asia/Shanghai");  

$path = "vars.txt";
$file = fopen($path, "r"); 
$mainVoicePlay = 0;

$str = '';
while(!feof($file))
{
	$line = trim(fgets($file));
	if ($line != '') {
		$line = explode('|', trim($line));
		foreach ($line as $k=>$v) {
			$line[$k] = "'" . $v . "'";
		}
		$code = "'S-" . rand(10000, 99999) . "'";
		$sql = "INSERT INTO `doing_match_user` (`status`, `create_time`,`name`,`student_id`,`phone`,`class_type`,`match_type`,`match_subject`,`city_id`,`venue_id`,`venue_code`,`match_id`,`student_code`) VALUES (1,1516680000,$line[1],$line[0],$line[3],$line[2],1,1,1,163,'VN000485',2,$code)";

		echo $sql . ";\r\n";
	}

}//111