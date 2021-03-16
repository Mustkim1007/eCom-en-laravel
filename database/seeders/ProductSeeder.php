<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [	
        	'name'=>'Galaxy Mobile',
        	'price'=>'12000',
        	'category'=>'mobile',
        	'description'=>'A smartphone with 4gb RAM and 64gb ROM',
        	'gallery'=>'https://3.imimg.com/data3/IG/KU/MY-15658903/platinum-a40-500x500.jpg'
          ],
          [	
        	'name'=>'Infinix Hot 8',
        	'price'=>'10000',
        	'category'=>'mobile',
        	'description'=>'A smartphone with 4gb RAM and 64gb ROM',
        	'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/08/Infinix-Zero-8-500x500.jpg'
          ],
          [	
        	'name'=>'LG Tv',
        	'price'=>'30000',
        	'category'=>'LED TV',
        	'description'=>'A smart TV',
        	'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/81%2BgoyqryVL._SL1500_.jpg'
          ],
           [	
        	'name'=>'HP computer',
        	'price'=>'15000',
        	'category'=>'computer pc',
        	'description'=>'A smart computer',
        	'gallery'=>'https://5.imimg.com/data5/EC/JQ/HM/SELLER-10803960/hp-computer-desktopapprox-price-rs-25000-piece-500x500.jpg'
          ],
        ]);
    }
}
