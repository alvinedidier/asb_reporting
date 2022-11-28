<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Advertiser;
use App\Models\Agency;
use App\Models\Campaign;
use App\Models\CampaignAdManager;

use App\Models\Format;
use App\Models\FormatGroup;

use App\Models\Insertion;
use App\Models\InsertionPriority;
use App\Models\InsertionStatus;
use App\Models\InsertionTemplate;

use App\Models\Pack;
use App\Models\PackSite;

use App\Models\Sites;
use App\Models\Platform;
use App\Models\Country;

use App\Models\Creative;
use App\Models\CreativeType;
use App\Models\CreativeTypeFormat;
use App\Models\EpilotCampaign;
use App\Models\EpilotInsertion;

use App\Models\User;
use App\Models\Role;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/campaigns', function () { $campaigns = Campaign::all(); return response()->json($campaigns); });
Route::get('/advertisers', function () { $advertisers = Advertiser::all(); return response()->json($advertisers); });
Route::get('/agencies', function () { $agencies = Agency::all(); return response()->json($agencies); });
Route::get('/formats', function () { $formats = Format::all(); return response()->json($formats); });
Route::get('/formats/groups', function () { $formatGroup = FormatGroup::all(); return response()->json($formatGroup); });


Route::get('/insertions', function () { $insertions = Insertion::all(); return response()->json($insertions); });
Route::get('/insertions/priorities', function () { $insertionsPriority = InsertionPriority::all(); return response()->json($insertionsPriority); });
Route::get('/insertions/status', function () { $insertionStatus = insertionStatus::all(); return response()->json($insertionStatus); });
Route::get('/insertions/templates', function () { $insertionTemplates = insertionTemplate::all(); return response()->json($insertionTemplates); });

Route::get('/packs', function () { $packs = Pack::all(); return response()->json($packs); });
Route::get('/packs/sites', function () { $packs = PackSite::all(); return response()->json($packs); });


Route::get('/sites', function () { $sites = Sites::all(); return response()->json($sites); });
Route::get('/platforms', function () { $platforms = Platform::all(); return response()->json($platforms); });
Route::get('/countries', function () { $countries = Country::all(); return response()->json($countries); });
Route::get('/creatives', function () { $creatives = Creative::all(); return response()->json($creatives); });
Route::get('/creatives/types', function () { $creativestypes = CreativeType::all(); return response()->json($creativestypes); });
Route::get('/creatives/types/formats', function () { $CreativeTypeFormat = CreativeTypeFormat::all(); return response()->json($CreativeTypeFormat); });
Route::get('/epilot/campaigns', function () { $epilotcampaigns = EpilotCampaign::all(); return response()->json($epilotcampaigns); });
Route::get('/epilot/insertions', function () { $epilotinsertions = EpilotInsertion::all(); return response()->json($epilotinsertions); });

Route::get('/users', function () { $users = User::all(); return response()->json($users); });
Route::get('/roles', function () { $roles = Role::all(); return response()->json($roles); });
