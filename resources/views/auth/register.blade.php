<!DOCTYPE html>
<html lang="ltr" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت حساب</title>
    @include('main.links')


</head>

<body class="font-mirza">
    <!-- Header Text-->
    <h1 class=" text-base md:text-3xl text-center mt-12 font-bold">
        !همین حالا ثبت نام کنید و اولین خرید خود را با تخفیف ویژه انجام دهید
    </h1>

    <!--  Registerfotm -->
    <div class="flex flex-col md:flex-row shadow-2xl h-auto max-w-4xl w-full mx-auto item-center mt-10 overflow-hidden">
        <div class=" md:w-1/2  sm:items-center sm-px-10  ring-0 bg-blue-400 z-10">
            <img src="images/forms/register.jpg" alt="" class="h-full w-full object-cover z-10">
        </div>
        <div class="p-12  justify-center text-center md:w-1/2 w-full">
            {{-- <h3 class="mb-5 text-2xl font-bold">فورم ثبت نام</h3> --}}
            <form action="{{route('verify')}}" dir="rtl" class="space-y-4 ">
                <div class="mb-6">
                    <input type="text" placeholder="نام خود را وارد کنید"
                        class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3   py-1">
                </div>
                <div class="mb-6">
                    <input type="text" placeholder="نام فامیلی خود را وارد کنید"
                        class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3   py-1">
                </div>
                <div class="mb-6">
                    <input type="text" placeholder="شماره خود را وارد کنید"
                        class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3  py-1">
                </div>
                <div class="mb-6">
                    <input type="file" id="file1" class="hidden" accept="image/*" onchange="updateFile(this, 'file-label1', 'preview1', 'message1')">
                    <input type="text" id="file-label1" placeholder="عکس خود را اضافه کنید"
                        onclick="document.getElementById('file1').click()"
                        readonly
                        class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3 py-1 text-right cursor-pointer">
                    <img id="preview1" class="mt-2 hidden w-24 h-24 rounded-md border border-gray-300">
                    <p id="message1" class="text-green-500 mt-2 hidden">فایل با موفقیت بارگذاری شد</p> <!-- Success message -->
                </div>

                <div class="mb-6">
                    <input type="file" id="file2" class="hidden" accept="image/*" onchange="updateFile(this, 'file-label2', 'preview2', 'message2')">
                    <input type="text" id="file-label2" placeholder="اضافه نمودن عکس تذکره"
                        onclick="document.getElementById('file2').click()"
                        readonly
                        class="border border-black-100 focus:outline-0 rounded-md focus:ring-2 focus:ring-blue-300 transition-all w-full px-3 py-1 text-right cursor-pointer">
                    <img id="preview2" class="mt-2 hidden w-24 h-24 rounded-md border border-gray-300">
                    <p id="message2" class="text-green-500 mt-2 hidden">فایل با موفقیت بارگذاری شد</p> <!-- Success message -->
                </div>



                    <div class="item-center text-center bg-blue-500 mb-4 rounded-xl">
                        <input type="submit" value="ثبت حساب" class="cursor-pointer  font-bold  py-2 text-white">
                    </div>

            </form>
        </div>
    </div>

    <script>
        function updateFile(input, labelId, previewId) {
            let label = document.getElementById(labelId);
            let preview = document.getElementById(previewId);

            if (input.files.length > 0) {
                let file = input.files[0];
                label.value = file.name;// Show file name

                // Show image preview
                let reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden'); // Show preview
                };
                reader.readAsDataURL(file);
            } else {
                label.value = ""; // Reset input text
                preview.classList.add('hidden'); // Hide preview
            }
        }
    </script>
</body>
</html>
