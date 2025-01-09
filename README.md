# TourHobe.BD

**TourHobe.BD** is a dynamic web application designed for managing and exploring tour packages. The project integrates frontend, backend, and database technologies to provide a complete solution for both users and administrators.

---

## Features

### User Features:
- **View Tour Packages**: Browse through available tour packages with details and images.
- **Booking System**: Make bookings directly through the application.
- **Contact Form**: Send inquiries or messages through the contact page.

### Admin Features:
- **Admin Dashboard**: Manage tour packages, user inquiries, and bookings.
- **Secure Login**: Administrator authentication with credentials.

---

## Tools and Technologies

### Frontend:
- **HTML**: For structuring webpages.
- **CSS**: For styling and layout.

### Backend:
- **PHP**: For server-side logic and dynamic content.

### Database:
- **MySQL**: For storing user, booking, and package information.

### Assets:
- Various images are included to enhance the user experience.

---

## Installation and Setup

### Prerequisites:
1. Install **XAMPP**, **WAMP**, or any equivalent local server environment.
2. Ensure **MySQL** is installed and running.

### Steps:
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your_username/TourHobe.BD.git
   ```
   Navigate to the project folder:
   ```bash
   cd TourHobe.BD
   ```

2. **Move Project Files**:
   Place the extracted files in the `htdocs` directory (for XAMPP) or the equivalent directory for your server.

3. **Set Up the Database**:
   - Open phpMyAdmin.
   - Create a new database named `tour_hobe_bd`.
   - Import the `tour_signup.sql` file into the database.

4. **Configure Database Connection**:
   - Open the `connection.php` file in the project.
   - Ensure the database credentials match your setup:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "tour_hobe_bd";
     ```

5. **Run the Application**:
   - Start Apache and MySQL services.
   - Open your browser and navigate to:
     ```
     http://localhost/TourHobe.BD
     ```

---

## Directory Structure
```
TourHobe.BD/
├── Tour Hobe BD/
│   ├── css/
│   ├── image/
│   ├── about.php
│   ├── admin.php
│   ├── booking.php
│   ├── contact_us.php
│   └── ...
├── tour_signup.sql
└── README.md
```

---

## Author
-Tahmid Sattar 
- **Email**: [tahmidaothoi007@gmail.com]

-*Md. Sive Saqline
- **Email**: [saqline.cse.200104133@aust.edu]


## Acknowledgments
- Thanks to open-source tools and libraries that made this project possible.
