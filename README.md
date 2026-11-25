# BRIGHT FUTURE PUBLIC SCHOOL – LAB PRACTICAL

## 1. PROJECT FILES

The project contains the following files:

- `index.php` – Home page with school introduction.
- `fees.php` – Fee details with a table.
- `activities.php` – Information about school activities.
- `register.php` – Student registration form.
- `database.php` – PHP-MySQL database connection.
- `style.css` – Basic styling, navigation hover effects and page layout.

## 2. DATABASE SETUP

### Database Details

- Host: `localhost`
- Username: `root`
- Password: Blank (default XAMPP setting)
- Database: `school_db`
- Table: `students`

### SQL Commands

```sql
CREATE DATABASE school_db;

USE school_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    class VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 3. DATABASE CONNECTION (database.php)

```php
<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
```

## 4. PROJECT SETUP USING XAMPP

1. Put the complete `school-website` folder inside:

   `C:\xampp\htdocs`

2. Open XAMPP Control Panel.
3. Start MySQL and Apache.
4. Open phpMyAdmin:

   `http://localhost/phpmyadmin`

5. Click the SQL tab.
6. Execute the SQL commands given above to create the database and table.
7. Open the website in your browser:

   `http://localhost/school-website/`

## 5. COMMANDS TO USE IF APACHE IS NOT WORKING

PHP has its own built-in development server, so Apache is not required when using this method.

### Step 1: Open Command Prompt

Run:

```cmd
cd C:\xampp\mysql\bin
```

### Step 2: Open MySQL

```cmd
mysql -u root
```

### Step 3: Create the database

At the MariaDB prompt, execute the SQL commands given in the Database Setup section.

### Step 4: Exit MySQL

```sql
exit
```

### Step 5: Check PHP installation

```cmd
C:\xampp\php\php.exe -v
```

### Step 6: Start the PHP built-in server

```cmd
C:\xampp\php\php.exe -S localhost:8000 -t C:\xampp\htdocs
```

### Step 7: Open the website

Keep the Command Prompt window open and visit:

`http://localhost:8000/school-website/`

**Important:** MySQL must still be running in XAMPP. Only Apache is unnecessary when using the PHP built-in server.

## 6. DATABASE VERIFICATION

To check whether student registration is working:

1. Open the Student Registration page.
2. Enter the student's name, email, phone number, class and address.
3. Click the Register button.
4. Open phpMyAdmin.
5. Select `school_db`.
6. Select the `students` table.
7. Click Browse.

The submitted student details should appear as a new record in the table.

## 7. TROUBLESHOOTING

### Database connection error

- Check whether MySQL is running.
- Verify the database name is `school_db`.
- Check the username and password in `database.php`.
- Default XAMPP credentials are username `root` and a blank password.

### Apache not working

Use the PHP built-in server commands mentioned above.

### PHP Bad Image error

If PHP reports a `php_ftp.dll Bad Image` error, repair or reinstall PHP/XAMPP using the official XAMPP source.

Do not download individual DLL files from unknown websites.

## 8. CLEAR POWERSHELL HISTORY (OPTIONAL)

To clear the current PowerShell session history:

```powershell
Clear-History
```

To delete the saved PSReadLine command history:

```powershell
Remove-Item (Get-PSReadLineOption).HistorySavePath -Force
```

**Note:** The second command permanently deletes the saved PowerShell history file.

## 9. IMPORTANT NOTES

- The database is created separately on each computer.
- GitHub transfers the project code but does not transfer the MySQL database.
- Make sure the database and table names match the PHP code.
- Keep the XAMPP MySQL service running while using the website.
- The PHP built-in server is intended for local development and lab practice, not production use.

---

**Project:** Bright Future Public School  
**Technologies:** HTML, CSS, PHP and MySQL  
**Environment:** XAMPP  
**Purpose:** Web Development Lab Practical
