<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

use App\Models\contacts;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        contacts::create([
            'name'=> Str::random(10),
            'image' => 'https://th.bing.com/th/id/R.c11b6f38dffc24a4508217513b0e50bd?rik=Pt%2bkITlukiMkWg&riu=http%3a%2f%2fwww.emmegi.co.uk%2fwp-content%2fuploads%2f2019%2f01%2fUser-Icon.jpg&ehk=zjS04fF4nxx%2bpkvRPsSezyic3Z7Yfu%2fuoT75KnbNv1Y%3d&risl=&pid=ImgRaw&r=0',
            'DOB' => '2000-12-12',
            'address' => 'Str::random(10)',
            'email' => 'Str::random(10)',
            'phone' => 'Str::random(10)',
            'user_id' => 1,
        ]);
        contacts::create([
            'name'=> Str::random(10),
            'image' => 'https://th.bing.com/th/id/R.c11b6f38dffc24a4508217513b0e50bd?rik=Pt%2bkITlukiMkWg&riu=http%3a%2f%2fwww.emmegi.co.uk%2fwp-content%2fuploads%2f2019%2f01%2fUser-Icon.jpg&ehk=zjS04fF4nxx%2bpkvRPsSezyic3Z7Yfu%2fuoT75KnbNv1Y%3d&risl=&pid=ImgRaw&r=0',
            'DOB' => '2000-12-12',
            'address' => 'Str::random(10)',
            'email' => 'Str::random(10)',
            'phone' => 'Str::random(10)',
            'user_id' => 1,
        ]);

        contacts::create([
            'name'=> Str::random(10),
            'image' => 'https://th.bing.com/th/id/R.c11b6f38dffc24a4508217513b0e50bd?rik=Pt%2bkITlukiMkWg&riu=http%3a%2f%2fwww.emmegi.co.uk%2fwp-content%2fuploads%2f2019%2f01%2fUser-Icon.jpg&ehk=zjS04fF4nxx%2bpkvRPsSezyic3Z7Yfu%2fuoT75KnbNv1Y%3d&risl=&pid=ImgRaw&r=0',
            'DOB' => '2000-12-12',
            'address' => 'Str::random(10)',
            'email' => 'Str::random(10)',
            'phone' => 'Str::random(10)',
            'user_id' => 1,
        ]);
        contacts::create([
            'name'=> Str::random(10),
            'image' => 'https://th.bing.com/th/id/R.c11b6f38dffc24a4508217513b0e50bd?rik=Pt%2bkITlukiMkWg&riu=http%3a%2f%2fwww.emmegi.co.uk%2fwp-content%2fuploads%2f2019%2f01%2fUser-Icon.jpg&ehk=zjS04fF4nxx%2bpkvRPsSezyic3Z7Yfu%2fuoT75KnbNv1Y%3d&risl=&pid=ImgRaw&r=0',
            'DOB' => '2000-12-12',
            'address' => 'Str::random(10)',
            'email' => 'Str::random(10)',
            'phone' => 'Str::random(10)',
            'user_id' => 1,
        ]);
        contacts::create([
            'name'=> Str::random(10),
            'image' => 'https://th.bing.com/th/id/R.c11b6f38dffc24a4508217513b0e50bd?rik=Pt%2bkITlukiMkWg&riu=http%3a%2f%2fwww.emmegi.co.uk%2fwp-content%2fuploads%2f2019%2f01%2fUser-Icon.jpg&ehk=zjS04fF4nxx%2bpkvRPsSezyic3Z7Yfu%2fuoT75KnbNv1Y%3d&risl=&pid=ImgRaw&r=0',
            'DOB' => '2000-12-12',
            'address' => 'Str::random(10)',
            'email' => 'Str::random(10)',
            'phone' => 'Str::random(10)',
            'user_id' => 1,
        ]);
        contacts::create([
            'name'=> Str::random(10),
            'image' => 'https://th.bing.com/th/id/R.c11b6f38dffc24a4508217513b0e50bd?rik=Pt%2bkITlukiMkWg&riu=http%3a%2f%2fwww.emmegi.co.uk%2fwp-content%2fuploads%2f2019%2f01%2fUser-Icon.jpg&ehk=zjS04fF4nxx%2bpkvRPsSezyic3Z7Yfu%2fuoT75KnbNv1Y%3d&risl=&pid=ImgRaw&r=0',
            'DOB' => '2000-12-12',
            'address' => 'Str::random(10)',
            'email' => 'Str::random(10)',
            'phone' => 'Str::random(10)',
            'user_id' => 1,
        ]);
    }
}
