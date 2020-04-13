<?php

namespace App\Imports;
use App\Http\Controllers\Controller;

use App\User;
use App\Data;
use Excel;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

use DB;
class CsvImport implements ToModel,WithHeadingRow,WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    protected $table ='data';
    public function model(array $row)
    {


        return new Data([

            // 'name'      => "xxxx",
            // 'email'     =>  $row["email"],
            // 'password'  =>  \Hash::make($row['password']),



            // 'id'  =>  $row["id"],
             'order_no'   =>  $row["order_no"],
            'order_date'  =>  $row["order_date"],
            'order_net' =>  $row["order_net"],
            'name' =>  $row["name"],
            'address_1' =>  $row["address_1"],
            'district' =>  $row["district"],
            'province' =>  $row["province"],
            'zip' =>  $row["zip"],
            'product' =>  $row["product"],
            'quantity' =>  $row["quantity"],
            'price' =>  $row["price"],
            'discount' =>  $row["discount"],
            'shipping' =>  $row["shipping"],
            'inv' =>  $row["inv"],
            'numinv' =>  $row["numinv"],
            'sku' =>  $row["sku"],

            ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
