<div class="container ">
    <div class="grid grid-cols-3 ">
        @foreach ($brands as $brand)
        <div class="">
            <x-card.brand :brand="$brand" />
        </div>
        @endforeach
    </div>
</div>
