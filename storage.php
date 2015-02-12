<?php
if (isset($argv[1]) && $argv[1] >0) {
	echo size2mb($argv[1]) . PHP_EOL;
} else {
	echo 'error';
}
function size2mb($size,$digits=2){ //digits，要保留几位小数
	$unit= array('','K','M','G','T','P');//单位数组，是必须1024进制依次的哦。
	$base= 1024;//对数的基数
	$i   = floor(log($size,$base));//字节数对1024取对数，值向下取整。
	return round($size/pow($base,$i),$digits).' '.$unit[$i] . 'B';
}
