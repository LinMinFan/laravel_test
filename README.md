### linux指令
* ls 當前目錄內容
* pwd 當前目錄位置
* cd  進入子目錄

* artisan laravel 指令包
* php artisan key:generate 建立新的key

### larave安裝
* VERSION 8.x
* Download Composer
* Windows Installer

### 查詢Composer版本
* Git Bash Here 下
* 執行 composer

### 透過composer執行安裝
* Git Bash Here 貼上 :composer create-project laravel/laravel:^8.0 laravel

### github下載專案需令執行載入套件
* 指令:composer install
* 沒有 APP key
* 檢查有沒有.env檔案
* 若沒有則複製一份.env.example並改名.env
* 完成後執行:php artisan key:generate
* run ok

### 開始使用laravel
* index位置:welcome.blade.php

* route 頁面 web.php
```php 
Route::get('/', function () {
    return view('welcome');
});
```







