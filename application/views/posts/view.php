<h2><?= $post['title']; ?></h2>
<small class = "post-date">Posted on: <?= $post['created_at']; ?></small><br>
<image src = "<?php echo site_url(); ?>assets/images/posts/<?php echo $post['images']; ?>"><br><br>
<div class = "post-body">
    <?= $post["body"]; ?>
</div>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
    <a class = "btn btn-primary float-left" href = "edit/<?php echo $post['slug']; ?>">Edit</a>
    <br><br>
    <?php echo form_open('/posts/delete/'.$post['id']); ?>
        <input type = "submit" class = "btn btn-danger" value = "Delete" class = 'form-control'>
    </form>
<?php endif; ?>
<hr>
<h3>Comments</h3>
<?php if(isset($comments)): ?>
    <?php foreach($comments as $comment): ?>
        <div class = "well">
            <h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No Comments To Display.</p>
<?php endif; ?>
<hr>
<h3>Add Comments</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
    <div class = "form-group">
        <label>Name</label>
        <input type = "text" name = "name" class = 'form-control'>
    </div>
    <div class = "form-group">
        <label>Email</label>
        <input type = "text" name = "email" class = 'form-control'>
    </div>
    <div class = "form-group"> 
        <label>Body</label>
        <textarea name = "body" class = 'form-control'></textarea>
    </div>
    <input type = "hidden" name = "slug" value = "<?php echo $post['slug']; ?>">
    <button class = "btn btn-primary" type = "submit">Submit</button>
</form>
