<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Prima;
class PrimasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('primas')->delete();

        Prima::create(array('prisma'=>'04AM'));
        Prima::create(array('prisma'=>'1'));
        Prima::create(array('prisma'=>'10'));
        Prima::create(array('prisma'=>'10AMZ'));
        Prima::create(array('prisma'=>'11AMZ'));
        Prima::create(array('prisma'=>'11AZ'));
        Prima::create(array('prisma'=>'13'));
        Prima::create(array('prisma'=>'13AM'));
        Prima::create(array('prisma'=>'13AZ'));
        
        Prima::create(array('prisma'=>'14AZ'));
        Prima::create(array('prisma'=>'1630'));
        Prima::create(array('prisma'=>'17AM'));
        Prima::create(array('prisma'=>'19AZ'));
        Prima::create(array('prisma'=>'19VE'));
        Prima::create(array('prisma'=>'1amarelo'));
        Prima::create(array('prisma'=>'20VE'));
        Prima::create(array('prisma'=>'22AZ'));
        Prima::create(array('prisma'=>'23VE'));
        
        Prima::create(array('prisma'=>'25VD'));
        Prima::create(array('prisma'=>'28AZ'));
        Prima::create(array('prisma'=>'29AZ'));
        Prima::create(array('prisma'=>'2AM'));
        Prima::create(array('prisma'=>'30AZ'));
        Prima::create(array('prisma'=>'31AZ'));
        Prima::create(array('prisma'=>'3AM'));
        Prima::create(array('prisma'=>'30VE'));
        Prima::create(array('prisma'=>'44AS'));
        
        Prima::create(array('prisma'=>'4AM'));
        Prima::create(array('prisma'=>'5AZ'));
        Prima::create(array('prisma'=>'6AM'));
        Prima::create(array('prisma'=>'6AZ'));
        Prima::create(array('prisma'=>'8AZ'));
        Prima::create(array('prisma'=>'DD'));
        Prima::create(array('prisma'=>'DE'));
        Prima::create(array('prisma'=>'HKJ7'));
        Prima::create(array('prisma'=>'HMQ1'));
        Prima::create(array('prisma'=>'NT'));

        Prima::create(array('prisma'=>'NTEM'));
        Prima::create(array('prisma'=>'OPF'));
        Prima::create(array('prisma'=>'OQG8'));
        Prima::create(array('prisma'=>'PW'));
        Prima::create(array('prisma'=>'PWH9'));
        Prima::create(array('prisma'=>'PWK'));
        Prima::create(array('prisma'=>'PWK7'));
        Prima::create(array('prisma'=>'PWR2'));
        Prima::create(array('prisma'=>'PWX2'));
        Prima::create(array('prisma'=>'PXP2'));

        Prima::create(array('prisma'=>'PYC6'));
        Prima::create(array('prisma'=>'PYI'));
        Prima::create(array('prisma'=>'PYM8'));
        
    }
}
