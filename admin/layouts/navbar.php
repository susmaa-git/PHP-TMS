


<div class="container-fluid bg-danger">
        <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../dashboard.php">Home</a>
                        </li>
                        <li class="nav-item dropdown bg-danger ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Create
                            </a>
                            <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../users/create.php">Add User</a></li>
                                <li><a class="dropdown-item" href="../tasks/create.php">Add Task</a></li>
                                <li><a class="dropdown-item" href="../files/create.php">Add File</a></li>
                                <li><a class="dropdown-item" href="../teachers/create.php">Add Teacher</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Manage
                            </a>
                            <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../users/index.php">Manage Users</a></li>
                                <li><a class="dropdown-item" href="../tasks/index.php">Manage Tasks</a></li>
                                <li><a class="dropdown-item" href="../files/index.php">Manage Files</a></li>
                                <li><a class="dropdown-item" href="../teachers/index.php">Manage Teacher</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                    <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <p><a class="dropdown-item" href="../auth/logout.php">Logout</a></p>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-sm " href="../register.php" role="button"> Register</a>
                        <a class="btn btn-primary btn-sm ms-3" href="../index.php" role="button"> Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
