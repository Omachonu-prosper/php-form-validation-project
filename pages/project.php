<?php 

    session_start();

?>

<?php require_once 'templates/header.php' ?>
    <div class="mt-5 mb-5 ml-auto mr-auto" style="max-width: 30rem;">

        <?php if(isset($_SESSION['message'])) { ?>
            <!-- Show this alert when the form submits  -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>

    </div>

<?php require_once 'templates/footer.php' ?>
