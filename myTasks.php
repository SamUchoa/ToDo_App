<?php
require_once 'includes/sessionConfig.php';
require_once 'includes/view/tasks_view_inc.php';
require_once 'includes/view/header.php';

if (!isset($_SESSION['userId'])){
    header('location: login.php');
}
?>
        <main class="p-5 h-auto">

            <section class="border border-secondary border-3 fs-1 d-flex list-group text-center">
                <div class="list-group-item">
                    <a tabindex="1" class="w-100 text-decoration-none text-black" href="newTask.php">
                        <span class=""><img src="img/plus.png" width="30px" alt="+"></span> New task
                    </a> 
                </div> 

                <div class="accordion">

                <?php
                    $taskOrder = 2;
                    foreach (taskOutput() as $task) {
                ?>
                    
                    <div class="accordion-item list-group-item p-0">
                        <h2 class="accordion-header">
                            <button class="bg-trasparent border-0 text-break container-fluid p-2" type="button" data-bs-toggle="collapse" data-bs-target="#taskContent<?=$taskOrder?>" tabindex="<?=$taskOrder?>">
                            <?=$task['taskTitle']?>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse fs-5 text-justify text-break justify-content-between row" id="taskContent<?=$taskOrder?>">
                        <form action="includes/form/myTasks.php" method="post" class="p-0 align-items-center">
                                <input class="w-50 border-0" name="content" value="<?=$task['taskContent']?>">
                                <span class="col-lg-3 col-sm-12 btn-group" role="group">
                                    <button class="btn bg-danger p-0 btn-danger" type="submit" name="delete" value="<?=$task['taskId']?>">excluir</button>
                                    <button class="btn bg-primary p-0 btn-primary" type="submit" name="update" value="<?=$task['taskId']?>">editar</button>
                                </span>

                        </form>

                        </div>

                        
                    </div>


                <?php
                        $taskOrder++;
                    }
                ?>
                </div>



            </section>

    </main>
</body>
</html>