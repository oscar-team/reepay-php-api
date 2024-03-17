# ScaAccountInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | **string** | Date that the cardholder created the account. Format: &#x60;yyyy-MM-dd&#x60; | [optional] 
**changed** | **string** | Date that the cardholder’s account was last changed, including Billing or Shipping address, new payment method, or new user(s) added. Format: &#x60;yyyy-MM-dd&#x60; | [optional] 
**age_indicator** | **string** | Length of time that the cardholder has had the account. One off: &#x60;guest_account&#x60; - No account (guest check-out), &#x60;this_transaction&#x60; - Created during this transaction, &#x60;less_than_30_days&#x60; - Less than 30 days, &#x60;from_30_to_60_days&#x60; - 30−60 days, &#x60;more_than_60_days&#x60; - More than 60 days | [optional] 
**change_indicator** | **string** | Length of time since the cardholder’s account information was last changed, including Billing or Shipping address, new payment account, or new user(s) added. One off: &#x60;this_transaction&#x60; - Changed during this transaction, &#x60;less_than_30_days&#x60; - Less than 30 days, &#x60;from_30_to_60_days&#x60; - 30−60 days, &#x60;more_than_60_days&#x60; - More than 60 days | [optional] 
**password_change** | **string** | Date that cardholder’s account had a password change or account reset. Format: &#x60;yyyy-MM-dd&#x60; | [optional] 
**password_change_indicator** | **string** | Indicates the length of time since the cardholder’s account had a password change or account reset. One off: &#x60;no_change&#x60; - No change, &#x60;this_transaction&#x60; - Changed during this transaction, &#x60;less_than_30_days&#x60; - Less than 30 days, &#x60;from_30_to_60_days&#x60; - 30−60 days, &#x60;more_than_60_days&#x60; - More than 60 days | [optional] 
**purchase_count** | **int** | Number of purchases with this cardholder account during the previous six months. | [optional] 
**add_card_attempts** | **int** | Number of Add Card attempts in the last 24 hours. | [optional] 
**transactions_day** | **int** | Number of transactions (successful and abandoned) for this cardholder account (across payment methods) in the previous 24 hours | [optional] 
**transactions_year** | **int** | Number of transactions (successful and abandoned) for this cardholder account (across payment methods) in the previous year | [optional] 
**card_age** | **string** | For customer initiated card-on-file session, the date that the used card was added. Provided by Reepay but can be overridden. Format: &#x60;yyyy-MM-dd&#x60;. | [optional] 
**card_age_indicator** | **string** | For customer initiated card-on-file session, indicates the length of time that the card was enrolled in the cardholder’s account. Provided by Reepay but can be overridden. One off: &#x60;this_transaction&#x60; - Changed during this transaction, &#x60;less_than_30_days&#x60; - Less than 30 days, &#x60;from_30_to_60_days&#x60; - 30−60 days, &#x60;more_than_60_days&#x60; - More than 60 days | [optional] 
**shipping_address_usage** | **string** | Date when the shipping address used for this transaction was first used. Format: &#x60;yyyy-MM-dd&#x60;. | [optional] 
**shipping_address_usage_indicator** | **string** | Indicates when the shipping address used for this transaction was first used. One off: &#x60;this_transaction&#x60; - During this transaction, &#x60;less_than_30_days&#x60; - Less than 30 days, &#x60;from_30_to_60_days&#x60; - 30−60 days, &#x60;more_than_60_days&#x60; - More than 60 days | [optional] 
**shipping_name_indicator** | **bool** | Indicates if the Cardholder Name on the account is identical to the shipping Name used for this transaction. | [optional] 
**suspicious_activity** | **bool** | Indicates if there has been experienced suspicious activity (including previous fraud) on the cardholder account. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

