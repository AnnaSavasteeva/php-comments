</main>

<footer>
    <div class='footer-wrapper'>
        <img src='<?= $company->getLogo(); ?>' alt='Логотип Future Internet agency' class='logo-footer'>
        <div>
            <div class='contacts'>
                <p>Телефон: <?= $company->getPhone(); ?></p>
                <p>Email: <span class='underline'><?= $company->getEmail(); ?></span></p>
                <p>Адрес: <span class='underline'><?= $company->getAddress(); ?></span></p>
            </div>
            <p class='copyright'><?= $company->getCopyright(); ?></p>
        </div>
    </div>
</footer>

</body>

</html>