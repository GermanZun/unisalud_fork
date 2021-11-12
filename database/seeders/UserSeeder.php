<?php

namespace Database\Seeders;

// use App\Http\Livewire\Parameter\Permission;
use App\Models\Address;
use App\Models\ContactPoint;
use App\Models\HumanName;
use App\Models\Identifier;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->active = 1;
        $user->claveunica = 1;
        $user->birthday = now();
        $user->gender = 'female';
        $user->nationality_id = 41;
        if(env('APP_ENV') == 'local') $user->password = bcrypt('admin');
        $user->save();

        $user->givePermissionTo(Permission::all());

        $humanName = new HumanName();
        $humanName->use = 'official';
        $humanName->text = 'Angelina';
        $humanName->fathers_family = 'Jolie';
        $humanName->mothers_family = 'Voight';
        $humanName->user_id = $user->id;
        $humanName->save();

        $identifier = new Identifier();
        $identifier->use = 'official';
        $identifier->cod_con_identifier_type_id = 1; // RUN
        $identifier->value = 12345678;
        $identifier->dv = 5;
        $identifier->user_id = $user->id;
        $identifier->save();

        $contactPoint = new ContactPoint();
        $contactPoint->system = 'phone';
        $contactPoint->user_id = $user->id;
        $contactPoint->value = 88993344;
        $contactPoint->use = 'mobile';
        $contactPoint->save();

        $contactPoint = new ContactPoint();
        $contactPoint->system = 'phone';
        $contactPoint->user_id = $user->id;
        $contactPoint->value = 425563;
        $contactPoint->use = 'work';
        $contactPoint->save();

        $contactPoint = new ContactPoint();
        $contactPoint->system = 'email';
        $contactPoint->user_id = $user->id;
        $contactPoint->value = 'angelina@mail.com';
        $contactPoint->use = 'home';
        $contactPoint->save();

        $address = new Address();
        $address->user_id = $user->id;
        $address->type = 'physical';
        $address->text = 'Avenida Pampa Ilusion';
        $address->line = 1313;
        $address->city = 'Iquique';
        $address->commune_id = 5;
        $address->region_id = 1;
        $address->country_id = 42;
        $address->save();




        $user = new User();
        $user->active = 1;
        $user->claveunica = 1;
        $user->birthday = now();
        $user->gender = 'male';
        $user->nationality_id = 41;
        if(env('APP_ENV') == 'local') $user->password = bcrypt('admin');
        $user->save();

        $user->givePermissionTo(Permission::all());

        $humanName = new HumanName();
        $humanName->use = 'official';
        $humanName->text = 'German';
        $humanName->fathers_family = 'Zuñiga';
        $humanName->mothers_family = 'Codocedo';
        $humanName->user_id = $user->id;
        $humanName->save();

        $identifier = new Identifier();
        $identifier->use = 'official';
        $identifier->cod_con_identifier_type_id = 1; // RUN
        $identifier->value = 16351236;
        $identifier->dv = 'k';
        $identifier->user_id = $user->id;
        $identifier->save();

        $address = new Address();
        $address->user_id = $user->id;
        $address->type = 'physical';
        $address->text = 'Pampa Aerolito';
        $address->line = 3023;
        $address->city = 'Iquique';
        $address->commune_id = 5;
        $address->region_id = 1;
        $address->country_id = 42;
        $address->save();




        $user = new User();
        $user->active = 1;
        $user->claveunica = 1;
        $user->birthday = now();
        $user->gender = 'male';
        $user->nationality_id = 41;
        if(env('APP_ENV') == 'local') $user->password = bcrypt('admin');
        $user->save();

        $user->givePermissionTo(Permission::all());

        $humanName = new HumanName();
        $humanName->use = 'official';
        $humanName->text = 'Alvaro';
        $humanName->fathers_family = 'Torres';
        $humanName->mothers_family = 'Fuchslocher';
        $humanName->user_id = $user->id;
        $humanName->save();

        $identifier = new Identifier();
        $identifier->use = 'official';
        $identifier->cod_con_identifier_type_id = 1; // RUN
        $identifier->value = 15287582;
        $identifier->dv = 7;
        $identifier->user_id = $user->id;
        $identifier->save();

        $address = new Address();
        $address->user_id = $user->id;
        $address->type = 'physical';
        $address->text = 'Ruben Donoso';
        $address->line = 2942;
        $address->city = 'Iquique';
        $address->commune_id = 5;
        $address->region_id = 1;
        $address->country_id = 42;
        $address->save();





        $user = new User();
        $user->active = 1;
        $user->claveunica = 1;
        $user->birthday = now();
        $user->gender = 'female';
        $user->nationality_id = 41;
        if(env('APP_ENV') == 'local') $user->password = bcrypt('admin');
        $user->save();

        $user->givePermissionTo(Permission::all());

        $humanName = new HumanName();
        $humanName->use = 'official';
        $humanName->text = 'Adriana';
        $humanName->fathers_family = 'Ovideo';
        $humanName->mothers_family = 'López';
        $humanName->user_id = $user->id;
        $humanName->save();

        $identifier = new Identifier();
        $identifier->use = 'official';
        $identifier->cod_con_identifier_type_id = 1; // RUN
        $identifier->value = 26554948;
        $identifier->dv = 9;
        $identifier->user_id = $user->id;
        $identifier->save();

        $address = new Address();
        $address->user_id = $user->id;
        $address->type = 'physical';
        $address->text = 'Grumete Bolados';
        $address->line = 168;
        $address->city = 'Iquique';
        $address->commune_id = 5;
        $address->region_id = 1;
        $address->country_id = 42;
        $address->save();


        


        // usuarios programador
        $user = new User();
        $user->active = 1;
        $user->claveunica = 1;
        $user->birthday = now();
        $user->gender = 'other';
        $user->nationality_id = 41;
        if(env('APP_ENV') == 'local') $user->password = bcrypt('admin');
        $user->save();

        $humanName = new HumanName();
        $humanName->use = 'official';
        $humanName->text = 'Administrador';
        $humanName->fathers_family = 'Programador';
        $humanName->mothers_family = 'Médico';
        $humanName->user_id = $user->id;
        $humanName->save();

        $identifier = new Identifier();
        $identifier->use = 'official';
        $identifier->cod_con_identifier_type_id = 1; // RUN
        $identifier->value = 17430005;
        $identifier->dv = 4;
        $identifier->user_id = $user->id;
        $identifier->save();

        $user->givePermissionTo(Permission::all());

        // // funcionario médico
        // $user = new User();
        // $user->active = 1;
        // $user->claveunica = 1;
        // $user->birthday = now();
        // $user->gender = 'other';
        // $user->nationality_id = 41;
        // if(env('APP_ENV') == 'local') $user->password = bcrypt('admin');
        // $user->save();
        //
        // $humanName = new HumanName();
        // $humanName->use = 'official';
        // $humanName->text = 'LEIDY JOHANA';
        // $humanName->fathers_family = 'MOLINA';
        // $humanName->mothers_family = 'PRIETO';
        // $humanName->user_id = $user->id;
        // $humanName->save();
        //
        // $identifier = new Identifier();
        // $identifier->use = 'official';
        // $identifier->cod_con_identifier_type_id = 1; // RUN
        // $identifier->value = 44202611;
        // $identifier->dv = 4;
        // $identifier->user_id = $user->id;
        // $identifier->save();
        //
        // $user->givePermissionTo('Mp: programacion teorica');
        // $user->givePermissionTo('Mp: programacion medica');
        //
        // // funcionario no médico
        // $user = new User();
        // $user->active = 1;
        // $user->claveunica = 1;
        // $user->birthday = now();
        // $user->gender = 'other';
        // $user->nationality_id = 41;
        // if(env('APP_ENV') == 'local') $user->password = bcrypt('admin');
        // $user->save();
        //
        // $humanName = new HumanName();
        // $humanName->use = 'official';
        // $humanName->text = 'ARMANDO';
        // $humanName->fathers_family = 'HENER';
        // $humanName->mothers_family = 'NUÑEZ';
        // $humanName->user_id = $user->id;
        // $humanName->save();
        //
        // $identifier = new Identifier();
        // $identifier->use = 'official';
        // $identifier->cod_con_identifier_type_id = 1; // RUN
        // $identifier->value = 5177420;
        // $identifier->dv = 5;
        // $identifier->user_id = $user->id;
        // $identifier->save();
        //
        // $user->givePermissionTo('Mp: programacion teorica');
        // $user->givePermissionTo('Mp: programacion no medica');
    }
}
