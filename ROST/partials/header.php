<header id="headd" class="container mx-auto flex flex-col items-center lg:after:content-[''] lg:after:w-1/2 lg:after:h-2 lg:after:bg-amber-200 pt-3 lg:pt-0 pb-3 lg:pb-12">
    <div class="flex lg:hidden flex-row lg:flex-col items-center justify-between px-8 w-full">
        <img class="w-2/3 max-w-[250px]" src="images/logo2.png" alt="">
        <button onclick="openMenu()" class="w-8 h-8 block lg:hidden">
            <svg id="burgerButton1" class="w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H4ZM3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12ZM3 18C3 17.4477 3.44772 17 4 17H20C20.5523 17 21 17.4477 21 18C21 18.5523 20.5523 19 20 19H4C3.44772 19 3 18.5523 3 18Z" fill="#595959"></path> </g></svg>
            <svg id="burgerButton2" class="hidden w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z" fill="#595959"></path></g></svg>
        </button>
        <div class="hidden lg:block text-gray-600 text-center">Мастерская цветочных композиций</div>
    </div>
    <div id="burger" class="hidden min-h-screen lg:min-h-min absolute lg:relative inset-x-0 z-10 bg-white lg:bg-transparent flex lg:flex flex-col w-full lg:flex-row justify-start gap-12 lg:gap-0 lg:justify-between pt-12 pb-4 items-center text-3xl lg:text-xl lg:top-0">
    <a href="#">Ассортимент</a>
        <a href="#">Ваш букет</a>
        <div class="hidden lg:flex flex-col items-center">
            <img src="images/logo2.png" alt="">
            <div class="text-gray-600">Мастерская цветочных композиций</div>
        </div>
        <a href="#">Доставка</a>
        <a href="#">О нас</a>
    </div>
</header>