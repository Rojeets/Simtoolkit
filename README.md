# SIM Toolkit (STK)

## Description

The SIM Toolkit (STK) is a web-based application designed to manage and interact with user data for SIM card services. The system includes features for user login, registration, balance management, data service purchases, and account deletion. It uses PHP for server-side scripting and MySQL for database management.

## Features

- **User Authentication:** Users can register and log in to access their account.
- **Account Management:** Users can view their profile information, balance, and data usage.
- **Top-Up Balance:** Users can add funds to their balance.
- **Purchase Data Packages:** Users can buy data packages of various sizes.
- **Account Deletion:** Users can delete their account and all associated data.

## Installation

Follow these steps to set up the project locally:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Rojeets/Simtoolkit.git
   cd Simtoolkit
2. **Set Up the Database:**

  Import the provided SQL dump (stk.sql) into your MySQL database.


    
    mysql -u your-username -p your-database < stk.sql
    Update the connection.php file with your database credentials and socket path if needed.

3. **Configure the Server:**

    Ensure you have a web server (like Apache or Nginx) and PHP installed. Place the project files in your web server's root directory.

4. **Install Dependencies:**

    Ensure you have PHP and MySQL installed. No additional PHP libraries are required beyond the default ones.

## File Overview
  - **connection.php:** Establishes a connection to the MySQL database and handles session management.
  - **header.php:** Includes the navigation menu and checks user session status.
  - **footer.php:** Contains the footer of the web pages with contact information.
  - **index.php:** Provides the login page and handles authentication.
  - **create.php:** Displays the registration form and handles user registration.
  - **home.php:** Displays user information and allows balance and data management.
  - **info.php:** Shows user profile details such as balance and data usage.
  - **topup.php:** Allows users to add funds to their account balance.
  - **data.php:** Lets users purchase data packages and manage their data balance.
  - **delete.php:** Provides an option for users to delete their account.
  - **.php:** Handles user logout by destroying the session.
  - **style.css:** Provides styling for the web pages.
## Usage
1. **Access the Application:**

  Open your web browser and navigate to the URL where the application is hosted (e.g., http://localhost/sim-toolkit/index.php).

2. **Login:**

  Enter your phone number and password to log in.
  If you don't have an account, register via the registration link.
3. **Manage Your Account:**

  After logging in, use the navigation menu to access different features like top-up, data services, and account info.
4. **Logout:**

  Click the logout link to end your session and return to the login page.
## Security Considerations
- **Passwords:** The system uses plain text for passwords. For production use, consider implementing password hashing (e.g., password_hash() and password_verify() in PHP).
- **Database Credentials:** Ensure that database credentials are not exposed in publicly accessible files.
## Troubleshooting
- **Database Connection Issues:** Check your database credentials and socket path in connection.php.
- **Page Not Loading:** Ensure that your web server and PHP are correctly configured and that the project files are in the correct directory.
##Contributing
1. Fork the repository.
2. Create a new branch (git checkout -b feature-branch).
3. Make your changes.
4. Commit your changes (git commit -am 'Add new feature').
5. Push to the branch (git push origin feature-branch).
6. Create a new Pull Request.
## Contact
For any questions or feedback, you can reach out to pokharelrojit45@gmail.com.

