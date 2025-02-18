<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Maker;

class MakerSeeder extends Seeder
{
    const FILENAME  = "car-db.csv";
    public $csvData;
    public $idxMaker;
    public $makers = [];
 


    /*
    const MAKERS = [
        'Ford',
        'Toyota',
        'Honda',
        'Nissan',
        'Volkswagen'
    ];
    */

    function __construct(){
        $this->csvData = $this->getCsvData(self::FILENAME);
        $this->header = $this->csvData[0];
        $this->idxMaker = array_search ('maker', $this->header);
    }

    function getCsvData($fileName)
    {
        if (!file_exists($fileName)) {
            echo "$fileName nem található. ";
            return false;
        }
        $csvFile = fopen($fileName, 'r');
        $lines = [];
        while (!feof($csvFile)) {
            $line = fgetcsv($csvFile);
            $lines[] = $line;
        }
        fclose($csvFile);
        return $lines;
    }

    function getMakers($csvData)
    {
        if (empty($csvData)) {
            echo "Nincs adat.";
            return false;
        }
        $maker = '';
        foreach ($this->csvData as $idx => $line) {
            if(!is_array($line)){
                continue;
            }
            if ($idx == 0) {
                continue;
            }
            if ($maker != $line[$this->idxMaker]){
                $maker = $line[$this->idxMaker];
                $makers[] = $maker;
            }
        }
        return $makers;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($makers as $p_makers) {
            $maker = new Maker();
            $maker->name = $p_makers;
            $maker->logo = $p_makers.'.png';
            $maker->save();
        }

        /*
        foreach(self::MAKERS as $makers) {
            $maker = new Maker();
            $maker->name = $makers;
            $maker->logo = $makers.'.png';
            $maker->save();
        }
        */

        /*
        foreach(self::LOGOS as $logos) {
            $logo = new Maker();
            $logo->logo = $logo;
            $logo->save();
        }
        */


    }
}
