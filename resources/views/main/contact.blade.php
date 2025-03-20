<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تماس با ما</title>
    @include('main.links')
</head>
<body class="font-mirza font-bold">
  @include("main.header")
  <h1 class="text-center mx-auto mt-14 text-2xl">
    برای ارسال سوال، پیشنهاد یا انتقاد و  ارتباط    لطفاً فرم زیر را تکمیل کنید ویا از طریق شبکه‌های اجتماعی، با ما ارتباط بگیرید.
  </h1>

  <div class="flex flex-col md:flex-row max-w-5xl w-full mx-auto mt-8 mb-5  shadow-2xl shadow-blue-100 rounded-lg   ">
      <div class="p-12  justify-center text-center md:w-1/2 w-full">
        <form action="" dir="rtl" class="space-y-4 ">
             <div class="flex space-x-3 ">
                <div class="mb-6">
                    <input type="text" placeholder="نام "
                        class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3   py-1">
                </div>
                <div class="">
                    <input type="text" placeholder="نام فامیلی"
                        class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3   py-1">
                </div>
             </div>
             <div class="mb-6">
                <input type="email" placeholder="ایمیل   (انتخابی)"
                    class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3  py-1">
            </div>
            <div class="mb-6">
                <input type="text" placeholder="موضوع"
                    class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3  py-1">
            </div>


             <div class="mb-4">
                 <textarea name="" id="" placeholder="شرح موضوع" class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full h-64 px-3  py-1"></textarea>
             </div>



                <div class="item-center text-center bg-blue-500 mb-4 rounded-xl">
                    <input type="submit" value=" ارسال پبام" class="cursor-pointer  font-bold  py-2 text-white ">
                </div>
                {{-- <div class="flex flex-col md:flex-row md:space-y-2 space-x-8 mt-6 mr-4 text-xl ">
                    <h1 class="md:text-xl sm:text-sm">ارتباط با شبکه های اجتماعی:</h1>
                    <div class="flex list-none space-x-5 text-center justify-center">
                      <li><a href=""><i class="fab fa-facebook  hover:text-blue-600 hover:animate-bounce" ></i></a></li>
                      <li><a href=""><i class="fab fa-telegram  hover:text-blue-600 hover:animate-bounce"></i></a></li>
                      <li><a href=""><i class="fab fa-instagram hover:text-red-500 hover:animate-bounce"></i></a></li>
                      <li><a href=""><i class="fab fa-whatsapp  hover:text-green-600 hover:animate-bounce"></i></a></li>
                    </div>
                </div> --}}
        </form>
    </div>
    <div class="md:w-1/2 w-full">
        <img src="images/forms/contact.jpg" alt="" class="h-full w-full bg-red-500">
     </div>
  </div>
  {{-- <div class="fixed bottom-12 right-1 z-50">
    <img src="images/forms/chat.png" alt="چت با تیم خدمات ما" title="چت با تیم خدمات ما"
        class="h-20 hover:text-blue-400 cursor-pointer">
</div> --}}
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/67dba6abc06b93190ba82630/1imp0644e';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
