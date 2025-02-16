Car Fleet Management Website

Project Overview

This project is a Car Fleet Management Website designed to streamline the management and maintenance of a company's vehicle fleet. The platform enables efficient tracking, monitoring, and organization of various fleet-related aspects, including vehicle information, driver details, maintenance records, and scheduling.

Features

Authentication & Authorization: Secure login system.

User Management: Add and remove employees.

Vehicle Management: Add, edit, and delete vehicle records.

Service Tracking: Manage vehicle maintenance and mark services as completed.

Data Overview: Clear visualization of stored database information.

Reports Generation: View pending and urgent services.

Scalability: Designed for easy adaptation to evolving needs.

Technologies Used

Frontend: HTML, CSS

Backend: PHP

Database: MySQL (Designed using MySQL Workbench)

Development Environment: XAMPP (Apache, PHP, MySQL, phpMyAdmin)

Database Structure

The project follows a structured Entity-Relationship Diagram (ERD) approach with the following key entities:

users (employees, admins)

vehicles (cars in the fleet)

services (maintenance records)

vehicle types, brands, service types

Setup Instructions

Clone the repository:

git clone https://github.com/yourusername/car-fleet-management.git

Navigate to the project directory:

cd car-fleet-management

Set up a MySQL database and import the provided SQL script.

Configure database connection in config.php.

Run the project using XAMPP (start Apache & MySQL services).

Open the website in a browser:

http://localhost/car-fleet-management/

User Roles

Employees: Manage vehicle records and services.

Admins: Full access, including employee management.

Queries (Example SQL Views)

Pending Services:

CREATE VIEW servicingneeded AS SELECT * FROM service WHERE service.Finished IS NULL;

Urgent Services:

CREATE VIEW servicingneededurgently AS SELECT * FROM service WHERE service.Finished IS NULL AND service.Urgent = 1;

Lessons Learned

Importance of a structured database schema for efficiency.

Prioritizing user-friendly interfaces enhances usability.

Security and data integrity are critical in web development.

Contributors

Džejla Omerhodžić

Ena Frašto

Hanadi Garibović

References

W3Schools

TutorialsPoint - SQL

PHP Tutorial
