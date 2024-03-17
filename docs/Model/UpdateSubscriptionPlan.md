# UpdateSubscriptionPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the plan | 
**description** | **string** | Description of the plan | [optional] 
**vat** | **float** | Optional vat for this plan. Account default is used if none given. | [optional] 
**dunning_plan** | **string** | Dunning plan by handle to use for the subscription plan. Default dunning plan will be used if none given. | [optional] 
**tax_policy** | **string** | Optional tax policy handle for this plan. If vat and tax policy is given, vat will be ignored. | [optional] 
**renewal_reminder_email_days** | **int** | Optional renewal reminder email settings. Number of days before next billing to send a reminder email. | [optional] 
**trial_reminder_email_days** | **int** | Optional end of trial reminder email settings. Number of days before end of trial to send a reminder email. | [optional] 
**partial_period_handling** | **string** | How to handle a potential initial partial billing period for fixed day scheduling. The options are to bill for a full period, bill prorated for the partial period, bill a zero amoumt, or not to consider the period before first fixed day a billing period. The default is to bill prorated. Options: &#x60;bill_full&#x60;, &#x60;bill_prorated&#x60;, &#x60;bill_zero_amount&#x60;, &#x60;no_bill&#x60;. | [optional] 
**include_zero_amount** | **bool** | Whether to add a zero amount order line to subscription invoices if plan amount is zero or the subscription overrides to zero amount. The default is to not include the line. If no other order lines are present the plan order line will be added. | [optional] 
**setup_fee** | **int** | Optional one-time setup fee billed with the first invoice or as a separate invoice depending on the setting &#x60;setup_fee_handling&#x60;. | [optional] 
**setup_fee_text** | **string** | Optional invoice order text for the setup fee that | [optional] 
**setup_fee_handling** | **string** | How the billing of the setup fee should be done. The options are: &#x60;first&#x60; - include setup fee as order line on the first scheduled invoice. &#x60;separate&#x60; - create a separate invoice for the setup fee, is appropriate if first invoice is not in conjunction with creation. &#x60;separate_conditional&#x60; - create a separate invoice for setup fee if the first invoice is not created in conjunction with the creation. Default is &#x60;first&#x60;. | [optional] 
**partial_proration_days** | **bool** | For fixed day scheduling and prorated partial handling calculate prorated amount using whole days counting start day as a full day, or use by the minute proration calculation from start date time to the next period start. Default is true (whole days). | [optional] 
**fixed_trial_days** | **bool** | When using trial for fixed day scheduling use this setting to control if trial expires at midnight or the trial period is down to the minute. Default is true (trial until start of day). Trial in days can only be true if &#x60;partial_proration_days&#x60; is also set to true. | [optional] 
**minimum_prorated_amount** | **int** | When using prorated partial handling the prorated amount for plan and add-ons might result in very small amounts. A minimum prorated amount for plan and add-ons can be defined. If the prorated amount is below this minimum the amount will be changed to zero. | [optional] 
**account_funding** | **bool** | Indicates that Account Funding Transaction (AFT) is requested. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

