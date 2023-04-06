<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ticket-bus</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body id="account">

  <?php require_once('./app/include/header.php'); ?>

  <main class="account">
    <nav class="account-panel">
      <ul class="account-panel-wrapper">
        <li class="account-panel-item">
          <button class="account-panel-button" type="button" id="open-orders">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z" />
            </svg>
          </button>
        </li>
        <li class="account-panel-item">
          <button class="account-panel-button" type="button" id="open-basket">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512H430c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32H458.4L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192H171.7L253.3 35.1zM192 304v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16zm128 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
            </svg>
          </button>
        </li>
        <li class="account-panel-item">
          <button class="account-panel-button" type="button" id="open-passegers">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
              <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
            </svg>
          </button>
        </li>
      </ul>
    </nav>

    <section class="account-main orders" id="orders">
      <span class="account-main-title">User Name</span>
      <table class="orders-content">
        <thead>
          <tr>
            <th>ID</th>
            <th>Маршрут</th>
            <th>Дата заказа</th>
            <th>Сумма</th>
            <th>Статус</th>
            <th>Settings</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th>12</th>
            <th>Гомель - Минск</th>
            <th>12.03.2023</th>
            <th>40 BYN</th>
            <th>Active</th>
            <th>
              <button class="order-close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
              </button>
            </th>
          </tr>

          <tr>
            <th>12</th>
            <th>Гомель - Минск</th>
            <th>12.03.2023</th>
            <th>40 BYN</th>
            <th>Active</th>
            <th>
              <button class="order-close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
              </button>
            </th>
          </tr>

          <tr>
            <th>12</th>
            <th>Гомель - Минск</th>
            <th>12.03.2023</th>
            <th>40 BYN</th>
            <th>Active</th>
            <th>
              <button class="order-close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
              </button>
            </th>
          </tr>

          <tr>
            <th>12</th>
            <th>Гомель - Минск</th>
            <th>12.03.2023</th>
            <th>40 BYN</th>
            <th>Active</th>
            <th>
              <button class="order-close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
              </button>
            </th>
          </tr>
        </tbody>
      </table>
    </section>

    <section class="account-main basket" id="basket">
      <span class="account-main-title">Корзина</span>

      <div class="basket-content">

        <div class="basket-item">
          <div class="basket-item-stations">
            <label>
              <input type="checkbox" name="" id="">
              <span>Минск</span>
            </label>
            <label>
              <input type="checkbox" name="" id="">
              <span>Гомель</span>
            </label>
          </div>
          <div class="basket-item-wrapper">
            <span class="basket-item-price">14 byn</span>
            <button class="button-2 basket-item-button">Оплатить</button>
          </div>

          <button class="basket-item-close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
          </button>
        </div>

        <div class="basket-item">
          <div class="basket-item-stations">
            <label>
              <input type="checkbox" name="" id="">
              <span>Минск</span>
            </label>
            <label>
              <input type="checkbox" name="" id="">
              <span>Гомель</span>
            </label>
          </div>
          <div class="basket-item-wrapper">
            <span class="basket-item-price">14 byn</span>
            <button class="button-2 basket-item-button">Оплатить</button>
          </div>

          <button class="basket-item-close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
          </button>
        </div>

        <div class="basket-item">
          <div class="basket-item-stations">
            <label>
              <input type="checkbox" name="" id="">
              <span>Минск</span>
            </label>
            <label>
              <input type="checkbox" name="" id="">
              <span>Гомель</span>
            </label>
          </div>
          <div class="basket-item-wrapper">
            <span class="basket-item-price">14 byn</span>
            <button class="button-2 basket-item-button">Оплатить</button>
          </div>

          <button class="basket-item-close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
          </button>
        </div>

        <div class="basket-item">
          <div class="basket-item-stations">
            <label>
              <input type="checkbox" name="" id="">
              <span>Минск</span>
            </label>
            <label>
              <input type="checkbox" name="" id="">
              <span>Гомель</span>
            </label>
          </div>
          <div class="basket-item-wrapper">
            <span class="basket-item-price">14 byn</span>
            <button class="button-2 basket-item-button">Оплатить</button>
          </div>

          <button class="basket-item-close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <section class="account-main" id="passegers">
      <span class="account-main-title">Пассажиры</span>

      <div class="passegers">
        <section class="passegers-item">
          <span class="passegers-title">First Name Last Name</span>
          <span class="passegers-number-passport">KS23543253</span>
          <span class="passegers-tel">+80354835385</span>

          <button type="button" class="delete">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
            </svg>
          </button>
        </section>

        <section class="passegers-item">
          <span class="passegers-title">First Name Last Name</span>
          <span class="passegers-number-passport">KS23543253</span>
          <span class="passegers-tel">+80354835385</span>

          <button type="button" class="delete">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
            </svg>
          </button>
        </section>

        <section class="passegers-item">
          <span class="passegers-title">First Name Last Name</span>
          <span class="passegers-number-passport">KS23543253</span>
          <span class="passegers-tel">+80354835385</span>

          <button type="button" class="delete">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
            </svg>
          </button>
        </section>

        <section class="passegers-item">
          <span class="passegers-title">First Name Last Name</span>
          <span class="passegers-number-passport">KS23543253</span>
          <span class="passegers-tel">+80354835385</span>

          <button type="button" class="delete">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
            </svg>
          </button>
        </section>

        <section class="passegers-item">
          <span class="passegers-title">First Name Last Name</span>
          <span class="passegers-number-passport">KS23543253</span>
          <span class="passegers-tel">+80354835385</span>

          <button type="button" class="delete">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
            </svg>
          </button>
        </section>
      </div>

      <button class="button-1 add-passegers-button">Добавить пассажира</button>

      <form action="post" class="add-passegers">

        <div class="add-passegers-content">
          <span class="add-passegers-title">Добавить пассажира</span>

          <button type="button" class="window-close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
          </button>

          <div class="add-passegers-wrapper">

            <div class="passegers-gender">
              <div class="passegers-gender-item">
                <input type="radio" name="gender" id="gender-1">
                <label for="gender-1">М</label>
              </div>

              <div class="passegers-gender-item">
                <input type="radio" name="gender" id="gender-2">
                <label for="gender-2">Ж</label>
              </div>
            </div>

            <div class="passegers-gender dropdown">
              <div class="dropdown-select">
                <span>Выберите гражданство</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                </svg>
              </div>

              <ul class="dropdown-menu">
                <li class="dropdown-menu-item">Беларусь</li>
                <li class="dropdown-menu-item">Россия</li>
                <li class="dropdown-menu-item">Болгария</li>
                <li class="dropdown-menu-item">Китай</li>
              </ul>
            </div>

            <input type="text" name="" id="" class="passeger-item" placeholder="Имя">

            <div class="passegers-gender dropdown">
              <div class="dropdown-select">
                <span>Выберите тип документа</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                </svg>
              </div>

              <ul class="dropdown-menu" style="max-height: 0;">
                <li class="dropdown-menu-item">Заграничный паспорт</li>
                <li class="dropdown-menu-item">Гражданский паспорт</li>
                <li class="dropdown-menu-item">Свидетельство о рождении</li>
              </ul>
            </div>

            <input type="text" name="" id="" class="passeger-item" placeholder="Фамилия">

            <input type="text" name="" id="" class="passeger-item" placeholder="Отчество">
          </div>

          <div class="add-passegers-form">
            <button type="button" class="button-1">Добавить</button>
          </div>
        </div>
      </form>
    </section>
  </main>

  <script src="./assets/js/app.js"></script>

  <script>
    const dropDownMenu = new DropMenu({
      header: [...document.querySelectorAll(".dropdown-select")],
      menu: [...document.querySelectorAll(".dropdown-menu")],
      select: true
    });
  </script>

  <script>
    const modalWindow = new ModalWindow({
      modalWindow: document.querySelector(".add-passegers"),
      buttonOpen: [...document.querySelectorAll(".add-passegers-button")],
      buttonClose: [
        document.querySelector(".window-close"),
        document.querySelector(".add-passegers-form>button")
      ],
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
    const passegers = [...document.querySelectorAll('.passegers-item')];

    passegers.forEach(passeger => {
      passeger.addEventListener('click', (event) => {
        const del = passeger.querySelector('.delete');
        const target = event.target.closest('.delete')

        if (target === del) {
          passeger.remove()
        }
      })
    })
  </script>

  <script>
    const panelButton = [...document.querySelectorAll(".account-panel-button")];
    const accountSections = [...document.querySelectorAll(".account-main")];

    panelButton.forEach(button => {
      button.addEventListener("click", (event) => {
        const sectionID = button.getAttribute("id").split('-')[1];

        accountSections.forEach(section => {
          section.style.display = "none";

          if (section.getAttribute('id') === sectionID) {
            section.style.display = "block";
          }
        })
      })
    })
  </script>
</body>

</html>