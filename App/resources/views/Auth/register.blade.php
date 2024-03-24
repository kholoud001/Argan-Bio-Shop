<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Argan Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />

</head>
<body>
@include('inc/navbar')

<main class="px-5 py-4 bg-white shadow-sm text-neutral-700">
    <div class="flex justify-center items-center max-w-full mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 max-w-full">
            <div class="col-span-1">
                <div class="flex flex-col self-stretch px-5 my-auto max-w-full">
                    <div class="text-4xl font-medium text-neutral-700">Register</div>

                    <form id="registerForm" class="mt-8 max-w-full">
                        @csrf
                        <div class="mt-5">
                            <label for="email" class="text-sm font-medium capitalize">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="block w-full rounded-xl mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300" placeholder="Enter your email"  />
                            @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="name" class="text-sm font-medium capitalize">Username</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="block w-full rounded-xl mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300" placeholder="Enter your username"  />
                            @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-8">
                            <label for="password" class="text-sm font-medium capitalize">Password</label>
                            <input type="password" id="password" name="password" class="block w-full rounded-xl mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300" placeholder="Enter your password"  />
                            @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-8">
                            <label for="password_confirmation" class="text-sm font-medium capitalize">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="block w-full rounded-xl mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300" placeholder="Confirm your password"  />
                        </div>
                        <div class="flex gap-5 justify-between mt-8 max-w-full text-sm capitalize">
                            <button type="submit" class="justify-center items-center px-16 py-2.5 font-semibold text-white rounded hover:bg-gray-700" style="background-color: rgba(213, 180, 171, 1)">
                                Create Account
                            </button>
                            <div class="flex gap-2 justify-center py-2.5 font-medium rounded text-neutral-700">
                                <a href="#" class="grow hover:underline">Log In</a>
                                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/23cf26916ea15771f104af03212b3f23f61709e7ddf135063e875c7fcc43846e?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="shrink-0 my-auto w-2.5 aspect-[2]" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-span-1 hidden md:flex justify-center items-center">
                <img style="max-height: 80%;" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bd15955ecfac32bcdeb0bf8c101c7c19eea596bcdbf86bb64d724904e9a09fb2?apiKey=af967bf6e86c4dac8136aaedcc331868&width=400" alt="Placeholder image" class="max-w-full h-auto" />
            </div>

        </div>
    </div>

</main>

@include('inc/footer')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const registerRoute = '{{ route('register') }}';
    const loginRoute = '{{ route('login') }}';

    // register.js
    document.getElementById('registerForm').addEventListener('submit', async function(event) {
        event.preventDefault();
        try {
            const formData = new FormData(this);
            const response = await axios.post(registerRoute, formData);
            showMessage(response.data.message, true);
            // Redirect to login page after 5 seconds
            setTimeout(() => {
                window.location.href = loginRoute;
            }, 5000);
        } catch (error) {
            console.error('Registration failed:', error);
            showMessage(error.response.data.message, false);
        }
    });

    function showMessage(message, success) {
        const toast = document.createElement('div');
        toast.className = success ? 'fixed bottom-5 right-10 bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded' : 'fixed bottom-5 right-10 bg-red-100 border-red-400 text-red-700 px-4 py-3 rounded';
        toast.textContent = message;
        document.body.appendChild(toast);

        setTimeout(() => {
            document.body.removeChild(toast);
        }, 5000);
    }

</script>
{{--<script src="{{ asset('js/register.js') }}"></script>--}}



</body>
</html>
