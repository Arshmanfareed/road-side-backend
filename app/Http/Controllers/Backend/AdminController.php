<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
            // public function __construct()
            // {


            //     $this->middleware


            // }



            public function dashboard(){


                $data =  [

                    "title" => "Admin Dasboard | Roadside Rescue",
                    "breadcrumb" =>"Admin Dasboard"


                ];

                return view('backend.admin-dasboard' ,$data);

            }



            public function login(){


                $data =  [

                    "title" => "Admin Login | Roadside Rescue",
                    "breadcrumb" =>"Admin Login"


                ];

                return view('backend.login' ,$data);

            }



            public function vendors_list(){


                $data =  [

                    "title" => "Vendor Lists | Roadside Rescue",
                    "breadcrumb" =>"Vendor Lists"


                ];

                return view('backend.vendors.vendor-lists' ,$data);

            }


            public function private_chat(){


                $data =  [

                    "title" => "Private Chat | Roadside Rescue",
                    "breadcrumb" =>"Private Chat"


                ];

                return view('backend.chat.private-chat' ,$data);

            }



}
