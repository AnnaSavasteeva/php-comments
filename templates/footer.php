</main>

<footer>
    <div class='footer-wrapper'>
        <img src='<?= $company['logo'] ?>' alt='Логотип Future Internet agency' class='logo-footer'>
        <div>
            <div class='contacts'>
                <p>Телефон: <?= $company['phone'] ?></p>
                <p>Email: <span class='underline'><?= $company['email'] ?></span></p>
                <p>Адрес: <span class='underline'><?= $company['address'] ?></span></p>
            </div>
            <p class='copyright'><?= $company['copyright'] ?></p>
        </div>
    </div>
</footer>

</body>

</html>