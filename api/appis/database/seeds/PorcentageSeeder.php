<?php

use Illuminate\Database\Seeder;
use App\Por;

class PorcentageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$row = 1;
		if (($handle = fopen("porcentage.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $row++;
		        $porcenta = new Por();
		        $porcenta->barris = $data[0];
		        $porcenta->poblacio = $data[1];
		        $porcenta->gener = $data[2];
		        $porcenta->febrer = $data[3];
		        $porcenta->marz = $data[4];
		        $porcenta->abril = $data[5];
		        $porcenta->maig = $data[6];
		        $porcenta->juny = $data[7];
		        $porcenta->juliol = $data[8];
		        $porcenta->agost = $data[9];
		        $porcenta->setembre = $data[10];
		        $porcenta->octubre = $data[11];
		        $porcenta->novembre = $data[12];
		        $porcenta->desembre = $data[13];    
		        $porcenta->save();
		    }
		    fclose($handle);
		}
    }
}
