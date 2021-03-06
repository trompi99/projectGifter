
    <?php
    $usuario = \App\Usuario::where('id', $idUsuario)->get();
    $nombre=$usuario[0]['nombre'];
    $apellidos=$usuario[0]['apellidos'];
    ?>

    <div class=" shadow-md px-4 py-3 rounded-lg w-full">
        <div class="flex items-center">
            <img class="h-16 w-16" src="/img/profile.png"/>
            <div class="ml-2">
                <div class="text-sm">
                    <span class="font-semibold text-lg">{{$nombre." ".$apellidos}}</span>
                </div>
                <div class="">
                    <div class="flex items-center">
                        @for($i=0;$i<$estrellas;$i++)
                        <svg class="w-3 h-3 mt-1 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        @endfor
                        @for($estrellas;$estrellas<5;$estrellas++)
                            <svg class="w-3 h-3 mt-1 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <p class="text-gray-800 text-md leading-normal md:leading-relaxed">{{$valoracion}}</p>
        <div class="text-gray-500 text-xs mt-2 flex items-center">
            <svg class="inline-block mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" data-supported-dps="16x16" fill="currentColor" class="mercado-match" width="16" height="16" focusable="false">
                <path d="M8 1a7 7 0 107 7 7 7 0 00-7-7zM3 8a5 5 0 011-3l.55.55A1.5 1.5 0 015 6.62v1.07a.75.75 0 00.22.53l.56.56a.75.75 0 00.53.22H7v.69a.75.75 0 00.22.53l.56.56a.75.75 0 01.22.53V13a5 5 0 01-5-5zm6.24 4.83l2-2.46a.75.75 0 00.09-.8l-.58-1.16A.76.76 0 0010 8H7v-.19a.51.51 0 01.28-.45l.38-.19a.74.74 0 01.68 0L9 7.5l.38-.7a1 1 0 00.12-.48v-.85a.78.78 0 01.21-.53l1.07-1.09a5 5 0 01-1.54 9z"></path>
            </svg>
            <span class="inline-block"> {{$fecha}} </span>
        </div>
        @if(\App\Order::join('ordersdetail', 'ordersdetail.id_order','=', 'orders.id')
                        ->where('orders.id_client', $idUsuario)
                        ->where('ordersdetail.id_product', $id)
                        ->exists())
            <span class="text-sm mt-2 text-red-500">Compra verificada</span>
        @endif
    </div>
