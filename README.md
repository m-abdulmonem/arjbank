# arjbank Package

#### Package Payment Gateway With Alrajhi Bank with laravel

#

```bash
 composer require mabdulmonem/arjbank
```

## Package have 2 method payment

1- Bank Hosted

2- Merchant

#

1- Bank Hosted

```php

use Mabdulmonem\ArjBank\Facades\ArjBank;

 $optional_data = [
    "udf1" => null,
    "udf2" => null,
    "udf3" => null,
    "udf4" => null,
    "udf5" => null,
 ];

 ArjBank::bankHostedPayment($amount, 'response-url', 'error-url' , $optional_data);

```

## In Bank Hosted Response Will be

> Success : ["status" => '1', "url" => $url];

#

### Using Url In

```html
<iframe src="{{$url}}" style="width: 100%; height: 100%"></iframe>
```

#

> Fail : ["status" => '2', "message" => $errorMessage];

#

2- Merchant

```php

use Mabdulmonem\ArjBank\Facades\ArjBank;

 $card_details = [
     "expYear" => (string) '20'.request('expiry_year'),
     "expMonth" => (string) request('expiry_month'),
     "member" => (string) request('card_holder'),
     "cvv2" => (string) request('cvv'),
     "cardNo" => (string) request('card_number'),
     "cardType" => "C",
 ];

  $optional_data = [
    "udf1" => null,
    "udf2" => null,
    "udf3" => null,
    "udf4" => null,
    "udf5" => null,
 ];

 ArjBank::merchantPayment($card_details , $amount, 'response-url', 'error-url', $optional_data);

```

#

## In Merchant Response Will be

#

> Success : ["status" => '1', "url" => $url];

### Using Url In Redirect To Alrajhi Bank Page For Otp

#

> Fail : ["status" => '2', "message" => $errorMessage];

#

## Get Result From trandata from Response Url

```php

use Mabdulmonem\ArjBank\Facades\ArjBank;

 ArjBank::result($trandata);

```

## Response In result method Will Be

#

> Success : ["status" => '1', 'data' => $data];

#

> Fail : ["status" => '2', 'data' => $data];

#

## .env File

```env

ARJ_MODE="live" // or "test"
ARJ_TRANPORTAL_ID=""
ARJ_TRANPORTAL_PASSWORD=""
ARJ_RESOURCE_KEY=""
ARJ_CURRENCY_CODE="682"
```
