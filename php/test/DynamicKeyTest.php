<?php
    include '../src/DynamicKey4.php';

    $staticKey = '970ca35de60c44645bbae8a215061b33';
    $signKey = '5cfd2fd1755d40ecb72977518be15d3b';
    $channelName = "7d72365eb983485397e3e3f9d460bdda";
    $ts = 1446455472;
    $randomInt = 58964981;
    $uid = 2882341273;
    $expiredTs = 1446455471;

    function testRecordingKey($staticKey, $signKey, $channelName, $ts, $randomInt, $uid, $expiredTs)
    {   
        $expected = '004e0c24ac56aae05229a6d9389860a1a0e25e56da8970ca35de60c44645bbae8a215061b3314464554720383bbf51446455471';
        
        $actual = generateRecordingKey($staticKey, $signKey, $channelName, $ts, $randomInt, $uid, $expiredTs);

        // echo($actual);
    }
    testRecordingKey($staticKey, $signKey, $channelName, $ts, $randomInt, $uid, $expiredTs);

    function testMediaChannelKey($staticKey, $signKey, $channelName, $ts, $randomInt, $uid, $expiredTs)
    {   
        $expected = '004d0ec5ee3179c964fe7c0485c045541de6bff332b970ca35de60c44645bbae8a215061b3314464554720383bbf51446455471';
        
        $actual = generateMediaChannelKey($staticKey, $signKey, $channelName, $ts, $randomInt, $uid, $expiredTs);

        // echo($actual);
    }
    testMediaChannelKey($staticKey, $signKey, $channelName, $ts, $randomInt, $uid, $expiredTs);
?>