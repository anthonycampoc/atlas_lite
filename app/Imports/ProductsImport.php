<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;


class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

            return new Product([
                'code' => $row[0],
                'name' => $row[1],
                'stock' => $row[2],
                'sell_price' => $row[3],
                'categoria_id' => $row[4],
                'provider_id' => $row[5],
            ]);

    }
}
