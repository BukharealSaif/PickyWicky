<section class="relative h-80 bg-gradient-to-r from-sky-500 to-indigo-500 flex flex-col justify-center align-center text-center space-y-4 mb-4 py-10">
  <div class="absolute top-0 left-0 w-full h-full opacity-50 bg-no-repeat bg-cover"
    style="background-image: url('images/laravel-logo.png')"></div>

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-white">
      Picky<span class="text-indigo-600">Wicky</span>
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
      Find or Share Books and Documents
    </p>
    <div>
      @auth
      @else
      <a href="/register"
        class="inline-block border-2 border-laravel text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
        Up to List a Book</a>
      @endauth
    </div>
  </div>
</section>
