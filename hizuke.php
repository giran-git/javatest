<?php
//現在の日付と時間
$d=date("Y-m-d H:i:s");
printf("現在、%s\n",$d);
 
//明日、昨日、一週間後の日付を計算
$today=date("Y年m月d日");
$tomorrow=date("Y年m月d日",strtotime("1 day"));
$yesterday=date("Y年m月d日",strtotime("-1 day"));
$afterweek=date("Y年m月d日",strtotime("1 week"));
printf( "今日は%sです。\n", $today);
printf( "明日は%sです。\n", $tomorrow);
printf( "昨日は%sです。\n", $yesterday);
printf( "一週間後は%sです。\n", $afterweek);
 
//指定日の一ヶ月後の日付を計算
$anyday="2020-02-21";
$anyday_aftermonth=date("Y-m-d",strtotime('+1 month',strtotime($anyday)));
printf( "%sの一ヶ月後は、%sです。\n",$anyday, $anyday_aftermonth);

