<x-container>
    <div class=" gap-[20px]  grid grid-cols-1 md:grid md:grid-cols-3 md:gap-[20px] pb-10  ">
        @foreach ($brands as $brand)
        <div class="flex   justify-center  ">
            <x-card.brand :brand="$brand" />
        </div>
        @endforeach
    </div>

</x-container>
