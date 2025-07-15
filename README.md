# Personal Finance Tracker

## Project Overview

The Personal Finance Tracker is a web-based application designed to help users effectively budget, manage their expenses, and gain insights into their financial health. It provides a user-friendly interface to input income and expenditures, categorize transactions, and visualize financial summaries for specified date ranges.

**Note:** This project was developed as a **class project**, and the database used during development was hosted on a school server, which is no longer active. Therefore, while the application's code demonstrates full database interaction capabilities, **local database setup is not required to view the frontend or understand the application's structure.** However, to fully test the backend functionality, you would need to set up your own MySQL database and populate it.

## Features

* **User-Friendly Interface:** Intuitive design for easy navigation and data entry.
* **Income & Expense Tracking:** Allows users to record both their income and various types of expenses.
* **Transaction Categorization:** Enables users to assign categories to their transactions for better organization (e.g., Groceries, Rent, Salary).
* **Budgeting Functionality:** (If implemented, mention how it supports budgeting, e.g., "Set and monitor budgets against spending.")
* **Financial Summaries:** Generates clear summaries of financial data for user-defined date periods, helping users understand their spending patterns and overall financial position.
* **Dynamic Data Display:** Utilizes AJAX to update financial summaries and charts without full page reloads, providing a smooth user experience.

## Technologies Used

* **Frontend:**
    * **HTML5:** Structure of the web pages.
    * **CSS3:** Styling and layout for a responsive and appealing interface.
    * **JavaScript (JS):** Client-side scripting for interactive elements, form validation, and dynamic content manipulation.
    * **AJAX:** Asynchronous communication with the server to fetch and display data without refreshing the page.
* **Backend:**
    * **PHP:** Server-side scripting language for handling form submissions, data processing, and interacting with the database.
* **Database:**
    * **MySQL:** Relational database management system used to store and manage user data, transactions, and categories securely.

## How to Run the Project (Local Setup)

Since this was a class project with an external database, you can view the frontend and examine the code structure without a live database connection.

To view the application locally:

1.  **Clone the Repository:**
    ```bash
    git clone [Your Repository URL]
    cd personal-finance-tracker
    ```
    (Replace `[Your Repository URL]` with the actual URL of your Git repository if applicable.)

2.  **Place Project Files:**
    * Move the entire project folder (e.g., `personal-finance-tracker`) into your web server's document root (e.g., `htdocs` for XAMPP, `www` for WAMP).

3.  **Access in Browser:**
    * Start your Apache service (if using XAMPP/MAMP/WAMP). MySQL is not required to view the frontend.
    * Open your web browser and navigate to `http://localhost/personal-finance-tracker` (or whatever you named the folder).


* Financial goal setting and progress tracking.
* Mobile responsiveness for better viewing on various devices.
* Export data functionality (e.g., to CSV, PDF).

---
