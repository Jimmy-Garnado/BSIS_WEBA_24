<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Edit Task</h2>

        <div class="mb-2">
            <label for="">Task Name</label>
            <input name="task_name" value="<?= $tasks->task_name ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Description</label>
            <input name="task_description" value="<?= $tasks->task_description ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Status</label>
            <select name="task_status" class="form-control">
                <option value="Incomplete">Incomplete</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="">Task Due</label>
            <input name="task_due" value="<?= $tasks->task_due ?>" type="date" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>