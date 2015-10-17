<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2>Add page</h2>

<form action="<?php echo BASE_URL; ?>/admin/add.php" method="POST" autocomplete="off">
    <label for="title">
        Title
        <input type="text" name="title" id="title">
    </label>
     <label for="label">
        Label
        <input type="text" name="label" id="label">
    </label>
     <label for="slug">
        Slug
        <input type="text" name="slug" id="slug">
    </label>
     <label for="body">
         Body
         <textarea name="body" id="body" cols="30" rows="4"></textarea>
    </label>
    
    <input class="btn btn-success" type="submit" value="Add">
    <input class="btn btn-primary" type="reset" value="Clear">
</form>

<a href="javascript: history.go(-1)">Back </a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
