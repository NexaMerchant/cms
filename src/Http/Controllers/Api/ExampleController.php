<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-08-20 18:26:37
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Cms\Http\Controllers\Api;

use Illuminate\Foundation\Validation\ValidatesRequests;

class ExampleController extends Controller
{
    public function demo() {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "success";
        return response()->json($data);
    }
}
