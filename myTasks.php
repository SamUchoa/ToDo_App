<?php
require_once 'includes/sessionConfig.php';
require_once 'includes/view/tasks_view_inc.php';
require_once 'includes/view/header.php';
?>
        <main class="p-5 h-auto">

            <section class="border border-secondary border-3 fs-1 d-flex list-group text-center">
                <div class="list-group-item">
                    <a class="w-100 text-decoration-none text-black" href="newTask.php">
                        <span class=""><img src="img/plus.png" width="30px" alt="+"></span> New task
                    </a> 
                </div> 

                <div class="accordion">

                <?php
                    $taskId = 0;
                    foreach (taskOutput() as $task) {
                ?>
                    
                    <div class="accordion-item list-group-item p-0">
                        <h2 class="accordion-header">
                            <button class="bg-trasparent border-0 text-break container-fluid p-2" type="button" data-bs-toggle="collapse" data-bs-target="#taskContent<?=$taskId?>">
                            <?=$task['taskTitle']?>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse fs-5 text-justify text-break justify-content-between row" id="taskContent<?=$taskId?>">
                        <div class="col-lg-9 col-sm-5 p-0"><?=$task['taskContent']?></div>
                        <div class="col-lg-3 col-sm-12 btn-group" role="group">
                        <button class="btn bg-danger p-0 btn-danger" type="button">excluir</button>
                        <button class="btn bg-primary p-0 btn-primary" type="button">editar</button>
                        </div>

                        </div>

                        
                    </div>


                <?php
                        $taskId++;
                    }
                ?>
                </div>



            </section>

    </main>
</body>
</html>