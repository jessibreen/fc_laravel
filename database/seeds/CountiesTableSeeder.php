<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class CountiesTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'counties';
        $this->filename = base_path().'/public/county.csv';
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        //DB::table($this->table)->truncate();

        parent::run();
    }
}
