<?php require VIEW_ROOT . '/templates/header.php'; ?>

    <?php if (!$page): ?>
        <p>No page found, sorry.</p>
    <?php else: ?>

        <h2><?php echo escape($page['title']); ?></h2>
        <div id="body"><?php echo $page['body']; ?></div>
        <div style="margin-top: 4em" class="well well-sm">
            <i style="padding-right: 0.4em;" class="fa fa-file"></i>
            <span style="padding-right: 0.4em">Created on</span><?php echo $page['created']->format('jS M Y H:i'); ?>
            &nbsp;&nbsp;&nbsp;
            <?php if($page['updated']): ?>
            <i style="padding-right: 0.4em;" class="fa fa-pencil"></i>
            <span style="padding-right: 0.4em">Updated on</span><?php echo $page['updated']->format('jS M Y H:i'); ?>
            <?php endif; ?>
        </div>      
    <?php endif; ?>

    <a class="btn btn-primary" href="javascript: history.go(-1)">Back </a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
