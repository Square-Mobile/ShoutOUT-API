# ShoutOUT-API
ShoutOUT API Samples and Usage Instructions

## Intoduction

This document provide required details to connect with ShoutOUT REST API for third parties. All parameters in the POST requests should be url-encoded. You can use either SDKs (recommended) or direct HTTP call to the API.  You can find the source code repositories and instructions for each SDK as mentioned in Section 2. Therefore, this document only focus on using API without SDK.

## Overview
* [API Reference](http://docs.getshoutout.com/#/default)

* JAVA

    [JAVA SDK](https://github.com/Square-Mobile/shoutout-sdk-java)

* JavaScript

    You can find the instructions and SDK from following repository. 
    
    [JavaScript SDK](https://github.com/Square-Mobile/ShoutOUT-SDK-JavaScript)

* PHP

    Required PHP V5.0 or above. All the methods will return Response object which having properties, http status and the response data received from the API. You can use those details as described in the relevant method. You can find the instructions and source code from following repository. 
    
    [PHP SDK](https://github.com/Square-Mobile/ShoutOUT-SDK-PHP)
    
* NodeJS
    
    [NodeJS SDK](https://github.com/Square-Mobile/shoutout-sdk-nodejs)

    [NodeJS SDK NPM](https://www.npmjs.com/package/shoutout-sdk)


## Create or Update Contact

```curl
curl -X PUT 
--header 'Content-Type: application/json' 
--header 'Accept: application/json' --header 'Authorization: Apikey ' 
-d '{
  "name": {
    "s": "Saman"
  },
 "user_id": {
    "s": "uid001"
  },
  "mobile_number": {
    "s": "94778766756"
  },
  "email": {
    "s": "saman@test.com"
  },
  "tags": {
    "sS": [
      "vegetarian",
      "teacher"
    ]
  },
  "weight": {
    "n": "65"
  }
}' 'https://amdimbh5tf.execute-api.us-east-1.amazonaws.com/v7/contacts'
```



