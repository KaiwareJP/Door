<?php
$filename = "command.txt";

// POSTで書き込み
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cmd = $_POST['command'] ?? '';
    file_put_contents($filename, $cmd);
    exit;
}

// GETで読み込み
if (file_exists($filename)) {
    echo file_get_contents($filename);
} else {
    echo "NONE";
}
