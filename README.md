# bonbast-api

Dollar and Euro: Live irr exchange rates in free market - bonbast.com

## Supported exchanges

US Dollar, Euro, British Pound, Swiss Franc, Canadian Dollar, Australian Dollar, Swedish Krona, Norwegian Krone, Russian Ruble, Thai Baht, Singapore Dollar, Hong Kong Dollar, Azerbaijani Manat, Danish Krone, UAE Dirham, Turkish Lira, Chinese Yuan, KSA Riyal, Indian Rupee, Ringgit, Afghan Afghani, Kuwaiti Dinar, Bahraini Dinar, Omani Rial, Qatari Riyal

##  Using

Data will accessible in **Array** and **JSON** at **PHP** script. You can run php file at a server and getting **live** data from that in every client software.

##### $ php example.php  

##### JSON

```json
{"US Dollar":{"buy":"23700","sell":"23600"},"Euro":{"buy":"28065","sell":"27915"},"British Pound":{"buy":"31145","sell":"30945"},"Swiss Franc":{"buy":"26015","sell":"25865"},"Canadian Dollar":{"buy":"17820","sell":"17720"},"Australian Dollar":{"buy":"17110","sell":"17010"},"Swedish Krona":{"buy":"2725","sell":"2710"},"Norwegian Krone":{"buy":"2640","sell":"2625"},"Russian Ruble":{"buy":"323","sell":"320"},"Thai Baht":{"buy":"760","sell":"755"},"Singapore Dollar":{"buy":"17295","sell":"17195"},"Hong Kong Dollar":{"buy":"3060","sell":"3030"},"Azerbaijani Manat":{"buy":"13975","sell":"13875"},"Danish Krone":{"buy":"3765","sell":"3745"},"UAE Dirham":{"buy":"6450","sell":"6430"},"Turkish Lira":{"buy":"3245","sell":"3225"},"Chinese Yuan":{"buy":"3410","sell":"3390"},"KSA Riyal":{"buy":"6320","sell":"6290"},"Indian Rupee":{"buy":"316","sell":"314"},"Ringgit":{"buy":"5660","sell":"5630"},"Afghan Afghani":{"buy":"308","sell":"306"},"Kuwaiti Dinar":{"buy":"77585","sell":"77185"},"Bahraini Dinar":{"buy":"62875","sell":"62375"},"Omani Rial":{"buy":"61565","sell":"61265"},"Qatari Riyal":{"buy":"6510","sell":"6480"},"Gold Coins":{"buy":"Sell","sell":"Buy"},"Azadi":{"buy":"11,100,000","sell":"10,700,000"},"Emami":{"buy":"11,530,000","sell":"11,350,000"},"\u00bd Azadi":{"buy":"5,750,000","sell":"5,550,000"},"\u00bc Azadi":{"buy":"3,350,000","sell":"3,100,000"},"Gerami":{"buy":"1,750,000","sell":"1,550,000"}}
```

##### PHP Array

```
Array
(
    [US Dollar] => Array
        (
            [buy] => 23700
            [sell] => 23600
        )

    [Euro] => Array
        (
            [buy] => 28065
            [sell] => 27915
        )

    [British Pound] => Array
        (
            [buy] => 31145
            [sell] => 30945
        )

    [Swiss Franc] => Array
        (
            [buy] => 26015
            [sell] => 25865
        )

    [Canadian Dollar] => Array
        (
            [buy] => 17820
            [sell] => 17720
        )

    [Australian Dollar] => Array
        (
            [buy] => 17110
            [sell] => 17010
        )

    [Swedish Krona] => Array
        (
            [buy] => 2725
            [sell] => 2710
        )

    [Norwegian Krone] => Array
        (
            [buy] => 2640
            [sell] => 2625
        )

    [Russian Ruble] => Array
        (
            [buy] => 323
            [sell] => 320
        )

    [Thai Baht] => Array
        (
            [buy] => 760
            [sell] => 755
        )

    [Singapore Dollar] => Array
        (
            [buy] => 17295
            [sell] => 17195
        )

    [Hong Kong Dollar] => Array
        (
            [buy] => 3060
            [sell] => 3030
        )

    [Azerbaijani Manat] => Array
        (
            [buy] => 13975
            [sell] => 13875
        )

    [Danish Krone] => Array
        (
            [buy] => 3765
            [sell] => 3745
        )

    [UAE Dirham] => Array
        (
            [buy] => 6450
            [sell] => 6430
        )

    [Turkish Lira] => Array
        (
            [buy] => 3245
            [sell] => 3225
        )

    [Chinese Yuan] => Array
        (
            [buy] => 3410
            [sell] => 3390
        )

    [KSA Riyal] => Array
        (
            [buy] => 6320
            [sell] => 6290
        )

    [Indian Rupee] => Array
        (
            [buy] => 316
            [sell] => 314
        )

    [Ringgit] => Array
        (
            [buy] => 5660
            [sell] => 5630
        )

    [Afghan Afghani] => Array
        (
            [buy] => 308
            [sell] => 306
        )

    [Kuwaiti Dinar] => Array
        (
            [buy] => 77585
            [sell] => 77185
        )

    [Bahraini Dinar] => Array
        (
            [buy] => 62875
            [sell] => 62375
        )

    [Omani Rial] => Array
        (
            [buy] => 61565
            [sell] => 61265
        )

    [Qatari Riyal] => Array
        (
            [buy] => 6510
            [sell] => 6480
        )

    [Gold Coins] => Array
        (
            [buy] => Sell
            [sell] => Buy
        )

    [Azadi] => Array
        (
            [buy] => 11,100,000
            [sell] => 10,700,000
        )

    [Emami] => Array
        (
            [buy] => 11,530,000
            [sell] => 11,350,000
        )

    [½ Azadi] => Array
        (
            [buy] => 5,750,000
            [sell] => 5,550,000
        )

    [¼ Azadi] => Array
        (
            [buy] => 3,350,000
            [sell] => 3,100,000
        )

    [Gerami] => Array
        (
            [buy] => 1,750,000
            [sell] => 1,550,000
        )

)
```

## Sample use from this project

```
Buy Euro: 26990
Sell Euro: 26990
Buy Dollar: 23700
Sell Dollar: 23700
...
```

## Why this code are useful?

Official Web Service is not free, so if you want to getting data for fun and testing in personal purposes, maybe my code help you.

#### Get the real-time API

BONBAST.com's API offers accurate and reliable gold prices and IRR exchange rates for businesses. With seamless integration and guaranteed delivery, BONBAST.com's exchange rates is the trusted choice for hundreds of organizations worldwide.

- Access IRR exchange rates for 28+ currencies and gold prices
- Easily integrate data into your website
- Accurate & reliable rates that are trusted globally
- Flexible packages to meet your business needs

**Format & Delivery:**

- API is accessed via HTTP POST
- JSON format

https://www.bonbast.com/webmaster

---------

# Max Base

My nickname is Max, Programming language developer, Full-stack programmer. I love computer scientists, researchers, and compilers. ([Max Base](https://maxbase.org/))

## Asrez Team

A team includes some programmer, developer, designer, researcher(s) especially Max Base.

[Asrez Team](https://www.asrez.com/)

