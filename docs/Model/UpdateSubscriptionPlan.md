# UpdateSubscriptionPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the plan |
**description** | **string** | Description of the plan | [optional]
**vat** | **float** | Optional vat for this plan. Account default is used if none given. | [optional]
**dunning_plan** | **string** | Dunning plan handle | [optional]
**renewal_reminder_email_days** | **int** | Optional renewal reminder email settings. Number of days before next billing to send a reminder email. | [optional]
**trial_reminder_email_days** | **int** | Optional end of trial reminder email settings. Number of days before end of trial to send a reminder email. | [optional]
**partial_period_handling** | **string** | How to handle a potential initial partial billing period for fixed day scheduling. The options are to bill for a full period, bill prorated for the partial period, bill a zero amoumt, or not to consider the period before first fixed day a billing period. The default is to bill prorated. Options: `bill_full`, `bill_prorated`, `bill_zero_amount`, `no_bill`. | [optional]
**include_zero_amount** | **bool** | Whether to add a zero amount order line to subscription invoices if plan amount is zero or the subscription overrides to zero amount. The default is to not include the line. If no other order lines are present the plan order line will be added. | [optional]
**setup_fee** | **int** | Optional one-time setup fee billed with the first invoice or as a separate invoice depending on the setting `setup_fee_invoice`. | [optional]
**setup_fee_text** | **string** | Optional invoice order text for the setup fee that | [optional]
**setup_fee_handling** | **string** | How the billing of the setup fee should be done. The options are: `first` - include setup fee as order line on the first scheduled invoice. `separate` - create a separate invoice for the setup fee, is appropriate if first invoice is not in conjunction with creation. `separate_conditional` - create a separate invoice for setup fee if the first invoice is not created in conjunction with the creation. Default is `first`. | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


