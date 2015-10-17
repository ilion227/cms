<?php require VIEW_ROOT . '/templates/header.php'; ?>
<a href="<?php VIEW_ROOT ?>/cms">Exit Admin CP</a>
<br><br><br>

    <?php if (empty($pages)): ?>
<p>No pages at the moment.</p>
    <?php else: ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Label</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pages as $page): ?>
        <tr>
            <td><?php echo escape($page['label']); ?></td>
            <td><?php echo escape($page['title']); ?></td>
            <td>
                <a class="btn btn-default" href="<?php echo BASE_URL; ?>/page.php?page=<?php echo escape($page['slug']); ?>">
                    <i class="fa fa-link" style="padding-right: 0.4em"></i><?php echo escape($page['slug']); ?>
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo escape($page['id']); ?>">
                    <i class="fa fa-pencil"></i>
                </a>
            </td>
            <td>
                <a class="btn btn-danger" href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo escape($page['id']); ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    <?php endif; ?>

<a class="btn btn-primary" href="<?php echo BASE_URL; ?>/admin/add.php">Add new page</a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
