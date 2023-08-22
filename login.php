<?php
require_once 'includes/sessionConfig.php';
include_once 'includes/view/header.php';
include_once 'includes/view/view_inc.php';
?>
        <main class="p-5">

            <section class="border border-secondary border-3 fs-1  d-flex list-group text-start p-2 p-lg-5">
                <h1 class="h1">Login</h1>
                <form action="includes/form/login_inc.php" method="post">
                    
                    <div class="mb-lg-1 mb-4">
                        <label for="userLogin" class="form-label">User name:</label>
                        <input type="text" name="userLogin" class="form-control" id="userLogin">
                    </div>
                    <div class="mb-lg-1 mb-4">
                        <label for="userPassword" class="form-label">Password:</label>
                        <input type="password" name="userPassword" class="form-control" id="userPassword">
                    </div>
   
                    <div class="mb-lg-1 mb-4">
                    <input type="submit" value="SEND" class="btn btn-lg btn-primary">
                    </div>

                    <div class="text-danger fs-4">
                        <?php
                            errorOutput();
                            if (isset($_SESSION['userId'])){
                                echo 'welcome';
                            }
                        ?>
                    </div>



                </form>
            </section>

        </main>
    </body>
</html>