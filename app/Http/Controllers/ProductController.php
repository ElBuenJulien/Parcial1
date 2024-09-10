<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductsPage()
    {
        $productos = [
            ['id' => 1, 'nombre' => 'RTX 3060 Founders Edition', 'descripcion' => 'La GeForce RTX® 3060 Ti y la RTX 3060 te permiten disfrutar de los juegos más recientes con la potencia de Ampere, la arquitectura RTX de 2. ª generación de NVIDIA.', 'precio' => 6500, 'imagen' => 'https://m.media-amazon.com/images/I/81uFpNyjm5L.__AC_SY300_SX300_QL70_ML2_.jpg'],
            ['id' => 2, 'nombre' => 'GTX 1660S Asus Dual', 'descripcion' => 'ASUS Dual GeForce® GTX 1660 SUPER ™ OC Edition 6GB GDDR6 EVO tiene altas tasas de actualización para una ventaja de FPS sin sudar una gota.', 'precio' => 4500, 'imagen' => 'https://www.asus.com/media/global/products/mgwpbgejhutuknhg/P_setting_xxx_0_90_end_500.png'],
            ['id' => 3, 'nombre' => 'GTX 1650 Zotac', 'descripcion' => 'La nueva generación de tarjetas gráficas ZOTAC GAMING GeForce GTX está aquí. Basado en la nueva arquitectura NVIDIA Turing, está repleto de memoria ultra rápida GDDR6. Prepárate para ser rápido y fuerte.', 'precio' => 3200, 'imagen' => 'https://m.media-amazon.com/images/I/81o113ykxNL.__AC_SY300_SX300_QL70_ML2_.jpg']
        ];

        return view('index', compact('productos'));
    }

    public function show($id)
    {
        $productos = [
            ['id' => 1, 'nombre' => 'RTX 3060 Founders Edition', 'descripcion' => 'La GeForce RTX® 3060 Ti y la RTX 3060 te permiten disfrutar de los juegos más recientes con la potencia de Ampere, la arquitectura RTX de 2.ª generación de NVIDIA.', 'precio' => 6500, 'imagen' => 'https://m.media-amazon.com/images/I/81uFpNyjm5L.__AC_SY300_SX300_QL70_ML2_.jpg'],
            ['id' => 2, 'nombre' => 'GTX 1660S Asus Dual', 'descripcion' => 'ASUS Dual GeForce® GTX 1660 SUPER ™ OC Edition 6GB GDDR6 EVO tiene altas tasas de actualización para una ventaja de FPS sin sudar una gota.', 'precio' => 4500, 'imagen' => 'https://www.asus.com/media/global/products/mgwpbgejhutuknhg/P_setting_xxx_0_90_end_500.png'],
            ['id' => 3, 'nombre' => 'GTX 1650 Zotac', 'descripcion' => 'La nueva generación de tarjetas gráficas ZOTAC GAMING GeForce GTX está aquí. Basado en la nueva arquitectura NVIDIA Turing, está repleto de memoria ultra rápida GDDR6. Prepárate para ser rápido y fuerte.', 'precio' => 3200, 'imagen' => 'https://m.media-amazon.com/images/I/81o113ykxNL.__AC_SY300_SX300_QL70_ML2_.jpg']
        ];
    
        $producto = collect($productos)->firstWhere('id', $id);
    
        return view('vistas.show', compact('producto'));
    }
    
}
