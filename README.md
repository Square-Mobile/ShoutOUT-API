# ShoutOUT-API
ShoutOUT API samples and instructions

## Intoduction

This document provide required details to connect with ShoutOUT REST API for third parties. All parameters in the POST requests should be url-encoded. You can use either SDKs (recommended) or direct HTTP call to the API.  You can find the source code repositories and instructions for each SDK as mentioned in Section 2. Therefore, this document only focus on using API without SDK.

## Overview
* [API Reference](http://docs.getshoutout.com/#/default)

* JAVA SDK

    Recommended to use java V1.7 or above. will update soon.

* JavaScript SDK

    You can find the instructions and SDK from following repository. 
    
    [JavaScript SDK](https://github.com/Square-Mobile/ShoutOUT-SDK-JavaScript)
    
    [JavaScript SDK Wiki](https://github.com/Square-Mobile/ShoutOUT-SDK-JavaScript/wiki)

* PHP SDK

    Required PHP V5.0 or above. All the methods will return Response object which having properties, http status and the response data received from the API. You can use those details as described in the relevant method. You can find the instructions and source code from following repository. 
    
    [PHP SDK](https://github.com/Square-Mobile/ShoutOUT-SDK-PHP)
    
    [PHP SDK Wiki](https://github.com/Square-Mobile/ShoutOUT-SDK-PHP/wiki)

## Parameters

* **Api Key** : Unique id assigned to the account. *

* **Access Key** : Access key to access the API. *

* **Secret Key** : Secret key to access the API. *

* **End Point** : API base url. *

* **MSISDN** : Standard name for represent a Mobile number.

    **NOTE:** The parameters indicated with ‘*’ will be provided with your account.


## Security
All the API requests should be signed, before send. If you use the SDK, the signing process will be automatically handled. To implement signing process, please go through following guide.
http://docs.aws.amazon.com/general/latest/gr/sigv4_signing.html


## Methods

### Create a contact

Create a contact under a group.

**Content Type:** application/json

**Data Type:** application/json

**Payload:**  

	 `{"msisdn":mobile,
	   "name":name,
	   "email":email,
	   "group_ids":[groupId]}`

**Required Fields:**

* msisdn

* group_ids : List of group Ids, the contact should be assigned. For the moment, only support for one group Id.

    You can provide any other alpha arbitrary fields as you wish. 

**Responses:**
* **201:** Created the contact.You will get the same response as payload as Json string.

        eg: {"group_ids":["413"],"msisdn":"94777123456","name":"Michael"}
                
* **400:** Parse error. Can not parse the request. Check required parameters are present.

* **401:** Authorization failed. Check your credentials.

* **500:** Internal error. Try again later.


### Send a message

Send a message to given set of numbers. You can have maximum up to 20 mobile numbers in a single request. Mobile number should provide with the country code without ‘+’ sign and leading ‘0’ in the number. For an example, if number is 0778812345, then the format should be 94778812345.

**Content Type:** application/json

**Data Type:** application/json

**Payload:** 
    
    `{  source:sender id,
        destinations:[msisdn1 ,msisdn2],
        content:{
            sms: content
            }
    }`
  
**Response:**

* **201:** Success
		
    {"balance":47,"cost":1,"description":"Submit success","sent_on":"2015-10-20T11:43:39.278Z","status":"1001"}
			
* **400:** Bad Request

* **401:** Authorization Failed

* **500:** Internal Error 

    {"message":"Internal error. Try again later!","code":"6"}




