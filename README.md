### linux指令
* ls 當前目錄內容
* pwd 當前目錄位置
* cd  進入子目錄

* artisan laravel 指令包
* php artisan key:generate 建立新的key
* php artisan route:list 查詢route
* php artisan make:controller ProvisionServer --invokable
    * php artisan make:controller Testcontrol 建立新的function

### larave安裝
* VERSION 8.x
* Download Composer
* Windows Installer

### 查詢Composer版本
* Git Bash Here 下
* 執行 composer

### 透過composer執行安裝
* Git Bash Here 貼上 :composer create-project laravel/laravel:^8.0 example-app
* 可自行改名:composer create-project laravel/laravel:^8.0 laravel

### github下載專案需令執行載入套件
* 指令:composer install
* 沒有 APP key
* 檢查有沒有.env檔案
* 若沒有則複製一份.env.example並改名.env
* 完成後執行:php artisan key:generate
* run ok

### 開始使用laravel
* index位置:welcome.blade.php
* view('foldername'.'filename')
* route('routename'.routelocation)

* route 頁面 web.php
```php 
Route::get('/', function () {
    return view('welcome');
});
```

* 接收get傳值
```php
use Illuminate\Http\Request;
 
Route::get('/users', function (Request $request) {
    // ...
});

```
* 帶入網址參數
```php
Route::get('/student/{name}/{num}',function($name,$num){
    return "<h1>"."Name=".$name."<br>"."Num=".$num."</h1>";
});
```

* blade 語法 呼叫變數
    {{$variable}}

    @php
    echo $variable;
    @endphp

### Route Prefixes (前綴網址)
```php
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
```

### Single Action Controllers (自訂單一 Controllers)
* php artisan make:controller ProvisionServer --invokable       

### Resource Controllers (內建crud Controllers)
* php artisan make:controller PhotoController --resource
* php artisan make:controller PhotoController -r

#### use Resource Controllers
```php
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);
```

### Actions Handled By Resource Controller (網址指令)

* 查詢指令
```
php artisan route:list
```
* `(GET)url:/photos`                `Route Name:photos.index`
* `(GET)url:/photos/create`         `Route Name:photos.create`
* `(POST)url:/photos`               `Route Name:photos.store`
* `(GET)url:/photos/{photo}`        `Route Name:photos.show`
* `(GET)url:/photos/{photo}/edit`   `Route Name:photos.edit`
* `(PUT/PATCH)url:/photos/{photo}`  `Route Name:photos.update`
* `(DELETE)url:/photos/{photo}`     `Route Name:photos.destroy`

### route()
```php
$url = route('route.name');
$url = route('route.name', ['id' => 1]);
$url = route('route.name', ['id' => 1], false);
```
### 清除快取
`php artisan cache:clear`
`php artisan route:clear`







