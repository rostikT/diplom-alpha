<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ростик</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body id="body">

  <?php include 'partials/header.php'; ?>

  <main class="container mx-auto flex flex-col items-center">

    <section class="w-full h-96 flex flex-row gap-8 items-end justify-center mb-16">
      <swiper-container class="w-full h-[100%]" pagination="true" pagination-clickable="true" navigation="false" space-between="30" centered-slides="true" autoplay-delay="5000" autoplay-disable-on-interaction="false">
        <swiper-slide class="w-full h-full flex justify-start items-start">
          <img class="object-cover w-full h-full" src="images/panorama1.jpg" alt="">
        </swiper-slide>
        <swiper-slide class="w-full h-full flex justify-start items-start">
          <img class="object-cover w-full h-full" src="images/panorama2.jpg" alt="">
        </swiper-slide>
        <swiper-slide class="w-full h-full flex justify-start items-start">
          <img class="object-cover w-full h-full" src="images/panorama3.jpg" alt="">
        </swiper-slide>
      </swiper-container>

    </section>

    <hr class="w-2/3 h-[3px] bg-gray-300 mb-16">

    <section class="inline-block mb-12 lg:mb-32">

      <div class="w-full grid sm:grid-cols-2 lg:grid-cols-3 gap-16 px-8">
        <?php include 'partials/flowers1.php'; ?>
      </div>

    </section>

    <section class="w-full flex flex-col mb-12 lg:mb-24 px-8 lg:px-0">
      <div class="text-center lg:text-start text-4xl mb-8">Остались вопросы по доставке ?</div>
      <div class="text-left lg:w-1/3 text-xl text-gray-500 mb-8">Мы расскажем о всех правилах доставки и ответим на частые вопросы</div>
      <div class="flex flex-row justify-center items-center">
        <svg class="w-2/3 md:block hidden" width="720" height="240" viewBox="0 0 620 170" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M223 155.3L223.728 157.163L223.78 157.143L223.831 157.119L223 155.3ZM619.312 98.1475C619.78 97.1469 619.348 95.9565 618.347 95.4886L602.042 87.8637C601.041 87.3958 599.851 87.8276 599.383 88.8282C598.915 89.8288 599.347 91.0192 600.347 91.4871L614.841 98.2648L608.063 112.758C607.595 113.759 608.027 114.949 609.028 115.417C610.028 115.885 611.219 115.453 611.687 114.453L619.312 98.1475ZM0.507513 30.4736C8.62282 123.8 112.481 200.651 223.728 157.163L222.272 153.438C113.519 195.95 12.3772 120.801 4.49249 30.1271L0.507513 30.4736ZM223.831 157.119C283.571 129.817 314.002 103.326 325.848 79.8578C331.799 68.0691 333.06 57.0359 330.952 47.1302C328.85 37.2497 323.431 28.6488 316.276 21.6233C302.023 7.62683 280.597 -0.400147 263.451 0.0196026C254.872 0.229634 247.081 2.56615 241.864 7.66253C236.563 12.8412 234.257 20.5324 236.03 30.6456L239.97 29.9549C238.368 20.8181 240.515 14.5718 244.659 10.5239C248.887 6.39373 255.534 4.21462 263.549 4.01841C279.591 3.62567 299.977 11.2237 313.474 24.4773C320.194 31.0768 325.134 39.0072 327.04 47.9626C328.94 56.8928 327.857 67.0003 322.277 78.0553C311.061 100.275 281.679 126.284 222.169 153.481L223.831 157.119ZM616.818 95.4202C512.372 133.306 421.28 135.75 354.725 119.234C287.992 102.675 246.512 67.2685 239.97 29.9549L236.03 30.6456C242.988 70.332 286.499 106.426 353.761 123.116C421.201 139.851 513.109 137.294 618.182 99.1804L616.818 95.4202Z" fill="#A06BC0" />
        </svg>
        <a class="w-2/3 md:w-1/3 hover:shadow-md transition-all" href="#">
          <img class="w-full" src="images/delivery.png" alt="">
        </a>
      </div>
    </section>

    <section class="inline-block mb-12 lg:mb-32">

      <div class="w-full grid sm:grid-cols-2 lg:grid-cols-3 gap-16 px-8">
        <?php include 'partials/flowers2.php'; ?>
      </div>

    </section>

    <section class="w-screen bg-fixed bg-center bg-cover bg-slate-400 flex flex-col items-center justify-center px-8 lg:px-24 xl:px-32 lg:py-24 py-8" style="
                  background-image: url('/images/parallax.jpg');">
      <div class="flex flex-col lg:flex-row">
        <div class="flex flex-col w-full lg:w-3/4 mb-8">
          <div class="text-xl lg:text-3xl text-gray-100 mb-8 leading-relaxed">Каждый букет - уникален. Состав, цветовая палитра, форма и объем изделий можно обыграть по разному, но каждый вариант откликнется по своему в сердцах наших клиентов. Язык цветов особенно удивителен, а мы знаем о нем всё! </div>
          <div class="text-xl lg:text-3xl text-gray-100 leading-relaxed">Наша команда всегда готова помочь вам с выбором на определенный случай, мы будем благодарны вам за доверие и подберем для вас идеальный вариант :)</div>
        </div>
        <div class="flex flex-col w-full lg:w-1/4 justify-end items-end">
          <div class="text-base text-center lg:text-left lg:text-2xl text-gray-100 lg:mb-2">Виктория Килина</div>
          <div class="text-base text-center lg:text-left lg:text-xl text-gray-300">Директор компании</div>
        </div>
      </div>
    </section>

    <!-- <section class="flex flex-col w-full shadow-md items-center bg-gray-100 gap-12 lg:gap-24 py-14 px-8 lg:px-0">
      <div class="text-center text-4xl text-gray-600">Часто задаваемые вопросы</div>
      <div class="flex flex-col lg:flex-row w-full justify-around">

        <div class="flex flex-col lg:flex-row gap-6 items-center mb-8 lg:mb-0">
          <svg class="w-24 h-24" width="80" height="80" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.58333 52.3396C6.81875 65.9563 18.2187 76.4458 32.3896 79.3354M1 36.5458C1.99624 26.795 6.57619 17.761 13.8526 11.1939C21.129 4.62691 30.5838 0.994351 40.3854 1.00001C60.8896 1.00001 77.7521 16.5958 79.7708 36.5458M48.3417 79.375C62.4729 76.4854 73.8333 66.1146 78.1479 52.5375" stroke="#A06BC0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M42.391 70.727C41.354 71.091 39.646 71.091 38.609 70.727C29.764 67.7236 10 55.1944 10 33.9584C10 24.5843 17.5945 17 26.958 17C32.509 17 37.4195 19.6697 40.5 23.7955C42.067 21.6897 44.1081 19.9783 46.4597 18.7982C48.8113 17.6182 51.4081 17.0023 54.042 17C63.4055 17 71 24.5843 71 33.9584C71 55.1944 51.236 67.7236 42.391 70.727Z" stroke="#A06BC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <div class="flex flex-col w-full px-4 lg:w-96">
            <div class="text-center lg:text-left text-xl">Отбираем только лучшее</div>
            <div class="text-center lg:text-left text-gray-500">Мы с любовью и трепетом отбираем первоклассный товар с проверенных временем и качеством цветочных баз.</div>
          </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-6 items-center">
          <svg class="w-24 h-24" width="80" height="80" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.58333 52.3396C6.81875 65.9563 18.2187 76.4458 32.3896 79.3354M1 36.5458C1.99624 26.795 6.57619 17.761 13.8526 11.1939C21.129 4.62691 30.5838 0.994351 40.3854 1.00001C60.8896 1.00001 77.7521 16.5958 79.7708 36.5458M48.3417 79.375C62.4729 76.4854 73.8333 66.1146 78.1479 52.5375" stroke="#A06BC0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M41.852 9.65096C41.3143 9.22913 40.6516 9 39.9693 9C39.287 9 38.6243 9.22913 38.0866 9.65096C32.2224 14.146 14.9078 28.809 15.0004 45.89C15.0004 59.716 26.204 71 40.0002 71C53.7963 71 65 59.747 65 45.921C65.0308 29.088 47.6853 14.177 41.852 9.65096Z" stroke="#A06BC0" stroke-width="1.5" stroke-miterlimit="10" />
          </svg>
          <div class="flex flex-col w-full px-4 lg:w-96">
            <div class="text-center lg:text-left text-xl">Соблюдаем температуру хранения</div>
            <div class="text-center lg:text-left text-gray-500">Мастерская оборудована специальным холодильным помещением, которое сохраняет свежесть наших изделий на высоком уровне.</div>
          </div>
        </div>
      </div>

      <div class="flex flex-col lg:flex-row w-full justify-around">

        <div class="flex flex-col lg:flex-row gap-6 items-center mb-8 lg:mb-0">
          <svg class="w-24 h-24" width="80" height="80" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.58333 52.3396C6.81875 65.9563 18.2187 76.4458 32.3896 79.3354M1 36.5458C1.99624 26.795 6.57619 17.761 13.8526 11.1939C21.129 4.62691 30.5838 0.994351 40.3854 1.00001C60.8896 1.00001 77.7521 16.5958 79.7708 36.5458M48.3417 79.375C62.4729 76.4854 73.8333 66.1146 78.1479 52.5375" stroke="#A06BC0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M65.8333 24.625L31.9021 49.9908M65.8333 55.0487L31.9021 29.6575M23.8958 34.7917C25.0641 34.7917 26.2208 34.5616 27.3001 34.1145C28.3794 33.6675 29.3601 33.0122 30.1861 32.1861C31.0122 31.3601 31.6675 30.3794 32.1145 29.3001C32.5616 28.2208 32.7917 27.0641 32.7917 25.8958C32.7917 24.7276 32.5616 23.5708 32.1145 22.4915C31.6675 21.4123 31.0122 20.4316 30.1861 19.6055C29.3601 18.7795 28.3794 18.1242 27.3001 17.6772C26.2208 17.2301 25.0641 17 23.8958 17C21.5365 17 19.2738 17.9372 17.6055 19.6055C15.9372 21.2738 15 23.5365 15 25.8958C15 28.2552 15.9372 30.5178 17.6055 32.1861C19.2738 33.8544 21.5365 34.7917 23.8958 34.7917ZM23.8958 62.75C26.2552 62.75 28.5178 61.8128 30.1861 60.1445C31.8544 58.4762 32.7917 56.2135 32.7917 53.8542C32.7917 51.4948 31.8544 49.2322 30.1861 47.5639C28.5178 45.8956 26.2552 44.9583 23.8958 44.9583C21.5365 44.9583 19.2738 45.8956 17.6055 47.5639C15.9372 49.2322 15 51.4948 15 53.8542C15 56.2135 15.9372 58.4762 17.6055 60.1445C19.2738 61.8128 21.5365 62.75 23.8958 62.75Z" stroke="#A06BC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <div class="flex flex-col w-full px-4 lg:w-96">
            <div class="text-center lg:text-left text-xl">Ежедневный уход за цветами</div>
            <div class="text-center lg:text-left text-gray-500">Наша команда оказывает должный уход за цветами и букетами изо дня в день. Замена воды, подрезание стеблей и чуточка любви делает наши композиции ещё прекраснее :)</div>
          </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-6 items-center">
          <svg class="w-24 h-24" width="80" height="80" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.58333 52.3396C6.81875 65.9563 18.2187 76.4458 32.3896 79.3354M1 36.5458C1.99624 26.795 6.57619 17.761 13.8526 11.1939C21.129 4.62691 30.5838 0.994351 40.3854 1.00001C60.8896 1.00001 77.7521 16.5958 79.7708 36.5458M48.3417 79.375C62.4729 76.4854 73.8333 66.1146 78.1479 52.5375" stroke="#A06BC0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M44.8126 17.7782L23.3208 40.5934C22.5093 41.4598 21.724 43.1664 21.5669 44.3478L20.5984 52.8543C20.258 55.926 22.457 58.0264 25.4936 57.5013L33.9227 56.0573C35.1007 55.8473 36.7499 54.9809 37.5614 54.0882L59.0532 31.2731C62.7704 27.3349 64.4458 22.8454 58.6606 17.3582C52.9015 11.9235 48.5298 13.8401 44.8126 17.7782Z" stroke="#A06BC0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M41.2128 21.6909C41.7602 25.2061 43.4547 28.4393 46.0303 30.8829C48.6059 33.3266 51.9169 34.8423 55.4433 35.1922M18 66.1273H65" stroke="#A06BC0" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <div class="flex flex-col w-full px-4 lg:w-96">
            <div class="text-center lg:text-left text-xl">Учтем ваши пожелания</div>
            <div class="text-center lg:text-left text-gray-500">Наша дружная команда флористов, профессионалы своего дела, помогут вам с выбором цветов и составят композиции и букеты по вашим индивидуальным пожеланиям. Вы всегда можете рассчитывать на нас!</div>
          </div>
        </div>

      </div>

    </section> -->

    <section class="w-full flex flex-col lg:flex-row justify-between pt-12 lg:pt-24 pb-12 px-8 lg:px-0">

      <div class="flex w-full lg:w-2/5 flex-col items-center">
        <div class="text-2xl mb-4">Поможем в создании вашего личного букета, определимся с выбором цветов и ответим на все ваши вопросы</div>
        <div class="text-xl text-gray-500 mb-6 lg:mb-12">Отправьте нам сообщение в <a href="#" class="text-green-400 hover:underline">WhatsApp</a>
          и <a href="#" class="text-purple-400 hover:underline">Instagram</a> или по номеру +7(777)77-77-777</div>

        <div class="flex flex-col items-center sm:flex-row justify-start w-full gap-4 mb-6 lg:mb-0">
          <a href="#" class="lg:px-12 px-8 w-fit text-center text-2xl py-4 text-gray-700 shadow-lg hover:bg-green-200 bg-green-300">WhatsApp</a>
          <a href="#" class="lg:px-12 px-8 w-fit text-center text-2xl py-4 text-gray-700 shadow-lg hover:bg-purple-200 bg-purple-300">Instagram</a>
        </div>
      </div>

      <div class="flex flex-col items-center lg:items-start w-full lg:w-1/3">
        <div class="text-2xl mb-4 w-full lg:text-center">Или используйте наш конструктор</div>
        <div class="text-xl text-gray-500 mb-8 text-center">Расскажите как должен выглядеть ваш букет - мы соберем и отправим его вам</div>
        <svg width="200" height="170" viewBox="0 0 184 145" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.2264 144.014C18.1688 144.591 19.3998 144.294 19.976 143.351L29.3649 127.994C29.941 127.051 29.6441 125.82 28.7017 125.244C27.7593 124.668 26.5283 124.965 25.9521 125.907L17.6064 139.558L3.95545 131.213C3.01305 130.637 1.78202 130.933 1.20587 131.876C0.629719 132.818 0.926623 134.049 1.86903 134.625L17.2264 144.014ZM142.033 2.81325C159.421 22.9571 169.883 38.0581 175.056 49.3279C180.255 60.656 179.865 67.5288 176.679 71.8451C173.362 76.3401 166.462 78.922 156.502 80.1649C146.667 81.3925 134.471 81.2499 121.273 80.8709C108.134 80.4936 94.0314 79.8835 80.5926 80.2209C67.1601 80.5582 54.2194 81.8426 43.3779 85.3217C32.5182 88.8067 23.57 94.5603 18.4555 103.957C13.3491 113.339 12.2723 125.972 16.3253 142.777L20.2138 141.839C16.2932 125.584 17.5068 114.067 21.9688 105.869C26.4227 97.6863 34.3211 92.4291 44.6002 89.1304C54.8976 85.8258 67.3879 84.5537 80.693 84.2197C93.9916 83.8858 107.933 84.4895 121.158 84.8693C134.324 85.2474 146.814 85.4051 156.998 84.1342C167.058 82.8786 175.512 80.1633 179.898 74.2203C184.416 68.0986 184.077 59.3927 178.691 47.6593C173.279 35.8677 162.519 20.4246 145.061 0.199576L142.033 2.81325Z" fill="#DBCEA2" />
        </svg>
      </div>

    </section>

    <section class="w-full flex flex-col items-center py-12 bg-gray-100 px-8 lg:px-0">
      <div class="text-3xl text-center lg:text-5xl mb-4">Создайте свой личный букет</div>
      <div class="text-xl text-gray-500 text-center lg:text-2xl mb-8">Конструктор букетов на любой вкус</div>
      <div class="w3-container">
        <button onclick="openNav()" class="text-4xl px-10 py-2 shadow-md border border-gray-800 hover:bg-gray-300">Начнём</button>
        <div id="id01" class="w3-modal">
          <div class="w3-modal-content w-1/2 h-[600px]">
            <div class="w3-container">
              <span onclick="closeNav()" class="w3-button w3-display-topright">&times;</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="w-full flex flex-col lg:flex-row my-12 px-8 lg:px-0">
      <div class="flex flex-col w-full lg:w-1/2 items-center justify-center">
        <div class="text-3xl text-center lg:text-5xl xl:text-6xl w-full lg:pt-24 mb-4 lg:mb-16 lg:rotate-[-15deg]">Мы находимся тут!</div>
        <svg class="hidden lg:block pl-24 rotate-[5deg]" width="462" height="150" viewBox="0 0 402 110" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M401.741 7.21537C401.973 5.85421 401.057 4.56306 399.696 4.33151L377.515 0.558144C376.154 0.326592 374.862 1.24232 374.631 2.60347C374.399 3.96463 375.315 5.25578 376.676 5.48733L396.393 8.84143L393.039 28.5582C392.807 29.9193 393.723 31.2105 395.084 31.442C396.445 31.6736 397.737 30.7579 397.968 29.3967L401.741 7.21537ZM0.409274 6.87893C15.6357 53.1609 41.6716 81.4021 74.0087 96.3018C106.254 111.159 144.456 112.609 183.844 105.968C262.584 92.6915 347.025 46.9201 400.723 8.83529L397.831 4.75691C344.431 42.6297 260.705 87.9377 183.013 101.037C144.185 107.584 107.104 106.045 76.1011 91.7606C45.19 77.5181 20.0118 50.463 5.15884 5.31636L0.409274 6.87893Z" fill="black" />
        </svg>
      </div>
      <div class="w-full lg:w-1/2 h-96 bg-gray-300">
        <!-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab143df912fe606a9c39d0e11a4c8e62548374061f51e15bf5e5ffb1647a4ef35&amp;source=constructor" width="768" height="384" frameborder="0"></iframe> -->
        <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A964c62e7eb15c4b70da9bbeee16afd74a16510ae4b37c9c9d933b01895090f36&amp;width=768&amp;height=384&amp;lang=ru_RU&amp;scroll=true"></script> -->
      </div>
    </section>

  </main>

  <?php include 'partials/footer.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>