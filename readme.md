

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
