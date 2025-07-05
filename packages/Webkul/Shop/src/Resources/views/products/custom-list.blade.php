<x-shop::layouts>
    <x-slot:title>
        Product Listing
    </x-slot>

    <div class="container mx-auto px-4 my-10">
        <h1 class="text-2xl font-bold mb-4">Our Products</h1>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <div class="border rounded p-4">
                    <a href="#">
                        <img
                            src="{{ $product->product_image_url }}"
                            class="w-full h-40 object-cover mb-2"
                            alt="{{ $product->name }}"
                        >
                        <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
                        <p class="text-gray-600">{{ core()->currency($product->price) }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-shop::layouts>
