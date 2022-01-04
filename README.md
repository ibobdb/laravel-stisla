## Laravel Stisla

---

LaravelStisla is an authentication starter,powered by _Laravel Fortify_.This packages can be used to start your project shorter,it include all feature that laravel recommended implementing yourself.

## Instalation

---

To get started, you will need to install LaravelStisla using composer.This will install Laravel Fortify as well so.

```
composer require ibobdb/laravel-stisla
```

Next,run the install command:

```
php artisan LaravelStisla:install
```

This command will publish LaravelStisla providers,views and assets directory.

Install _Stisla_ depencies. Go to stisla directory `Public/stisla`.

```php
yarn install
```

It will install all assets depedencies

## Configuration

---

Add this to your `FortifyServiceProvider.php` in the `boot()` method.

```php
Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::registerView(function () {
    return view('auth.register');
});

Fortify::requestPasswordResetLinkView(function () {
    return view('auth.forgot-password');
});

Fortify::resetPasswordView(function ($request) {
    return view('auth.reset-password', ['request' => $request]);
});

// Fortify::verifyEmailView(function () {
//     return view('auth.verify-email');
// });

// Fortify::confirmPasswordView(function () {
//     return view('auth.confirm-password');
// });

// Fortify::twoFactorChallengeView(function () {
//     return view('auth.two-factor-challenge');
// });
```

In the file `RouteServiceProvider.php`

```php
public const HOME = '/home'     //change to
public const HOME = '/dashboard'

```

Add Routes `routes/web.php`

```php
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });
});
```
This allows you to attach the verified middleware to any of your routes
## Features

---

By default, LaravelStisla is setup to handle the basic authentication functions (Login, Register, Password Reset) provided by _Laravel Fortify_.

## Email Verification

---

To get started, ensure the emailVerification feature is enabled in your fortify configuration file's features array. Next, you should ensure that your `App\Models\User` class implements the `Illuminate\Contracts\Auth\MustVerifyEmail` interface.

```php
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    ...

```

## Stisla

---

Check full documentation
[stisla](s)

## Follow

---

[Instagram]()

[Twitter]()

This allows you to attach the verified middleware to any of your routes

## License

[MIT license]()
