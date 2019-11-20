<?php
/**
 * 数字格式化测试类
 * @author yushuie
 */

require '../vendor/autoload.php';

use \myTeset;

$number = '102400010';
echo myTeset\myTeset::byte_format($number);

//输出：97.7 MB