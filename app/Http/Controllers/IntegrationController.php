<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Integration;

class IntegrationController extends Controller
{
    //
    public function index()
    {
        return view('integrations');
    }

    public function showCategoryIntegrations($categoryId)
    {
        
        $integrations = Integration::orderBy('created_at','desc');
        if ($categoryId == 0) {
            $integrations;
        } else {
           $category = Category::find($categoryId);
           if($category)
            { 
                $integrations->whereJsonContains('category_ids', [$categoryId]);
            }
        }
        $integrations = $integrations->get();
        $output = '';
        foreach ($integrations as $integration) {
            $integration;
            $id = preg_replace("/[^a-zA-Z]+/", "", $integration->name);
            $logo = logo_image_public_path().$integration->logo;
            $output .= '<div class="col-sm-4" id="' . $id . '">
                            <b style="display: none !important;">' . $integration->name . '</b>
                            <div class="integrations-info tabbing-Integrations position-relative bg-whitecolor">
                                <div class="integrations-images compny-logo">
                                    <img src="' . $logo . '">
                                </div>
                                <p class="integrations-text">' . $integration->description . '</p>
                            </div>
                        </div>';
        }
        return Response($output);
    }
}
