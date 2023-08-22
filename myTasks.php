<?php
require_once 'includes/sessionConfig.php';
require_once 'includes/view/tasks_view_inc.php';
require_once 'includes/view/header.php';
?>
        <main class="p-5 ">

            <section class="border border-secondary border-3 fs-1  d-flex list-group text-center">
                <div class="list-group-item ">
                    <button type="button" onclick="window.location.href='newTask.php';" class="border-0 bg-transparent w-100">
                        <span class=""><img src="img/plus.png" width="30px" alt="+"></span> New task
                    </button> 
                </div> 
                <!-- <div class="list-group-item">
                    <button class="border-0 bg-transparent w-100">
                        New Task
                    </button>
                </div> -->

            </section>

    </main>
</body>
</html>