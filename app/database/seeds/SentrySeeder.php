<?php

class SentrySeeder extends Seeder {

    /**
     * Jalankan database seeder
     *
     * @return void
     */
    public function run()
    {
        // Hapus isi table users, groups, users_groups dan throttle
        DB::table('users_groups')->delete();
        DB::table('groups')->delete();
        DB::table('users')->delete();
        DB::table('throttle')->delete();

        try
        {
            // Membuat grup admin
            $group = Sentry::createGroup(array(
                'name'        => 'administrator',
                'permissions' => array(
                    'admin' => 1,
                ),
            ));
            // Membuat grup regular
            $group = Sentry::createGroup(array(
                'name'        => 'administrator-owner',
                'permissions' => array(
                    'administrator-owner' => 1,
                ),
            ));
			$group = Sentry::createGroup(array(
                'name'        => 'marketing',
                'permissions' => array(
                    'marketing' => 1,
                ),
            ));
			$group = Sentry::createGroup(array(
                'name'        => 'karyawan',
                'permissions' => array(
                    'employer' => 1,
                ),
            ));
        }
        catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
        {
            echo 'Name field is required';
        }
        catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
        {
            echo 'Group already exists';
        }

        try
        {
            // Membuat admin baru
            $admin = Sentry::register(array(
                // silahkan ganti sesuai keinginan
                'email'    => 'admin@gmail.com',
                'password' => '#administrator',
                'first_name' => 'Administrator',
                'last_name' => 'Super'
            ), true); // langsung diaktivasi

            // Cari grup admin
            $adminGroup = Sentry::findGroupByName('administrator');

            // Masukkan user ke grup admin
            $admin->addGroup($adminGroup);
			//======================================================//
            // Membuat user administrator-owner baru
            $user = Sentry::register(array(
                // silahkan ganti sesuai keinginan
                'email'    => 'admin.owner@gmail.com',
                'password' => '#adminowner',
                'first_name' => 'Administrator',
                'last_name' => 'Owner'
            ), true); // langsung diaktivasi

            // Cari grup regular
            $regularGroup = Sentry::findGroupByName('administrator-owner');

            // Masukkan user ke grup regular
            $user->addGroup($regularGroup);
			//======================================================//
			// Membuat user marketing baru
            $user = Sentry::register(array(
                // silahkan ganti sesuai keinginan
                'email'    => 'marketing@gmail.com',
                'password' => '#marketing',
                'first_name' => 'Marketing',
                'last_name' => 'Smart'
            ), true); // langsung diaktivasi

            // Cari grup regular
            $regularGroup = Sentry::findGroupByName('marketing');

            // Masukkan user ke grup regular
            $user->addGroup($regularGroup);
			//======================================================//
			// Membuat user karyawan baru
            $user = Sentry::register(array(
                // silahkan ganti sesuai keinginan
                'email'    => 'karyawan@gmail.com',
                'password' => '#karyawan',
                'first_name' => 'Karyawan',
                'last_name' => 'Smart'
            ), true); // langsung diaktivasi

            // Cari grup regular
            $regularGroup = Sentry::findGroupByName('karyawan');

            // Masukkan user ke grup regular
            $user->addGroup($regularGroup);
			
			

        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Login field is required.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            echo 'User with this login already exists.';
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            echo 'Group was not found.';
        }
    }
}
