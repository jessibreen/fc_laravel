<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class FarmtypesTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'farmtypes';
        $this->filename = base_path().'/public/farmtype.csv';
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
