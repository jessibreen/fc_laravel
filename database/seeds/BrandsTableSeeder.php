<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class BrandsTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'brands';
        $this->filename = base_path().'/public/brand.csv';
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
//        DB::table($this->table)->truncate();

        parent::run();
    }
}
