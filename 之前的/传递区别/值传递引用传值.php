<?php

// 值传递
function add($i){
	$i++;
	$a=$i;
	return $a;
}
$i=100;
echo $i;
echo "<br>";
echo add($i);
echo "<br>";
echo $i;
echo "<br>";
// 100
// 101
// 100

function otheradd(&$i){
	$i++;
	$a=$i;
	return $a;
}
$i=100;
echo $i;
echo "<br>";
echo otheradd($i);
echo "<br>";
echo $i;
// 100
// 101
// 101

// 值传递中原来参数的值在调用其他函数之后还是原来的值，
// 引用传递则是改变了原来的值。

// 值传递是数值的复制
// 引用传递是地址的复制 指的是地址上的数据变化