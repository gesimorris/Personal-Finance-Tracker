<p align="center">
<img width="305" height="265" alt="Screenshot 2026-02-17 at 7 56 06 PM" src="https://github.com/user-attachments/assets/44863ac5-f517-4d46-9816-bac2101d1754" />
</p>
<h2 align="center"><strong>WalletFlow</strong></h2>

WalletFlow is intended to help users manage their personal finance through methods that consist of tracking income and expenses, financial goal planning and others. The web app is built with a focus on the accessibility and security of data while maintaining a simple and scalable user interface. It does this by utilizing MySQL for database management, AJAX and JSON for dynamic user interactions with the website. Ajax specifically for functions like logIncome to happen in real time without requiring the page to reload. JSON for data exchange between the client and server. The application is built with the Model-View-Controller Architecture where the model handles the interactions with the database. These interactions are the different functions that will be called in the controller. For this web app, some example functions will be inserting, deleting, editing the transaction database table, logging a user’s expense and income. The View would contain the forms that when submitted, add the data to the database. Forms will be used for user authentication, and transaction insertions. Functions in the model will be called in the controller when these forms are submitted. It also represents the different displays and the user interface. The controller handles the user requests and data is processed and passed between the model and view.
This application will feature user authentication (SignUp, SignIn, Profile Management), session management for the user authentication, the MVC architecture, and SPA with Ajax and JSON. 

A use case for a user signing in and using the web app can look like this. The user signs up and their information is stored in the database. The user signs in with that same information and can now log their financial information to their database. Once logged, the user can generate budget plans, make goals and manage their subscriptions and other payments efficiently. Once the user is done, they can sign out which now denies access to the data.
Overall, the goal of the app is to adhere to the project specifications but more specifically use them in the most efficient way as possible. By doing this, it provides a great financial tool while exploring the different coding methods discussed in lectures.

**Note:** This project was developed as a **class project**, and the database used during development was hosted on a school server, which is no longer active. Therefore, while the application's code demonstrates full database interaction capabilities, **local database setup is not required to view the frontend or understand the application's structure.** However, to fully test the backend functionality, you would need to set up your own MySQL database and populate it.

## Features

* **Income & Expense Tracking:** Allows users to record both their income and various types of expenses.
* **Transaction Categorization:** Enables users to assign categories to their transactions for better organization (e.g., Groceries, Rent, Salary).
* **Budgeting Functionality:** Allows users to set budgets for specific dates.
* **Financial Summaries:** Generates clear summaries of financial data for user-defined date periods, helping users understand their spending patterns and overall financial position.

## Technologies Used

* **Frontend:**
    * **HTML5:** Structure of the web pages.
    * **CSS3:** Styling and layout for a responsive and appealing interface.
    * **JavaScript:** Client-side scripting for interactive elements, form validation, and dynamic content manipulation.
    * **AJAX:** Asynchronous communication with the server to fetch and display data without refreshing the page.
* **Backend:**
    * **PHP:** Server-side scripting language for handling form submissions, data processing, and interacting with the database.
* **Database:**
    * **MySQL:** Relational database management system used to store and manage user data, transactions, and categories securely.
 
## Pages

### Dashboard
-	This page contains the different buttons that open the forms for each function. Each function has the same page layout except a different form is opened that displays different information depending on the context of the function. 
-	The profile picture once hovered shows the options to change the user profile
-	The menu button once hovered shows the options to add, update or delete.
-	When the breakdown buttons are clicked, it displays the table in the corresponding div element.
  <p align="center">
   <img width="468" height="293" alt="image" src="https://github.com/user-attachments/assets/4e3a089a-0d5e-4f63-bb82-631a44692f92" />
  </p>

### Sign in/ Sign out
-	This page contains the sign up and sign in forms as well as buttons to switch between the two. Name of the web app is displayed at the top with a welcome message.
   <img width="468" height="293" alt="image" src="https://github.com/user-attachments/assets/4aa3c142-dbe2-4f50-a671-be6bb413b358" />
   <img width="468" height="293" alt="image" src="https://github.com/user-attachments/assets/12a05bba-bc2f-4d10-b07d-f70cf88ce528" />


## How to Run the Project (Local Setup)

Since this was a class project with an external database, you can view the frontend and examine the code structure without a live database connection.

To view the application locally:

1.  **Clone the Repository:**
    ```bash
    git clone [Your Repository URL]
    cd Your Folder Name
    ```
    (Replace `[Your Repository URL]` with the actual URL of your Git repository if applicable.)

2.  **Place Project Files:**
    * Move the entire project folder into your web server's document root (e.g., `htdocs` for XAMPP, `www` for WAMP).

3.  **Access in Browser:**
    * Start your Apache service (if using XAMPP/MAMP/WAMP). MySQL is not required to view the frontend.
    * Open your web browser and navigate to `http://localhost/your_folder_name`.


* Financial goal setting and progress tracking.
* Mobile responsiveness for better viewing on various devices.
* Export data functionality (e.g., to CSV, PDF).

---
