

### Laravel5 rand 扩展使用教程

### 用法

```
composer require yuxiaoyang/rander
```

或者在你的 `composer.json` 的 require 部分中添加:
```json
 "yuxiaoyang/rander": "~1.0"
```

下载完毕之后,直接配置 `config/app.php` 的 `providers`:

```php
//Illuminate\Hashing\HashServiceProvider::class,

Yuxiaoyang\Rander\RanderProvider::class,
```
控制器中使用 `IndexController.php` :

```php

<?php


use \Yuxiaoyang\Rander\Rander;

class IndexController extends Controller
{
    public $rand;


    public function index(Request $request)
    {
        //$this->rand = new \Yuxiaoyang\Rander\Rander();
        $this->rand = new Rander();
        echo $this->rand->make(5);
        return view('home.index');
    }

}
