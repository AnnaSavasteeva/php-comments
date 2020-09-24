<?php
    $title = 'Комментарии';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php');
    include_once($_SERVER['DOCUMENT_ROOT'] . '/handlers/form-comments.php');
    
?>


<section>
    <?php
        $id = (new \Future\Users\Comments())->getId('DESC', 3);

        while ($row = mysqli_fetch_assoc($id)) {
            $comment = new \Future\Users\Comments($row['id']);
    ?>
            <p class='comment-author'><?= $comment->getAuthor(); ?>
                <span class='comment-date-time'>
                    <span><?= $comment->getTime(); ?></span>
                    <?= $comment->getDate(); ?>
                </span>
            </p>
            <p class='comment-text'><?= $comment->getMessage(); ?></p>
    <?php } ?>
</section>

<p class='form-comments-title'>Оставить комментарий</p>
<form method='POST' class='form-comments'>
    <label for='author'>Ваше имя</label>
    <input id='author' name='author' type='text'>
    <label for='comment'>Ваш комментарий</label>
    <textarea id='comment' name='comment'></textarea>
    <button type='submit' name='submit'>Отправить</button>
</form>


<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'); ?>
