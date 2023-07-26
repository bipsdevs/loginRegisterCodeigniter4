<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Helper to generate random values
        helper('text');

        // Insert Record with Fix values
        // $user = new Users();

        // $insertdata['firstname'] = 'Priya';
        // $insertdata['lastname'] = 'agarawal';
        // $insertdata['email'] = 'priya@mailinator.com';
        // $insertdata['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        // $insertdata['created_at'] = date("y-m-d H:i:s");
        // $insertdata['updated_at'] = date("y-m-d H:i:s");
        
        // $user->insert($insertdata);

        // Insert 5 Records with Dynamic values 
        for($num=0;$num<5;$num++){
             $user = new UserModel();

             $insertdata['firstname'] = random_string('alpha');
             $insertdata['lastname'] = random_string('alpha');
             $insertdata['email'] = random_string('alpha').'@mailinator.com';
             $insertdata['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
             $insertdata['created_at'] = date("y-m-d H:i:s");
             $insertdata['updated_at'] = date("y-m-d H:i:s");

             $user->insert($insertdata);
        }
    }
}
