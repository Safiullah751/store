<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('main.links')
</head>

<body class="font-mirza font-bold">

    <div class="flex flex-col md:flex-row max-w-4xl w-full mx-auto shadow-2xl mt-20">
        <!-- Form Section -->
        <div class="md:w-1/2 w-full flex items-center space-x-2 mr-5">
            <div class="flex flex-col space-y-4 bg-white p-6 rounded-lg w-full max-w-md mx-auto">
                <!-- Phone Number Section -->
                <div class="flex flex-col space-y-1">
                    <div class="flex items-center space-x-2">
                        <!-- Country Code Selector -->
                        <div class="relative w-56">
                            <button id="dropdownButton"
                                class="flex items-center justify-between w-full h-10 bg-white border border-gray-300 rounded-lg px-4 py-2 shadow">
                                <div class="flex items-center" dir="ltr">
                                    <img id="selectedImage" class="w-6 h-4 mr-2 hidden" alt="">
                                    <span id="selectedText">انتخاب کد کشور</span>
                                </div>
                                <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <ul id="dropdownMenu"
                                class="hidden absolute w-full bg-white border border-gray-300 rounded-lg shadow-md mt-1 z-10">
                                <li class="flex items-center px-4 py-2 cursor-pointer hover:bg-gray-100"
                                    data-name="افغانستان" data-code="+93" data-img="https://flagcdn.com/w40/af.png">
                                    <img src="https://flagcdn.com/w40/af.png" class="w-6 h-4 mr-2"> +93 افغانستان
                                </li>
                                <li class="flex items-center px-4 py-2 cursor-pointer hover:bg-gray-100"
                                    data-name="ایران" data-code="+98" data-img="https://flagcdn.com/w40/ir.png">
                                    <img src="https://flagcdn.com/w40/ir.png" class="w-6 h-4 mr-2"> +98 ایران
                                </li>
                            </ul>
                        </div>

                        <!-- Phone Input -->
                        <input type="text" id="phoneInput" dir="ltr"
                            class="border border-gray-300 rounded-lg px-4 py-2 h-10 w-full md:w-48"
                            placeholder="شماره تلفن" disabled>
                    </div>
                    <div id="phoneNotification" class="hidden text-red-500 text-sm mt-1"></div>
                </div>

                <!-- Verification Code Section (Hidden by Default) -->
                <div id="verifySection" class="hidden flex flex-col space-y-1">
                    <label class="text-gray-700 text-sm font-medium">کد تأیید</label>
                    <div class="flex items-center space-x-2">
                        <input type="text" id="verifyInput"
                            class="border border-gray-300 rounded-lg px-4 py-2 h-10 w-full md:w-40"
                            placeholder="کد تأیید" maxlength="6">
                        <button id="resendCode" class="bg-blue-500 text-white py-2 px-4 rounded-lg text-sm">ارسال
                            مجدد</button>
                            <p id="attemptsLeftText" class="mt-2 text-red-500"></p>
                            <p id="blockTimer" class="mt-2 text-red-500"></p>

                    </div>
                    <div id="verifyNotification" class="hidden text-red-500 text-sm mt-1"></div>

                </div>

                <!-- Login Button -->
                <button id="loginButton"
                    class="bg-blue-500 text-white py-2 rounded-lg font-medium text-lg hover:bg-blue-600 transition w-full">ورود
                    به حساب</button>
            </div>
        </div>
        <!-- Image Section -->
        <div class="md:w-1/2 w-full">
            <img src="images/forms/login.jpg" alt="Login Image" class="w-full h-auto">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdownButton = document.getElementById("dropdownButton");
            const dropdownMenu = document.getElementById("dropdownMenu");
            const selectedText = document.getElementById("selectedText");
            const selectedImage = document.getElementById("selectedImage");
            const phoneInput = document.getElementById("phoneInput");
            const phoneNotification = document.getElementById("phoneNotification");
            const verifySection = document.getElementById("verifySection");
            const verifyInput = document.getElementById("verifyInput");
            const resendCode = document.getElementById("resendCode");
            const attemptsLeftText = document.getElementById("attemptsLeftText");
            const blockTimer = document.getElementById("blockTimer");

            let selectedCountryCode = "";
            let countdownTime = 60;
            const maxAttempts = 3;
            const blockDuration = 24 * 60 * 60; // 24 hours in seconds

            function formatTime(seconds) {
                let h = Math.floor(seconds / 3600);
                let m = Math.floor((seconds % 3600) / 60);
                let s = seconds % 60;
                return `${h}h ${m}m ${s}s`;
            }

            function getStoredData(phone) {
                return JSON.parse(localStorage.getItem(phone)) || { attempts: 0, blockEndTime: 0 };
            }

            function saveStoredData(phone, data) {
                localStorage.setItem(phone, JSON.stringify(data));
            }

            function isBlocked(phone) {
                let data = getStoredData(phone);
                return data.blockEndTime > Math.floor(Date.now() / 1000);
            }

            function startBlockCountdown(phone) {
                resendCode.disabled = true;
                blockTimer.style.display = "block";

                let interval = setInterval(() => {
                    let remainingTime = getStoredData(phone).blockEndTime - Math.floor(Date.now() / 1000);
                    if (remainingTime <= 0) {
                        clearInterval(interval);
                        resendCode.disabled = false;
                        blockTimer.style.display = "none";
                        localStorage.removeItem(phone);
                    } else {
                        blockTimer.textContent = `این شماره تا ${formatTime(remainingTime)} نمی‌تواند ارسال مجدد کند.`;
                    }
                }, 1000);
            }

            dropdownButton.addEventListener("click", () => {
                dropdownMenu.classList.toggle("hidden");
            });

            document.querySelectorAll("#dropdownMenu li").forEach(item => {
                item.addEventListener("click", function () {
                    selectedCountryCode = this.getAttribute("data-code");
                    selectedText.textContent = selectedCountryCode + " " + this.getAttribute("data-name");
                    selectedImage.src = this.getAttribute("data-img");
                    selectedImage.classList.remove("hidden");
                    phoneInput.value = selectedCountryCode + " ";
                    phoneInput.disabled = false;
                    phoneInput.focus();
                    dropdownMenu.classList.add("hidden");
                    phoneNotification.classList.add("hidden");
                });
            });

            phoneInput.addEventListener("input", function () {
                if (!selectedCountryCode) {
                    phoneNotification.textContent = "لطفاً کد کشور خود را انتخاب کنید!";
                    phoneNotification.classList.remove("hidden");
                    this.value = "";
                    return;
                }

                let inputValue = this.value.replace(/\D/g, "").replace(selectedCountryCode.replace("+", ""), "");
                if (inputValue.startsWith("0")) {
                    phoneNotification.textContent = "شماره نباید با صفر شروع شود!";
                    phoneNotification.classList.remove("hidden");
                    inputValue = inputValue.substring(1);
                } else {
                    phoneNotification.classList.add("hidden");
                }

                if (inputValue.length > 9) inputValue = inputValue.slice(0, 9);
                this.value = selectedCountryCode + " " + inputValue;
                verifySection.style.display = inputValue.length === 9 ? "block" : "none";

                let phoneNumber = this.value.trim();
                if (isBlocked(phoneNumber)) {
                    startBlockCountdown(phoneNumber);
                } else {
                    updateAttemptsLeft(phoneNumber);
                }
            });

            function updateAttemptsLeft(phone) {
                let data = getStoredData(phone);
                let remaining = maxAttempts - data.attempts;
                attemptsLeftText.textContent = remaining > 0 ? `شما ${remaining} بار فرصت دارید` : "شما دیگر نمی‌توانید ارسال مجدد انجام دهید";
                resendCode.disabled = remaining <= 0;
            }

            resendCode.addEventListener("click", function () {
                let phoneNumber = phoneInput.value.trim();
                if (!phoneNumber || isBlocked(phoneNumber)) {
                    return;
                }

                let data = getStoredData(phoneNumber);

                if (data.attempts >= maxAttempts) {
                    data.blockEndTime = Math.floor(Date.now() / 1000) + blockDuration;
                    saveStoredData(phoneNumber, data);
                    startBlockCountdown(phoneNumber);
                    return;
                }

                data.attempts++;
                saveStoredData(phoneNumber, data);

                resendCode.disabled = true;
                resendCode.textContent = `ارسال مجدد (${countdownTime}s)`;
                updateAttemptsLeft(phoneNumber);

                let countdown = countdownTime;
                let interval = setInterval(() => {
                    countdown--;
                    resendCode.textContent = `ارسال مجدد (${countdown}s)`;
                    if (countdown === 0) {
                        clearInterval(interval);
                        resendCode.textContent = "ارسال مجدد";
                        resendCode.disabled = false;
                    }
                }, 1000);
            });

        });
    </script>

</body>
</html>
