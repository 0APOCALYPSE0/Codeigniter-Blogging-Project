<h2><?= $title ?></h2>
<?php foreach($posts as $post): ?>
    <h3><?= $post['title']; ?></h3>
    <div class = "row">
        <div class = "col-md-3">
            <image src = "<?php echo site_url(); ?>assets/images/posts/<?php echo $post['images']; ?>">
        </div>
        <div class = "col-md-9">
            <small class = "post-date">Posted on: <?= $post['created_at']; ?> in <strong><?php echo $post['name'] ?></strong></small><br>
            <?= word_limiter($post['body'], 60); ?><br><br>
            <p><a class = "btn btn-primary" href = "<?= site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
        </div>
    </div>    
<?php endforeach; ?>
<div class="pagination-link">
    <?php echo $this->pagination->create_links(); ?> 
</div>