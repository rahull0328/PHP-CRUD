# PHP-CRUD

A simple and functional **CRUD (Create, Read, Update, Delete)** application built with **PHP** and **MySQL**, showcasing the fundamentals of web development and database integration. This project is ideal for beginners who want to understand how server-side operations interact with databases in a clean and structured way.

---

## 📌 Features

- 🔐 Create new records (Add data)
- 📄 Read and view all data entries
- ✏️ Update existing records
- ❌ Delete entries from the database
- 📦 Modular file structure
- 🛠️ Easily customizable for future enhancements

---

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3, Bootstrap
- **Backend:** PHP (Core PHP)
- **Database:** MySQL
- **Server:** XAMPP / LAMP / WAMP

---

## 📁 Project Structure

```plaintext
PHP-CRUD/
│
├── assets/
│ └── style.css # Styling for the UI
│
├── includes/
│ └── config.php # MySQL database connection
│
├── pages/
│ ├── index.php # Home page for adding new data
│ ├── viewData.php # Displays all data in table format
│ └── updateData.php # Edits existing records
│
├── index.php # root file
|
└── README.md # Project documentation
```

---

## 🚀 Getting Started

### Prerequisites

- PHP installed on your system (preferably using XAMPP, WAMP, or LAMP)
- MySQL database server
- Web browser

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/rahull0328/PHP-CRUD.git
   ```

2. **Import the database**

- Open phpMyAdmin

- Create a new database (e.g., crud_db)

- Import the provided SQL file or create a table as required.

3. **Configure the database**

- Go to includes/config.php and update the database credentials:

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "test";
```

4. **Run the application**

- Open your browser

- Navigate to http://localhost/PHP-CRUD/

---

📬 Contact
Rahul Mehta
GitHub: @rahull0328

Feel free to fork, star ⭐, and contribute to the repository!