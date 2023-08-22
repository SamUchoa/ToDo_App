<?php
include_once 'includes/sessionConfig.php';
include_once 'includes/view/header.php';
include_once 'includes/view/view_inc.php';

?>
<main class="p-5" >
    <section class="border border-secondary border-3 fs-1  d-block list-group text-start p-2 p-lg-5">
    
        <form action="includes/form/newTask_inc.php" method="post">

            <div class="mb-lg-1 mb-4 ">
                <label for="taskTitle" class="form-label">Título</label>

                <input type="text" name="taskTitle" class="form-control w-75" id="taskTitle">

            </div>

            <div class="mb-lg-1 mb-4">

            <label for="taskContent" class="form-label"></label>
            <textarea class="form-control" name="taskContent" id="taskContent" rows="12"></textarea>


            </div>

            <div class="mb-lg-1 mb-4">

                <input type="submit" value="CREATE" class="btn btn-lg btn-primary">

            </div>

            <div class="mb-lg-1 mb-4 text-danger">
                <?php
                errorOutput()
                ?>
            </div>

        </form>
    </section>
</main>