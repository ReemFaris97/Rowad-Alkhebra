<?php

use Illuminate\Http\Response;

function getLang($collection, $target)
{
    if (app()->getLocale() == 'en') {
        return $collection['en_' . $target];
    } else {
        return $collection['ar_' . $target];
    }
}



function getsetting($name)
{
    $setting = \App\Setting::where('name', $name)->first();
    if (!$setting) return "";
    return $setting->value();
}

/**
 * Upload Path
 * @return string
 */
function uploadpath()
{
    return 'photos';
}

/**
 * Get Image
 * @param $filename
 * @return string
 */
function getimg($filename)
{
    if (!empty($filename)) {
        $base_url = url('/');
        return $base_url . '/storage/' . $filename;
    } else {
        return '';
    }
}

function setting($name)
{
    return getLang(\App\Setting::whereName($name)->first(), 'value');
}

/**
 * Upload an image
 * @param $img
 */
function uploader($request, $img_name)
{
    $path = \Storage::disk('public')->putFile(uploadpath(), $request->file($img_name));
    return $path;
}

/**
 * Upload a file
 * @param $img
 */
function uploadFile($file)
{
    return \Storage::disk('public')->putFile(uploadpath(), $file);
}

function multipleUploader($request, $inputName, $img_name, $model, $options = [])
{
    $items = [];
    foreach ($request->$inputName as $key => $item) {
        $photo = \Illuminate\Support\Facades\Storage::disk('public')->putFile(uploadpath(), $item);
        $items[$key] = $model->firstOrCreate([
            $img_name => $photo
        ], $options);
    }

    return $items;
}

function deleteImg($img_name)
{
    \Storage::disk('public')->delete(uploadpath(), $img_name);
    return True;
}

function permissions()
{
    $countries = App\Permission::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['title']];
    });
    return $countries;
}

function getSocialAvatar($user)
{
    $fileContents = file_get_contents($user->getAvatar());
    File::put('storage/photos/' . $user->getId() . ".jpg", $fileContents);
    return 'photos/' . $user->getId() . ".jpg";
}

function fcm_server_key()
{
    return 'AAAAadcL7N0:APA91bFsdbzpUHZiMZkGAVfeaa48NU9Swj9CWY61HTMxx55NIKfIIvuarr0Ok0vxo3AZM6f0ApY97uucYDv6fQ5zjwWDm3X-E1wEzt_-s32RqofdsawKR2m-oF966VChzod_nPPmZv-u';
}

function notifyByFirebase($title, $body, $tokens, $data = [], $is_notification = true)
{
    // https://gist.github.com/rolinger/d6500d65128db95f004041c2b636753a
    // API access key from Google FCM App Console
    // env('FCM_API_ACCESS_KEY'));

    //    $singleID = 'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd';
    //    $registrationIDs = array(
    //        'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd',
    //        'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd',
    //        'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd'
    //    );
    $registrationIDs = $tokens;

    // prep the bundle
    // to see all the options for FCM to/notification payload:
    // https://firebase.google.com/docs/cloud-messaging/http-server-ref#notification-payload-support

    // 'vibrate' available in GCM, but not in FCM
    $fcmMsg = array(
        'body' => $body,
        'title' => $title,
        'sound' => "default",
        'color' => "#203E78"
    );
    // I haven't figured 'color' out yet.
    // On one phone 'color' was the background color behind the actual app icon.  (ie Samsung Galaxy S5)
    // On another phone, it was the color of the app icon. (ie: LG K20 Plush)

    // 'to' => $singleID ;      // expecting a single ID
    // 'registration_ids' => $registrationIDs ;     // expects an array of ids
    // 'priority' => 'high' ; // options are normal and high, if not set, defaults to high.
    $fcmFields = array(
        'registration_ids' => $registrationIDs,
        'priority' => 'high',
        'data' => $data
    );
    if ($is_notification) {
        $fcmFields['notification'] = $fcmMsg;
    }

    $headers = array(
        'Authorization: key=' . fcm_server_key(),
        'Content-Type: application/json'
    );

    /*        info("API_ACCESS_KEY_client: ".env('API_ACCESS_KEY_client'));
            info("PUSHER_APP_ID: ".env('PUSHER_APP_ID'));*/

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmFields));
    $result = curl_exec($ch);
    curl_close($ch);
    info($result);
    return $result;
}


function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2)
{
    // Calculate the distance in degrees
    $degrees = rad2deg(acos((sin(deg2rad($point1_lat)) * sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat)) * cos(deg2rad($point2_lat)) * cos(deg2rad($point1_long - $point2_long)))));

    // Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
    switch ($unit) {
        case 'km':
            $distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)
            break;
        case 'mi':
            $distance = $degrees * 69.05482; // 1 degree = 69.05482 miles, based on the average diameter of the Earth (7,913.1 miles)
            break;
        case 'nmi':
            $distance = $degrees * 59.97662; // 1 degree = 59.97662 nautic miles, based on the average diameter of the Earth (6,876.3 nautical miles)
    }
    return round($distance, $decimals);
}

function slug($name)
{
    return $name . '-' . str_random(30);
}

function api()
{
    return auth('api');
}

function popup($name)
{
    $ms = 5000;
    $types = ['success', 'warning', 'info', 'error', 'basic'];
    $crud = ['add', 'update', 'delete'];

    if (in_array($name, $crud)) {
        if ($name == 'add') {
            return alert()->success('تم الاضافه بنجاح')->autoclose($ms);
        } elseif ($name == 'update') {
            return alert()->success('تم التعديل بنجاح')->autoclose($ms);
        } elseif ($name == 'delete') {
            return alert()->success('تم الحذف بنجاح')->autoclose($ms);
        }
    }

    if (in_array(array_keys($name)[0], $types)) {
        $alert = array_keys($name)[0];
        return alert()->$alert(array_values($name)[0])->autoclose($ms);
    }


    if (array_keys($name)[0] == 'rules') {

        $validator = \Illuminate\Support\Facades\Validator::make(request()->all(), array_values($name)[0]);

        if ($validator->fails()) {
            alert()->error($validator->errors()->first())->autoclose($ms);
            return true;
        }
        return false;
    }
}



function departs()
{
    $departs = App\Department::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $departs;
}

function getLocationComponents($latlang)
{

    /* $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, "https://maps.googleapis.com/maps/api/geocode/json?latlng='.$latlang.'&key='.$key.'");*/
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://maps.googleapis.com/maps/api/geocode/json?latlng=" . $latlang . "&key=AIzaSyCsT140mx0UuES7ZwcfY28HuTUrTnDhxww");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    $decodedResponse = json_decode($response);
    $components = $decodedResponse->results;


    return $components;
}


/**
 * @param $collection
 * @param $perPage
 * @return array
 */

function collectPagination($collection, $perPage)
{
    $request = request();
    $collection = collect($collection);
    $page = $request->has('page') ? $request->page : 1;
    $collection = $collection->forPage($page, $perPage);
    return $collection->all();
}

function returnDates($fromdate, $todate)
{
    $fromdate = new \DateTime($fromdate);
    $todate = new \DateTime($todate);
    return new \DatePeriod(
        $fromdate,
        new \DateInterval('P1D'),
        $todate->modify('+1 day')
    );
}

function niceSearch($query, $columns = [], $string = '')
{
    foreach ($columns as $column) {
        $query->where($column, 'LIKE', $string)
            ->orWhere($column, 'LIKE', '%' . $string)
            ->orWhere($column, 'LIKE', $string . '%')
            ->orWhere($column, 'LIKE', '%' . $string . '%');
    }
    return $query;
}

function apiValidation($_this, $rules = [])
{
    $request = request();
    $validation = $_this->apiValidation($request, $rules);
    if ($validation instanceof Response) {
        return $validation;
    }
    return false;
}

function allDays()
{
    if (app()->getLocale() == 'ar') {
        $days = [
            'السبت', 'الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعه'
        ];
    } else {
        $days = [
            'Saturday',
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',

        ];
    }

    return $days;
}


function allDashboardDays()
{
    if (app()->getLocale() == 'ar') {
        $days = [
            'السبت' => 'السبت',

            'الاحد' => 'الاحد',
            'الاثنين' => 'الاثنين',
            'الثلاثاء' => 'الثلاثاء',
            'الاربعاء' => 'الاربعاء',
            'الخميس' => 'الخميس',
            'الجمعه' => 'الجمعه',

        ];
    } else {
        $days = [
            'Saturday' => 'Saturday',
            'Sunday' => 'Sunday',
            'Monday' => 'Monday',
            'Tuesday' => 'Tuesday',
            'Wednesday' => 'Wednesday',
            'Thursday' => 'Thursday',
            'Friday' => 'Friday',

        ];
    }

    return $days;
}


function getDashboardDays($arr)
{
    $Dashboeddays = allDashboardDays();
    $newArr = [];
    foreach ($Dashboeddays as $key => $day) {
        if (in_array($key, $arr)) {
            $newArr[] = $day;
        }
    }
    return implode(',', $newArr);
}
function getDays($arr)
{
    $days = allDays();
    $newArr = [];
    foreach ($days as $key => $day) {
        if (in_array($key, $arr)) {
            $newArr[] = $day;
        }
    }
    return implode(',', $newArr);
}

function getStatus($status)
{
    if (app()->getLocale() == 'ar') {
        $arr = [
            'open' => 'مفتوحه',
            'pending' => 'قيد الانتظار',
            'under_delivery' => 'قيد التوصيل',
            'finished' => 'منتهيه',
            'canceled' => 'ملغيه'
        ];
    } else {
        $arr = [
            'open' => 'open',
            'pending' => 'Pending',
            'under_delivery' => 'Under Deliver',
            'finished' => 'Finished',
            'canceled' => 'Canceled'
        ];
    }

    return $arr[$status];
}
