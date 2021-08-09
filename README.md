# bonbast-api

Dollar and Euro: Live irr exchange rates in free market - bonbast.com

## Supported exchanges

US Dollar, Euro, British Pound, Swiss Franc, Canadian Dollar, Australian Dollar, Swedish Krona, Norwegian Krone, Russian Ruble, Thai Baht, Singapore Dollar, Hong Kong Dollar, Azerbaijani Manat, Danish Krone, UAE Dirham, Turkish Lira, Chinese Yuan, KSA Riyal, Indian Rupee, Ringgit, Afghan Afghani, Kuwaiti Dinar, Bahraini Dinar, Omani Rial, Qatari Riyal, Gold Coins(Bahar Azadi, Emami, One half Azadi, One quarter Azadi, Gerami)

##  Using

Data will accessible in **Array** and **JSON** at **PHP** script. You can run php file at a server and getting **live** data from that in every client software.

##### $ php example.php  

##### JSON

```json
{"US Dollar":{"sell":"25950","buy":"25850"},"Euro":{"sell":"30490","buy":"30340"},"British Pound":{"sell":"35960","buy":"35760"},"Swiss Franc":{"sell":"28240","buy":"28090"},"Canadian Dollar":{"sell":"20630","buy":"20530"},"Australian Dollar":{"sell":"19050","buy":"18950"},"Swedish Krona":{"sell":"2980","buy":"2965"},"Norwegian Krone":{"sell":"2905","buy":"2890"},"Russian Ruble":{"sell":"352","buy":"349"},"Thai Baht":{"sell":"775","buy":"770"},"Singapore Dollar":{"sell":"19125","buy":"19025"},"Hong Kong Dollar":{"sell":"3335","buy":"3305"},"Azerbaijani Manat":{"sell":"15240","buy":"15140"},"Armenian Dram":{"sell":"530","buy":"525"},"Danish Krone":{"sell":"4100","buy":"4080"},"UAE Dirham":{"sell":"7065","buy":"7045"},"Japanese Yen":{"sell":"2355","buy":"2345"},"Turkish Lira":{"sell":"3000","buy":"2980"},"Chinese Yuan":{"sell":"4000","buy":"3980"},"KSA Riyal":{"sell":"6920","buy":"6890"},"Indian Rupee":{"sell":"348","buy":"346"},"Ringgit":{"sell":"6135","buy":"6105"},"Afghan Afghani":{"sell":"325","buy":"323"},"Kuwaiti Dinar":{"sell":"86270","buy":"85870"},"Iraqi Dinar":{"sell":"1780","buy":"1770"},"Bahraini Dinar":{"sell":"68820","buy":"68320"},"Omani Rial":{"sell":"67400","buy":"67100"},"Qatari Riyal":{"sell":"7125","buy":"7095"},"Azadi":{"sell":"10700000","buy":"10450000"},"Emami":{"sell":"11220000","buy":"11080000"},"\u00bd Azadi":{"sell":"5780000","buy":"5680000"},"\u00bc Azadi":{"sell":"3600000","buy":"3480000"},"Gerami":{"sell":"2170000","buy":"2050000"},"Gold Gram":{"sell":"1083845"},"Gold Mithqal":{"sell":"4695000"},"Gold Ounce":{"sell":"1763.69"},"Bitcoin":{"sell":"45623.68"}}
```

##### PHP Array

```
Array
(
    [US Dollar] => Array
        (
            [sell] => 25950
            [buy] => 25850
        )

    [Euro] => Array
        (
            [sell] => 30490
            [buy] => 30340
        )

    [British Pound] => Array
        (
            [sell] => 35960
            [buy] => 35760
        )

    [Swiss Franc] => Array
        (
            [sell] => 28240
            [buy] => 28090
        )

    [Canadian Dollar] => Array
        (
            [sell] => 20630
            [buy] => 20530
        )

    [Australian Dollar] => Array
        (
            [sell] => 19050
            [buy] => 18950
        )

    [Swedish Krona] => Array
        (
            [sell] => 2980
            [buy] => 2965
        )

    [Norwegian Krone] => Array
        (
            [sell] => 2905
            [buy] => 2890
        )

    [Russian Ruble] => Array
        (
            [sell] => 352
            [buy] => 349
        )

    [Thai Baht] => Array
        (
            [sell] => 775
            [buy] => 770
        )

    [Singapore Dollar] => Array
        (
            [sell] => 19125
            [buy] => 19025
        )

    [Hong Kong Dollar] => Array
        (
            [sell] => 3335
            [buy] => 3305
        )

    [Azerbaijani Manat] => Array
        (
            [sell] => 15240
            [buy] => 15140
        )

    [Armenian Dram] => Array
        (
            [sell] => 530
            [buy] => 525
        )

    [Danish Krone] => Array
        (
            [sell] => 4100
            [buy] => 4080
        )

    [UAE Dirham] => Array
        (
            [sell] => 7065
            [buy] => 7045
        )

    [Japanese Yen] => Array
        (
            [sell] => 2355
            [buy] => 2345
        )

    [Turkish Lira] => Array
        (
            [sell] => 3000
            [buy] => 2980
        )

    [Chinese Yuan] => Array
        (
            [sell] => 4000
            [buy] => 3980
        )

    [KSA Riyal] => Array
        (
            [sell] => 6920
            [buy] => 6890
        )

    [Indian Rupee] => Array
        (
            [sell] => 348
            [buy] => 346
        )

    [Ringgit] => Array
        (
            [sell] => 6135
            [buy] => 6105
        )

    [Afghan Afghani] => Array
        (
            [sell] => 325
            [buy] => 323
        )

    [Kuwaiti Dinar] => Array
        (
            [sell] => 86270
            [buy] => 85870
        )

    [Iraqi Dinar] => Array
        (
            [sell] => 1780
            [buy] => 1770
        )

    [Bahraini Dinar] => Array
        (
            [sell] => 68820
            [buy] => 68320
        )

    [Omani Rial] => Array
        (
            [sell] => 67400
            [buy] => 67100
        )

    [Qatari Riyal] => Array
        (
            [sell] => 7125
            [buy] => 7095
        )

    [Azadi] => Array
        (
            [sell] => 10700000
            [buy] => 10450000
        )

    [Emami] => Array
        (
            [sell] => 11220000
            [buy] => 11080000
        )

    [½ Azadi] => Array
        (
            [sell] => 5780000
            [buy] => 5680000
        )

    [¼ Azadi] => Array
        (
            [sell] => 3600000
            [buy] => 3480000
        )

    [Gerami] => Array
        (
            [sell] => 2170000
            [buy] => 2050000
        )

    [Gold Gram] => Array
        (
            [sell] => 1083845
        )

    [Gold Mithqal] => Array
        (
            [sell] => 4695000
        )

    [Gold Ounce] => Array
        (
            [sell] => 1763.69
        )

    [Bitcoin] => Array
        (
            [sell] => 45623.68
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

