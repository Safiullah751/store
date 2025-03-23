  <!-- Navbar -->
  <nav class="bg-white mx-auto shadow-md py-4 px-6" x-data="{ menuOpen: false }">
      <div class="container mx-auto flex items-center justify-between font-bold">

          <!-- Logo & Search -->
          <div class="flex items-center w-full md:w-auto">
              <div class="w-24">
                  <img src="images/Logo/weblogo.png" alt="Logo"
                      class="hover:scale-105 transition-transform duration-300">
              </div>
              <div class="hidden md:block w-sm mr-24">
                  <div class="relative">
                      <input type="text" placeholder="جستجو کالا مورد نیاز"
                          class="pl-10 pr-4 py-2 border border-gray-300 rounded-full w-full focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all duration-300 shadow-sm">
                      <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                  </div>
              </div>
          </div>

          <!-- Desktop Menu -->
          <div class="hidden md:flex items-center space-x-6">
              @guest
                  <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-500"><i
                          class="fas fa-sign-in-alt"></i> ورود</a>
                  <span class="border-l border-gray-300 h-6"></span>
                  <a href="{{ route('register') }}" class="text-gray-700 hover:text-green-500"><i
                          class="fas fa-user-plus"></i> ثبت نام</a>
              @endguest

              @auth
                  <div class="relative group">
                      <button class="flex items-center text-gray-700 hover:text-blue-500">
                          <i class="fas fa-user"></i> پروفایل
                      </button>
                      <div class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg group-hover:block">
                          <a href="" class="block px-4 py-2 hover:bg-gray-100">داشبورد</a>
                          <a href="" class="block px-4 py-2 hover:bg-gray-100">سفارشات من</a>
                          <a href="" class="block px-4 py-2 hover:bg-gray-100">تنظیمات</a>
                          <a href="" class="block px-4 py-2 text-red-600 hover:bg-gray-100">خروج</a>
                      </div>
                  </div>
                  <a href="" class="text-gray-700 hover:text-green-500"><i class="fas fa-shopping-cart"></i> سبد
                      خرید</a>
              @endauth
          </div>

          <!-- Mobile Menu Button -->
          <button @click="menuOpen = !menuOpen" class="md:hidden text-gray-700 focus:outline-none">
              <i class="fas fa-bars text-2xl hover:text-blue-500 transition-colors duration-300"></i>
          </button>
      </div>

      <!-- Mobile Menu -->
      <div x-show="menuOpen" x-cloak class="md:hidden bg-white w-full p-4 rounded-2xl space-y-4 shadow-md" x-transition>

          <!-- Mobile Search -->
          <div class="relative">
              <input type="text" placeholder="جستجو کالا"
                  class="pl-10 pr-4 py-2 border rounded-full w-full focus:ring-2 focus:ring-blue-400">
              <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
          </div>

          <a href="{{ route('login') }}" class="block text-gray-700 hover:text-blue-500"><i
                  class="fas fa-sign-in-alt"></i>ورود</a>
          <a href="{{ route('register') }}" class="block text-gray-700 hover:text-green-500"><i
                  class="fas fa-user-plus"></i> ثبت نام</a>

          <!-- Mobile Categories Dropdown -->
          <div x-data="{ open: false }">
              <button @click="open = !open"
                  class="w-full flex justify-between items-center text-gray-700 hover:text-blue-500">
                  <div class="flex items-center">
                      <i class="fas fa-list"></i> <span class="ml-2">دسته‌بندی محصولات</span>
                  </div>
              </button>
              <div x-show="open" x-cloak x-transition:enter="transition-all duration-200"
                  x-transition:leave="transition-all duration-200" class="pl-4 space-y-2 mt-2">
                  <div x-data="{ openSub: false }">
                      <button @click="openSub = !openSub"
                          class="w-full text-gray-700 hover:text-black">الکترونیک</button>
                      <div x-show="openSub" x-cloak x-transition:enter="transition-all duration-200"
                          x-transition:leave="transition-all duration-200" class="pl-4 space-y-1">
                          <a href="#" class="block text-gray-700 hover:text-black">لپ تاپ</a>
                          <a href="#" class="block text-gray-700 hover:text-black">موبایل</a>
                      </div>
                  </div>
                  <div x-data="{ openSub: false }">
                      <button @click="openSub = !openSub" class="w-full text-gray-700 hover:text-black">پوشاک</button>
                      <div x-show="openSub" x-cloak x-transition:enter="transition-all duration-200"
                          x-transition:leave="transition-all duration-200" class="pl-4 space-y-1">
                          <a href="#" class="block text-gray-700 hover:text-black">مردانه</a>
                          <a href="#" class="block text-gray-700 hover:text-black">زنانه</a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Mobile Pages Dropdown -->
          <div x-data="{ openPages: false }">
              <button @click="openPages = !openPages"
                  class="w-full flex justify-between items-center text-gray-700 hover:text-blue-500">
                  <div class="flex items-center">
                      <i class="fas fa-file"></i> <span class="ml-2">صفحات</span>
                  </div>
              </button>
              <div x-show="openPages" x-cloak x-transition:enter="transition-all duration-200"
                  x-transition:leave="transition-all duration-200" class="pl-4 space-y-2 mt-2">
                  <a href="{{ route('home') }}" class="flex items-center space-x-1 text-gray-700 hover:text-black">
                      <i class="fas fa-home"></i>
                      <span>صفحه اصلی</span>
                  </a>
                  <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                      <a href="#" class="text-gray-700 hover:text-black flex items-center space-x-1">
                          <i class="fas fa-list"></i>
                          <span>دسته بندی ها</span>
                      </a>


                      <!-- Main Dropdown -->
                      <div x-show="open" x-cloak
                          class="absolute right-0 w-48 bg-white shadow-lg rounded-lg mt-2 p-2 z-50" x-transition>

                          <!-- Category: Electronics -->
                          <div class="relative" x-data="{ openSub: false }" @mouseenter="openSub = true"
                              @mouseleave="openSub = false">
                              <a href="#"
                                  class="flex items-center justify-between p-2 text-gray-700 hover:bg-gray-100 rounded">
                                  <span>الکترونیک</span>
                                  <i class="fas fa-bolt"></i>
                              </a>
                              <!-- Sub-menu -->
                              <div x-show="openSub" x-cloak
                                  class="absolute right-full top-0 w-48 bg-white shadow-lg rounded-lg p-2 z-50"
                                  x-transition>
                                  <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>لبتاب </span>
                                      <i class="fas fa-laptop"></i>
                                  </a>
                                  <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>موبایل </span>
                                      <i class="fas fa-mobile"></i>
                                  </a>
                                  <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>لوازم جانبی </span>
                                      <i class="fas fa-headphones"></i>
                                  </a>
                              </div>
                          </div>
                          <!-- Category: Clothing -->
                          <div class="relative" x-data="{ openSub: false }" @mouseenter="openSub = true"
                              @mouseleave="openSub = false">
                              <a href="#"
                                  class="flex items-center justify-between p-2 text-gray-700 hover:bg-gray-100 rounded">
                                  <span>پوشاک</span>
                                  <i class="fas fa-tshirt"></i>
                              </a>
                              <!-- Sub-menu -->
                              <div x-show="openSub" x-cloak
                                  class="absolute right-full top-0 w-48 bg-white shadow-lg rounded-lg p-2 z-50"
                                  x-transition>
                                  <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>مردانه </span>
                                      <i class="fas fa-male"></i>
                                  </a>
                                  <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>زنانه </span>
                                      <i class="fas fa-female text-red-500"></i>
                                  </a>
                                  <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>کودک </span>
                                      <i class="fas fa-child text-amber-300"></i>
                                  </a>
                              </div>
                          </div>

                          <!-- Category: Home Appliances -->
                          <div class="relative" x-data="{ openSub: false }" @mouseenter="openSub = true"
                              @mouseleave="openSub = false">
                              <a href="#"
                                  class="flex items-center justify-between p-2 text-gray-700 hover:bg-gray-100 rounded">
                                  <span>لوازم خانگی</span>
                                  <i class="fas fa-couch"></i>
                              </a>
                              <!-- Sub-menu -->
                              <div x-show="openSub" x-cloak
                                  class="absolute right-full top-0 w-48 bg-white shadow-lg rounded-lg p-2 z-50"
                                  x-transition>
                                  <a href="#"
                                      class="block p-2 space-x-1 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>تلویزیون</span>
                                      <i class="fas fa-tv text-sm"></i>
                                  </a>
                                  <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>یخچال</span>
                                      <i class="fas fa-cube "></i>
                                  </a>
                                  <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                                      <span>مبلمان</span>
                                      <i class="fas fa-couch"></i>
                                  </a>
                              </div>
                          </div>

                      </div>
                  </div>
                  <!-- Other Menu Items -->
                  <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
                      <i class="fas fa-store"></i>
                      <span>فروشگاه های برتر</span>
                  </a>

                  <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
                      <i class="fas fa-percent"></i>
                      <span>تخفیف ها</span>
                  </a>

                  <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
                      <i class="fas fa-tag"></i>
                      <span>اجناس جدید</span>
                  </a>

                  <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
                      <i class="fas fa-calendar-alt"></i>
                      <span>رویداد های تجاری</span>
                  </a>

                  <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
                      <i class="fas fa-credit-card"></i>
                      <span>محصولات اقصی</span>
                  </a>

                  <a href="{{ route('contact') }}" class="flex items-center space-x-1 text-gray-700 hover:text-black">
                      <i class="fas fa-phone"></i>
                      <span>تماس با ما</span>
                  </a>

              </div>
          </div>

          <!-- Profile Dropdown for Mobile -->
          @auth
              <div x-data="{ open: false }">
                  <button @click="open = !open"
                      class="w-full flex justify-between items-center text-gray-700 hover:text-blue-500">
                      <div class="flex items-center">
                          <i class="fas fa-user"></i> <span class="ml-2">پروفایل</span>
                      </div>
                      <i class="fas fa-chevron-down"></i>
                  </button>
                  <div x-show="open" x-cloak x-transition:enter="transition-all duration-200"
                      x-transition:leave="transition-all duration-200" class="pl-4 mt-2">
                      <a href="#" class="block text-gray-700 hover:text-black">داشبورد</a>
                      <a href="#" class="block text-gray-700 hover:text-black">سفارشات من</a>
                      <a href="#" class="block text-gray-700 hover:text-black">تنظیمات</a>
                      <a href="#" class="block text-red-600 hover:bg-gray-100">خروج</a>
                  </div>
              </div>
              <a href="#" class="block text-gray-700 hover:text-green-500"><i class="fas fa-shopping-cart"></i> سبد
                  خرید</a>
          @endauth
      </div>
  </nav>

  <!-- Row Items -->
  <div class="hidden sm:flex items-center justify-between bg-white p-4 shadow-md relative font-bold">

      <!-- Home -->
      <a href="{{ route('home') }}" class="flex items-center space-x-1 text-gray-700 hover:text-black">
          <i class="fas fa-home"></i>
          <span>صفحه اصلی</span>
      </a>


      <!-- Categories Dropdown -->
      <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
          <a href="#" class="text-gray-700 hover:text-black flex items-center space-x-1">
              <i class="fas fa-list"></i>
              <span>دسته بندی ها</span>
          </a>

          <!-- Main Dropdown -->
          <div x-show="open" x-cloak class="absolute right-0 w-48 bg-white shadow-lg rounded-lg mt-2 p-2 z-50"
              x-transition>

              <!-- Category: Electronics -->
              <div class="relative" x-data="{ openSub: false }" @mouseenter="openSub = true"
                  @mouseleave="openSub = false">
                  <a href="#"
                      class="flex items-center justify-between p-2 text-gray-700 hover:bg-gray-100 rounded">
                      <span>الکترونیک</span>
                      <i class="fas fa-bolt"></i>
                  </a>
                  <!-- Sub-menu -->
                  <div x-show="openSub" x-cloak
                      class="absolute right-full top-0 w-48 bg-white shadow-lg rounded-lg p-2 z-50" x-transition>
                      <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                          <span>لبتاب </span>
                          <i class="fas fa-laptop"></i>
                      </a>
                      <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                          <span>موبایل </span>
                          <i class="fas fa-mobile"></i>
                      </a>
                      <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                          <span>لوازم جانبی </span>
                          <i class="fas fa-headphones"></i>
                      </a>
                  </div>
              </div>
              <!-- Category: Clothing -->
              <div class="relative" x-data="{ openSub: false }" @mouseenter="openSub = true"
                  @mouseleave="openSub = false">
                  <a href="#"
                      class="flex items-center justify-between p-2 text-gray-700 hover:bg-gray-100 rounded">
                      <span>پوشاک</span>
                      <i class="fas fa-tshirt"></i>
                  </a>
                  <!-- Sub-menu -->
                  <div x-show="openSub" x-cloak
                      class="absolute right-full top-0 w-48 bg-white shadow-lg rounded-lg p-2 z-50" x-transition>
                      <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                          <span>مردانه </span>
                          <i class="fas fa-male"></i>
                      </a>
                      <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                          <span>زنانه </span>
                          <i class="fas fa-female text-red-500"></i>
                      </a>
                      <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                          <span>کودک </span>
                          <i class="fas fa-child text-amber-300"></i>
                      </a>
                  </div>
              </div>

              <!-- Category: Home Appliances -->
              <div class="relative" x-data="{ openSub: false }" @mouseenter="openSub = true"
                  @mouseleave="openSub = false">
                  <a href="#"
                      class="flex items-center justify-between p-2 text-gray-700 hover:bg-gray-100 rounded">
                      <span>لوازم خانگی</span>
                      <i class="fas fa-couch"></i>
                  </a>
                  <!-- Sub-menu -->
                  <div x-show="openSub" x-cloak
                      class="absolute right-full top-0 w-48 bg-white shadow-lg rounded-lg p-2 z-50" x-transition>
                      <a href="#" class="block p-2 space-x-1 text-gray-700 hover:bg-gray-100 rounded">
                          <span>تلویزیون</span>
                          <i class="fas fa-tv text-sm"></i>
                      </a>
                      <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                          <span>یخچال</span>
                          <i class="fas fa-cube "></i>
                      </a>
                      <a href="#" class="block p-2 text-gray-700 hover:bg-gray-100 rounded">
                          <span>مبلمان</span>
                          <i class="fas fa-couch"></i>
                      </a>
                  </div>
              </div>

          </div>
      </div>

      <!-- Other Menu Items -->
      <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
          <i class="fas fa-store"></i>
          <span>فروشگاه های برتر</span>
      </a>

      <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
          <i class="fas fa-percent"></i>
          <span>تخفیف ها</span>
      </a>

      <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
          <i class="fas fa-tag"></i>
          <span>اجناس جدید</span>
      </a>

      <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
          <i class="fas fa-calendar-alt"></i>
          <span>رویداد های تجاری</span>
      </a>

      <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-black">
          <i class="fas fa-credit-card"></i>
          <span>محصولات اقصی</span>
      </a>

      <a href="{{ route('contact') }}" class="flex items-center space-x-1 text-gray-700 hover:text-black">
          <i class="fas fa-phone"></i>
          <span>تماس با ما</span>
      </a>

  </div>
