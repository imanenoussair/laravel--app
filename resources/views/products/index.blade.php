<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between mb-6">
                        <h2 class="text-2xl font-bold">Products</h2>
                        <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>
                    </div>

                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">Name</th>
                                <th class="px-6 py-3 bg-gray-50 text-left">Prix</th>
                                <th class="px-6 py-3 bg-gray-50 text-left">Quantité</th>
                                <th class="px-6 py-3 bg-gray-50 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($products as $product)
                            <tr>
                                <td class="px-6 py-4">{{ $product->name_produit }}</td>
                                <td class="px-6 py-4">{{ $product->prix }}</td>
                                <td class="px-6 py-4">{{ $product->qte }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('products.edit', $product) }}" class="text-blue-600">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600 ml-4">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>