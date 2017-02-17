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
### Sample CURL Command
```curl
curl -X PUT 
--header 'Content-Type: application/json' 
--header 'Accept: application/json' 
--header 'Authorization: Apikey <API_KEY>' 
-d '{
  "name": {
    "s": "Saman"
  },
 "user_id": {
    "s": "UID001"
  },
  "mobile_number": {
    "s": "94771234567"
  },
  "email": {
    "s": "saman@test.com"
  }
}' 'https://amdimbh5tf.execute-api.us-east-1.amazonaws.com/v7/contacts'
```
Above the notation s,sS and n are for defining the data type as mentioned below
* s - string
* sS - string set (like an array of strings)
* n - number

## Track Activity
### Sample CURL Command
```curl
curl -X POST 
--header 'Content-Type: application/json' 
--header 'Accept: application/json' 
--header 'Authorization: Apikey <API_KEY>' 
-d '{
  "user_id": "UID001",
  "activity_name": "Sample Activity",
  "activity_data": {
	"param_1":"param 1",
	"param_2":"param 2"
  }
}' 'https://amdimbh5tf.execute-api.us-east-1.amazonaws.com/v7/activities/records'
```
## Send Message
### Sample CURL Command
```curl
curl -X POST 
--header 'Content-Type: application/json' 
--header 'Accept: application/json' 
--header 'Authorization: Apikey <API_KEY>' 
-d '{
  "source": "ShoutDEMO",
  "destinations": [
    "94771234567"
  ],
  "transports": [
    "sms"
  ],
  "content": {
    "sms": "Sent via ShoutOUT Gateway"
  }
}' 'https://amdimbh5tf.execute-api.us-east-1.amazonaws.com/v7/messages'
```

