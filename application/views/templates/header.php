<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel = "stylesheet" href = "https://bootswatch.com/4/flatly/bootstrap.min.css">
        <link rel = "stylesheet" href = "<?= Base_URL(); ?>assets/css/style.css">
        <title>ciBlog</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= Base_URL(); ?>">ciBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= Base_URL(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Base_URL(); ?>about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Base_URL(); ?>posts">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Base_URL(); ?>categories">Category</a>
                    </li>
                </ul>
                <ul class = "navbar-nav pull-right">
                    <?php if(!$this->session->userdata('logged_in')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Base_URL(); ?>users/login">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Base_URL(); ?>users/register">Register</a>
                        </li>
                    <?php endif; ?>
                    <?php if($this->session->userdata('logged_in')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Base_URL(); ?>posts/create">Create Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Base_URL(); ?>categories/create">Create Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Base_URL(); ?>users/logout">Log Out</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>--> 
            </div>
        </nav>

        <div class = "container" style = "padding-top:20px;">
            <?php if($this->session->flashdata('user_registered')): ?>
                <?php echo "<p class = 'alert alert-success'>".$this->session->flashdata('user_registered')."</p>"; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('post_created')): ?>
                <?php echo "<p class = 'alert alert-success'>".$this->session->flashdata('post_created')."</p>"; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('post_updated')): ?>
                <?php echo "<p class = 'alert alert-success'>".$this->session->flashdata('post_updated')."</p>"; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('post_created')): ?>
                <?php echo "<p class = 'alert alert-success'>".$this->session->flashdata('post_created')."</p>"; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('post_deleted')): ?>
                <?php echo "<p class = 'alert alert-danger'>".$this->session->flashdata('post_deleted')."</p>"; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('user_loggedin')): ?>
                <?php echo "<p class = 'alert alert-success'>".$this->session->flashdata('user_loggedin')."</p>"; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('login_failed')): ?>
                <?php echo "<p class = 'alert alert-danger'>".$this->session->flashdata('login_failed')."</p>"; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('user_loggedout')): ?>
                <?php echo "<p class = 'alert alert-danger'>".$this->session->flashdata('user_loggedout')."</p>"; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('category_delete')): ?>
                <?php echo "<p class = 'alert alert-danger'>".$this->session->flashdata('category_delete')."</p>"; ?>
            <?php endif; ?>