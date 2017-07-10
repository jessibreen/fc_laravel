<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class DistributorsTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'distributors';
        $this->filename = base_path().'/public/distributor.csv';
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
