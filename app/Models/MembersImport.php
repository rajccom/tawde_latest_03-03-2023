<?php



namespace App\Models;

use App\Models\Member;

use App\Models\Package;

use App\User;

use App\Models\Addresses;

use App\Models\Astrology;

use App\Models\Lifestyle;

use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\ToCollection;

use Illuminate\Support\Str;

use Auth;

use Hash;



class MembersImport implements ToCollection

{

    public function collection(Collection $rows)

    {
        //$addrel = new addressrel();
        //echo '<pre>';print_r($addrel);exit;
        //echo '<pre>';print_r($rows);exit;
        foreach ($rows as $key => $row)

        {

            //echo '<pre>';print_r($row);exit;

            if($key != 0)

            {

                $email_verified_at = get_setting('email_verification') != 1 ? date('Y-m-d H:m:s') : null;

                try{

                    $membership = $row[7] == 1 ? 1 : 2;

                    $user = User::create([

                        'user_type'         => 'member',

                        'code'              => unique_code(),

                        'first_name'        => $row[0],

                        'last_name'         => $row[1],

                        'email'             => $row[2],

                        'email_verified_at' => date('Y-m-d', strtotime($row[9])),

                        'password'          => Hash::make($row[8]),

                        'phone'             => $row[5],

                        'membership'        => $membership,

                        'pancard'        => $row[9], // new added

                        'aadhar_card'        => $row[10], // new added

                    ]);



                    $package    = Package::where('id',$row[7])->first();

                    

                    Member::create([

                        'user_id'                 => $user->id,

                        'gender'                  => $row[3],

                        'on_behalves_id'          => $row[6],

                        'birthday'                => date('Y-m-d', strtotime($row[4])),

                        'current_package_id'      => $package->id,

                        'remaining_interest'      => $package->express_interest,

                        'remaining_contact_view'  => $package->contact,

                        'remaining_photo_gallery' => $package->photo_gallery,

                        'auto_profile_match'      => $package->auto_profile_match,

                        'package_validity'        => Date('Y-m-d', strtotime($package->validity." days")),

                        'pancard'        => $row[9], // new added

                        'aadhar_card'        => $row[10], // new added
                        
                        'marital_status_id'     => $row[11], // new added
                        
                        'mothere_tongue'       => $row[17],

                    ]);

                    $resuml = Addresses::create([
                        'user_id'                 => $user->id,
                        
                        'type'                    => "permanent",
                        
                        'taluka'                 => $row[25], //new added
                        
                        'addres'                 => $row[24], //new added
                        
                        'village'                 => $row[26], //new added
                        
                        'city_id'                 => $row[27], //new added
                        
                        'state_id'                 => $row[28], //new added
                        
                        'country_id'                 => $row[29], //new added
                    ]);
                    //echo '<pre>';print_r($resuml);exit;
                    
                    //echo '<pre>';print_r($resuml);exit;
                    
                    Education::create([

                        'user_id'                 => $user->id,
                        
                        'degree'             => $row[12], //new added
                        
                    ]);
                    
                    Career::create([

                        'user_id'             => $user->id,
                        
                        'company'             => $row[13], //new added
                        
                        'designation'        => $row[14],  //new added
                        
                        'income'             => $row[15],   //new added
                        
                        'emp'             => $row[16],   //new added
                        
                    ]);
                    
                    Astrology::create([

                        'user_id'             => $user->id,
                        
                        'time_of_birth'             => $row[22], //new added
                        
                        'city_of_birth'        => $row[23],  //new added
                        
                    ]);
                    
                    Lifestyle::create([

                        'user_id'             => $user->id,
                        
                        'diet'             => $row[18], //new added
                        
                        'drink'        => $row[19],  //new added
                        
                        'smoke'        => $row[20],  //new added
                        
                        'spectcals'        => $row[21],  //new added
                        
                    ]);
                    
                    Family::create([

                        'user_id'             => $user->id,
                        
                        'father'             => $row[30], //new added
                        
                        'father_occupation'        => $row[31],  //new added
                        
                        'mother'        => $row[32],  //new added
                        
                        'mother_occupation'        => $row[33],  //new added
                        
                        'brother'        => $row[34],  //new added
                        
                        'sister'        => $row[35],  //new added
                        
                    ]);
                    
                     PartnerExpectation::create([

                        'user_id'             => $user->id,
                        
                        'height'             => $row[36], //new added
                        
                        'height_max'        => $row[37],  //new added
                        
                        'weight'        => $row[38],  //new added
                        
                        'marital_status_id'        => $row[39],  //new added
                        
                        'children_acceptable'        => $row[40],  //new added
                        
                        'residence_country_id'        => $row[41],  //new added
                        
                        'religion_id'             => $row[42], //new added
                        
                        'caste_id'        => $row[43],  //new added
                        
                        'education'        => $row[44],  //new added
                        
                        'profession'        => $row[45],  //new added
                        
                        'smoking_acceptable'        => $row[46],  //new added
                        
                        'drinking_acceptable'        => $row[47],  //new added
                        
                        'diet'             => $row[48], //new added
                        
                        'manglik'        => $row[49],  //new added
                        
                        'preferred_country_id'        => $row[50],  //new added
                        
                        'preferred_state_id'        => $row[51],  //new added
                        
                    ]);
                    
                    PhysicalAttribute::create([
                        
                        'user_id'             => $user->id,
                        
                        'height'             => $row[52], //new added
                        
                        'weight'        => $row[53],  //new added
                        
                        'blood_group'        => $row[54],  //new added
                        
                    ]);

                }


                catch (\Exception $e) {

                    //

                }

            }

            $key = $key+1;

        }

    }

}

