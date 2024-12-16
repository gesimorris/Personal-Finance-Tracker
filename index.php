<!DOCTYPE html>
<html>
<head>
    <style>
        /* Header */
        #layout-header {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            display: flex;
        }

        #layout-body {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        #layout-content {
            width: 50%;
            padding: 10px;
        }

        #spending-overview-layout {
            width: 50%;
            padding: 10px;
        }
        .dropdown-profile-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        #profile {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        #profile:hover .dropdown-profile-content {
            display: block;
        }

        #dropdown-profile {
            float: left;
            display: block;
        }
        #dropdown-profile:hover .dropdown-profile-content {
            display: block;
        }

        #dropdown-profile-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown-profile-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown {
            float: right;
            display: block;
        }

        .dropbtn {
            background-color: #3498db;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover .dropdown-content {
            display: block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #2980b9;
        }

        #viewIncome, #viewExpense, #viewBudget {
            background-color: #3498db;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin: 10px;
        }

        #viewIncome:hover, #viewExpense:hover, #viewBudget:hover {
            background-color: #2980b9;
        }

        #month {
            padding: 10px;
        }

        #select-month {
            padding: 10px;
        }
        #add-income, #add-expense, #edit-transaction, #setBudget {
            display: none;
            position: absolute;
            width: 400px;
            height: 300px;
            top: calc(50% - 150px);
            left: calc(50% - 200px);
            border: 1px solid black;
            background-color: white;
            z-index: 999;
        }
        #dropdown-modal label {
            display: inline-block;
            width: 80px;
            position: relative;
            left: 5px;
        }
        #add-income-form income-cancel, #add-expense-form expense-cancel, #edit-transaction-form edit-cancel, #set-budget-form budget-cancel {
            position: absolute;
            left: 5px;
            bottom: 5px;
        }
        #add-income-form income-submit, #add-expense-form expense-submit, #edit-transaction-form edit-submit, #set-budget-form budget-submit {
            position: absolute;
            right: 5px;
            bottom: 5px;
        }
        #update-income, #update-expense {
            display: none;
            position: absolute;
            width: 400px;
            height: 300px;
            top: calc(50% - 150px);
            left: calc(50% - 200px);
            border: 1px solid black;
            background-color: white;
            z-index: 999;
        }
        #update-income-submit, #update-expense-submit {
            position: absolute;
            right: 5px;
            bottom: 5px;
        }
        #update-income-cancel, #update-expense-cancel {
            position: absolute;
            left: 5px;
            bottom: 5px;
        }
        #delete-income, #delete-expense {
            display: none;
            position: absolute;
            width: 400px;
            height: 300px;
            top: calc(50% - 150px);
            left: calc(50% - 200px);
            border: 1px solid black;
            background-color: white;
            z-index: 999;
        }
        #overview-table {
            margin: 20px auto;
            width: 80%;
            text-align: center;
        }
        #overview-table table {
            border-collapse: collapse;
            width: 100%;
        }
        #overview-table th, #overview-table td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        #overview-table th {
            background-color: #f4f4f4;
        }
        #income-table {
        margin: 20px auto;
        width: 80%;
        text-align: center;
        }

        #income-table table {
        border-collapse: collapse;
        width: 100%;
        }

        #income-table th, #income-table td {
        border: 1px solid #ccc;
        padding: 8px;
        }

        #income-table th {
        background-color: #f4f4f4;
        }
        #expense-table {
            margin: 20px auto;
            width: 80%;
            text-align: center;
        }
        #expense-table table {
            border-collapse: collapse;
            width: 100%;
        }
        #expense-table th, #expense-table td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        #expense-table th {
            background-color: #f4f4f4;
        }
        #budget-table {
            margin: 20px auto;
            width: 80%;
            text-align: center;
        }
        #budget-table table {
            border-collapse: collapse;
            width: 100%;
        }
        #budget-table th, #budget-table td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        #budget-table th {
            background-color: #f4f4f4;
        }
        #overview-table {
            margin: 20px auto;
            width: 80%;
            text-align: center;
        }
        #overview-table table {
            border-collapse: collapse;
            width: 100%;
        }
        #overview-table th, #overview-table td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        #overview-table th {
            background-color: #f4f4f4;
        }
        #expense_breakdown {
            display: none;
        }
        #budget_breakdown {
            display: none;
        }
        .breakdown {
            padding: 10px;
        }
        #breakdown-layout h2 {
            text-align: center;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        #blanket {
            display: none;
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: LightGrey;
            opacity: 0.5;
            z-index: 998;
        }
        #set-budget, #updateBudget, #deleteBudget {
            display: none;
            position: absolute;
            width: 400px;
            height: 300px;
            top: calc(50% - 150px);
            left: calc(50% - 200px);
            border: 1px solid black;
            background-color: white;
            z-index: 999;
        }
        #set-budget-form budg-cancel, #update-budget-form update-budget-cancel, #delete-budget-form delete-budget-cancel {
            position: absolute;
            left: 5px;
            bottom: 5px;
        }
        #set-budget-form budg-submit, #update-budget-form update-budget-submit, #delete-budget-form delete-budget-submit {
            position: absolute;
            right: 5px;
            bottom: 5px;
        }
        #total_income{
            text-align: center;
            padding: 10px;
        }
        #total_expense{
            text-align: center;
            padding: 10px;
        }
    </style>
    <title>Home</title>
</head>
<body>
    <div id="layout-header">
        <h1>My Money Tracker</h1>
        <div id="dropdown-profile">
            <img src="profile.png" alt="Profile" id="profile">
            <div class="dropdown-profile-content">
                <a href="#" id="change_name">Change Username</a>
                <a href="#" id="change_password">Change Password</a>
                <a href="#" id="delete_account">Delete Account</a>
                <a href="#" id="signout">Sign Out</a>
            </div>
        </div>
        <div id="welcome-message-pane">
            <div id="welcome-message">Welcome, <?php echo $_SESSION['username']; ?>!
        </div>
    </div>
    <form id="signout-form" action="mmt_controller.php" method=get style="display:none;">
            <input type="hidden" name="page" value="index">
            <input type="hidden" name="command" value="SignOut">
    </form>
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <a href="#" id="summary">Account Summary</a>
                <a href="#" id="add_income">Add Income</a>
                <a href="#" id="update_income">Update Inome</a>
                <a href="#" id="delete_income">Delete Income</a>
                <a href="#" id="add_expense">Add Expense</a>
                <a href="#" id="update_expense">Update Expense</a>
                <a href="#" id="delete_expense">Delete Expense</a>
                <a href="#" id="set_budget">Set Budget</a>
                <a href="#" id="upd_budget">Update Budget</a>
                <a href="#" id="del_budget">Delete Budget</a>
            </div>
        </div>
    </div>
    <div class="dropdown-modal" id="add-income-modal">
        <div id="blanket"></div>
        <div id="add-income">
            <h3>Add Income</h3>
            <hr>
            <br>
            <form id="add-income-form" method="get" action="mmt_controller.php">
                <input type="hidden" name="page" value="index">
                <input type="hidden" name="command" value="AddIncome">
                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" required><br>
                <label for="source">Source:</label>
                <input type="text" id="source" name="source" required><br>
                <label for="date">Date Received:</label>
                <input type="text" id="date" name="date" required><br>
                <input type="button" id="income-submit" value="Submit">
                <input type="button" id="income-cancel" value="Cancel">
            </form>
        </div>
    </div>
    <div class="dropdown-modal" id="add-expense-modal">
        <div id="add-expense">
            <form id="add-expense-form" method="get" action="mmt-controller.php">
                <input type="hidden" name="page" value="index">
                <input type="hidden" name="command" value="AddExpense">
                <label for="expense">Amount:</label>
                <input type="text" id="expense" name="expense" required><br>
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" required><br>
                <label for="date_expense">Date Spent:</label>
                <input type="text" id="date_expense" name="date_expense" required><br>
                <input type="button" id="expense-submit" value="Submit">
                <input type="button" id="expense-cancel" value="Cancel">
            </form>
        </div>
    </div>
    <div class="dropdown-modal" id="update-income-modal">
        <div id="update-income">
            <form id="update-income-form" method="get" action="mmt_controller.php">
                <label for="income_id">Income ID:</label>
                <input type="text" id="income_id" name="income_id" required><br>
                <label for="update_amount">Amount:</label>
                <input type="text" id="update_amount" name="update_amount" required><br>
                <label for="update_source">Source:</label>
                <input type="text" id="update_source" name="update_source" required><br>
                <label for="update_date">Date Received:</label>
                <input type="text" id="update_date" name="update_date" required><br>
                <input type="button" id="update-income-submit" value="Submit">
                <input type="button" id="update-income-cancel" value="Cancel">
            </form>
         </div>
         <div id="update-expense">
            <form id="update-expense-form" method="get" action="mmt_controller.php">
                <label for="update_expense_id">Expense ID:</label>
                <input type="text" id="update_expense_id" name="update_expense_id" required><br>
                <label for="update_expense">Amount:</label>
                <input type="text" id="update_expense_amount" name="update_expense" required><br>
                <label for="update_expense_name">Category:</label>
                <input type="text" id="update_expense_name" name="update_expense_name" required><br>
                <label for="update_date_expense">Date Spent:</label>
                <input type="text" id="update_expense_date" name="update_date_expense" required><br>
                <input type="button" id="update-expense-submit" value="Submit">
                <input type="button" id="update-expense-cancel" value="Cancel">
            </form>
         </div>
         <div id="delete-income">
            <form id="delete-income-form" method="get" action="mmt_controller.php">
                <label for="income_id">Income ID:</label>
                <input type="text" id="income_id" name="income_id" required><br>
                <input type="button" id="delete-income-submit" value="Submit">
                <input type="button" id="delete-income-cancel" value="Cancel">
            </form>
         </div>
         <div id="delete-expense">
            <form id="delete-expense-form" method="get" action="mmt_controller.php">
                <label for="expense_id">Expense ID:</label>
                <input type="text" id="expense_id" name="expense_id" required><br>
                <input type="button" id="delete-expense-submit" value="Submit">
                <input type="button" id="delete-expense-cancel" value="Cancel">
            </form>
        </div>
    </div>
    <div class="dropdown-modal" id="set-budget-modal">
    <div id="setBudget">
        <form id="set-budget-form" method="get" action="mmt_controller.php">
            <label for="budget_name">Budget Name:</label>
            <input type="text" id="budget_name" name="budget_name" required><br>
            <label for="budget_amount">Amount:</label>
            <input type="text" id="budget_amount" name="budget_amount" required><br>
            <label for="budget_start">Start Date:</label>
            <input type="text" id="budget_start" name="budget_start" required><br>
            <label for="budget_end">End Date:</label>
            <input type="text" id="budget_end" name="budget_end" required><br>
            <input type="button" id="budg-submit" value="Submit">
            <input type="button" id="budg-cancel" value="Cancel">
        </form>
    </div>
    <div id="updateBudget">
        <form id="update-budget-form" method="get" action="mmt_controller.php">
            <label for="update_budget_id">Budget ID:</label>
            <input type="text" id="update_budget_id" name="update_budget_id" required><br>
            <label for="update_budget_name">Budget Name:</label>
            <input type="text" id="update_budget_name" name="update_budget_name" required><br>
            <label for="update_budget_amount">Amount:</label>
            <input type="text" id="update_budget_amount" name="update_budget_amount" required><br>
            <label for="update_budget_start">Start Date:</label>
            <input type="text" id="update_budget_start" name="update_budget_start" required><br>
            <label for="update_budget_end">End Date:</label>
            <input type="text" id="update_budget_end" name="update_budget_end" required><br>
            <input type="button" id="update-budget-submit" value="Submit">
            <input type="button" id="update-budget-cancel" value="Cancel">
        </form>
    </div>
    <div id="deleteBudget">
        <form id="delete-budget-form" method="get" action="mmt_controller.php">
            <label for="budget_id">Budget ID:</label>
            <input type="text" id="budget_id" name="budget_id" required><br>
            <input type="button" id="delete-budget-submit" value="Submit">
            <input type="button" id="delete-budget-cancel" value="Cancel">
        </form>
    </div>
    </div>
    <div id="layout-body">
        <div id="layout-content">
            <h2>Personal Finance Tracker</h2>
            <button id="viewIncome">Income Breakdown</button>
            <button id="viewExpense">Expense Breakdown</button>
            <button id="viewBudget">Budget Breakdown</button>
        </div>
        <div id="spending-overview-layout">
            <h2>Spending Overview</h2>
                <div id="month">
                    <form id="select-month" method="get" action="mmt_controller.php">
                        <input type="hidden" name="page" value="index">
                        <input type="hidden" name="command" value="Overview">
                        <label for="year">Select Year:</label>
                        <input type="text" id="year" name="year" required>
                        <input id="overview-submit" type="button" value="Submit">
                    </form>
                </div>
        </div>
    </div>
    <div id="breakdown-layout">
        <h2>Income Breakdown</h2>
        <div id="total_income">

        </div>
        <div id="income-table" class="breakdown">
            
        </div>
        <h2>Expense Breakdown</h2>
        <div id="total_expense">

        </div>
        <div id="expense-table" class="breakdown">
            
        </div>
        <h2>Budget Breakdown</h2>
        <div id="budget-table" class="breakdown">  
            
        </div>
        <h2>Overview</h2>
        <div id="overview-table" class="breakdown">
        
        </div>
</body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script>
    // Handle user Account
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("change_name").addEventListener("click", function () {
            const name = prompt("Enter new username:");
            if (name !== null) {
                const xhttp = new XMLHttpRequest();
                xhttp.open("GET", "mmt_controller.php?page=index&command=ChangeName&name=" + name, true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        alert("Please sign out and sign back in to see changes.");
                    }
                };
                xhttp.send();
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("change_password").addEventListener("click", function () {
            const password = prompt("Enter new password:");
            if (password !== null) {
                const xhttp = new XMLHttpRequest();
                xhttp.open("GET", "mmt_controller.php?page=index&command=ChangePassword&newPassword=" + password, true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        alert("Please sign out and sign back in to see changes!");
                    }
                };
                xhttp.send();
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("delete_account").addEventListener("click", function () {
            const confirm_delete = prompt("Are you sure you want to delete your account? Type 'YES' to confirm.");
            if (confirm_delete === 'YES') {
                const xhttp = new XMLHttpRequest();
                xhttp.open("GET", "mmt_controller.php?page=index&command=DeleteAccount", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        alert("Sign out to confirm deletion");
                    }
                };
                xhttp.send();
            }
        });
    });

    // Display Breakdowns

    document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("viewIncome").addEventListener("click", function () {   
        var url = 'mmt_controller.php';
        var query = {page: 'index', command: 'IncomeBreakdown'};

        $.get(url, query, function(data) {
        var rows = JSON.parse(data);
        var str = '<table border="1">';
        str += '<tr>';
        for (var key in rows[0]) {
            str += '<th>' + key + '</th>';
        }   
        str += '</tr>';
    
        for (var i = 0; i < rows.length; i++) {  
            str += '<tr>';
            for (var key in rows[i]) {  
                str += '<td>' + rows[i][key] + '</td>';  
            }
            str += '</tr>';
        }
        str += '</table>';
        document.getElementById('income-table').innerHTML = str;
        });
    });
});
    document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("viewExpense").addEventListener("click", function () {
        var url = 'mmt_controller.php';
        var query = {page: 'index', command: 'ExpenseBreakdown'};

        $.get(url, query, function(data) {
        var rows = JSON.parse(data);
        var str = '<table border="1">';
        str += '<tr>';
        for (var key in rows[0]) {
            str += '<th>' + key + '</th>';
        }   
        str += '</tr>';
    
        for (var i = 0; i < rows.length; i++) {  
            str += '<tr>';
            for (var key in rows[i]) {  
                str += '<td>' + rows[i][key] + '</td>';  
            }
            str += '</tr>';
        }
        str += '</table>';
        document.getElementById('expense-table').innerHTML = str;
        });
    });
});


    document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("viewBudget").addEventListener("click", function () {
        var url = 'mmt_controller.php';
        var query = {page: 'index', command: 'BudgetBreakdown'};

        $.get(url, query, function(data) {
        var rows = JSON.parse(data);
        var str = '<table border="1">';
        str += '<tr>';
        for (var key in rows[0]) {
            str += '<th>' + key + '</th>';
        }   
        str += '</tr>';
    
        for (var i = 0; i < rows.length; i++) {  
            str += '<tr>';
            for (var key in rows[i]) {  
                str += '<td>' + rows[i][key] + '</td>';  
            }
            str += '</tr>';
        }
        str += '</table>';
        document.getElementById('budget-table').innerHTML = str;
        });
    });
});




    // Hover over menu options
    document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('summary').addEventListener('click', function(){        // Account Summary
        const xhttp = new XMLHttpRequest();
        xhttp.open("GET", "mmt_controller.php?page=index&command=Summary", true);
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                const response = JSON.parse(xhttp.responseText);
                const total_income = response.total_income;
                const total_expense = response.total_expense;

                document.getElementById('total_income').innerHTML = `Total Income: ${total_income}`;
                document.getElementById('total_expense').innerHTML = `Total Expense: ${total_expense}`;
            }
        };
        xhttp.send();
    });
});
    // Add Income
    document.getElementById('add_income').addEventListener('click', function(){    
        document.getElementById('add-income').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });
    // Update Income
    document.getElementById('update_income').addEventListener('click', function(){        // Update Income
        document.getElementById('update-income').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });
    // Delete Income
    document.getElementById('delete_income').addEventListener('click', function(){        // Delete Income
        document.getElementById('delete-income').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });
    // Add Expense
    document.getElementById('add_expense').addEventListener('click', function(){        // Add Expense
        document.getElementById('add-expense').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });

    // Update Expense
    document.getElementById('update_expense').addEventListener('click', function(){        // Update Expense
        document.getElementById('update-expense').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });

    // Delete Expense
    document.getElementById('delete_expense').addEventListener('click', function(){        // Delete Expense
        document.getElementById('delete-expense').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });

    // Set Budget
    document.getElementById('set_budget').addEventListener('click', function(){        // Set Budget
        document.getElementById('setBudget').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });
    // Update Budget
    document.getElementById('upd_budget').addEventListener('click', function(){        // Update Budget
        document.getElementById('updateBudget').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });
    
    // Delete Budget
    document.getElementById('del_budget').addEventListener('click', function(){        // Delete Budget
        document.getElementById('deleteBudget').style.display = 'block';
        document.getElementById('blanket').style.display = 'block';
    });

    // Cancel and Submit buttons for Modals
    
    document.getElementById('income-cancel').addEventListener('click', function(){
        document.getElementById('add-income').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    document.getElementById('update-income-cancel').addEventListener('click', function(){
        document.getElementById('update-income').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    document.getElementById('expense-cancel').addEventListener('click', function(){
        document.getElementById('add-expense').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    document.getElementById('update-expense-cancel').addEventListener('click', function(){
        document.getElementById('update-expense').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    document.getElementById('delete-income-cancel').addEventListener('click', function(){
        document.getElementById('delete-income').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    document.getElementById('delete-expense-cancel').addEventListener('click', function(){
        document.getElementById('delete-expense').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    // Budget
    document.getElementById('budg-cancel').addEventListener('click', function(){
        document.getElementById('setBudget').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    document.getElementById('update-budget-cancel').addEventListener('click', function(){
        document.getElementById('updateBudget').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    document.getElementById('delete-budget-cancel').addEventListener('click', function(){
        document.getElementById('deleteBudget').style.display = 'none';
        document.getElementById('blanket').style.display = 'none';
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('budg-submit').addEventListener('click', function(){
            const xhttp = new XMLHttpRequest();
            const budget_name = document.getElementById('budget_name').value;
            const budget_amount = document.getElementById('budget_amount').value;
            const budget_start = document.getElementById('budget_start').value;
            const budget_end = document.getElementById('budget_end').value;
            xhttp.open("GET", "mmt_controller.php?page=index&command=SetBudget&budget_name=" + budget_name + "&budget_amount=" + budget_amount + "&budget_start=" + budget_start + "&budget_end=" + budget_end, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    alert("Click Budget Breakdown to see changes!");
                }
            };

            const data = `budget_name=${encodeURIComponent(budget_name)}&budget_amount=${encodeURIComponent(budget_amount)}&budget_start=${encodeURIComponent(budget_start)}&budget_end=${encodeURIComponent(budget_end)}`;
            xhttp.send(data);

            document.getElementById('setBudget').style.display = 'none';
            document.getElementById('blanket').style.display = 'none';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('update-budget-submit').addEventListener('click', function () {
        const xhttp = new XMLHttpRequest();
        const budget_id = document.getElementById('update_budget_id').value;
        const update_budget_name = document.getElementById('update_budget_name').value;
        const update_budget_amount = document.getElementById('update_budget_amount').value;
        const update_budget_start = document.getElementById('update_budget_start').value;
        const update_budget_end = document.getElementById('update_budget_end').value;

        xhttp.open(
          "GET",
          "mmt_controller.php?page=index&command=UpdateBudget" +
            "&update_budget_id=" + encodeURIComponent(budget_id) +
            "&update_budget_name=" + encodeURIComponent(update_budget_name) +
            "&update_budget_amount=" + encodeURIComponent(update_budget_amount) +
            "&update_budget_start=" + encodeURIComponent(update_budget_start) +
            "&update_budget_end=" + encodeURIComponent(update_budget_end),
          true
        );

        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                alert("Updated! Click Budget Breakdown to see changes!");
                document.getElementById('updateBudget').style.display = 'none';
                document.getElementById('blanket').style.display = 'none';
            }
        };

        xhttp.send();
    });
});


    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('delete-budget-submit').addEventListener('click', function(){
            const xhttp = new XMLHttpRequest();
            const budget_id = document.getElementById('budget_id').value;
            xhttp.open("GET", "mmt_controller.php?page=index&command=DeleteBudget&budget_id=" + budget_id, true);
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    alert("Deleted! Click Budget Breakdown to see changes!");
                }
            };
            const data = `budget_id=${encodeURIComponent(budget_id)}`;
            xhttp.send(data);

            document.getElementById('deleteBudget').style.display = 'none';
            document.getElementById('blanket').style.display = 'none';
        });
    });

    // Income and Expenses


    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('income-submit').addEventListener('click', function(){
            const xhttp = new XMLHttpRequest();
            const amount = document.getElementById('amount').value;
            const source = document.getElementById('source').value;
            const date = document.getElementById('date').value;
            xhttp.open("GET", "mmt_controller.php?page=index&command=AddIncome&amount=" + amount + "&source=" + source + "&date=" + date, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    alert("Click Income Breakdown to see changes!");
                }
            };
            const data = `amount=${encodeURIComponent(amount)}&source=${encodeURIComponent(source)}&date=${encodeURIComponent(date)}`;
            xhttp.send(data);

            document.getElementById('add-income').style.display = 'none';
            document.getElementById('blanket').style.display = 'none';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('expense-submit').addEventListener('click', function(){
            const xhttp = new XMLHttpRequest();
            const expense = document.getElementById('expense').value;
            const category = document.getElementById('category').value;
            const date_expense = document.getElementById('date_expense').value;
            xhttp.open("GET", "mmt_controller.php?page=index&command=AddExpense&expense=" + expense + "&category=" + category + "&date_expense=" + date_expense, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    alert("Click Expense Breakdown to see changes!");
                }
            };
            const data = `expense=${encodeURIComponent(expense)}&category=${encodeURIComponent(category)}&date_expense=${encodeURIComponent(date_expense)}`;
            xhttp.send(data);

            document.getElementById('add-expense').style.display = 'none';
            document.getElementById('blanket').style.display = 'none';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('update-income-submit').addEventListener('click', function(){
            const xhttp = new XMLHttpRequest();
            const id = document.getElementById('income_id').value;
            const amount = document.getElementById('update_amount').value;
            const source = document.getElementById('update_source').value;
            const date = document.getElementById('update_date').value;
            xhttp.open("GET", "mmt_controller.php?page=index&command=UpdateIncome&id=" + id + "&amount=" + amount + "&source=" + source + "&date=" + date, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    alert("Updated! Click Income Breakdown to see changes!" + $response);
                }
            };
            const data = `id=${encodeURIComponent(id)}&amount=${encodeURIComponent(amount)}&source=${encodeURIComponent(source)}&date=${encodeURIComponent(date)}`;
            xhttp.send(data);

            document.getElementById('update-income').style.display = 'none';
            document.getElementById('blanket').style.display = 'none';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('update-expense-submit').addEventListener('click', function () {
        const xhttp = new XMLHttpRequest();
        const expense_id = document.getElementById('update_expense_id').value;
        const update_expense_name = document.getElementById('update_expense_name').value;
        const update_expense_amount = document.getElementById('update_expense_amount').value;
        const update_expense_date = document.getElementById('update_expense_date').value;

        xhttp.open(
          "GET",
          "mmt_controller.php?page=index&command=UpdateExpense" +
            "&update_expense_id=" + encodeURIComponent(expense_id) +
            "&update_expense_name=" + encodeURIComponent(update_expense_name) +
            "&update_expense_amount=" + encodeURIComponent(update_expense_amount) +
            "&update_expense_date=" + encodeURIComponent(update_expense_date),
          true
        );

        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                alert("Updated! Click Expense Breakdown to see changes");
                document.getElementById('update-expense').style.display = 'none';
                document.getElementById('blanket').style.display = 'none';
            }
        };

        xhttp.send();
    });
});

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('delete-income-submit').addEventListener('click', function(){
            const xhttp = new XMLHttpRequest();
            const id = document.getElementById('income_id').value;
            xhttp.open("GET", "mmt_controller.php?page=index&command=DeleteIncome&incomeID=" + id, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    alert("Deleted! Click Income Breakdown to see changes!");
                }
            };
            const data = `id=${encodeURIComponent(id)}`;
            xhttp.send(data);

            document.getElementById('delete-income').style.display = 'none';
            document.getElementById('blanket').style.display = 'none';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('delete-expense-submit').addEventListener('click', function(){
            const xhttp = new XMLHttpRequest();
            const id = document.getElementById('expense_id').value;
            xhttp.open("GET", "mmt_controller.php?page=index&command=DeleteExpense&expenseID=" + id, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    alert("Deleted! Click Expense Breakdown to see changes!");
                }
            };
            const data = `id=${encodeURIComponent(id)}`;
            xhttp.send(data);

            document.getElementById('delete-expense').style.display = 'none';
            document.getElementById('blanket').style.display = 'none';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
       document.getElementById('overview-submit').addEventListener('click', function(){
        var url = 'mmt_controller.php';
        var query = {page: 'index', command: 'Overview', year: document.getElementById('year').value};

        $.get(url, query, function(data) {
        var rows = JSON.parse(data);

        var str = '<table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-collapse: collapse;">';
            str += '<tr><th>Category</th><th>Amount</th><th>Type</th></tr>';  // Header row

            // Loop through the rows and create table rows
            for (var i = 0; i < rows.length; i++) {
                str += '<tr>';
                str += '<td>' + rows[i].source + '</td>';
                str += '<td>' + rows[i].amount + '</td>';
                str += '<td>' + rows[i].type + '</td>';
                str += '</tr>';
            }

            str += '</table>';
        document.getElementById('overview-table').innerHTML = str;
        });
       });
    })
    

 
    document.getElementById('profile').addEventListener('click', function(){
        document.getElementByClass('dropdown-profile-content').style.display = 'block';
    });

    document.getElementById('signout').addEventListener('click', function(){
        document.getElementById('signout-form').submit();
        
    });
    

</script>
</html>