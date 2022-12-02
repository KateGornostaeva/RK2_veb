<footer id ="footer">
    <p>Контактная информация</p>
    <p>Почта: kate.gornostaeva@inbox.ru </p>
    <p><a href = "<?php $name='О нас'; $link ='site_about_shop.php'; $current_page=true; echo $link;?>">
        <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
    </a></p>
    <p><a href = "<?php $name='Обратная связь'; $link ='site_feedback.php'; $current_page=true; echo $link;?>">
        <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
    </a></p>
    <p><img class = "img_logo" src="img/logo.jpg" title="logo" alt="logo" width="30"> World of Games</p>
    <p>Все права защищены. Все торговые марки являются собственностью их правообладателей</p>
    <div id = "data_footer"><p><?php echo 'Сформировано ', $today, " в ", $time?></p>
</footer>