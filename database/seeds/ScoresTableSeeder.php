<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class ScoresTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'scores';
        $this->filename = base_path().'/public/scores.csv';
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
