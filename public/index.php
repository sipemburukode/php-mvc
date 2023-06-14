<?php
require '../config/varible.php';
// Mengambil URL yang diminta
$url = isset($_GET['url']) ? $_GET['url'] : 'home';

// Memisahkan URL menjadi segmen
$segments = explode('/', $url);

// Mendapatkan nama pengontrol (controller) dan metode yang diminta
$controllerName = ucfirst($segments[0]) . 'Controller';
$methodName = isset($segments[1]) ? $segments[1] : 'index';

// Memuat file pengontrol (controller)
try {
    // Membuat instance objek pengontrol (controller)
    require '../app/controllers/' . $controllerName . '.php';
    $controller = new $controllerName;
    // Memanggil metode yang diminta
    $controller->$methodName();
} catch (\Throwable $e) {
    http_response_code(404);
    print($e);
    require '../app/views/404.php';
}
