<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تایید هویت</title>
    <style>
        input:focus {
            border-color: blue;
            border-width: 2px;
            /* Increase the border thickness */
            outline: none;
            /* Remove the default focus outline */
        }
    </style>
    @include('main.links')
</head>

<body class="font-mirza font-bold">
    <h1 class="text-base text-center mt-10 md:text-2xl font-bold">لطفا کد شش رقمی که به سیم کارت شما جهت تایید هویت تان
        ارسال شده است را وارد کنید</h1>
    <div class="flex flex-col md:flex-row max-w-4xl w-full shadow-2xl mx-auto h-auto mt-10">
        <div class=" md:w-1/2">
            <img src="images/forms/verify.jpg" alt="">
        </div>
        <div class=" md:w-1/2">
            <form action="{{ route('confirmition') }}">
                <h1 class="text-center mt-40 font-bold text-2xl">درج کد شش رقمی</h1>
                <div class="flex space-x-2 items-center justify-center mt-10">
                    <div class="bg-white p-3 rounded-md">
                        <input type="text" class="border w-11 h-9 text-center" maxlength="1"
                            oninput="moveFocus(this, event)" onkeydown="handleBackspace(this, event)"
                            onpaste="handlePaste(event)">
                        <input type="text" class="border w-11 h-9 text-center" maxlength="1"
                            oninput="moveFocus(this, event)" onkeydown="handleBackspace(this, event)"
                            onpaste="handlePaste(event)">
                        <input type="text" class="border w-11 h-9 text-center" maxlength="1"
                            oninput="moveFocus(this, event)" onkeydown="handleBackspace(this, event)"
                            onpaste="handlePaste(event)">
                        <input type="text" class="border w-11 h-9 text-center" maxlength="1"
                            oninput="moveFocus(this, event)" onkeydown="handleBackspace(this, event)"
                            onpaste="handlePaste(event)">
                        <input type="text" class="border w-11 h-9 text-center" maxlength="1"
                            oninput="moveFocus(this, event)" onkeydown="handleBackspace(this, event)"
                            onpaste="handlePaste(event)">
                        <input type="text" class="border w-11 h-9 text-center" maxlength="1"
                            oninput="moveFocus(this, event)" onkeydown="handleBackspace(this, event)"
                            onpaste="handlePaste(event)">
                    </div>
                </div>

                <div class="item-center text-center mt-6">
                    <input type="submit" value="ثبت حساب"
                        class="cursor-pointer hover:static  py-2 text-white bg-blue-500 px-14 rounded-lg">
                </div>
        </div>
        </form>
    </div>

    <script>
        function moveFocus(currentInput, event) {
            // If the user entered a digit, move to the next input
            if (currentInput.value.length === 1) {
                let nextInput = currentInput.nextElementSibling;
                if (nextInput && nextInput.tagName === 'INPUT') {
                    nextInput.focus();
                }
            }
        }

        function handleBackspace(currentInput, event) {
            // Check if the backspace key was pressed
            if (event.key === 'Backspace' && currentInput.value === '') {
                let prevInput = currentInput.previousElementSibling;
                if (prevInput && prevInput.tagName === 'INPUT') {
                    prevInput.focus();
                }
            }
        }

        function handlePaste(event) {
            event.preventDefault(); // Prevent the default paste action

            // Get the pasted text
            const pastedData = event.clipboardData.getData('text');

            // Only proceed if the pasted data is a valid number
            if (/^\d{6}$/.test(pastedData)) {
                let inputs = event.target.closest('div').querySelectorAll('input');
                // Loop through each input field and assign the corresponding digit from the pasted data
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].value = pastedData[i];
                    moveFocus(inputs[i], event); // Move focus after pasting each digit
                }
            } else {
                alert('Please paste a valid 6-digit number.');
            }
        }
    </script>



</body>

</html>
