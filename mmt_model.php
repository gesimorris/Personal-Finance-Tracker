<?php
    $conn = mysqli_connect('localhost','w3godubo','w3godubo136', 'C354_w3godubo');
    
    // Function to check if the username exists in the database
    function ValidateUser($username, $password) {
        global $conn;
        $query = "SELECT * FROM Users WHERE Username = '$username' AND Password = '$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Function to check if the username exists in the database when signing up
    function checkUsername($username) {
        global $conn;
        $query = "SELECT * FROM Users WHERE Username = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Function to check password
    function checkPassword($password) {
        global $conn;
        $query = "SELECT * FROM Users WHERE Password = '$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Function to register a new user in the database
    function registerUser($username, $password) {
        global $conn;
        $current_date = date("Ymd");
        $query = "INSERT INTO Users VALUES (NULL, '$username', '$password', $current_date)";
        $result = mysqli_query($conn, $query);
        return $result;
    }
    // Function to add income to the database
    function addIncome($amount, $source, $date) {
        global $conn;
        $user_id = $_SESSION['user_id'];
        $query = "INSERT INTO Income VALUES (NULL, $amount, '$source', '$date', $user_id)";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to add expense to the database

    function addExpense($amount, $source, $date) {
        global $conn;
        $user_id = $_SESSION['user_id'];
        $query = "INSERT INTO Expenses VALUES (NULL, $amount, '$source', '$date', $user_id)";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to update the income record in the database
    function updateIncome($id, $amount, $source, $date) {
        global $conn;
        $query = "UPDATE Income SET Amount = $amount, Source = '$source', Date = '$date' WHERE Id = $id";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to update the expense record in the database
    function updateExpense($id, $amount, $source, $date) {
        global $conn;
        $query = "UPDATE Expenses SET Amount = $amount, Category = '$source', Date = '$date' WHERE Id = $id";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to delete the income record from the database
    function deleteIncome($id) {
        global $conn;
        $id = (int) $id;
        $query = "DELETE FROM Income WHERE Id = $id";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to delete the expense record from the database
    function deleteExpense($id) {
        global $conn;
        $query = "DELETE FROM Expenses WHERE Id = $id";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to get the user id from the database
    function getUserId($username) {
        global $conn;
        $query = "SELECT * FROM Users WHERE Username = '$username'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $id = $row['Id'];
        return $id;
    }

    // Function to get the income records from the database
    function getIncomeRecords($user_id) {
        global $conn;
        $query = "SELECT * FROM Income WHERE User_Id = $user_id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            return [];
        }

        $income = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $income[] = $row;
            
        }
        return $income;
    }

    // Function to get the expense records from the database
    function getExpenseRecords($user_id) {
        global $conn;
        $query = "SELECT * FROM Expenses WHERE User_Id = $user_id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            return [];
        }

        $expense = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $expense[] = $row;
            
        }
        return $expense;
    }

    // Function to get income from specific year
    function getIncomeByYear($year) {
        global $conn;
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM Income WHERE User_Id = $user_id AND SUBSTRING(CAST(date AS CHAR), 1, 4) = '$year'"; // Cast date to string
        $result = mysqli_query($conn, $query);
        
        if(!$result) {
            return [];
        }

        $yearly_income = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $yearly_income[] = $row;
            
        }
        return $yearly_income;
    }
    
    // Function to get expense from specific year
    function getExpenseByYear($year) {
        global $conn;
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM Expenses WHERE User_Id = $user_id AND SUBSTRING(CAST(date AS CHAR), 1, 4) = '$year'";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            return [];
        }

        $yearly_expense = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $yearly_expense[] = $row;
            
        }
        return $yearly_expense;
    }

    // Function to change the username
    function changeName($new_username) {
        global $conn;
        $current_username = $_SESSION['username'];
        $query = "UPDATE Users SET Username = '$new_username' WHERE Username = '$current_username'";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to change the password
    function changePassword($new_password) {
        global $conn;
        $current_username = $_SESSION['username'];
        $query = "UPDATE Users SET Password = '$new_password' WHERE Username = '$current_username'";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to delete the user account
    function deleteAccount() {
        global $conn;
        $current_username = $_SESSION['username'];
        $query = "DELETE FROM Users WHERE Username = '$current_username'";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to set budget
    function setBudget($name, $amount, $start_date, $end_date) {
        global $conn;
        $user_id = $_SESSION['user_id'];
        $query = "INSERT INTO Budget VALUES (NULL, $user_id, '$name', $amount, $start_date, $end_date)";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to update budget
    function updateBudget($id, $name, $amount, $start_date, $end_date) {
        global $conn;
        $query = "UPDATE Budget SET budget_name = '$name', amount = $amount, start_date = '$start_date', end_date = '$end_date' WHERE Id = $id";
        $result = mysqli_query($conn, $query);
        return $result;
    }
    // Function to delete budget
    function deleteBudget($id) {
        global $conn;
        $query = "DELETE FROM Budget WHERE Id = $id";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    // Function to get budget records
    function getBudgetRecords($user_id) {
        global $conn;
        $query = "SELECT * FROM Budget WHERE User_Id = $user_id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            return [];
        }
        $budget = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $budget[] = $row;
        }
        return $budget;
    }
       
    // Function to get users financial summary
    function getUserFinancialSummary() {
    global $conn;
    $user_id = $_SESSION['user_id'];
    
    $income_query = "SELECT SUM(Amount) as TotalIncome FROM Income WHERE User_Id = $user_id";
    $income_result = mysqli_query($conn, $income_query);
    $total_income = mysqli_fetch_assoc($income_result)['TotalIncome'] ?? 0;

    
    $expense_query = "SELECT SUM(Amount) as TotalExpense FROM Expenses WHERE User_Id = $user_id";
    $expense_result = mysqli_query($conn, $expense_query);
    $total_expense = mysqli_fetch_assoc($expense_result)['TotalExpense'] ?? 0;
    $summary = ['total_income' => $total_income, 'total_expense' => $total_expense];
    return json_encode($summary);
    }

