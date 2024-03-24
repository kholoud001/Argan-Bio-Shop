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

<div class="flex flex-col self-stretch my-auto max-md:mt-10 max-md:max-w-full">
    <div class="flex justify-center mt-40">
        <form class=" w-full max-w-md mb-20" method="post" action="{{ route('password.update', ['token' => $token]) }}"   enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mt-5">
                <label for="email" class="text-sm font-medium capitalize text-neutral-700">Your email </label>
                <input type="email" id="email" name="email"
                       value="{{ request()->get('email') }}"
                       readonly
                       class="rounded-xl block w-full mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300" placeholder="Enter your email" required>
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-8">
                <label
                    for="password"
                    class="text-sm font-medium capitalize text-neutral-700"
                >
                    Mot de passe</label
                >
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="block w-full rounded-xl mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300"
                    placeholder="Entrez votre nouveau mot de passe"
                    required
                />
            </div>
            <div class="mt-8">
                <label
                    for="password_confirmation"
                    class="text-sm font-medium capitalize text-neutral-700"
                >Confirmez Mot de passe</label
                >
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    class="block w-full rounded-xl mt-1 text-xs leading-8 bg-gray-400 bg-opacity-20 rounded-[70px] text-neutral-700 text-opacity-50 px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-red-300"
                    placeholder="Confirmez votre nouveau mot de passe"
                    required
                />
            </div>
            <div class="flex gap-5  mt-6 items-center justify-between">
                <button type="submit" class="justify-center items-center px-5 py-2.5 font-semibold text-white rounded max-md:px-5 hover:bg-gray-700" style="background-color: rgba(213, 180, 171, 1)">
                    Reset Password
                </button>
                <div class="flex gap-2 justify-center py-2.5 font-medium rounded text-neutral-700">
                    <a  href="{{route('login')}}" class="grow hover:underline">Se connecter</a>
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/23cf26916ea15771f104af03212b3f23f61709e7ddf135063e875c7fcc43846e?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="shrink-0 my-auto w-2.5 aspect-[2]" />
                </div>
            </div>
        </form>
    </div>
</div>


@include('inc/footer')
</body>
</html>
