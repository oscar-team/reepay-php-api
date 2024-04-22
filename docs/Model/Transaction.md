# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Transaction id assigned by Reepay |
**state** | **string** | State of the transaction, one of the following: `pending`, `processing`, `authorized`, `settled`, `refunded`, `failed`, `cancelled` |
**invoice** | **string** | Invoice handle |
**type** | **string** | Transaction type, one of the following: `settle`, `refund`, `authorization` |
**amount** | **int** | The transaction amount |
**currency** | **string** | Currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code | [optional]
**settled** | [**\DateTime**](\DateTime.md) | When the transaction was settled, in [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**authorized** | [**\DateTime**](\DateTime.md) | When the transaction was authorized, in [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**failed** | [**\DateTime**](\DateTime.md) | When the transaction failed, in [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**refunded** | [**\DateTime**](\DateTime.md) | When the transaction was refunded, in [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**created** | [**\DateTime**](\DateTime.md) | Date when the transaction was created. In [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**payment_type** | **string** | Payment type for transaction, either: `card`, `mpo`, `mobilepay`, `vipps`, `vipps_recurring`, `swish`, `viabill`, `anyday`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs`, `ideal`, `p24`, `bancomatpay`, `blik`, `giropay`, `sepa`, `verkkopankki`, `mobilepay_subscriptions`, `emv_token`, `bcmc`, `pp_blik_oc`, `trustly`, `eps`, `estonia_banks`, `latvia_banks`, `lithuania_banks`, `mb_way`, `multibanco`, `mybank`, `payconiq`, `paysafecard`, `paysera`, `postfinance`, `satispay`, `twint`, `wechatpay`, `santander`, `offline_cash`, `offline_bank_transfer`, `offline_other` |
**payment_method** | **string** | Reference to payment method in case of a MIT transaction | [optional]
**card_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of card transaction | [optional]
**mpo_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of MobilePay Online transaction | [optional]
**vipps_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of Vipps transaction | [optional]
**applepay_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of ApplePay transaction | [optional]
**googlepay_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of GooglePay transaction | [optional]
**manual_transaction** | [**\Reepay\Model\ManualTransaction**](ManualTransaction.md) | Specifics in case of manual transaction | [optional]
**viabill_transaction** | [**\Reepay\Model\ViabillTransaction**](ViabillTransaction.md) | Specifics in case of ViaBill transaction | [optional]
**anyday_transaction** | [**\Reepay\Model\AnydayTransaction**](AnydayTransaction.md) | Specifics in case of Anyday transaction | [optional]
**santander_transaction** | [**\Reepay\Model\SantanderTransaction**](SantanderTransaction.md) | Specifics in case of Santander transaction | [optional]
**resurs_transaction** | [**\Reepay\Model\ResursTransaction**](ResursTransaction.md) | Specifics in case of Resurs Bank transaction | [optional]
**klarna_transaction** | [**\Reepay\Model\KlarnaTransaction**](KlarnaTransaction.md) | Specifics in case of Klarna transaction | [optional]
**swish_transaction** | [**\Reepay\Model\SwishTransaction**](SwishTransaction.md) | Specifics in case of Swish transaction | [optional]
**paypal_transaction** | [**\Reepay\Model\PaypalTransaction**](PaypalTransaction.md) | Specifics in case of PayPal transaction | [optional]
**bancontact_transaction** | [**\Reepay\Model\BancontactTransaction**](BancontactTransaction.md) | Specifics in case of Bancontact transaction | [optional]
**blik_transaction** | [**\Reepay\Model\BlikTransaction**](BlikTransaction.md) | Specifics in case of BLIK transaction | [optional]
**giropay_transaction** | [**\Reepay\Model\GiropayTransaction**](GiropayTransaction.md) | Specifics in case of Giropay transaction | [optional]
**ideal_transaction** | [**\Reepay\Model\IdealTransaction**](IdealTransaction.md) | Specifics in case of IDEAL transaction | [optional]
**p24_transaction** | [**\Reepay\Model\P24Transaction**](P24Transaction.md) | Specifics in case of P24 transaction | [optional]
**sepa_transaction** | [**\Reepay\Model\SepaTransaction**](SepaTransaction.md) | Specifics in case of SEPA transaction | [optional]
**trustly_transaction** | [**\Reepay\Model\TrustlyTransaction**](TrustlyTransaction.md) | Specifics in case of Trustly transaction | [optional]
**verkkopankki_transaction** | [**\Reepay\Model\VerkkopankkiTransaction**](VerkkopankkiTransaction.md) | Specifics in case of Verkkopankki transaction | [optional]
**eps_transaction** | [**\Reepay\Model\EpsTransaction**](EpsTransaction.md) | Specifics in case of Eps transaction | [optional]
**estonia_banks_transaction** | [**\Reepay\Model\EstoniaBanksTransaction**](EstoniaBanksTransaction.md) | Specifics in case of Estonia Banks transaction | [optional]
**latvia_banks_transaction** | [**\Reepay\Model\LatviaBanksTransaction**](LatviaBanksTransaction.md) | Specifics in case of Latvia Banks transaction | [optional]
**lithuania_banks_transaction** | [**\Reepay\Model\LithuaniaBanksTransaction**](LithuaniaBanksTransaction.md) | Specifics in case of Lithuania Banks transaction | [optional]
**mbway_transaction** | [**\Reepay\Model\MbwayTransaction**](MbwayTransaction.md) | Specifics in case of MB Way transaction | [optional]
**multibanco_transaction** | [**\Reepay\Model\MultibancoTransaction**](MultibancoTransaction.md) | Specifics in case of Multibanco transaction | [optional]
**mybank_transaction** | [**\Reepay\Model\MybankTransaction**](MybankTransaction.md) | Specifics in case of MyBank transaction | [optional]
**payconiq_transaction** | [**\Reepay\Model\PayconiqTransaction**](PayconiqTransaction.md) | Specifics in case of Payconiq transaction | [optional]
**paysafecard_transaction** | [**\Reepay\Model\PaysafecardTransaction**](PaysafecardTransaction.md) | Specifics in case of Paysafecard transaction | [optional]
**paysera_transaction** | [**\Reepay\Model\PayseraTransaction**](PayseraTransaction.md) | Specifics in case of Paysera transaction | [optional]
**postfinance_transaction** | [**\Reepay\Model\PostfinanceTransaction**](PostfinanceTransaction.md) | Specifics in case of PostFinance transaction | [optional]
**satispay_transaction** | [**\Reepay\Model\SatispayTransaction**](SatispayTransaction.md) | Specifics in case of Satispay transaction | [optional]
**wechatpay_transaction** | [**\Reepay\Model\WeChatPayTransaction**](WeChatPayTransaction.md) | Specifics in case of WeChat Pay transaction | [optional]
**mps_transaction** | [**\Reepay\Model\MpsTransaction**](MpsTransaction.md) | Specifics in case of MobilePay Subscription transaction | [optional]
**vipps_recurring_transaction** | [**\Reepay\Model\VippsRecurringTransaction**](VippsRecurringTransaction.md) | Specifics in case of Vipps Recurring transaction | [optional]
**payment_context** | **string** | Payment context describing if the transaction is customer or merchant initiated, one of the following values: `cit`, `mit`, `cit_cof` | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


