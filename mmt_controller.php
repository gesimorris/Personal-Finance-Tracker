<?php
    include('mmt_model.php');

    $page = isset($_GET['page']) ? $_GET['page'] : null;

    if (empty($page)) {
        $display_modal_window = 'none';
        include('profile.php');
        exit();
    }

    if ($page == 'Profile') {
        $command = $_GET['command'];
        switch ($command) {
            case 'SignIn':
                $username = $_GET['username'];
                $password = $_GET['password'];
                if(ValidateUser($_GET['username'], $_GET['password'])){
                    setcookie('username', $username, time() + 3600);
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['signedin'] = 'YES';
                    $_SESSION['user_id'] = getUserId($username);  
                    include('index.php');
                } else {
                    $error_message = "Invalid Username or Password Try Again";
                    $display_modal_window = 'signin';
                    include('profile.php');
                }
                break;
            case 'SignUp':
                if (checkUsername($_GET['username'])) {
                    $error_message = "Username Already registered";
                    $display_modal_window = 'signin';
                    include('profile.php');
                } else {
                    $result = registerUser($_GET['username'], $_GET['password']);
                    if ($result) {
                        echo "User registered successfull! Please sign in";
                        $display_modal_window = 'signin';
                        include('profile.php');
                    }
                }
                break;
            default:
                echo "Invalid command<br>";
        }
    }   

    if ($page == 'index'){

        session_start();
        if (!isset($_SESSION['signedin'])){
            $display_modal_window = 'none';
            include('profile.php');
            exit();
        }
        $username = $_SESSION['username'];

        $command = $_GET['command'];
        switch ($command){
            case 'SignOut':
                session_unset();
                session_destroy();
                $display_modal_window = 'none';
                include('profile.php');
                break;
            case 'AddIncome':
                $result = addIncome($_GET['amount'], $_GET['source'], $_GET['date']);
                if ($result){
                    echo "Income added successfully!";
                    include('index.php');
                }
                break;
            case 'UpdateIncome':
                $result = updateIncome($_GET['id'], $_GET['amount'], $_GET['source'], $_GET['date']);
                if ($result){
                    echo "Income updated successfully!";
                    include('index.php');
                }
                break;
            case 'DeleteIncome':
                $id = (int) $_GET['incomeID'];
                $result = deleteIncome($id);
                if ($result){
                    echo "Income deleted successfully!";

                    include('index.php');
                }
                break;
            case 'AddExpense':
                $result = addExpense($_GET['expense'], $_GET['category'], $_GET['date_expense']);
                if ($result){
                    echo "Expense added successfully!";
                    include('index.php');
                }
                break;
            case 'UpdateExpense':
                $result = updateExpense($_GET['update_expense_id'], $_GET['update_expense_amount'], $_GET['update_expense_name'], $_GET['update_expense_date']);
                if ($result){
                    echo "Expense updated successfully!";
                    include('index.php');
                }
                break;
            case 'DeleteExpense':
                $result = deleteExpense($_GET['expenseID']);
                if ($result){
                    echo "Expense deleted successfully!";
                    include('index.php');
                }
                break;
            case 'IncomeBreakdown':
                    if (isset($_SESSION['signedin']) && $_SESSION['signedin'] === 'YES') {
                        $user_id = $_SESSION['user_id'];
                        $income_rows = getIncomeRecords($user_id);
            
                    if (!empty($income_rows)) {
                        echo json_encode($income_rows);
                    } else {
                        echo json_encode(array());
                    }
                }
                    break;
            case 'ExpenseBreakdown':
                    if (isset($_SESSION['signedin']) && $_SESSION['signedin'] === 'YES') {
                        $user_id = $_SESSION['user_id']; 
                        $expense_rows = getExpenseRecords($user_id);
    
                    if (!empty($expense_rows)) {
                        echo json_encode($expense_rows);
                    } else {
                        echo json_encode(array());
                    }
                }
                    break;
                
            case 'Overview':
                    if (isset($_SESSION['signedin']) && $_SESSION['signedin'] === 'YES') {
                        $year = $_GET['year'];
                        $income_rows = getIncomeByYear($year);
                        $expense_rows = getExpenseByYear($year);
                        $combined = [];
                        foreach ($income_rows as $income) {
                            $combined[] = [
                                'type' => 'income',
                                'amount' => $income['Amount'],
                                'source' => $income['Source'],
                                'date' => $income['Date']
                            ];
                        }
                        foreach ($expense_rows as $expense) {
                            $combined[] = [
                                'type' => 'expense',
                                'amount' => $expense['Amount'],
                                'source' => $expense['Category'],
                                'date' => $expense['Date']
                            ];
                        }
                
                        if (!empty($combined)) {
                            echo json_encode($combined);
                        } else {
                            echo json_encode(array());
                        }
                    } 
                    break;
            case 'ChangeName':
                $current_username = $_SESSION['username'];
                $new_username = $_GET['name'];
                if (checkUsername($new_username)){
                    echo "Username already exists";
                    include('index.php');
                }
                else {
                    $result = changeName($new_username);
                    if ($result){
                        include('profile.php');
                    }
                }
                break;
            case 'ChangePassword':
                $new_password = $_GET['newPassword'];
                $current_username = $_SESSION['username'];
                if(checkPassword($new_password)){
                    echo "Password already exists";
                    include('index.php');
                }
                else {
                $result = changePassword($new_password);
                if ($result){
                    include('profile.php');
                }
            }
                break;
            case 'DeleteAccount':
                $current_username = $_SESSION['username'];
                $result = deleteAccount();
                if ($result){
                    session_unset();
                    session_destroy();
                    include('profile.php');
                }
                break;
            case 'SetBudget':
                $result = setBudget($_GET['budget_name'], $_GET['budget_amount'], $_GET['budget_start'], $_GET['budget_end']);
                if ($result){
                    include('index.php');
                }
                break;
            case 'UpdateBudget':
                $result = updateBudget($_GET['update_budget_id'], $_GET['update_budget_name'], $_GET['update_budget_amount'], $_GET['update_budget_start'], $_GET['update_budget_end']);
                if ($result){
                    include('index.php');
                }
                break;
            case 'DeleteBudget':
                $result = deleteBudget($_GET['budget_id']);
                if ($result){
                    include('index.php');
                }
                break;
            case 'BudgetBreakdown':
                if (isset($_SESSION['signedin']) && $_SESSION['signedin'] === 'YES') {
                    $user_id = $_SESSION['user_id'];
                    $budget_rows = getBudgetRecords($user_id);
            
                    if (!empty($budget_rows)) {
                        echo json_encode($budget_rows);
                    } else {
                        echo json_encode(array());
                    }
                }
                break;
            case 'Summary':
                echo getUserFinancialSummary();
                break;

            
                
                
    }
}