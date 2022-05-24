<?php 

    $errors = array(
        'email' => '',
        'username' => '',
        'ingredients' => ''
    );
    $email = $username = $ingredients = '';

    // Validate Post Data 
    // If this page is accessed via the submission of the form below this section evaluates
    if(isset($_POST['submit'])) {
        // Validate email
        if($_POST['email'] == '') {
            $errors['email'] = 'Email is required';
        } else {
            $email = $_POST['email'];
            
            // Email does not pass regex validation
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email must be valid';
            }
        }

        // Validate username
        if($_POST['username'] == '') {
            $errors['username'] = 'Username is required';
        } else {
            $username = $_POST['username'];

            // Username does not pass regex validation
            if(!preg_match("/^[a-zA-Z\s]*$/", $username)) {
                $errors['username'] = 'Username must be letters and spaces only';
            }
        }

        // Ingredients validation
        if($_POST['ingredients'] == '') {
            $errors['ingredients'] = 'At least one ingredient is required';
        } else {
            $ingredients = $_POST['ingredients'];
            
            // Ingredients does not pass regex validation
            if(!preg_match("/^([a-zA-Z0-9]+,?\s*)+$/", $ingredients)) {
               $errors['ingredients'] = 'Ingredients must be comma seperated letters';
            }
        }

        // No errors in the form (ie: the form data can be processed now)
        if(!array_filter($errors)) {
            // Redirect the user to the project page
            $_SESSION['message'] = 'Your form has been submitted successfully';
            header('location: /pages/project.php');
        }
        
    }

?>