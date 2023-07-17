<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="php-tutorial/styles/index.css">
    <link rel="stylesheet" href="php-tutorial/styles/reset.css">
    <link rel="icon" type="image/x-icon" href="php-tutorial/static/icons/checklist.svg">
</head>
<body>
    <div id="app">
        <div id="app-header">
            <h1 id="app-title">To-Do List</h1>
        </div>
        <div id="app-body">
            <div class="container-box">
                <span class="container-box-title">
                    Tasks
                </span>
                <div id="task-list-body">
                    <?php 
                        $newTask = $_POST['new-task'];
                        $taskList = array();

                        $taskList[] = $newTask;

                        foreach($taskList as $task){
                            echo "<li>$task</li>";
                        };
                    ?>
                </div>
            </div>
            <div class="container-box">
                <span class="container-box-title">
                    New Task
                </span>
                <form id="new-task-form" method="post">
                    <input type="text" name="new-task" id="task-input-box">
                    <input type="submit" id="task-submit-btn" value="ADD">
                </form>
            </div>
        </div>
        <div id="app-footer">
            This is where a good footer would go with some link or something cool like that</a>
        </div>
    </div>
</body>
</html>
