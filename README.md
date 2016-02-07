# Laravel VK API class

## Install

Via Composer

``` bash
$ composer require bafoed/vkapi
$ php artisan vendor:publish
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

``` php
bafoed\VKAPI\VKAPIServiceProvider::class,
```

Also you can add alias to the `aliases` array in `config/app.php`

``` php
'VKAPI'     => bafoed\VKAPI\Facades\VKAPI::class,
```

Do not forget to change `access_token` in `config/VKAPI.php`

## Usage

Simple example (access_token is loaded from `config/VKAPI.php`)
``` php
    try {
        $result = VKAPI::call('users.get', ['user_ids' => '1,2,3']);
        foreach ($result as $user) {
            echo $user['first_name'] . ' ' . $user['last_name'] . PHP_EOL;
        }
    } catch(\bafoed\VKAPI\VKAPIException $e) {
        echo 'Something wrong: ' . $e->message;
    }
```

You can change access_token at runtime using `setAccessToken` method
``` php
VKAPI::setAccessToken('>>> INSERT TOKEN HERE <<<')
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [bafoed][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/bafoed
