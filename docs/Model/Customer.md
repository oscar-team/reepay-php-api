# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Customer email | [optional]
**address** | **string** | Customer address | [optional]
**address2** | **string** | Customer address2 | [optional]
**city** | **string** | Customer city | [optional]
**country** | **string** | Customer country in ISO 3166-1 alpha-2 | [optional]
**phone** | **string** | Customer phone number | [optional]
**company** | **string** | Customer company | [optional]
**vat** | **string** | Customer vat number | [optional]
**handle** | **string** | Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. |
**test** | **bool** | Test flag | [optional]
**subscriptions** | **int** | Number of active subscriptions for this customer (deprecated, will be removed in a later version, use active_subscriptions) |
**created** | [**\DateTime**](\DateTime.md) | Date when the customer was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**deleted** | [**\DateTime**](\DateTime.md) | Date when the customer was deleted. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**first_name** | **string** | Customer first name | [optional]
**last_name** | **string** | Customer last name | [optional]
**postal_code** | **string** | Customer postal code | [optional]
**active_subscriptions** | **int** | Number of active subscriptions for this customer |
**trial_active_subscriptions** | **int** | Number of active subscriptions in trial for this customer |
**trial_cancelled_subscriptions** | **int** | Number of cancelled subscriptions in trial for this customer |
**expired_subscriptions** | **int** | Number of expired subscription for this customer |
**on_hold_subscriptions** | **int** | Number of subscription on hold for this customer |
**cancelled_subscriptions** | **int** | Number of cancelled subscription for this customer |
**non_renewing_subscriptions** | **int** | Number of non renewing (active subscriptions not renewing at billing period end) subscriptions for this customer |
**failed_invoices** | **int** | Number of failed subscription invoices for this customer |
**failed_amount** | **int** | Summed amount for failed subscription invoices |
**cancelled_invoices** | **int** | Number of cancelled subscription invoices for this customer |
**cancelled_amount** | **int** | Summed amount for cancelled subscription invoices |
**pending_invoices** | **int** | Number of pending subscription invoices for this customer |
**pending_amount** | **int** | Summed amount for pending subscription invoices |
**dunning_invoices** | **int** | Number of dunning subscription invoices for this customer |
**dunning_amount** | **int** | Summed amount for dunning subscription invoices |
**settled_invoices** | **int** | Number of settled subscription invoices for this customer |
**settled_amount** | **int** | Summed settled subscription amount |
**refunded_amount** | **int** | Summed refunded subscription amount |
**pending_additional_costs** | **int** | Number of pending additional costs |
**pending_additional_cost_amount** | **int** | Summed amount of pending additional costs incl vat |
**transferred_additional_costs** | **int** | Number of additional costs that have been applied to invoices |
**transferred_additional_cost_amount** | **int** | Summed amount of additional costs that have been applied to invoices |
**pending_credits** | **int** | Number of credits that have not fully been applied to invoices |
**pending_credit_amount** | **int** | Summed credit amount not yet applied to invoices |
**transferred_credits** | **int** | Number of credits that have fully been applied to invoices |
**transferred_credit_amount** | **int** | Summed credit amount that have been applied to invoices |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


