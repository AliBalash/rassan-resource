<?php

use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Crypt;

function convert_fa_num_to_en($string): string {
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];

    $num = range(0, 9);
    $convertedPersianNums = str_replace($persian, $num, $string);
    $englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);

    return $englishNumbersOnly;
}

function generate_token($param): string
{
    return Crypt::encryptString(serialize($param));
}

function slugify($str, $options = array()) {
    // Make sure string is in UTF-8 and strip invalid UTF-8 characters
    $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());

    $defaults = array(
        'delimiter'     => '-',
        'limit'         => null,
        'lowercase'     => true,
        'replacements'  => array(),
        'transliterate' => false,
    );

    // Merge options
    $options = array_merge($defaults, $options);

    // Make custom replacements
    $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);

    // Replace non-alphanumeric characters with our delimiter
    $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);

    // Remove duplicate delimiters
    $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);

    // Truncate slug to max. characters
    $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');

    // Remove delimiter from ends
    $str = trim($str, $options['delimiter']);

    return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}

function image_path_handler($path): string
{
    $image_array = explode(',', $path);
    if(is_array($image_array)){
        return str_replace(url('/'),'' ,$image_array[0]) ;
    }else{
        return str_replace(url('/'),'' ,$path);
    }
}

function showRequisitionSubject($subjectType): string
{
    switch ($subjectType){
        case 'after_sale_tehran':
            return 'خدمات پس از فروش تهران';
        case 'provincials_after_sale':
            return 'خدمات پس از فروش شهرستان';
        case 'after_sale_agency':
            return 'امور نمایندگی ها';
        case 'marketing_list':
            return 'درخواست نمایندگی فروش';
        default:
            return '';
    }
}

function showRequisitionStatus($statusType): string
{
    switch ($statusType){
        case '0':
            return "<label class='label label-secondary' style='background-color: #b157c3'>" ."بدون کارشناس"."</label>";
        case '1':
            return "<label class='label label-secondary' style='background-color: #0093FF'>"."ارجاع به کارشناسان"."</label>";
        case '2':
            return "<label class='label label-warning' style='color:#212529'>"."ارجاع به تکنسین"."</label>";
        case '3':
            return "<label class='label label-success' style='color:#212529;'>"."در انتظار تایید مدیر"."</label>";
        case '4':
            return "<label class='label label-primary'>"."بسته شده"."</label>";
        case '-1':
            return "<label class='label label-danger' style='background-color: #444'>"."لغو شده"."</label>";
        default:
            return '';
    }
//    switch ($statusType){
//        case '1':
//            return "ارجاع به کارشناسان";
//        case '2':
//            return "ارجاع به تکنسین";
//        case '3':
//            return "پایان یافته";
//        case '-1':
//            return "لغو شده";
//        default:
//            return '';
//    }

}

function showTechnicianStatus($statusType): string
{
    switch ($statusType){
        case '1':
            return "<label class='label label-primary'>"."اعزام شده"."</label>";
        case '0':
            return "<label class='label label-danger' style='background-color: #5c5c5c'>"."اعزام نشده"."</label>";
        default:
            return '';
    }

}

function technician_date_to_gregorian($dateInput)
{
    $dateTimeArray = explode(" ", $dateInput);

    if(!is_array($dateTimeArray) or !(count($dateTimeArray) == 2)){
        return false;
    }

    $dateInput = $dateTimeArray[0];
    $timeInput = $dateTimeArray[1];

    $dateArray = explode("-", $dateInput);

    if(!is_array($dateArray) or !(count($dateArray) == 3)){
        return false;
    }

    $gregorianDateArray = Verta::getGregorian(convert_fa_num_to_en($dateArray[0]),convert_fa_num_to_en($dateArray[1]),convert_fa_num_to_en($dateArray[2]));

    $gregorianDateInput = $gregorianDateArray[0]. '-' . $gregorianDateArray[1]. '-' . $gregorianDateArray[2];


    // Time Conversion

    $timeArray = explode(":", $timeInput);


    if(!is_array($timeArray) or !(count($timeArray) == 2)){
        return false;
    }

    $gregorianTimeInput = convert_fa_num_to_en($timeArray[0]) . ':' . convert_fa_num_to_en($timeArray[1]) . ':' . '00';

    return $gregorianDateInput .' '.$gregorianTimeInput;
}

function technician_date_to_jalali($dateInput)
{
    $dateTimeArray = explode(" ", $dateInput);


    if(!is_array($dateTimeArray) or !(count($dateTimeArray) == 2)){
        return false;
    }

    $dateInput = $dateTimeArray[0];
    $timeInput = $dateTimeArray[1];

    $dateArray = explode("-", $dateInput);

    if(!is_array($dateArray) or !(count($dateArray) == 3)){
        return false;
    }

    $gregorianDateArray = Verta::getJalali(convert_fa_num_to_en($dateArray[0]),convert_fa_num_to_en($dateArray[1]),convert_fa_num_to_en($dateArray[2]));

    $gregorianDateInput = $gregorianDateArray[0]. '-' . $gregorianDateArray[1]. '-' . $gregorianDateArray[2];


    // Time Conversion

    $timeArray = explode(":", $timeInput);
    unset($timeArray[2]);

    if(!is_array($timeArray) or !(count($timeArray) == 2)){
        return false;
    }

    $gregorianTimeInput = convert_fa_num_to_en($timeArray[0]) . ':' . convert_fa_num_to_en($timeArray[1]);

    return $gregorianDateInput .' '.$gregorianTimeInput;
}

function split_name($name) {
    $name = trim($name);
    $nameArray = explode(' ', $name);

    $firstName = $nameArray[0];
    unset($nameArray[0]);
    $lastName = '';
    if(count($nameArray) >= 1){
        foreach ($nameArray as $item){
            $lastName .= $item . ' ';
        }
    }
    $lastName = trim($lastName);

//    $lastName = (isset($name[count($name)-2])) ? $name[count($name)-1] : '';

    return array($firstName, $lastName);
}
