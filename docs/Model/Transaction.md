# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Transaction id assigned by Reepay |
**state** | **string** | State of the transaction, one of the following: `pending`, `processing`, `authorized`, `settled`, `refunded`, `failed`, `cancelled` |
**invoice** | **string** | Invoice id |
**type** | **string** | Transaction type, one of the following: &#39;settle&#39;, &#39;refund&#39;, `authorization` |
**amount** | **int** | The transaction amount |
**settled** | [**\DateTime**](\DateTime.md) | When the transaction was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**authorized** | [**\DateTime**](\DateTime.md) | When the transaction was authorized, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**failed** | [**\DateTime**](\DateTime.md) | When the transaction failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**refunded** | [**\DateTime**](\DateTime.md) | When the transaction was refunded, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**created** | [**\DateTime**](\DateTime.md) | Date when the transaction was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**payment_type** | **string** | Payment type for transaction, either: `card`, `mobilepay`, `vipps`, `swish`, `viabill`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs`, `mobilepay_subscriptions`, `bancontact` or `ideal` |
**card_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of card transaction | [optional]
**manual_transaction** | [**\Reepay\Model\ManualTransaction**](ManualTransaction.md) | Specifics in case of manual transaction | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


