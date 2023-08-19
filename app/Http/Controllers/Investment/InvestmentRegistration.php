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
        $InvestmentTypes = $investmentType->InvestmentTypeNameandId();
        // Region
        $RegionInfo = new Region();
        $Regions =  $RegionInfo->RegionNameandId();
        // Zone
        $ZoneInfo = new Zone();
        $Zones =  $ZoneInfo->ZoneNameandId();
        // Woreda
        $WoredaInfo = new Woreda();
        $Woredas =  $WoredaInfo->WoredaNameandId();

        return view("Investment.InvestmentRegistration",compact('InvestmentTypes','shareholders','Regions','Woredas','Zones'));
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
        if(!Auth::user() || !Auth::user()->hasPermissionWithName())
    }
}
