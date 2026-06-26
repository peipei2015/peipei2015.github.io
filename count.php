<?php
// 计数存储文件
$countFile = "count.txt";

// 文件不存在则创建，初始值 0
if (!file_exists($countFile)) {
    file_put_contents($countFile, "0");
}

// 读取当前次数
$total = (int)file_get_contents($countFile);
$total++;
// 写入新次数
file_put_contents($countFile, $total);

// 输出最新访问总数给网页
echo $total;
?>
