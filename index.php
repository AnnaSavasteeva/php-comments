<?php
    $title = 'Комментарии';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php');
    include_once($_SERVER['DOCUMENT_ROOT'] . '/handlers/form-comments.php');
    
?>


<section>
    <?php
        $comments = get_limited_data($db, '*', 'comments');
        while ($comment = mysqli_fetch_assoc($comments)):
    ?>
        <p class='comment-author'><?= $comment['author'] ?>
            <span class='comment-date-time'>
                <span><?= $comment['time'] ?></span>
                <?= $comment['date'] ?>
            </span>
        </p>
        <p class='comment-text'><?= $comment['message'] ?></p>
    <?php endwhile; ?>
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
