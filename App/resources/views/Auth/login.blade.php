<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Argan Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/heroicons/1.0.1/css/heroicons.min.css" rel="stylesheet">


</head>
<body>
@include('inc/navbar')
<div class="flex justify-center items-center px-5 py-4 w-full bg-white shadow-sm text-neutral-700 max-md:px-3 max-md:max-w-full mt-32">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-full">
        <div class="flex flex-col self-stretch px-5 my-auto max-md:mt-10 max-md:max-w-full">
            <div class="text-4xl font-medium text-neutral-700">
                Login
            </div>

                <div class="social-icons mt-10 flex flex-col md:flex-row md:gap-2">
                    <!-- Gmail Login Button -->
                    <form action="{{route('google-auth')}}" method="GET">
                        @csrf

                    <button class="group h-12 px-4 border-2 border-gray-300 rounded-full transition duration-300
                        hover:border-red-300 focus:bg-red-300 active:bg-red-300 mb-2 md:mb-0">
                        <div class="relative flex items-center space-x-6 justify-center">
                            <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg" class="absolute left-0 w-5" alt="google logo">
                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-red-300 sm:text-base">Continue with Google</span>
                        </div>
                    </button>
                    </form>

                    <!-- Facebook Login Button -->
                    <button class="group h-12 px-4 border-2 border-gray-300 rounded-full transition duration-300
                                 hover:border-red-300 focus:bg-red-300 active:bg-red-300">
                        <div class="relative flex items-center space-x-6 justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Facebook_f_logo_%282021%29.svg" class="absolute left-0 w-5" alt="Facebook logo">
                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-red-300 sm:text-base">Continue with Facebook</span>
                        </div>
                    </button>
                </div>
            <form class=" max-w-full">
                <div class="mt-5">
                    <label for="email" class="text-sm font-medium capitalize text-neutral-700">Email</label>
                    <input type="email" id="email" name="email" class="rounded-xl block w-full mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300" placeholder="Enter your email" required>
                </div>
                <div class="mt-8">
                    <label for="password" class="text-sm font-medium capitalize text-neutral-700">Password</label>
                    <input type="password" id="password" name="password" class=" rounded-xl block w-full mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300" placeholder="Enter your password" required>
                </div>
                <div class="flex flex-col md:flex-row justify-between gap-6 mt-6">
                    <div class="flex gap-1 text-xs leading-8 text-neutral-700 text-opacity-50">
                        <input type="checkbox" id="remember_me" name="remember_me" >
                        <label for="remember_me">Remember me</label>
                    </div>
                    <div class="flex-end text-sm font-medium text-red-300 capitalize">
                        <a href="{{ route('password.email') }}" class="hover:underline">Mot de passe oublié?</a>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between gap-5 mt-5">
                    <button type="submit" class="justify-center items-center px-16 py-2.5 font-semibold text-white rounded hover:bg-gray-700" style="background-color: rgba(213, 180, 171, 1)">
                        Se connecter
                    </button>
                    <div class="flex gap-2 justify-center py-2.5 font-medium rounded text-neutral-700">
                        <a  href="{{route('registerForm')}}" class="grow hover:underline">Créer Compte</a>
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/23cf26916ea15771f104af03212b3f23f61709e7ddf135063e875c7fcc43846e?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="shrink-0 my-auto w-2.5 aspect-[2]" />
                    </div>
                </div>
            </form>
        </div>
        <div class="hidden md:flex justify-center items-center">
            <img style="max-height: 100%;" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bd15955ecfac32bcdeb0bf8c101c7c19eea596bcdbf86bb64d724904e9a09fb2?apiKey=af967bf6e86c4dac8136aaedcc331868&width=400" alt="Placeholder image" class="max-w-full h-auto" />
        </div>
    </div>
</div>
@include('inc/footer')
</body>
</html>
<script>



    function showSearchBar() {
        // Toggle visibility of search bar
        var searchBar = document.querySelector('.search-bar');
        searchBar.style.display = (searchBar.style.display === 'none') ? 'block' : 'none';
    }

    function showCartPopup() {
        // Toggle visibility of cart popup
        var cartPopup = document.querySelector('.cart-popup');
        cartPopup.style.display = (cartPopup.style.display === 'none') ? 'block' : 'none';
    }
</script>
</body>

</html>
