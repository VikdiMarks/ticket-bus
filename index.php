<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ticket-bus</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

  <?php require_once('./app/include/header.php'); ?>

  <main>

    <?php require_once('./app/reg/reg-form.php'); ?>

    <aside class="ticket-order">
      <div class="ticket-order-content">
        <button class="ticket-order-close">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
          </svg>
        </button>

        <section class="bus-choose-seats">
          <span class="bus-choose-seats-title">Выберите место / места</span>

          <div class="bus-seats">
            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">2</li>
              <li class="bus-seats-item seat-2">1</li>
              <li class="bus-seats-item seat-4 busy">4</li>
              <li class="bus-seats-item seat-5">3</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">7</li>
              <li class="bus-seats-item seat-2 busy">8</li>
              <li class="bus-seats-item seat-4 busy">5</li>
              <li class="bus-seats-item seat-5">6</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">11</li>
              <li class="bus-seats-item seat-2">12</li>
              <li class="bus-seats-item seat-4">9</li>
              <li class="bus-seats-item seat-5 busy">10</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1 busy">15</li>
              <li class="bus-seats-item seat-2 busy">16</li>
              <li class="bus-seats-item seat-4">13</li>
              <li class="bus-seats-item seat-5 busy">14</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">19</li>
              <li class="bus-seats-item seat-2">20</li>
              <li class="bus-seats-item seat-4">17</li>
              <li class="bus-seats-item seat-5">18</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">23</li>
              <li class="bus-seats-item seat-2">24</li>
              <li class="bus-seats-item seat-4">21</li>
              <li class="bus-seats-item seat-5">22</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-4">25</li>
              <li class="bus-seats-item seat-5">26</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-4">29</li>
              <li class="bus-seats-item seat-5">30</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">35</li>
              <li class="bus-seats-item seat-2">36</li>
              <li class="bus-seats-item seat-4 busy">33</li>
              <li class="bus-seats-item seat-5">34</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">39</li>
              <li class="bus-seats-item seat-2">40</li>
              <li class="bus-seats-item seat-4">37</li>
              <li class="bus-seats-item seat-5">38</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">43</li>
              <li class="bus-seats-item seat-2">44</li>
              <li class="bus-seats-item seat-4">41</li>
              <li class="bus-seats-item seat-5">42</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">47</li>
              <li class="bus-seats-item seat-2 busy">48</li>
              <li class="bus-seats-item seat-4 busy">45</li>
              <li class="bus-seats-item seat-5">46</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item seat-1">51</li>
              <li class="bus-seats-item seat-2">52</li>
              <li class="bus-seats-item seat-4">49</li>
              <li class="bus-seats-item seat-5">50</li>
            </ul>

            <ul class="bus-seats-col">
              <li class="bus-seats-item busy">53</li>
              <li class="bus-seats-item busy">54</li>
              <li class="bus-seats-item busy">55</li>
              <li class="bus-seats-item busy">56</li>
              <li class="bus-seats-item busy">57</li>
            </ul>
          </div>

          <button class="button-1 bus-choose-seat">Выбрать место</button>
        </section>

        <section class="enter-passenger">
          <div class="ticket">
            <div class="ticket-title ticket-item">
              <div class="ticket-time">
                14:57,
                <span class="ticket-date">03.04</span>
                <span class="ticket-station">Минск</span>
              </div>
              <span class="ticket-travel-time">3ч 17мин</span>
              <div class="ticket-time">
                14:57
                <span class="ticket-date">03.04</span>
                <span class="ticket-station">Гомель</span>
              </div>
            </div>

            <div class="ticket-description ticket-item">
              <div class="ticket-number-seat">
                <span class="ticket-number-seat-title">Вагон</span>
                <span class="ticket-number-seat-content">№1 (сидячий)</span>
              </div>
              <div class="ticket-number-seat">
                <span class="ticket-number-seat-title">Места</span>
                <span class="ticket-number-seat-content">№1 13</span>
              </div>
            </div>

            <div class="ticket-price ticket-item">
              <span class="ticket-price-title">Сумма заказа</span>
              <span class="ticket-price-content">26,64 byn</span>
            </div>
          </div>

          <div class="passenger-data">
            <div class="passenger-title">
              <span>Пассажир №1</span>
              <button>Изменить</button>
            </div>

            <div class="passenger-content">
              <span class="passenger-name">
                Lorem Ipsum Lorem
              </span>
              <span class="passenger-text">Паспорт гаржданина Российской Федерации, 23532523, +803343535343</span>
            </div>
          </div>

          <form action="post" class="ticket-access">
            <div class="ticket-access-content">
              <input type="checkbox" name="" id="">
              <p>Потверждаю, что с <a href="#">условиями оферты, правилами и особенностями оформления электронного
                  проездного документа</a>, ознакомлен
              </p>
            </div>

            <button type="button" class="button-1 ticket-access-button">Оформить заказ</button>
          </form>
        </section>
      </div>
    </aside>

    <section class="ticket-search box">
      <h1 class="ticket-search-title">
        <span>Купить билет на автобус</span>
        <span>Быстро легко надежно</span>
      </h1>
      <form action="post" class="main-form">
        <label class="search-city">
          <input type="text" required>
          <span>Откуда</span>
        </label>

        <button type="button" class="ticket-input-reverse">
          <img src="" alt="">
        </button>

        <label class="search-city">
          <input type="text" required>
          <span>Куда</span>
        </label>

        <label class="date-trip active">
          <input type="date">
          <span>Дата</span>
        </label>

        <button type="button" class="button-1 order-button">
          <span>Найти билет</span>
        </button>
      </form>
    </section>

    <div class="offers box">
      <div class="offers-wrapper">
        <div class="offers-item">
          <div class="offers-item-stations">
            <label>
              <input type="checkbox" name="" id="">
              <span>Минск</span>
            </label>
            <label>
              <input type="checkbox" name="" id="">
              <span>Гомель</span>
            </label>
          </div>
          <div class="offers-item-wrapper">
            <span class="offers-item-price">14 byn</span>
            <button class="button-2 offers-item-button">Купить</button>
          </div>
        </div>

        <div class="offers-item">
          <div class="offers-item-stations">
            <label>
              <input type="checkbox" name="" id="">
              <span>Минск</span>
            </label>
            <label>
              <input type="checkbox" name="" id="">
              <span>Гомель</span>
            </label>
          </div>
          <div class="offers-item-wrapper">
            <span class="offers-item-price">14 byn</span>
            <button class="button-2 offers-item-button">Купить</button>
          </div>
        </div>

        <div class="offers-item">
          <div class="offers-item-stations">
            <label>
              <input type="checkbox" name="" id="">
              <span>Минск</span>
            </label>
            <label>
              <input type="checkbox" name="" id="">
              <span>Гомель</span>
            </label>
          </div>
          <div class="offers-item-wrapper">
            <span class="offers-item-price">14 byn</span>
            <button class="button-2 offers-item-button">Купить</button>
          </div>
        </div>

        <div class="offers-item">
          <div class="offers-item-stations">
            <label>
              <input type="checkbox" name="" id="">
              <span>Минск</span>
            </label>
            <label>
              <input type="checkbox" name="" id="">
              <span>Гомель</span>
            </label>
          </div>
          <div class="offers-item-wrapper">
            <span class="offers-item-price">14 byn</span>
            <button class="button-2 offers-item-button">Купить</button>
          </div>
        </div>
      </div>

      <button class="button-1 offers-more">Показать еще</button>
    </div>

    <div class="info box">
      <aside class="info-content">
        <div class="info-title">
          <div class="info-title-img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path d="M64 160c0-35.3 28.7-64 64-64h32c35.3 0 64 28.7 64 64v3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 74V320c0 17.7 14.3 32 32 32s32-14.3 32-32v-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 58.8-107.7V160c0-70.7-57.3-128-128-128H128C57.3 32 0 89.3 0 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
            </svg>
          </div>
          <span>Как купить билеты?</span>
        </div>

        <div class="cards-wrapper">
          <div class="cards-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="cards-item-img">
              <path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM72 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm104-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zM72 368a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm88 0c0-8.8 7.2-16 16-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16z" />
            </svg>

            <div class="cards-item-content">
              <span class="cards-item-title">1. Посмотрите расписание</span>
              <p class="cards-item-text">
                Выберите вид транспорта, укажите пункт отправления/прибытия и дату поездки.
              </p>
            </div>
          </div>

          <div class="cards-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="cards-item-img">
              <path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm64 64V416H224V160H64zm384 0H288V416H448V160z" />
            </svg>

            <div class="cards-item-content">
              <span class="cards-item-title">2. Выберите рейс</span>
              <p class="cards-item-text">
                Сравните цены, выберите удобное время и место, а также обратите внимание на рейтинг перевозчика.
              </p>
            </div>
          </div>

          <div class="cards-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="cards-item-img">
              <path d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z" />
            </svg>

            <div class="cards-item-content">
              <span class="cards-item-title">3. Купите билет</span>
              <p class="cards-item-text">
                Внесите данные пассажира, обязательно проверьте информацию и оплатите заказ.
              </p>
            </div>
          </div>

          <div class="cards-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="cards-item-img">
              <path d="M288 0C422.4 0 512 35.2 512 80V96l0 32c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32l0 160c0 17.7-14.3 32-32 32v32c0 17.7-14.3 32-32 32H416c-17.7 0-32-14.3-32-32V448H192v32c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32l0-32c-17.7 0-32-14.3-32-32l0-160c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h0V96h0V80C64 35.2 153.6 0 288 0zM128 160v96c0 17.7 14.3 32 32 32H272V128H160c-17.7 0-32 14.3-32 32zM304 288H416c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H304V288zM144 400a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm288 0a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM384 80c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16s7.2 16 16 16H368c8.8 0 16-7.2 16-16z" />
            </svg>

            <div class="cards-item-content">
              <span class="cards-item-title">4. Все готово!</span>
              <p class="cards-item-text">
                Распечатайте или сохраните билет. После путешествия будем рады Вашему отзыву.
              </p>
            </div>
          </div>
        </div>
      </aside>
    </div>


    <div class="info box">
      <aside class="info-content">
        <div class="info-title">
          <div class="info-title-img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
            </svg>
          </div>
          <span>Наши преимущества</span>
        </div>

        <div class="cards-wrapper">
          <div class="cards-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="cards-item-img">
              <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z" />
            </svg>

            <div class="cards-item-content">
              <span class="cards-item-title">1. Все билеты доступны онлайн</span>
              <p class="cards-item-text">
                Больше никаких очередей! Любой билет можно купить на сайте или в нашем мобильном приложении.
              </p>
            </div>
          </div>

          <div class="cards-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="cards-item-img">
              <path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z" />
            </svg>

            <div class="cards-item-content">
              <span class="cards-item-title">2. Безопасная оплата</span>
              <p class="cards-item-text">
                Все оплаты совершаются через защищенные платежные шлюзы банков, поэтому данные Вашей транзакции надёжно
                защищены.
              </p>
            </div>
          </div>

          <div class="cards-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="cards-item-img">
              <path d="M288 0C422.4 0 512 35.2 512 80V96l0 32c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32l0 160c0 17.7-14.3 32-32 32v32c0 17.7-14.3 32-32 32H416c-17.7 0-32-14.3-32-32V448H192v32c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32l0-32c-17.7 0-32-14.3-32-32l0-160c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h0V96h0V80C64 35.2 153.6 0 288 0zM128 160v96c0 17.7 14.3 32 32 32H272V128H160c-17.7 0-32 14.3-32 32zM304 288H416c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H304V288zM144 400a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm288 0a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM384 80c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16s7.2 16 16 16H368c8.8 0 16-7.2 16-16z" />
            </svg>

            <div class="cards-item-content">
              <span class="cards-item-title">3. Собственный автобусный парк</span>
              <p class="cards-item-text">
                У нас на сайте, Вы можете купить билеты на автобус, поезд и самолет по лучшим ценам.
              </p>
            </div>
          </div>

          <div class="cards-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="cards-item-img" style="transform: rotate(270deg);">
              <path d="M32 448c-17.7 0-32 14.3-32 32s14.3 32 32 32l96 0c53 0 96-43 96-96l0-306.7 73.4 73.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 109.3 160 416c0 17.7-14.3 32-32 32l-96 0z" />
            </svg>

            <div class="cards-item-content">
              <span class="cards-item-title">4. Возможность возврата</span>
              <p class="cards-item-text">
                Зарегистрируйтесь на сайте и при покупке билетов Вы будете получать бонусы, которыми потом сможете
                оплачивать свои заказы.
              </p>
            </div>
          </div>
        </div>
      </aside>
    </div>

    <div class="info box">
      <div class="info-content">
        <div class="info-title">
          <div class="info-title-img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z" />
            </svg>
          </div>
          <span>Отзывы пассажиров о перевозчиках</span>
        </div>

        <div class="swiper comments">
          <button class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
            </svg>
          </button>

          <div class="swiper-wrapper">

            <section class="swiper-slide comment">
              <img class="swiper-comment-img" src="./assets/img/user-comment.svg" alt="">

              <div class="swiper-comment-content">
                <span class="swiper-comment-username">Lorem 1</span>
                <p class="swiper-comment-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum odio nesciunt distinctio, nostrum
                  consequatur, incidunt repudiandae magni repellendus ea aliquid exercitationem qui soluta beatae velit
                  iure eius magnam alias tempore!
                </p>
              </div>
            </section>

            <section class="swiper-slide comment">
              <img class="swiper-comment-img" src="./assets/img/user-comment.svg" alt="">

              <div class="swiper-comment-content">
                <span class="swiper-comment-username">Lorem 2</span>
                <p class="swiper-comment-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum odio nesciunt distinctio, nostrum
                  consequatur, incidunt repudiandae magni repellendus ea aliquid exercitationem qui soluta beatae velit
                  iure eius magnam alias tempore!
                </p>
              </div>
            </section>

            <section class="swiper-slide comment">
              <img class="swiper-comment-img" src="./assets/img/user-comment.svg" alt="">

              <div class="swiper-comment-content">
                <span class="swiper-comment-username">Lorem 3</span>
                <p class="swiper-comment-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum odio nesciunt distinctio, nostrum
                  consequatur, incidunt repudiandae magni repellendus ea aliquid exercitationem qui soluta beatae velit
                  iure eius magnam alias tempore!
                </p>
              </div>
            </section>

            <section class="swiper-slide comment">
              <img class="swiper-comment-img" src="./assets/img/user-comment.svg" alt="">

              <div class="swiper-comment-content">
                <span class="swiper-comment-username">Lorem 4</span>
                <p class="swiper-comment-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum odio nesciunt distinctio, nostrum
                  consequatur, incidunt repudiandae magni repellendus ea aliquid exercitationem qui soluta beatae velit
                  iure eius magnam alias tempore!
                </p>
              </div>
            </section>

          </div>

          <button class="swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="info box">
      <div class="info-content">
        <div class="info-title">
          <div class="info-title-img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
            </svg>
          </div>
          <span>Эти компании нам доверяют</span>
        </div>

        <div class="carousel">
          <div class="carousel-item">
            <img src="./assets/img/company.svg" alt="">
          </div>

          <div class="carousel-item">
            <img src="./assets/img/company.svg" alt="">
          </div>

          <div class="carousel-item">
            <img src="./assets/img/company.svg" alt="">
          </div>

          <div class="carousel-item">
            <img src="./assets/img/company.svg" alt="">
          </div>

          <div class="carousel-item">
            <img src="./assets/img/company.svg" alt="">
          </div>

          <div class="carousel-item">
            <img src="./assets/img/company.svg" alt="">
          </div>

          <div class="carousel-item">
            <img src="./assets/img/company.svg" alt="">
          </div>
        </div>

      </div>
    </div>

    <div class="message">
      <p>Заказ добавлен в корзину.</p>
    </div>

  </main>

  <footer class="box">
    <span>Все права защищены © Мария</span>

    <nav class="social">
      <ul class="social-wrapper">
        <li class="social-link"><a href="#"><img src="./assets/img/social/telegram.svg" alt=""></a></li>
        <li class="social-link"><a href="#"><img src="./assets/img/social/whatsapp.svg" alt=""></a></li>
        <li class="social-link"><a href="#"><img src="./assets/img/social/viber.svg" alt=""></a></li>
      </ul>
    </nav>

    <address>
      <a class="address-item" href="tel:+37 (25) 7175124">
        <img src="./assets/img/address/tel.svg" alt="">
        <span>+37 (25) 7175124</span>
      </a>

      <a class="address-item" href="mailto:lorem2@mail.com">
        <img src="./assets/img/address/mail.svg" alt="">
        <span>lorem2@mail.com</span>
      </a>

      <a class="address-item" href="https://goo.gl/maps/4cPhrxPVP9uJqU4P6">
        <img src="./assets/img/address/home.svg" alt="">
        <span>Москва, Россия</span>
      </a>
    </address>
  </footer>

  <script src="./assets/js/app.js"></script>
  <script>
    const modalReg = new ModalWindow({
      modalWindow: document.querySelector(".reg"),
      buttonOpen: document.querySelector("#reg-open"),
      buttonClose: [
        document.querySelector(".reg-close"),
        document.querySelector(".reg-button ")
      ],
      display: "block",
      style: {
        open: {
          maxWidth: '100%',
          maxHeight: '100%'
        },
        close: {
          maxWidth: '0',
          maxHeight: '0'
        }
      }
    })
  </script>
  <script>
    const header = new Header(
      document.querySelector("header"),
      document.querySelector(".ticket-search")
    );

    header.start();
  </script>
  <script>
    const modalWindow = new ModalWindow({
      modalWindow: document.querySelector(".ticket-order"),
      buttonOpen: [...document.querySelectorAll(".offers-item-button")],
      buttonClose: document.querySelector(".ticket-order-close"),
      display: "flex",
      style: {
        open: {
          maxWidth: '100%',
          maxHeight: '100%'
        },
        close: {
          maxWidth: '0',
          maxHeight: '0'
        }
      }
    })
  </script>

  <script>
    const busSeatsItems = [...document.querySelectorAll('.bus-seats-item')];

    busSeatsItems.forEach(seat => {
      seat.addEventListener("click", () => {
        seat.classList.toggle("active");
      })
    })
  </script>

  <script>
    const ticketOrder = document.querySelector('.ticket-order');
    const busChooseSeats = document.querySelector('.bus-choose-seats');
    const busChooseSeatButton = document.querySelector('.bus-choose-seat');
    const enterPassenger = document.querySelector('.enter-passenger');
    const ticketAccessButton = document.querySelector('.ticket-access-button');
    const message = document.querySelector('.message');

    busChooseSeatButton.addEventListener("click", () => {
      busChooseSeats.style.display = "none";
      enterPassenger.style.display = "flex";
    })
    ticketAccessButton.addEventListener("click", () => {
      Object.assign(ticketOrder.style, {
        maxWidth: '0',
        maxHeight: '0'
      });

      busChooseSeats.style.display = "block";
      enterPassenger.style.display = "none";

      setTimeout(() => {
        message.style.transform = "translateY(0)";

        setTimeout(() => {
          message.style.transform = "translateY(calc(100% + 20px))"
        }, 2000)
      }, 400);
    })
  </script>
</body>

</html>