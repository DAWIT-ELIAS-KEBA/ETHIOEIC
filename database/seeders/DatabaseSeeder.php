<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actor\Permission;
use App\Models\Actor\SideBarMenu;
use App\Models\Actor\SideBarMenuItem;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->PermissionSeeder();
       $this->SideBarData();
    }

    public function PermissionSeeder()
    {
        $permissions=[
                         //["name"=>"new_permission","label"=>"New Permission"],
                         //["name"=>"delete_permission","label"=>"Delete Permission"],
                         //["name"=>"update_permission","label"=>"Update Permission"],
                         //["name"=>"review_investment","label"=>"Review investment"]
                     ];
        foreach ($permissions as $permission)
        {
            $mypermission=Permission::where("name",$permission["name"])->get()->first();
            if(!$mypermission)
            {
                Permission::create([
                    "name"=>$permission['name'],
                    "label"=>$permission['label']
                ]);
            }

        }
    }

    public function SideBarData()
    {
        $data=[
                    /*[
                        "menu"=>[
                                    "title"=>"Permission service",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"key"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "New Permission",
                                        "link"=>"/permission/new_permission",
                                        "permission_name"=>"new_permission"
                                    ],
                                    [
                                        "title" => "Delete Permission",
                                        "link"=>"/permission/delete_permission",
                                        "permission_name"=>"delete_permission"
                                    ],
                                    [
                                        "title" => "Update Permission",
                                        "link"=>"/permission/update_permission",
                                        "permission_name"=>"update_permission"
                                    ],
                                    [
                                        "title" => "Update Permission",
                                        "link"=>"/permission/update_permission",
                                        "permission_name"=>"update_permission"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Role service",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"key"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "New Role",
                                        "link"=>"/role/new_role",
                                        "permission_name"=>"new_role"
                                    ],
                                    [
                                        "title" => "Delete Role",
                                        "link"=>"/role/delete_role",
                                        "permission_name"=>"delete_role"
                                    ],
                                    [
                                        "title" => "Update Role",
                                        "link"=>"/role/update_role",
                                        "permission_name"=>"update_role"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Investment service",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"key"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Review Investment",
                                        "link"=>"/investment/review_investment",
                                        "permission_name"=>"review_investment"
                                    ],

                                ]
                    ]*/
                ];
        foreach($data as $ele)
        {
            $side_bar_menu=SideBarMenu::where("title",$ele["menu"]["title"])->get()->first();
            if(!$side_bar_menu)
            {
                $side_bar_menu=SideBarMenu::create($ele["menu"]);

            }
            foreach($ele["menuItems"] as $menuItem)
            {
                $menu_item=SideBarMenuItem::where("menu_id",$side_bar_menu->id)->where("title",$menuItem["title"])->get()->first();
                if(!$menu_item)
                {
                    $permission=Permission::where("name",$menuItem["permission_name"])->get()->first();
                    $menu_item=SideBarMenuItem::create([
                        "title"=>$menuItem["title"],
                        "link"=>$menuItem["link"],
                        "menu_id"=>$side_bar_menu->id,
                        "permission_id"=>$permission?$permission->id:NULL
                    ]);
                }
            }
        }
    }
}
