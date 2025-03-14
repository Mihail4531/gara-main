@php
    use App\Models\Setting;
    $siteName = Setting::latest()->first()->name;
    $siteLogo = Setting::latest()->first()->img

@endphp
<x-container>
<header class="flex justify-between items-center bg-white drop-shadow-sm py-4 px-8">

        <a href="{{route("page.brand")}}" class=" flex items-center gap-[25px]">
    <p  class="text-lg font-bold ">{{$siteName}}  </p>
    <img class="size-[30px]" src="{{ url ( 'storage', $siteLogo) }}" alt="">
</a>

    <!-- Mobile Menu Toggle -->
    <button class="flex md:hidden flex-col items-center align-middle" @click="openMenu = !openMenu"
      :aria-expanded="openMenu" aria-controls="mobile-navigation" aria-label="Navigation Menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <span class="text-xs">Menu</span>
    </button>

    <!-- Main Navigations -->
    <nav class="hidden md:flex">

      <ul class="flex flex-row gap-2">
        <li>
          <a href="{{route ("page.brand")}}" class="inline-flex py-2 px-3 bg-slate-200 rounded" aria-current="true">Главная</a>
        </li>
        <li>
          <a href="{{route ("product.index")}}" class="inline-flex py-2 px-3 hover:bg-slate-200 rounded">Все товары</a>
        </li>
        <li>
          <a href="{{route ("page.brand")}}" class="inline-flex py-2 px-3 hover:bg-slate-200 rounded">Бренды</a>
        </li>
        @if (Route::has('login'))
        @auth
            <a class="inline-flex py-2 px-3 hover:bg-slate-200 rounded" href="{{ url('/dashboard') }}">Личный кабинет</a>
        @else
            <a class="inline-flex py-2 px-3 hover:bg-slate-200 rounded" href="{{ route('login') }}">Войти</a>
            @if (Route::has('register'))
                <a class="inline-flex py-2 px-3 hover:bg-slate-200 rounded" href="{{ route('register') }}">Зарегистрироваться</a>
            @endif
        @endauth
    @endif

      </ul>

    </nav>

  </header>

  <!-- Pop Out Navigation -->
  <nav id="mobile-navigation" class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10"
    :class="openMenu ? 'visible' : 'invisible' " x-cloak>

    <!-- UL Links -->
    <ul class="absolute top-0 right-0 bottom-0 w-10/12 py-4 bg-white drop-shadow-2xl z-10 transition-all"
      :class="openMenu ? 'translate-x-0' : 'translate-x-full'">

      <li class="border-b border-inherit">
        <a href="{{route ("page.brand")}}" class="block p-4" aria-current="true">Главная</a>
      </li>
      <li class="border-b border-inherit">
        <a href="{{route ("product.index")}}" class="block p-4">Все товары</a>
      </li>
      <li class="border-b border-inherit">
        <a href="{{route ("page.brand")}}" class="block p-4">Бренды</a>
      </li>

    </ul>

    <!-- Close Button -->
    <button class="absolute top-0 right-0 bottom-0 left-0" @click="openMenu = !openMenu" :aria-expanded="openMenu"
      aria-controls="mobile-navigation" aria-label="Close Navigation Menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 left-2" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

  </nav>
</x-container>
