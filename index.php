<?php
require_once 'includes/sessionConfig.php';
include_once 'includes/view/header.php';
require_once 'includes/view/view_inc.php';
?>
        <main class="p-5">

            <section class="border border-secondary border-3 fs-1  d-flex list-group text-start p-2 p-lg-5">
                <h1 class="h1">Sing up</h1>
                <form action="includes/form/singUp_inc.php" method="post">
                    
                    <div class="mb-lg-1 mb-4">
                        <label for="userName" class="form-label">User name:</label>
                        <input type="text" name="userName" class="form-control" id="userName">
                    </div>

                    <div class="mb-lg-1 mb-4">
                        <label for="userEmail" class="form-label">Email:</label>
                        <input type="text" name="userEmail" class="form-control" id="userEmail">
                    </div>

                    <div class="mb-lg-1 mb-4">
                        <label for="userPassword" class="form-label">Password:</label>
                        <input type="password" name="userPassword" class="form-control" id="userPassword">
                    </div>
                    <div class="mb-lg-1 mb-4">
                        <label for="passwordRepeat" class="form-label">Password repeat:</label>
                        <input type="password" name="passwordRepeat" class="form-control" id="passwordRepeat">
                    </div>
                    
                    <div class="mb-lg-1 mb-4">
                    <input type="submit" value="SEND" class="btn btn-lg btn-primary">
                    </div>

                    <div class="text-danger fs-4">
                        <?php
                            errorOutput();
                        ?>
                    </div>



                </form>
            </section>

        </main>
    </body>
</html>