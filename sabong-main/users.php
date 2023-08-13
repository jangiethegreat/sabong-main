    <!DOCTYPE html>
    <html>

    <head>
        <title>User CRUD</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <h1 class="mt-4">User CRUD</h1>

            <?php
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $action = ($id != '') ? 'edit' : 'add';
            ?>

            <form action="process.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" value="">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" value="">
                </div>

                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" value="">
                </div>

                <div class="form-group">
                    <label for="level">Level:</label>
                    <select class="form-control" name="level">
                        <option value="admin">Admin</option>
                        <option value="cashier">Cashier</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" name="<?php echo $action; ?>">
                    <?php echo ucfirst($action); ?>
                </button>
            </form>
        </div>
        <!-- Include Bootstrap JS (Optional) -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>