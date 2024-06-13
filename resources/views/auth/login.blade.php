<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <title> {{ $title }} Constructify</title>
  @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden font-plus-jakarta-sans">

  @if(session()->has('success'))
  <div class="w-1/2 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mx-auto" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
  </div>
  @endif

  @if(session()->has('loginError'))
  <div class="w-1/2 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-5 items-center mx-auto" role="alert">
      <strong class="font-bold">Error!</strong>
      <span class="block sm:inline">{{ session('loginError') }}</span>
  </div>
  @endif
  
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-[#4D869C]">Login your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/login" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-[#4D869C]">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" placeholder="name@example.com" autocomplete="email" autofocus required class="@error('email') is-invalid @enderror block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 
                shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 
                sm:text-sm sm:leading-6">
          </div>
          @error('email')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-[#4D869C]">Password</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full 
                rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-[#4D869C] px-3 py-1.5 text-sm font-semibold 
              leading-6 text-white shadow-sm hover:bg-[rgb(56,106,126)] focus-visible:outline 
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4D869C]">Login</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Not already have an account?
        <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register</a>
      </p>
    </div>
  </div>

  <footer class="text-black text-center relative w-full px-0 py-2.5 left-0 bottom-0">
    <p class="font-bold">Constructify &copy; 2024 </p>
  </footer>
</body>

</html>