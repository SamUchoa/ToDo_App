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
                        <div class="accordion-collapse collapse fs-5 text-justify text-break" id="taskContent<?=$taskId?>">
                        <?=$task['taskContent']?>
                        </div>
                        <span><button>excluir</button></span>
                        <span><button>editar</button></span>
                        
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