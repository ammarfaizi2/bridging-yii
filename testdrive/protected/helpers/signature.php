<?php

function signature($consid, $secretid)
{
    $timestamps = timestamp();
    $signature = hash_hmac('sha256', $consid."&".$timestamps, $secretid, true);
    $signature = base64_encode($signature);
    return $signature;
}

function timestamp()
{
    $timestamp = strval(time()-strtotime('1970-01-01 00:00:00'));
    return $timestamp;
}
