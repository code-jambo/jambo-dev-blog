# Jambo 👋 Dev Blog

Jambo 👋 Dev Blog is a minimalistic Single Page Application (SPA) blog CMS designed specifically for developers. Built using Laravel, Livewire 3, and Filament 3, it offers a streamlined and efficient way for developers to create and manage their blogs.

![ddfdf](https://github.com/code-jambo/jambo-dev-blog/blob/main/public/assets/images/Screenshot.png?raw=true)

## Features

-   Single Page Application (SPA): Enjoy a seamless and fast browsing experience with our SPA design.
-   Minimalistic Design: A clean and clutter-free interface that puts your content in the spotlight.
-   Built with Laravel: Leverage the power and flexibility of Laravel for robust - performance.
-   Livewire 3: Enhance interactivity with real-time features using Livewire 3.
-   Filament 3: Manage your content effortlessly with the user-friendly Filament 3 admin panel.
-   Open for Contributions: We welcome contributions from the developer community to make this project even better.

## installation

```[bash]
git clone https://github.com/code-jamo/jambo-dev-blog
```

```[bash]
cd jambo-dev-blog
```

```[bash]
comoser install
```

```[bash]
cp example.env .env
```

To shoot the web installer
visit :

```
app_url/install
```

![](https://camo.githubusercontent.com/fe5f27b8b0bb4fb711a085dd1858513e9226044f9375280efdd59eefd12717d8/68747470733a2f2f73332d75732d776573742d322e616d617a6f6e6177732e636f6d2f6769746875622d70726f6a6563742d696d616765732f6c61726176656c2d696e7374616c6c65722f696e7374616c6c2f312d77656c636f6d652e6a7067)

### Or Install Manually

configure db Connection Credentials

```[env]
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=credo_saas
    DB_USERNAME=root
    DB_PASSWORD=
```

Run Migrations

    php artisan migrate

Serve The Blog

    php artisan serve

### Admin Panel and Credentials

Panel

```
/admin
```

username & password

```
username: admin@gmail.com
password: Password
```

## Contributing

We welcome contributions from the developer community. To contribute to Jambo 👋 Dev Blog, follow these steps:

Fork the Repository: Click the "Fork" button on the top right of this repository.

Create a New Branch: Create a new branch for your contribution.

Make Changes: Make your changes or additions to the project.

Test Your Changes: Ensure your changes do not introduce any issues.

Submit a Pull Request: Submit a pull request to the main branch of the original repository.

## Credits

Jambo 👋 Dev Blog is maintained by code Jambo.
