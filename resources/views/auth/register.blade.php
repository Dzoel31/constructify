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

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-[#4D869C]">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/register" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-[#4D869C]">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 
                shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 
                sm:text-sm sm:leading-6 @error('email') is-invalid @enderror">
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

        </div>

        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-[#4D869C]">Name</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 
                shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 
                sm:text-sm sm:leading-6 @error('name') is-invalid @enderror">
          </div>
          @error('name')
          <div class="invalid-feedback">
            $message
          </div>
          @enderror
        </div>

        <div>
          <label for="phone_number" class="block text-sm font-medium leading-6 text-[#4D869C]">Phone number</label>
          <div class="mt-2">
            <input id="phone_number" name="phone_number" type="text" autocomplete="tel" required class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 
                shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 
                sm:text-sm sm:leading-6 @error('phone') is-invalid @enderror">
          </div>
          @error('phone')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div>
          <label for="password" class="block text-sm font-medium leading-6 text-[#4D869C]">Password</label>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full 
                rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('password') is-invalid @enderror">
          </div>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div>
          <label for="password_confirmation" class="block text-sm font-medium leading-6 text-[#4D869C]">Confirm Password</label>
          <div class="mt-2">
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="block w-full 
                  rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>


        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-[#4D869C] px-3 py-1.5 text-sm font-semibold 
              leading-6 text-white shadow-sm hover:bg-[rgb(56,106,126)] focus-visible:outline 
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4D869C]">Sign in</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Already have an account?
        <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Log in</a>
      </p>
    </div>
  </div>

  <footer class="text-black text-center relative w-full px-0 py-2.5 left-0 bottom-0">
    <p class="font-bold">Constructify &copy; 2024 </p>
  </footer>