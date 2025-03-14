<x-container>
<div class="">
    <div class=" grid-cols-1 grid  md:grid-cols-3 gap-2">
        @foreach ($products as $product)
        <div class=" flex justify-center">
            <x-card.product :product="$product" />
        </div>
        @endforeach
    </div>
</div>
</x-container>
