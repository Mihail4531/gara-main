<x-container>
<div class="">
    <div class="grid grid-cols-3 gap-2">
        @foreach ($products as $product)
        <div class="">
            <x-card.product :product="$product" />
        </div>
        @endforeach
    </div>
</div>
</x-container>
