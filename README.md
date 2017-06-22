## ShoutOUT Developer Hub

Usage instructions for [ShoutOUT](https://getshoutout.com/) SDKs, API and Sample Implementations

### Introduction

This document provides required details to connect with ShoutOUT REST API from third party applications using standard SDKs and HTTP clients.

### SDKs

- [Node SDK](https://www.npmjs.com/package/shoutout-sdk)
- [PHP SDK](https://packagist.org/packages/shoutoutlabs/shoutout-sdk)
- [Java SDK](https://github.com/shoutout-labs/shoutout-sdk-java)

### REST API

#### Create or Update Contact(s)

**Sample curl command**

```curl
curl -X POST 
--header 'Content-Type: application/json' 
--header 'Accept: application/json' 
--header 'Authorization: Apikey <API_KEY>' 
-d '[{
        user_id: '94777123456',
        mobile_number: '94777123456',
        email: 'duke@test.com',
        name: 'Duke',
        tags: ['lead']
    }]' 'https://getshoutout.com/api/v8/contacts'
```

#### Create Activity

**Sample curl command**

```curl
curl -X POST 
--header 'Content-Type: application/json' 
--header 'Accept: application/json' 
--header 'Authorization: Apikey <API_KEY>' 
-d '{
        userId: '94777123456',
        activityName: 'Sample Activity',
        activityData: {
            param1: 'val1',
            param2: 'val2',
            param3: 'val3'
        }
    }' 'https://getshoutout.com/v8/activities'
```

#### Send Message

**Sample curl command**

```curl
curl -X POST 
--header 'Content-Type: application/json' 
--header 'Accept: application/json' 
--header 'Authorization: Apikey <API_KEY>' 
-d '{
        source: 'ShoutDEMO',
        destinations: ['94777123456'],
        content: {
            sms: 'Sent via SMS Gateway'
        },
        transports: ['sms']
    }' 'https://getshoutout.com/v7/messages'
```