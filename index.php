<?php 

    session_start();
    require_once 'libraries/validate-form.php';
    
?>

<?php require_once 'templates/header.php' ?>
    
    <div class="mt-5 mb-5 ml-auto mr-auto" style="max-width: 30rem;">

        <form action="./index.php" method="POST" novalidate>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email goes here" name='email' value="<?php echo htmlspecialchars($email) ?>">
                <small class="form-text" style="color: red;">
                    <?php echo $errors['email']?>
                </small>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Letters and spaces" name='username' value="<?php echo htmlspecialchars($username) ?>">
                <small class="form-text" style="color: red;">
                    <?php echo $errors['username']?>
                </small>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Ingredients</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Comma seperated list" name='ingredients' value="<?php echo htmlspecialchars($ingredients) ?>">
                <small class="form-text" style="color: red;">
                    <?php echo $errors['ingredients']?>
                </small>
            </div>

            <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
        </form>
    
    </div>

    <?php require_once 'templates/footer.php' ?>