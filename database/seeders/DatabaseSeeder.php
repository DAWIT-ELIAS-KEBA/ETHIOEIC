<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actor\Permission;
use App\Models\Actor\PermissionGroup;
use App\Models\Actor\Role;
use App\Models\Actor\SideBarMenu;
use App\Models\Actor\SideBarMenuItem;
use App\Models\Actor\User;
use App\Models\Letter\LetterCode;
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
       $this->letter_codes();
    }

    public function PermissionSeeder()
    {
        $user=User::where("email","admin@gmail.com")->get()->first();
        if(!$user)
        {
            $user=User::create([
                "name"=>"Admin",
                "email"=>"admin@gmail.com",
                "password"=>"$2y$10\$D.C1lGfc1uHg9smkUdibK.ircCgbA0DiVjgiq9C1UmzCEqalNhCSu",
                "email_verified_at"=>"2023-8-10",
                "user_type"=>"user"
            ]);
        }
        $role=Role::where("name","admin")->get()->first();
        if(!$role)
        {
            $role=Role::create([
                "name"=>"Admin",
                "added_by"=>$user->id
            ]);
        }
        $role->Users()->detach($user);
        $role->Users()->attach($user,["added_by"=>$user->id]);


        $permission_data=[
                            [
                                "group_name"=>"ROLE PERMISSION MANAGEMENT",
                                "group_order_num"=>1,
                                "permissions"=>
                                    [
                                        ["name"=>"view_role","label"=>"View Role","order_num"=>1],
                                        ["name"=>"delete_role","label"=>"Delete Role","order_num"=>1],
                                        ["name"=>"create_new_role","label"=>"Creating New Role","order_num"=>2],
                                        ["name"=>"assign_role_permission","label"=>"Assign Permission To Role","order_num"=>3],
                                        ["name"=>"update_role","label"=>"Update Role Information","order_num"=>4],
                                        ["name"=>"remove_role_permission","label"=>"Remove Permission From Role","order_num"=>5],
                                    ]
                            ],
                            [
                                "group_name"=>"USER MANAGEMENT",
                                "group_order_num"=>3,
                                "permissions"=>
                                    [
                                        ["name"=>"view_users","label"=>"View User","order_num"=>1],
                                        ["name"=>"add_new_user","label"=>"Add User","order_num"=>2],
                                        ["name"=>"update_user","label"=>"Update User","order_num"=>2],
                                        ["name"=>"delete_user","label"=>"Delete User","order_num"=>2],
                                        ["name"=>"enable_disable_user","label"=>"Enable Disable User","order_num"=>2],
                                        ["name"=>"assign_user_role","label"=>"Assign User Role","order_num"=>2],
                                        ["name"=>"assign_user_permission","label"=>"Assign User Permission","order_num"=>2],
                                    ]
                            ],
                            [
                                "group_name"=>"Region and Zone",
                                "group_order_num"=>4,
                                "permissions"=>
                                    [
                                        ["name"=>"register_region","label"=>"Register Region","order_num"=>1],
                                        ["name"=>"register_zone","label"=>"Register Zone","order_num"=>2],
                                        ["name"=>"register_woreda","label"=>"Register Woreda","order_num"=>3],
                                        ["name"=>"view_region","label"=>"View Region","order_num"=>4],
                                        ["name"=>"create_woreda","label"=>"Create Woreda","order_num"=>5],
                                        ["name"=>"create_region","label"=>"Create Region","order_num"=>6],
                                        ["name"=>"create_zone","label"=>"Create Zone","order_num"=>7],
                                        ["name"=>"edit_region","label"=>"Edit Region","order_num"=>8],
                                        ["name"=>"edit_region","label"=>"Edit Region","order_num"=>9],
                                        ["name"=>"view_zone","label"=>"View Zone","order_num"=>10],
                                        ["name"=>"view_woreda","label"=>"View Woreda","order_num"=>11],
                                        ["name"=>"edit_zone","label"=>"Edit Zone","order_num"=>12],
                                        ["name"=>"edit_woreda","label"=>"Edit Woreda","order_num"=>13],
                                        ["name"=>"delete_woreda","label"=>"Delete Woreda","order_num"=>14],
                                        ["name"=>"delete_region","label"=>"Delete Region","order_num"=>15],
                                        ["name"=>"delete_zone","label"=>"Delete Zone","order_num"=>16],


                                    ]
                            ]
                            ,
                            [
                                "group_name"=>"VISA MANAGEMENT",
                                "group_order_num"=>3,
                                "permissions"=>
                                    [
                                        ["name"=>"view_other_visa","label"=>"View Other Visa","order_num"=>1],
                                        ["name"=>"register_other_visa","label"=>"Register Other Visa","order_num"=>2],
                                        ["name"=>"delete_other_visa","label"=>"Delete Other Visa","order_num"=>2],
                                        ["name"=>"update_other_visa","label"=>"Update OTHER Visa","order_num"=>2],
                                    ]
                            ],
                            [
                                "group_name"=>"LETTER MANAGEMENT",
                                "group_order_num"=>3,
                                "permissions"=>
                                    [
                                        ["name"=>"view_letter_code","label"=>"View Letter Code","order_num"=>1],
                                        ["name"=>"view_letter_template","label"=>"View Letter Template","order_num"=>2],
                                        ["name"=>"create_new_letter_template","label"=>"Create New Letter Template","order_num"=>3],
                                        ["name"=>"update_letter_template","label"=>"Update Letter Template","order_num"=>4],
                                        ["name"=>"delete_letter_template","label"=>"Delete Letter Template","order_num"=>5],
                                        ["name"=>"view_initialized_letter","label"=>"View Initialized Letter","order_num"=>6],
                                        ["name"=>"prepare_letter","label"=>"prepare_letter","order_num"=>7],
                                        ["name"=>"update_letter","label"=>"Update Letter","order_num"=>8],
                                        ["name"=>"update_letter","label"=>"Approve Letter","order_num"=>8]
                                    ]
                            ]

                        ];
        foreach ($permission_data as $permissions)
        {
            $permission_group=PermissionGroup::where("group_name",$permissions["group_name"])->get()->first();
            if (!$permission_group)
            {
                $permission_group=PermissionGroup::create([
                    "group_name"=>$permissions["group_name"],
                    "order_num"=>$permissions["group_order_num"]
                ]);
            }
            else
            {
                $permission_group->update(["order_num"=>$permissions["group_order_num"]]);
            }
            foreach($permissions["permissions"] as $permission)
            {
                $mypermission=Permission::where("name",$permission["name"])
                                    ->get()
                                    ->first();

                if(!$mypermission)
                {
                    $mypermission=Permission::create([
                        "name"=>$permission['name'],
                        "label"=>$permission['label'],
                        "group_id"=>$permission_group->id,
                        "order_num"=>$permission['order_num']
                    ]);
                }
                else
                {
                    $mypermission->update([
                        "order_num"=>$permission['order_num'],
                        "label"=>$permission['label'],
                        "group_id"=>$permission_group->id]);
                }
                $role->Permissions()->detach($mypermission);
                $role->Permissions()->attach($mypermission,["added_by"=>$user->id]);
            }

        }
    }

    public function SideBarData()
    {

        $data=[
                    [
                        "menu"=>[
                                    "title"=>"Role And Permission",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-01"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Role management",
                                        "link"=>"/role/view_roles",
                                        "permission_name"=>"view_role",
                                        "item_code"=>"MC-01-MI-01"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"User Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-02"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Users",
                                        "link"=>"/user/view_users",
                                        "permission_name"=>"view_user",
                                        "item_code"=>"MC-02-MI-01"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Visa Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-03"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Other Visa",
                                        "link"=>"/other_visa/view_other_visa",
                                        "permission_name"=>"view_other_visa",
                                        "item_code"=>"MC-03-MI-01"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Letter Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-04"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "View Letter Types",
                                        "link"=>"/letter/view_letter_type",
                                        "permission_name"=>"view_letter_code",
                                        "item_code"=>"MC-04-MI-01"
                                    ]
                                ]
                    ]

                    ,
                    [
                        "menu"=>[
                                    "title"=>"Register",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-31"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Register Region",
                                        "link"=>"/region/register",
                                        "permission_name"=>"register_regions",
                                        "item_code"=>"MC-31-MI-01"
                                    ],
                                    [
                                        "title" => "Register Zone",
                                        "link"=>"/zone/register",
                                        "permission_name"=>"register_zones",
                                        "item_code"=>"MC-31-MI-02"
                                    ],
                                    [
                                        "title" => "View Region",
                                        "link"=>"/view/region",
                                        "permission_name"=>"view_regions",
                                        "item_code"=>"MC-31-MI-03"
                                    ],
                                    [
                                        "title" => "View Zone",
                                        "link"=>"/view/zone",
                                        "permission_name"=>"view_zones",
                                        "item_code"=>"MC-31-MI-04"
                                    ],
                                    [
                                        "title" => "Register Woreda",
                                        "link"=>"/woreda/register",
                                        "permission_name"=>"register_woredas",
                                        "item_code"=>"MC-31-MI-05"
                                    ],
                                    [
                                        "title" => "View Woreda",
                                        "link"=>"/view/woreda",
                                        "permission_name"=>"view_zones",
                                        "item_code"=>"MC-31-MI-06"
                                    ],

                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Item Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-32"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Item Registration",
                                        "link"=>"/item/register",
                                        "permission_name"=>"register_items",
                                        "item_code"=>"MC-32-MI-01"
                                    ]

                                ]
                    ],

                ];
        foreach($data as $ele)
        {
            $side_bar_menu=SideBarMenu::where("code",$ele["menu"]["code"])->get()->first();
            if(!$side_bar_menu)
            {
                $side_bar_menu=SideBarMenu::create($ele["menu"]);

            }
            else
            {
                $side_bar_menu->update(
                    [
                        "title"=>$ele["menu"]["title"],
                        "icon"=>$ele["menu"]["icon"],
                        "user_type"=>$ele["menu"]["user_type"]
                    ]);
            }

            foreach($ele["menuItems"] as $menuItem)
            {
                $menu_item=SideBarMenuItem::where("menu_id",$side_bar_menu->id)->where("item_code",$menuItem["item_code"])->get()->first();
                if(!$menu_item)
                {
                    $permission=Permission::where("name",$menuItem["permission_name"])->get()->first();
                    $menu_item=SideBarMenuItem::create([
                        "title"=>$menuItem["title"],
                        "link"=>$menuItem["link"],
                        "menu_id"=>$side_bar_menu->id,
                        "item_code"=>$menuItem["item_code"],
                        "permission_id"=>$permission?$permission->id:NULL
                    ]);
                }
                else
                {
                    $permission=Permission::where("name",$menuItem["permission_name"])->get()->first();
                    $menu_item->update([
                        "link"=>$menuItem["link"],
                        "permission_id"=>$permission?$permission->id:NULL
                    ]);
                }
            }
        }
    }

    public function letter_codes()
    {
        $datas=[
                    [
                        "code"=>"Letter-001",
                        "description"=>"Letter written for VIP service from EIC to INVEA.",
                        "letter_type"=>"outgoing",
                        "with_whom"=>"investor"
                    ]

                ];
        foreach($datas as $letter_code)
        {
            $letter=LetterCode::where("code",$letter_code["code"])->get()->first();
            if($letter)
            {
                $letter->update($letter_code);
            }
            else
            {
                LetterCode::create($letter_code);
            }

        }
    }



}
