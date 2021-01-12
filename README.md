# Laravel-Lang-Ka
Georgian language for Laravel

This package allows you to replace locale `en` with `ka` in `config/app.php` file. So your project `auth`, `pagination`, `password` and `validation` messages will be translated into Georgian language.


[![License](https://poser.pugx.org/gegetchkori/laravel_lang_ka/license)](https://packagist.org/packages/gegetchkori/laravel_lang_ka)
[![Total Downloads](https://poser.pugx.org/gegetchkori/laravel_lang_ka/downloads)](https://packagist.org/packages/gegetchkori/laravel_lang_ka)
[![Monthly Downloads](https://poser.pugx.org/gegetchkori/laravel_lang_ka/d/monthly)](https://packagist.org/packages/gegetchkori/laravel_lang_ka)
[![Daily Downloads](https://poser.pugx.org/gegetchkori/laravel_lang_ka/d/daily)](https://packagist.org/packages/gegetchkori/laravel_lang_ka)


# Installation

Run this command on terminal in your project root:

```
composer require gegetchkori/laravel_lang_ka
```

If laravel version in your project <= 5.4, open `config/app.php` in yor project and add following code to `providers` array:

```
Gegetchkori\Laravel_lang_ka\LanguageServiceProvider::class,
```

Then run this command on terminal in your project root:

```
php artisan vendor:publish --provider="Gegetchkori\Laravel_lang_ka\LanguageServiceProvider"
```

