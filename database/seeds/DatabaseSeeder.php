<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CountiesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(BiztypeTableSeeder::class);
        $this->call(FarmtypesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(DistributorsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(ScoresTableSeeder::class);


    }
}
