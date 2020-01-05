<h2><?= $title; ?></h2>
<ul class = "list-group">
    <?php foreach($categories as $category): ?>
        <li class = "list-group-item" ><a href = "<?php echo site_url('./categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
            <?php if($this->session->userdata('user_id') == $category['user_id']): ?>
                <?php echo form_open('categories/delete/'.$category['id'], array('class' => 'cat-delete')); ?>
                    <input type = "submit" class = "btn-link btn-danger float-right" value = "[X]" class = 'form-control'>
                </form>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>