<?php
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address
    else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    // set IP address and API access key 
    $ip = $ip_address;
    $access_key = '002a8b8c3049a182073f0b5813ceebaa';

    // Initialize CURL, store data, and close CURL connection
    $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);

    // Decode JSON response:
    $api_result = json_decode($json, true);


    // get system info
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    function getOS() { 
        global $user_agent;
        $os_platform = "Unknown OS Platform";
        $os_array = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                         );
        foreach ($os_array as $regex => $value)
            if (preg_match($regex, $user_agent)) $os_platform = $value;

        return $os_platform;
    } // end getOS()

    function getBrowser() {
        global $user_agent;
        $browser = "Unknown Browser";
        $browser_array = array(
                               '/trident/i'      => 'Internet Explorer',
                               '/msie/i'      => 'Internet Explorer',
                               '/firefox/i'   => 'Firefox',
                               '/safari/i'    => 'Safari',
                               '/chrome/i'    => 'Chrome',
                               '/edg/i'      => 'Edge',
                               '/edge/i'      => 'Edge',
                               '/opera/i'     => 'Opera',
                               '/netscape/i'  => 'Netscape',
                               '/maxthon/i'   => 'Maxthon',
                               '/konqueror/i' => 'Konqueror',
                               '/mobile/i'    => 'Handheld Browser'
                              );
        foreach ($browser_array as $regex => $value)
            if (preg_match($regex, $user_agent)) $browser = $value;
        return $browser;
    } // end getBrowser()

    $user_os = getOS();
    $user_browser = getBrowser();
    $device_details = "<strong>".$user_browser."</strong> on <strong>".$user_os."</strong>";
?>