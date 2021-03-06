<?php require VIEW_ROOT . '/templates/header.php'; ?>
<a class="btn btn-danger" href="<?php BASE_URL; ?>admin/list.php">
    <i class="fa fa-dashboard" style="padding-right: 0.4em"></i>Admin Panel
</a>
<br><br><br>

    <?php if (empty($pages)): ?>
    <p> Sorry, no pages at the moment.</p>
    
    <?php else: ?>
    <div class="list-group">
        <h4>Pages</h4>
        <?php foreach ($pages as $page): ?>
        <a class="list-group-item list-group-item-info" href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug']; ?>">
            <strong style="padding-right: 1em">Title:</strong><?php echo $page['title']; ?>
        </a>
        
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
