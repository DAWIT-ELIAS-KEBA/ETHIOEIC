<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Service\VIPServiceType;
use DataTables;



class VIPService extends Controller
{
    // VIP Service Page
    public function VIPServiepage()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("VIP_services_page"))
        {
            return view("errors.role_permission_error");
        }
        return view("services.VIP_Service");
    }
    public function registerVIPService(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("VIP_services_registration"))
        {
            return view("errors.role_permission_error");
        }
        $validator = Validator::make($request->all(), [
            'service' => 'required|string|max:255',
            'created_by'=>'required|exists:users,id',
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $existingVIPServType = VIPServiceType::where('service', $request->service)->first();

        if ($existingVIPServType) 
        {
            return response()->json(['errors' => ['name' => ['VIP Service with the same name already exists.']]], 422);
        }
        VIPServiceType::create(['service' => $request->service,'added_by' => $request->created_by]);
        return response()->json(['message' => 'VIP Service registered successfully']);
    }
    public function getVIPService()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_VIP_services"))
        {
            return view("errors.role_permission_error");
        }
        $VIPServicType = VIPServiceType::select('id', 'service')->get();
        return DataTables::of($VIPServicType)   
            ->make(true);
    }
    public function update_VIPService(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_VIP_services"))
        {
            return view("errors.role_permission_error");
        }
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        $Data=['service'=>$validatedData['name']];
        $id=($validatedData['id']);
        $item = VIPServiceType::findOrFail($id);
        $result = $item->update($Data);
        return response()->json(['message' => 'VIP Service is updated successfully']); 
    }
    public function destroyVIPService(Request $request,$id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_VIP_services"))
        {
            return view("errors.role_permission_error");
        }
        try 
            {
                VIPServiceType::destroy($id);
                return response()->json(['message' => 'VIP Service is deleted successfully']);
            } 
        catch (QueryException $e) 
            {
                return response()->json(['errors' => ['name' => ['Error to Delete VIP Service.']]], 422);
            }
         catch (\Exception $e) 
            {
                return response()->json(['errors' => ['name' => ['Error to Delete VIP Service.']]], 422);
            }
    }

}
