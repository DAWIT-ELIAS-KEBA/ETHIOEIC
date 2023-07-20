<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actor\Permission;
use App\Models\Actor\PermissionGroup;
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
        $permission_data=[
                            [
                                "group_name"=>"ROLE PERMISSION MANAGMENT",
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
                                "group_name"=>"USER ROLE MANAGMENT",
                                "group_order_num"=>2,
                                "permissions"=>
                                    [
                                        ["name"=>"assign_user_role","label"=>"Assign User Role","order_num"=>1],
                                        ["name"=>"remove_user_role","label"=>"Remove User Role","order_num"=>2],
                                        ["name"=>"view_user_role","label"=>"View User Role","order_num"=>3],
                                    ]
                            ],
                            [
                                "group_name"=>"USER PERMISSION MANAGMENT",
                                "group_order_num"=>3,
                                "permissions"=>
                                    [
                                        ["name"=>"view_user_permission","label"=>"View User Permission","order_num"=>1],
                                        ["name"=>"assign_user_permission","label"=>"Assign User Permission","order_num"=>2],
                                        ["name"=>"remove_user_permission","label"=>"Remove User Permission","order_num"=>3],
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
            foreach($permissions["permissions"] as $permission)
            {
                $mypermission=Permission::where("name",$permission["name"])->get()->first();
                if(!$mypermission)
                {
                    Permission::create([
                        "name"=>$permission['name'],
                        "label"=>$permission['label'],
                        "group_id"=>$permission_group->id,
                        "order_num"=>$permission['order_num']
                    ]);
                }
                else
                {
                    $mypermission->update(["order_num"=>$permission['order_num']]);
                }
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
                    ]
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
}
