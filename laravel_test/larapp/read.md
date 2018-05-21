### 安装composer
composer create-project laravel/laravel <yourprojectname>
cd your project name
php artisan serve
------------
### 目录结构

![目录结构](https://upload-images.jianshu.io/upload_images/295913-c6d4d885bd314d81.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

![重要文件](https://upload-images.jianshu.io/upload_images/295913-a5d57c1e0555d984.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)
-------------
### Artisan命令
>独家定制的命令行工具快速生成Laravel常用文件和相关相关配置

![常用artisan命令.png](https://upload-images.jianshu.io/upload_images/295913-b91558cb920cf2ed.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

---------------------------------------------------

### 路由
#### 定义路由
`app/Http/routes.php`
* 第一种方式 返回字符串
 ```php
 Route::get('/hello', function () {
     return '<h2>Hello world!!!</h2>';
 }); 
 ```
* 第二种方式 
  1. 在resource文件夹下创建welcome.blade.php 就可以渲染
      ```php
      Route::get('/hello', function () {
        return view('welcome')
      });
      ```
  2. 在web.php 下定义运行指定Controller的方法 (`下面的例子就是运行PageController下的定义的about方法`)
      ```php
      Route::get('/about','PageController@about');
      ```
  3. 在web.php 下定义所有方法
      ```php
      Route::resource('posts','PostController');
      // 这是PostController下定义的所有方法
      class PageController extends Controller
        {
            public function index(){
                $title = 'Welcome to Index';
                // return view('pages.index',compact('title'));
                return view('pages.index')->with('title',$title);
            }

            public function about(){
                $title = 'Welcome to About';
                return view('pages.about')->with('title',$title);
            }

            public function service(){
                $data = array(
                    'title' =>'Services',
                    'name' =>['Aili','Taylor','Jone']
                );
                return view('pages.services')->with($data);
            }
        }

      ```
#### 路由方法
`POST GET DELETE PUT` 除此之外还有match 
Route::match(['get', 'post'],'/foo', function () {
    // 该路由将匹配 get 和 post 方法的 'foo' url
});
#### 路由参数

Route::get('name/{name}/age/{age}', function ($name, $age) {
    return 'I`m '.$name.' ,and I`m '.$age;
});

#### 路由 正则限制路由、命名路由、路由群组


-------------------------------------------------

### 控制器

`php artisan make:controller UserController`
打开就会看到默认创建的6个方法`index() create() store() show() edit update destroy。`，也就是CURD(增删改查)
Route::get('/user/name', 'UserController@name');
在UserController下创建name方法

#### 控制器依赖注入

use App\Http\Requests;
use App\Http\Controllers\Controller;

-------------------------------------------------

### 中间件

>对请求加限制，只允许某些请求能够到达控制器 中间件就起作用了。

`例如 Auth验证用户的身份 如果用户未通过身份验证 中间件将会把用户导向登录页面，反之中间件将此请求通过且接着往下执行`

`内置了很多中间件，包括维护、身份验证、CSRF保护 中间件都会放在app/Http/Middleware`

#### 创建中间件
1.php artisan make:middleware Young

2.`app/Http/Midlleware/Young.php`增加过滤条件

```php
{
    // 如果传入的参数 age 大于25，重定向到'/'
    if ($request->age > 25) {
        return redirect('/');
    }
    return $next($request);
}
```

3.注册中间件

打开 `app/Http/Kernel.php`

在$routeMiddleware=[]中添加
'young' => \App\Http\Middleware\Young::class,
4. 添加中间件
`route.php中`
Route::get('young/{age}','UserController@young')->middleware('young')

然后在UserController添加young方法就ok

-------------------------------------------------

### 视图模板
`存放在resource/views目录下`

#### 模板继承
1. 在`resource/views`创建新目录layouts然后在`resource/views/layouts`下创建母视图文件app.blade.php

```html
<!DOCTYPE html>
<html>
<head>
    <title>ASD</title>
</head>
<body>
@yield('content')
</body>
</html>
```

2. 在`resource/views/pages`下创建子文件text.blade.php 继承asd母模板 而且可以添加子视图
```html
@extends('layouts.asd')
@section('content')
    <h1>ASD</h1>
    <p>This is ASD player!!!</p>
    <p>Author: Elyar</p>
    <!-- 可以更改为你自己的信息 -->
    
    @include('shared.author',[这里的数组里可以传入子视图需要的数据])
@endsection
```

3. 传入数据
```php
Route::get('greeting', function () {
    return view('welcome', ['name' => 'Samantha']);
});

//在welcome文件中使用传入数据
{{$name}}
```

4. 条件渲染

```php
@if (count($records) === 1)
    我有一条记录！
@elseif (count($records) > 1)
    我有多条记录！
@else
    我没有任何记录！
@endif
```
```php
//循环
@for ($i = 0; $i < 10; $i++)
    目前的值为 {{ $i }}
@endfor

@foreach ($users as $user)
    <p>此用户为 {{ $user->id }}</p>
@endforeach

@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>没有用户</p>
@endforelse

@while (true)
    <p>我永远都在跑循环。</p>
@endwhile
```

### 数据库&数据库迁移

`Mysql Postgres SQLite SQLServer`数据库

-------------------------------------------------

2.更改项目目录中的.env文件 连接数据库
php artisan magrate 建立资料表
3.增加登录注册 模块
php artisan make:auth
还是得学习php artisan 都有哪些功能 官网应该有
localhost:8000/register
localhost:8000/login
就能看到相应功能


4.很容易用laravel去床架restfulapi 
route 里有get post delete等方法
#### 增加路由跟controller 还有  view
1. rousource目录下的views
就是view层 
创建pages文件夹
创建三个文件 分别为index service about    后缀都是.blade.php
2.找到routes文件夹下的web.php
```
常规用法
Route::get('/hello', function () {
     return '<h2>Hello world!!!</h2>';
});
```
常规方法创建路由 hello
在这里我们得先创建个controller

3. 创建PageController.php
php artisan make:controller PageController
然后在app/Http/Controllers目录下就可以找到刚刚创建的PageController.php
```
<?php


创建了三个方法index about service 分别调用view()方法 找到pages下的index about service页面
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function service(){
        return view('pages.services');
    }
}
```

4.之后就可以修改路由
```
Route::get('/','PageController@index');
Route::get('/about','PageController@about');
Route::get('/service','PageController@service');
```
`之前的方法是官网给的最基本的方法`



---------------


连接数据库创建controller去控制数据
写好方法

-----------------

取数据，写Model














