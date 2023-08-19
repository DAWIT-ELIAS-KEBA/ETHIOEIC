<?php

namespace App\Http\Controllers\Investment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment\InvestmentType;
use App\Models\Investment\Shareholder;
use App\Models\Base\Region;
use App\Models\Base\Zone;
use App\Models\Base\Woreda;
use App\Models\Investment\CompanyName;



class InvestmentRegistration extends Controller
{
    public function displayInvestmentRegistrationPage()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("Investment_registration_page"))
        {
            return view("errors.role_permission_error");
        }
        // ShareHolder
        $shareholderInfo = new ShareHolder();
        $shareholders =  $shareholderInfo->CustomerNameandId();
        // Investment Type
        $investmentType = new InvestmentType();
        $InvestmentTypes = $investmentType->InvestmentTypeNameandId('BT');
        
        $BusinessType = new InvestmentType();
        $BusinessTypes = $investmentType->InvestmentTypeNameandId('BA');

        $RegionInfo = new Region();
        $Regions =  $RegionInfo->RegionNameandId();
        // Zone
        $ZoneInfo = new Zone();
        $Zones =  $ZoneInfo->ZoneNameandId();
        // Woreda
        $WoredaInfo = new Woreda();
        $Woredas =  $WoredaInfo->WoredaNameandId();

        return view("Investment.InvestmentRegistration",compact('InvestmentTypes','BusinessTypes','shareholders','Regions','Woredas','Zones'));
    }
    public function getzonesbyRegionID(Request $request,$id)
    {
       $zoneInfo = new Zone();
       $Zones =  $zoneInfo->ZoneNameAndIdByRegion($id);
       return response()->json($Zones);

    }
    public function getworedasbyZoneID(Request $request,$id)
    {
       $woredaInfo = new Woreda();
       $Woredas =  $woredaInfo->WoredaNameAndIdByZone($id);
       return response()->json($Woredas);
    }
    public function RequestInvestmentRegistration(Request $request)
    {
        $formData = $request->all();
        $userId = Auth::user()->id;
        $companyNameData = [
                'name1'=>$formData['companyName1'],
                'name2'=>$formData['companyName2'],
                'name3'=>$formData['companyName3'],
            ];
            $investmentData = [
                'investment_type_id'=>$formData['businessForm'],
                'trade_name'=>$formData['tradeName'],
                'business_type_id'=>$formData['fieldOfBusiness'],
                'manager_id'=>$formData['generalManager'],
                'created_by'=>$userId,
                'attorney_name'=>$formData['Authorized_PersonName']
               
            ];
            $result = CompanyName::saveInvestmentWithCompanyNames($investmentData,$companyNameData);
        // ... and so on
        // Process the data and perform necessary actions
        // For example, you can save the data to the database
    
        // Return a response (you can customize the response based on your needs)
        return response()->json(['message' =>  "Registered Successfully"]);  
    }
}
