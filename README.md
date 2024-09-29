<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://restart-tver.ru/wp-content/uploads/2017/02/пакет-макет.png" type="image/x-icon"> <!-- Логотип -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://i.ytimg.com/vi/XSJNsBZsd8E/maxresdefault.jpg') no-repeat center center fixed; /* Фон сайта */
            background-size: cover;
            margin: 0;
            padding: 0;
            color: black; /* Текст черный для лучшей читабельности */
        }
        header {
            background: url('https://blog.kamva.ir/wp-content/uploads/118.png') no-repeat center center; /* Фон для заголовка */
            background-size: cover;
            padding: 3px 0; /* Уменьшено */
            text-align: center;
            position: fixed; /* Закреплен */
            top: 0;
            width: 100%;
            z-index: 1000; /* На переднем плане */
        }
        header img {
            width: 200px; /* Увеличен размер логотипа */
            height: auto;
        }
        header h1 {
            font-size: 20px; /* Уменьшен размер текста заголовка */
            margin: 5px 0; /* Уменьшен отступ */
        }
        nav {
            margin: 10px; /* Уменьшено */
            text-align: center;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: black; /* Черный цвет текста ссылок */
            font-weight: bold;
        }
        nav a:hover {
            color: #ff0000; /* Меняем цвет при наведении на красный */
        }
        main {
            padding: 70px 20px 20px; /* Увеличен верхний отступ для учета фиксированного заголовка */
            text-align: center;
        }
        footer {
            background: url('https://blog.kamva.ir/wp-content/uploads/118.png') no-repeat center center; /* Фон для подвала */
            background-size: cover;
            color: black; /* Черный цвет текста в подвале */
            text-align: center;
            padding: 5px 0; /* Уменьшено */
            position: relative; /* Теперь относительное */
            width: 100%;
        }
        .iphone-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        .iphone-item {
            background-color: white; /* Фон для элементов iPhone */
            padding: 15px;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 200px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            color: black; /* Чтобы текст внутри карточек был черным */
        }
        .iphone-item img {
            max-width: 100%;
            height: auto;
        }
        .iphone-item h3 {
            margin: 10px 0;
        }
        .iphone-item p {
            margin: 5px 0;
        }
        .iphone-item .price {
            color: green;
            font-weight: bold;
        }
        /* Стиль для секции приветствия */
        #home {
            background: url('https://blog.kamva.ir/wp-content/uploads/118.png') no-repeat center center; /* Фон для секции приветствия */
            background-size: cover;
            padding: 20px;
            border-radius: 5px;
        }
        #home h2, #home p {
            color: black; /* Черный цвет текста заголовка и абзаца */
        }
        /* Стиль для комментариев */
        .comment-section {
            margin-top: 40px;
            background: url('https://blog.kamva.ir/wp-content/uploads/118.png') no-repeat center center; /* Новый фон для секции комментариев */
            background-size: cover;
            padding: 20px;
            border-radius: 5px;
        }
        .comment-section h2 {
            margin-bottom: 10px;
            color: black; /* Черный цвет заголовка секции комментариев */
        }
        .comment-form {
            margin: 15px 0;
        }
        .comment-form input, .comment-form textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
        }
        .comment-form button {
            background-color: black; /* Черная кнопка */
            color: white; /* Белый текст кнопки */
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .comment-form button:hover {
            background-color: #333; /* Темно-серая при наведении */
        }
    </style>
</head>
<body>

<header>
    <img src="http://restart-tver.ru/wp-content/uploads/2017/02/пакет-макет.png">
</header>

<nav>
    <a href="#home">Главная</a>
    <a href="#about">О нас</a>
    <a href="#contact">Контакты</a>
</nav>

<main>
    <section id="home">
        <h2>Добро пожаловать в Re-Старт!</h2>
        <p>Мы предлагаем все актуальные модели iPhone по выгодным ценам. Выберите свой iPhone ниже:</p>
        
        <div class="iphone-list">
            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyjbFJ5HdoyA6vovDAaez2hOk0alEz0jJS9emlwryVfwGhnXq.jpg">
                <h3>iPhone 15 Pro</h3>
                <p>Топовая модель 2024 года.</p>
                <p class="price">Цена: $1299</p>
            </div>

            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyfTxBKz1i5IDxSpsyrseihhgkX4ieC0IIofmgTOb0Tijz1Pu.jpg">
                <h3>iPhone 15</h3>
                <p>Отличный выбор с новейшими функциями.</p>
                <p class="price">Цена: $999</p>
            </div>

            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyvz0gFPpuWyyXbSUvk0uYz0tmz2P86G7fPWlynfRtDa7roEXK.jpg" alt="iPhone 14 Pro">
                <h3>iPhone 14 Pro</h3>
                <p>Продвинутый флагман 2023 года.</p>
                <p class="price">Цена: $1199</p>
            </div>

            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyDLDp7Sefl0CfUL5L8ez2AJ02KqWFtnbcW4z0t8Pc6o4fq8J.jpg">
                <h3>iPhone 14</h3>
                <p>Мощный смартфон с отличной камерой.</p>
                <p class="price">Цена: $899</p>
            </div>

            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyvz0gFPpuWyyXbSUvk0uYz0tmz2P86G7fPWlynfRtDa7roEXK.jpg" alt="iPhone 13 Pro">
                <h3>iPhone 13 Pro</h3>
                <p>Прошлогодний флагман.</p>
                <p class="price">Цена: $1099</p>
            </div>

            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyDLDp7Sefl0CfUL5L8ez2AJ02KqWFtnbcW4z0t8Pc6o4fq8J.jpg" alt="iPhone 13">
                <h3>iPhone 13</h3>
                <p>Отличный выбор по разумной цене.</p>
                <p class="price">Цена: $799</p>
            </div>

            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyDLEmtEz0Fp
691gz2F1yW2LRBBPn3T5z27fuuR8e9kIm10p4D.jpg" alt="iPhone 12 Pro">
                <h3>iPhone 12 Pro</h3>
                <p>Флагманская модель 2021 года.</p>
                <p class="price">Цена: $999</p>
            </div>

            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyrrrxj3nNqMXbesPY0dfi5nGC3ayVh33Phr3w4Jt9k8dcO.jpg" alt="iPhone 12">
                <h3>iPhone 12</h3>
                <p>Надежный и мощный телефон.</p>
                <p class="price">Цена: $699</p>
            </div>

            <div class="iphone-item">
                <img src="https://4pda.to/s/as6yyDLEmtEz0Fp691gz2F1yW2LRBBPn3T5z27fuuR8e9kIm10p4D.jpg" alt="iPhone SE">
                <h3>iPhone SE (2022)</h3>
                <p>Доступная модель с хорошей производительностью.</p>
                <p class="price">Цена: $499</p>
            </div>
        </div>
    </section>

    <section class="comment-section">
        <h2>Оставьте свой отзыв</h2>
        <form class="comment-form">
            <input type="text" placeholder="Ваше имя" required>
            <textarea rows="4" placeholder="Ваш отзыв" required></textarea>
            <button type="submit">Отправить</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2024 Re-Старт</p>
</footer>

</body>
</html>
