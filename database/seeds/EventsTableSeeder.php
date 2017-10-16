<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('events')->delete();

	    for ($i=0; $i < 10; $i++) {
	      Event::create([
	        'title'   => 'Title '.$i,
	        'brief'   => 'This is brief '.$i,
	        'location' => 'Location '.$i,
	        'category' => 'Category '.$i,
	        'date' => date('Y-m-d H:i:s'),
	        'body'    => 'Body '.$i,
	      ]);
	    }
    }
}
