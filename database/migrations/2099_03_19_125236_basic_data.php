<?php

use App\Models\Institution;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Roles
        $r = new Role([
            'name' => 'Admin',
            'page_after_login' => '/dashboard',
        ]);
        $r->save();

        $r = new Role([
            'name' => 'Admin_school',
            'page_after_login' => '/dashboard',
        ]);
        $r->save();

        $r = new Role([
            'name' => 'Teacher',
            'page_after_login' => '/dashboard',
        ]);
        $r->save();

        //institution and user
        $i = new Institution([
            'name' => "Testschule",
            'street' => "Teststraße",
            'housenumber' => '42',
            'postcode' => 12345,
            'city' => "Beispielstadt",
            'mail' => "test@testmail.de",
        ]);
        $i->save();

        $u = new User([
            'institution_id' => $i->id,
            'name' => "NameUser",
            'firstname' => "VornameUser",
            'email' => 'daniel.behr@gmx.de',
            'password' => Hash::make('schweinehaus'),
        ]);
        $u->save();
        $i->user_id = $u->id;
        $i->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
