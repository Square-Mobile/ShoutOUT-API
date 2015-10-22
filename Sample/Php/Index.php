<?php
/**
 * Created by Square Mobile
 * Date: 22/10/2015
 * Time: 15:13
 */

 require_once 'SignProvider.php';

//init api key and headers
$headers=array("x-api-key"=>"39WZqCjdsgsrterterdfgfdfgdfghtrtrrrwh","host"=>"lwel2lpoy3.execute-api.us-east-1.amazonaws.com");

//body of the request
$body='{"msisdn":"94771234567","name":"Madura","group_ids":["1"]}';

//calculate signature
$signature=calculateSignature("AKIARSDVDSVSVSETTT","FSRAWSDJGDJG5SAFHASAAS","POST","/prod/contacts",$body,$headers,array());//(accessKey,secretKey,request method,path, request body, request headers, query parameters)
