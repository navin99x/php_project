# Student Management System

A modern, web-based Student Management System built with PHP and MySQL. This project allows students to view their records and provides an admin dashboard for managing student data.

---

## Features
- Students can view their records by entering their standard and roll number.
- Admin dashboard with the ability to:
  1. Insert student records
  2. Update student records
  3. Delete student records
- Beautiful, modern UI with responsive design.

---

## Getting Started

### 1. Requirements
- PHP (7.x or newer recommended)
- MySQL
- Web server (e.g., Apache, WAMP, XAMPP, etc.)

### 2. Setup Instructions

#### a. Clone or Download the Repository
```
git clone <repo-url>
```
Or download and extract the ZIP file.

#### b. Database Setup
1. Open your MySQL client (phpMyAdmin, MySQL CLI, etc.).
2. Run the SQL script in `database.sql` to create the required database and tables:
   - `student_management` (database)
   - `admin` (admin users)
   - `student` (student records)
3. (Optional) Run `dummy_students.sql` to populate the database with sample student data.

#### c. Configure Database Connection
- Edit `dbcon.php` and set your MySQL username and password as needed:
  ```php
  $con = mysqli_connect('localhost','root','root','student_management');
  ```

#### d. Start the Server
- Place the project folder in your web server's root directory (e.g., `www` or `htdocs`).
- Start Apache and MySQL services.
- Open your browser and go to:
  - `http://localhost/Management-system-students/index.php`

---

## Admin Credentials
- **Username:** admin
- **Password:** admin

You can change or add admin users in the `admin` table.

---

## File Structure
- `index.php` — Student portal
- `login.php` — Admin login
- `Admin/admindash.php` — Admin dashboard
- `Admin/addstudent.php` — Add student
- `Admin/updatestudent.php` — Update student
- `Admin/deletestudent.php` — Delete student
- `dbcon.php` — Database connection
- `database.sql` — Database/table setup script
- `dummy_students.sql` — Sample data
- `css/style.css` — Main stylesheet
- `dataimg` — Student images

---

## Credits
- **Original Author:** [Divesh Jain](https://github.com/diveshlunker/Management-system-students)
- **Modernization & UI Enhancements:** [Navin](https://github.com/navin99x)

---

## License
This project is open source. See `LICENSE` for details.
