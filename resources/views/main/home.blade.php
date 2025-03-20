<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="font-mirza">خانه</title>
    @include('main.links')
    <style>
        [x-cloak] {
            display: none !important;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="font-mirza">
    <!-- Header-->
    @include('main.header')

    <!-- Image Slider -->
    <div class="w-full">
        <div id="default-carousel" class="relative rounded-lg overflow-hidden  shadow-lg" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-40 md:h-64 " data-carousel-inner>
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images/indostrail/newyear.webp" alt="Slide 1" class="w-full h-40 md:h-full object-cover">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images/indostrail/1.webp" alt="Slide 2" class="w-full h-40 md:h-full object-cover">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images/indostrail/car.webp" alt="Slide 3" class="w-full h-40 md:h-full object-cover">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images/indostrail/Hair.webp" alt="Slide 4" class="w-full h-40 md:h-full bject-cover">
                </div>
            </div>

            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>

            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-prev>
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button type="button"
                class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-next>
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
    <h1 class="text-center mt-10 font-bold text-4xl">مواد غذایی</h1>

    <div class="relative w-full mx-auto p-6">
        <!-- Scrollable Container -->
        <div id="slider1" class="flex  overflow-x-auto scroll-smooth scrollbar-hide p-4">

            <!-- oil-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/oil.jpg" alt="Product" class="w-full h-40 object-cover">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium">روغن 5 لیتر مایع </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">5% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>450 افغانی </del></span>
                        <span class="font-semibold ">400 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- rice-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/rice.webp" alt="Product" class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium">برنج پاکستانی</span>
                    </div>
                    <div class="grid">
                        <span class="text-red-500 animate-pulse font-bold">10% تحفیف</span>
                    </div>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>1200 افغانی </del></span>
                        <span class="font-semibold ">1100 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- Peas-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/peas.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-between text-sm px-2">
                    <div class="space-x-1">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium"> نخود ایرانی یک کیلوگرام</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>80 افغانی </del></span>
                        <span class="font-semibold ">70 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- Pean-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/pean.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2 space-x-2">
                    <div class="space-x-1">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium"> لوبیا دست چین یک کیلو</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">2% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>80 افغانی </del></span>
                        <span class="font-semibold ">60 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- potatoes-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/potatoes.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium">کچالو یک کیلوگرام </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>40 افغانی </del></span>
                        <span class="font-semibold ">35 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- pasta-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/pasta.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium"> ماکارونی 700 گرام</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>50 افغانی </del></span>
                        <span class="font-semibold ">45 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- chesse-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/chesse.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2 space-x-3">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium"> پنیر 500 گرام ایرانی</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">2% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>220 افغانی </del></span>
                        <span class="font-semibold ">200 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- milk-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/milk.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium"> شیر یک کیلوگرام</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>40 افغانی </del></span>
                        <span class="font-semibold ">35 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- yougourt-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/yougourt.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium">ماست </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>40 افغانی </del></span>
                        <span class="font-semibold ">35 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- cream-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/cream.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium"> خامه پکا 200 گرام</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>35 افغانی </del></span>
                        <span class="font-semibold ">32 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- coffee-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/foodstaff/coffee.png" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium"> قهوه محمود 500 گرام</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">5% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>450 افغانی </del></span>
                        <span class="font-semibold ">350 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>
        </div>

        <!-- First Slider Buttons -->
        <button onclick="moveSlide('slider1', -1)"
            class="hidden md:flex absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-black p-3 rounded-md shadow-lg">
            <i class="fas fa-chevron-left text-xl cursor-pointer"></i>
        </button>

        <button onclick="moveSlide('slider1', 1)"
            class="hidden md:flex absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-black p-3 rounded-md shadow-lg">
            <i class="fas fa-chevron-right text-xl cursor-pointer"></i>
        </button>

    </div>


    <h1 class="text-center mt-10 font-bold text-4xl">وسایل الکترونیکی </h1>

    <div class="relative w-full mx-auto p-6">
        <!-- Scrollable Container -->
        <div id="slider2" class="flex  overflow-x-auto scroll-smooth scrollbar-hide p-8">

            <!-- Lenovo-1-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/lenovo-1.webp" alt="Product" class="w-full h-40 object-cover">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span>لپ تاپ 15.6 اینچی لنوو مدل IdeaPad Slim 3 15IRU8-i3 1315U-8GB LPDDR5-256GB SSD-TN</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">5% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>24000 افغانی </del></span>
                        <span class="font-semibold ">22000 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- lenovo-2-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/lenovo-2.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span>لپ تاپ 15.6 اینچی لنوو مدل V15 G4 AMN-Athlon Silver 7120U-8GB LPDDR5-256GB SSD-TN</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">10% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>28000 افغانی </del></span>
                        <span class="font-semibold ">23000 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- headphone-1-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-2 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/headphone.webp" alt="Product"
                    class="w-full h-56 object-cover rounded">
                <div class="flex justify-between text-sm px-2">
                    <div class="space-x-1">
                        <span class="font-medium"> هدست بی سیم وونک مدل V800</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">4% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>800 افغانی </del></span>
                        <span class="font-semibold ">720 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- head-phone-2-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/airpot.webp" alt="Product"
                    class="w-full h-49 object-cover rounded">
                <div class="flex justify-around text-sm px-2 space-x-2">
                    <div class="space-x-1">
                        <span class="font-medium"> هدفون بلوتوثی مدل </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">2% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>550 افغانی </del></span>
                        <span class="font-semibold ">520 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- 13promax-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/13promax.webp" alt="Product"
                    class="w-full h-40 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-medium"> گوشی موبایل اپل مدل iPhone 13 Pro Max CH دو سیم‌ کارت ظرفیت 256
                            گیگابایت و رم 6 گیگابایت - نات اکتیو </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>56000 افغانی </del></span>
                        <span class="font-semibold ">55000 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- applewatch-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/applewatch.webp" alt="Product"
                    class="w-full h-44 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-3">
                        <span class="font-medium"> ساعت هوشمند کالوس مدل C8 ultra max</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>50 افغانی </del></span>
                        <span class="font-semibold ">45 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- watch-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/pinkwatch.webp" alt="Product"
                    class="w-full h-48 object-cover rounded">
                <div class="flex justify-around text-sm px-2 space-x-3">
                    <div class="space-x-2">
                        <span class="font-medium"> ساعت هوشمند مدل Y80 UltraI </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">2% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>430 افغانی </del></span>
                        <span class="font-semibold ">340 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- A13-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-4 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/A13.webp" alt="Product"
                    class="w-full h-44 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-bold">نام جنس:</span>
                        <span class="font-medium"> گوشی موبایل سامسونگ مدل Galaxy A13 SM-A135F/DS </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>8000 افغانی </del></span>
                        <span class="font-semibold ">7800 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- note13-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/note13.webp" alt="Product"
                    class="w-full h-44 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-medium">گوشی موبایل شیائومی مدل 12 Pro 2201122G </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>9500 افغانی </del></span>
                        <span class="font-semibold ">9200 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- 16pro-->
            <div
                class="min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border-1 border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/products/electronic/16pro.webp" alt="Product"
                    class="w-full h-44 object-cover rounded">
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-medium"> گوشی موبایل اپل مدل iPhone 16 Pro Max ZAA </span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">1% تحفیف</span>
                </div>
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold"> قیمت محصول: </span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>96000 افغانی </del></span>
                        <span class="font-semibold ">95000 افغانی</span>
                    </div>
                </div>
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">افزودن به سبد <i
                            class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">جزئیات <i
                            class="fas fa-arrow-left"></i></button>
                </div>
            </div>

            <!-- Printer Card -->
            <div
                class="relative min-w-[200px] md:min-w-[250px] lg:min-w-[280px] bg-white border border-gray-200 rounded-lg p-3 space-y-4 transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">

                <!-- Improved Red Circle Badge -->
                <div
                    class="absolute top-2 left-2 w-10 h-10 bg-red-600 text-white text-center font-bold flex items-center justify-center rounded-full shadow-md z-10">
                    <span class="text-[9px] leading-tight px-1">اعتبار تخفیف<br>30 روز</span>
                </div>

                <!-- Product Image -->
                <img src="images/products/electronic/printer.webp" alt="Product"
                    class="w-full h-44 object-cover rounded">

                <!-- Product Title -->
                <div class="flex justify-around text-sm px-2">
                    <div class="space-x-2">
                        <span class="font-medium">پرینتر چندکاره لیزری اچ پی مدل LaserJet Pro MFP M428fdn</span>
                    </div>
                    <span class="text-red-500 animate-pulse font-bold">5% تحفیف</span>
                </div>

                <!-- Product Price -->
                <div class="flex justify-between text-sm px-2">
                    <span class="font-bold">قیمت محصول:</span>
                    <div class="space-x-3">
                        <span class="line-through text-gray-500"><del>13000 افغانی</del></span>
                        <span class="font-semibold">10000 افغانی</span>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-around px-1 space-x-4">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs cursor-pointer">
                        افزودن به سبد <i class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="bg-gray-200 px-3 py-1 rounded-md text-xs cursor-pointer">
                        جزئیات <i class="fas fa-arrow-left"></i>
                    </button>
                </div>
            </div>



        </div>
        <!-- Second Slider Buttons -->
        <button onclick="moveSlide('slider2', -1)"
            class="hidden md:flex absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-black p-3 rounded-md shadow-lg">
            <i class="fas fa-chevron-left text-xl cursor-pointer"></i>
        </button>

        <button onclick="moveSlide('slider2', 1)"
            class="hidden md:flex absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-black p-3 rounded-md shadow-lg">
            <i class="fas fa-chevron-right text-xl cursor-pointer"></i>
        </button>

        <script>
            function moveSlide(sliderId, direction) {
                let slider = document.getElementById(sliderId);
                if (slider) {
                    slider.scrollBy({
                        left: direction * 300,
                        behavior: 'smooth'
                    });
                } else {
                    console.error("Slider not found:", sliderId);
                }
            }
        </script>



</body>

</html>
