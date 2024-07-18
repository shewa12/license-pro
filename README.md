
# Credentials for the payment plugin.

This README file contains the credentials for the implemented payment gateways used in EasyStore.


 

## Ngrok

For testing the payment gateway in a local environment, it's essential to install ngrok. Otherwise, the payment status won't be updated via webhook notifications.

**Ngrok Documentation:** [Install Ngrok](https://ngrok.com/docs/getting-started/)
## Live Server

Use the following credentials to test payment gateways on a live server.

**Site:** [Easystore-Helix](http://easystore.helix-framework.org)

**Admin User:** `iv4c6`

**Password:** `Wypmj;cz66?#R`







## Stripe

#### Stripe Account

```
  Email:    sanjana.ollyo@gmail.com
  Password: Ollyo@1234
```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test| Secret Key | `sk_test_51OqvUtJyMznDJzqj9g7WK5VtJT74zFM7g8ThxhA3xRi0MHdgWHo80jOVhuLTw43t7cyFNBAA1wJub0f0Y7y6zZgi00RU2ICFWB` |
| Test | Webhook Signing Secret Key | Obtain the **Webhook Secret Key** as intructed in the documentation. [Here](https://www.joomshaper.com/documentation/easystore/stripe-integration-in-easystore)

## AmazonPay

#### AmazonPay Account
```
  Email:    sanjanakhan772@gmail.com
  Password: Sanjana@123
```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test| Store ID | `amzn1.application-oa2-client.c93d9a30b85a42988bcc32616eb57800` |
| Test | Merchant ID | `AGB981ROBEM75` |
| Test | Public Key ID | Obtain the **Public Key ID** as intructed in the documentation. [Here](https://www.joomshaper.com/documentation/easystore/amazon-pay)

## Paddle

#### Paddle Account
```
  Email:    shewa.ollyo@gmail.com
  Password: dhkY#BeBAu8Nrsz
```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Sandbox| Vendor ID | `13063` |
| Sandbox | Vendor Auth Codes | `5ad5f86a0eb27ef66d479e5edf1d93829cf87e1a69a2db3259` |
| Sandbox | Public Key |  See Below |

``` 
-----BEGIN PUBLIC KEY-----
MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEA2scMbgHtJNK0V70bFSIf
czdjHdq0DXnhQZI/vf9yof3o0PkVqK6LJEBa8Z857HcyzZ+w7MBRKKcfCpRXdOdV
Zpllzw9d4Dt6ssOi6PSj6UISNV8NoMU1IqywxRfyZtj+BfC5kBvRhFSuoOp+3eUk
Of/f0NySAdmn8UYE+1CDCKPsWcK8o0FQYaGRDeD/FaKShwVXEp9Wx6gKAp84xqK3
tnAnqbZjE+F8OkoK93E72ssRKrkVQ+FutSO8vDwEFOWyQJ3OoaGfEphV9s7TCpfX
LYxKZNqtSaQiq4F+QfUhJZRxGak0nq1ijFkbmgHbfYU50cmupKjNhKAUeb8K6RSU
EnGRHdO1AM9ubcICt8Kx3pTGvYgMb2/9nMwbbBc0xUCI8PAi5BmXjPzgGxZkrgIY
dsEVlXSLXyb4F3Dz8etNYzZ2lncptJkgKgjB4KGBdhdtn2Yt2rQtw1CSNb2e5zO1
hNRVOXPFwQn3fpYMLD3RJLunsFnDm7FEIALGswnAp+ikzzNjdTN4y1oNqhD7Evln
knEeTeCIyv3reZBufPYogl/k/OsdxLpTZmXyk4TZjLnhEbTBxeWaZftS1VOvbp4K
SxQwAP9fJSEPd7h5GtzX9JiMXZyNcE+OAQPHncowGdJaJ+FF7Cnv4R9UzVNjBwFl
sk2yA6gk6xc2YzkfvaTIIwUCAwEAAQ==
-----END PUBLIC KEY-----
```
## PayStack

#### PayStack Account
```
    Email:    sanjana.ollyo@gmail.com
    Password: Ollyo@1234
```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test| Secret Key | `sk_test_2bf09b77d5bc59564eba868c8796a86491e9d950` |

## Paypal

#### Paypal Account

```
-- PayPal Developer Account information --

Email: sanjana.ollyo@gmail.com
Password: Ollyo@ollyo
```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Sandbox | Merchant Email | `sb-svver31506661@business.example.com` |
| Sandbox | Client ID | `AcwTzqdgfFQFBKq9QCHWUdqQIU58SYwARsZzKdexV8hnnocXUIswqglc4tjt7IHj8B2np8GacoYvpOGj` |
| Sandbox | Client Secret | `EGdgv1gf-kspceq-vWg_7ho4vChE1MtSWA9tW9RvZije2-Hdhv1oUi8K-H9kDMRSJX573NH4UcPa77B4` |
| Sandbox | Webhook ID | `0UY57069JY177242L` |


## Razorpay

#### Razorpay Account

```
Email:     sanjana.ollyo@gmail.com
Password:  Ollyo@1234

```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test | Key ID | `rzp_test_lZz7JJIm02Qm3b` |
| Test | Key Secret | `MeDGgDmO9Iqeolh0DiQLK3Ty`|
| Test | Webhook Secret | Obtain the **Webhook Secret** as intructed in the documentation. [Here](https://www.joomshaper.com/documentation/easystore/razorpay)

## Redsys


| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test | Merchant Code | `999008881` |
| Test |  Trade Key | `sq7HjrUOBfKmC576ILgskD5srU870gJ7`|
| Test | Terminal | `001` |

## Authozie.Net

#### Authorize.Net Account

```
Username: ollyo2easystore
Password: Ollyo@1234

```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Sandbox | Login ID | `3a8V3b5Yz2` |
| Sandbox | Transaction Key | `43cjv99C4UKM5zka`|
| Sandbox | Signature Key | `4FDD119A09549CE420A0522A080C6D983A51E802C6A756A5B130F85AD856B1283C78D46C1BC899C91E972595EA9FEA586BFF167B52EB4E1D5DD2F89D0C625DBF`

## Moneris

#### Moneris Account

- Can generate your own checkout ID by following this steps: [Here](https://developer.moneris.com/livedemo/checkout/overview/guide/php)
- [Test Account Login](https://esqa.moneris.com/mpg/)


| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test | Store ID | `store5` |
| Test | Api Token | `yesguy`|
| Test | Checkout ID | `chkt98L3Htore5`

## PayFast

#### PayFast Account

```
Email: sanjana.ollyo@gmail.com

```


| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test | Merchant ID | `10032514` |
| Test | Merchant Key | `8edn4nf4fnwzx`|
| Test | Pass Phrase | `83b3d0a76ab5cc55b8f3b490ad6c16a5`|

## Mollie

#### Mollie Account

```
Email:    sanjana.ollyo@gmail.com
Password: Ollyo@1234

```


| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test | API Key | `test_Sj57xuQxmEVU7yg7rgQRHdvpSDzPFp` |

## Klarna


| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| PlayGround | Username | `PK160854_b2abe8e11c9c` | 
| PlayGround | Password | `yPxiBiwNo6foLvBw` | 

## QuickPay

#### QuickPay Account
```
    Email:    sanjana.ollyo@gmail.com
    Password: Ollyo@1234
```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Test | Api Key | `c30eb2d05ecb11713856d5d93e033d2417d422fb4006c3f9a245d1c10f27d867` | 
| Test | Private Key | `758e7a2298b7554c4b31a0f586d871984dc0f91947a4cf944dad7cb4129c482c` | 


## AliPay

#### AliPay Developer Account
```
  Email: sanjana.ollyo@gmail.com
  Password: Ollyo@1234
```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Sandbox| Client ID | `SANDBOX_5YBW8J2ZFU5H01871` |
| Sandbox | Private Key | Obtain the **Private Key** as instructed in the documentation. [Here](https://docs.alipayplus.com/alipayplus/alipayplus/developer_center_acq/develop_in_sandbox?role=ACQP&product=Payment1&version=1.4.0) |
| Sandbox | Alipay Public Key | Obtain the **Alipay Public Key** as instructed in the documentation. [Here](https://docs.alipayplus.com/alipayplus/alipayplus/developer_center_acq/develop_in_sandbox?role=ACQP&product=Payment1&version=1.4.0)


## Eway

#### Eway Sandbox Account

- [Sandbox Login Url](https://sandbox.myeway.com.au/login.aspx?Reason=1)

```
  Email: sanjana.ollyo@gmail.com.sand 
  Password: Ollyo@123456 
```

| Environment  | Field     | Value                |
| :-------- | :------- | :------------------------- |
| Sanbox| Api Key | `60CF3Ck1+eCACUFrHrciRrttyBv9Xv3s4vbKt7rzJIFBxhgdPnKMaC+Q3RDk72Kt3l2m1P` |
| Sanbox | Api Password | `djcUHr0P` |
