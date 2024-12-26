<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">Shopify Products</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach($products as $product)
                            <div class="border p-4 rounded shadow hover:shadow-lg">
                                @if(isset($product['image']['src']))
                                    <img src="{{ $product['image']['src'] }}" class="w-full h-48 object-cover mb-4">
                                @endif
                                <h3 class="text-lg font-bold">{{ $product['title'] }}</h3>
                                <p class="text-xl mt-2">{{ $product['variants'][0]['price'] }}€</p>
                                <p class="text-gray-600">Stock: {{ $product['variants'][0]['inventory_quantity'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>