<x-app-layout>
    


   <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$productDetail -> name}}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Descripción: {{$productDetail -> description}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Numero de Producto: {{$productDetail -> number}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Precio: {{$productDetail -> price}}</p>
        <a href="{{route('product.edit', $productDetail -> id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Actualizar 
        </a>
        <form action="{{route('product.destroy', $productDetail -> id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Eliminar</button>
        </form>
        <a href="{{route('product.report', $productDetail -> id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Obtener Reporte 
        </a>
    </div>
</x-app-layout>