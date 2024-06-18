# Food Ordering Website - Installation Guide

# 🌠 With XAMPP
## Step 1: Edit the Configuration File `config.php`
Open the `config.php` file and update the necessary information as follows:

```php
define('DB_HOST', 'localhost');
define('DB_USERNAME', '<UsernameDB or root>');
define('DB_PASSWORD', '<PasswordDB or leave blank>');
define('DB_DATABASE', '<DBName>');
define('SHOPPING_CART_SESSION', 'cart');
define('BASE_URL', 'http://localhost:<ApacheHostPort>/');
```

Replace the placeholders inside angle brackets (`< >`) with the appropriate information:
- `<UsernameDB or leave blank>`: The database username, or leave it blank if not used.
- `<PasswordDB or leave blank>`: The database password, or leave it blank if not used.
- `<DBName>`: The name of the database.
- `<ApacheHostPort>`: The port number of the Apache server you are using (e.g., 3000).

## Step 2: Run the Application

After editing and saving the `config.php` file, you can start the application by pressing or holding the `Ctrl` key and clicking the following link:
[http://localhost:3000/views/layouts/login.php](http://localhost:3000/views/layouts/login.php)
The login page will open, and you can begin using the food ordering website.

# 🌠 With Laragon
## Step 1: Start Laragon
## Step 2: Create Database 
## Step 3: Import Database to Laragon
## Step 4: Move project to folder "....\laragon\www" of laragon
## Step 5: Run: Click "Web" on UI Laragon and move to file "..\views\layouts\login.php"


# Previews
![Preview Images](./ReadmePreview/images/preview(5).png)
![Preview Images](./ReadmePreview/images/preview(6).png)
![Preview Images](./ReadmePreview/images/preview(1).png)
![Preview Images](./ReadmePreview/images/preview(2).png)
![Preview Images](./ReadmePreview/images/preview(3).png)
![Preview Images](./ReadmePreview/images/preview(4).png)

# 🌠 Thank you for reading. 😍🥰
✨ Made by <a href="https://nino.is-a.dev/">@TokisakiNinoVn</a>.

✨ Any question please contact <a href="https://nino.is-a.dev/MyOfficialWebsite/">@TokisakiNinoVn</a>.

<a href="https://nino.is-a.dev/">
  <img src="./ReadmePreview/images/TokisakiNino.jpg" style="border-radius: 50%;" alt="Hình ảnh minh họa">
</a>


