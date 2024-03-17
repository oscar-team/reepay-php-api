# ChangeSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timing** | **string** | When to perform the subscription change. Either &#x60;immediate&#x60; or &#x60;renewal&#x60;. | 
**plan** | **string** | The handle of the plan to change to | [optional] 
**amount** | **int** | Optional custom per quantity plan price. If provided the plan price billed for each billing period will be overridden by this price. | [optional] 
**quantity** | **int** | Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan. | [optional] 
**billing** | **string** | In the case of immediate change and change not affecting billing period, how to bill for the remaining partial period. Either &#x60;prorated&#x60;, &#x60;full&#x60;, &#x60;zero_amount&#x60; or &#x60;none&#x60;. The default is &#x60;prorated&#x60;. | [optional] 
**amount_incl_vat** | **bool** | Whether the optional amount is including VAT. Defaults to true. | [optional] 
**compensation_method** | **string** | In the case of immediate change, optional method for compensation of partial period, either &#x60;full_refund&#x60;, &#x60;prorated_refund&#x60;, &#x60;full_credit&#x60;, &#x60;prorated_credit&#x60; or &#x60;none&#x60;. Default is &#x60;prorated_refund&#x60; | [optional] 
**partial_period_handling** | **string** | Optional argument to override plan setting on how to handle a potential initial partial billing period for fixed day scheduling. The options are to bill for a full period, bill prorated for the partial period, bill a zero amount, or not to consider the period before first fixed day a billing period. The default is to bill prorated. Options: &#x60;bill_full&#x60;, &#x60;bill_prorated&#x60;, &#x60;bill_zero_amount&#x60;, &#x60;no_bill&#x60;. | [optional] 
**start_date** | **string** | If the subscription change results in a new period due to change to a plan with different scheduling, or the use of argument &#x60;force_new_period&#x60;, an optional date and time from which the subscription is eligible to schedule first invoice can be given. See subscription create and subscription reactivate argument &#x60;start_date&#x60;. If the subscription has not yet started it&#x27;s billing cycles, e.g. in trial or changing from a manual plan, &#x60;start_date&#x60; will default to now. | [optional] 
**force_new_period** | **bool** | If an immediate change should result in a new billing period starting now, or at the optional &#x60;start_date&#x60;. If the subscription is in trial the trial will be terminated. Default is false. If the subscription change results in a new period due to change to a plan with different scheduling, this option will have no effect as new period is required in this case. | [optional] 
**cancel_change** | **bool** | If there are pending changes at renewal for the subscription they can be cancelled using this argument and timing&#x3D;renewal | [optional] 
**add_ons** | [**\Reepay\Model\CreateSubscriptionAddOn[]**](CreateSubscriptionAddOn.md) | Add-ons to attach to subscription. The same add-on can only be attached to subscription once unless unique handles are supplied for the subscription add-on. A maximum of 100 add-ons is allowed. | [optional] 
**remove_add_ons** | **string[]** | Subscription add-ons to remove from subscription by subscription add-on handle | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

