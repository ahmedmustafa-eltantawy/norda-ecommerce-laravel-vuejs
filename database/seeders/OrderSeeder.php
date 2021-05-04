<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('invoices')->orderBy('created_at')->chunk(1000, function ($invoices){
            foreach ($invoices as $invoice) {
                \DB::table('products')->inRandomOrder()->take(rand(3,8))->get()->map( function($product) use($invoice){
                    Order::create([
                        'user_id' => $invoice->user_id,
                        'product_id' => $product->id,
                        'invoice_id' => $invoice->id,
                        'created_at' => $invoice->created_at,
                        'updated_at' => $invoice->created_at,
                    ]);

                } );
            }

            return false;
        });
    }
}
