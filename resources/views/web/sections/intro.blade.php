

<section  aria-labelledby="intro-title" aria-describedby="intro-description"
class="w-full   md:h-full pt-[300px] md:pt-[250px] bg-no-repeat bg-cover  bg-center"
style="background-image:  url({{ asset('storage/11.jfif') }})">
<x-container>
    <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-3 pb-12 md:pb-[250px]">
        {{-- начало колонки слева --}}
        <div class="grid col-span-1 gap-y-6 md:col-span-2">
            <h1 class="font-bold text-white text-[52px] leading-[64px] md:text-[80px] md:leading-[88px]"
                id="intro-title">Качественное нижнее белье</h1>
            <div class="text-2xl font-normal text-white">
                <p id="intro-description">Ваш друг будет в комфорте!</p>
            </div>
            <ul class="flex gap-4">
                <li class="inline-flex">
                    <a aria-label="Get Started" href="" class="bg-white flex items-center gap-3 text-center text-black rounded-full px-[30px] py-[12px] border border-black font-semibold">
                        Контакты
                        <span class="w-[20px] h-[20px] rounded-full bg-white flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" class="text-black size-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        {{-- конец колонки слева --}}
        {{-- начало колонки справа --}}

        {{-- конец колонки справа --}}
    </div>
</x-container>
<div class="bg-black py-[64px]">
    <x-container>
        <div class="grid grid-cols-1 gap-5 md:grid-cols-4 md:gap-[120px] text-white">
            <div class="grid gap-y-[14px]">
                <h2 class="text-5xl font-semibold">8</h2>
                <h3 class="text-xl font-normal">Лет на рынке</h3>
            </div>
            <div class="grid gap-y-[14px]">
                <h2 class="text-5xl font-semibold">1000+</h2>
                <h3 class="text-xl font-normal"> довольных мужчин</h3>
            </div>
            <div class="grid gap-y-[14px]">
                <h2 class="text-5xl font-semibold">100%</h2>
                <h3 class="text-xl font-normal">Хлопок</h3>
            </div>
            <div class="grid gap-y-[14px]">
                <h2 class="text-5xl font-semibold">Доставка</h2>
                <h3 class="text-xl font-normal">до 5 дней</h3>
            </div>
        </div>
</x-container>

</section>


