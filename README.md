# Car Fleet Management Website

## Project Overview
This project is a **Car Fleet Management Website** designed to streamline the management and maintenance of a company's vehicle fleet. The platform enables efficient tracking, monitoring, and organization of various fleet-related aspects, including vehicle information, driver details, maintenance records, and scheduling.

## Features
- **Authentication & Authorization**: Secure login system.
- **User Management**: Add and remove employees.
- **Vehicle Management**: Add, edit, and delete vehicle records.
- **Service Tracking**: Manage vehicle maintenance and mark services as completed.
- **Data Overview**: Clear visualization of stored database information.
- **Reports Generation**: View pending and urgent services.
- **Scalability**: Designed for easy adaptation to evolving needs.

## Technologies Used
- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL (Designed using MySQL Workbench)
- **Development Environment**: XAMPP (Apache, PHP, MySQL, phpMyAdmin)

## Database Structure
The project follows a structured **Entity-Relationship Diagram (ERD)** approach with the following key entities:
- `users` (employees, admins)
- `vehicles` (cars in the fleet)
- `services` (maintenance records)
- `vehicle types`, `brands`, `service types`

## Setup Instructions
1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/car-fleet-management.git
   ```
2. Navigate to the project directory:
   ```sh
   cd car-fleet-management
   ```
3. Set up a MySQL database and import the provided SQL script.
4. Configure database connection in `config.php`.
5. Run the project using XAMPP (start Apache & MySQL services).
6. Open the website in a browser:
   ```
   http://localhost/car-fleet-management/
   ```

## User Roles
- **Employees**: Manage vehicle records and services.
- **Admins**: Full access, including employee management.

## Queries (Example SQL Views)
- **Pending Services**:
  ```sql
  CREATE VIEW servicingneeded AS SELECT * FROM service WHERE service.Finished IS NULL;
  ```
- **Urgent Services**:
  ```sql
  CREATE VIEW servicingneededurgently AS SELECT * FROM service WHERE service.Finished IS NULL AND service.Urgent = 1;
  ```

## Lessons Learned
- Importance of a structured database schema for efficiency.
- Prioritizing user-friendly interfaces enhances usability.
- Security and data integrity are critical in web development.

## Contributors
- Džejla Omerhodžić
- Ena Frašto
- Hanadi Garibović

## References
- [W3Schools](https://www.w3schools.com/)
- [TutorialsPoint - SQL](https://www.tutorialspoint.com/sql/index.htm)
- [PHP Tutorial](https://www.phptutorial.net/)

## License
This project is licensed under the MIT License.


