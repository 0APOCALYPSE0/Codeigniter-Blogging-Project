<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('users/register'); ?>
    <div class = "form-group">
        <label>Name</label>
        <input type = "text" class = "form-control" name = "name" placeholder = "Enter Name">
    </div>
    <div class = "form-group">
        <label>Email</label>
        <input type = "text" class = "form-control" name = "email" placeholder = "Enter Email">
    </div>
    <div class = "form-group">
        <label>Username</label>
        <input type = "text" class = "form-control" name = "username" placeholder = "Enter Username">
    </div>
    <div class = "form-group">
        <label>Password</label>
        <input type = "text" class = "form-control" name = "password" placeholder = "Enter Password">
    </div>
    <div class = "form-group">
        <label>Confirm Password</label>
        <input type = "text" class = "form-control" name = "password2" placeholder = "Enter Confirm Password">
    </div>
    <button type = "submit" class = "btn btn-primary">Register</button>
</form>