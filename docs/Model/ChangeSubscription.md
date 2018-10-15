# ChangeSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timing** | **string** | When to perform the subscription change. Either `immediate` or `renewal`. |
**plan** | **string** | The handle of the plan to change to | [optional]
**amount** | **int** | Optional custom per quantity plan price. If provided the plan price billed for each billing period will be overridden by this price. | [optional]
**quantity** | **int** | Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan. | [optional]
**billing** | **string** | In the case of immediate change and change not affecting billing period, how to bill for the remaining partial period. Either `prorated`, `full`, `zero_amount` or `none`. The default is `prorated`. | [optional]
**amount_incl_vat** | **bool** | Whether the optional amount is including VAT. Defaults to true. | [optional]
**compensation_method** | **string** | In the case of immediate change, optional method for compensation of partial period, either `full_refund`, `prorated_refund` or `none`. Default is prorated_refund | [optional]
**partial_period_handling** | **string** | Optional argument to override plan setting on how to handle a potential initial partial billing period for fixed day scheduling. The options are to bill for a full period, bill prorated for the partial period, bill a zero amount, or not to consider the period before first fixed day a billing period. The default is to bill prorated. Options: `bill_full`, `bill_prorated`, `bill_zero_amount`, `no_bill`. | [optional]
**start_date** | **string** | If the subscription change results in a new period due to change to a plan with different scheduling, an optional date and time from which the subscription is eligible to schedule first invoice can be given. See subscription create and subscription reactivate argument `start_date`. | [optional]
**cancel_change** | **bool** | If there are pending changes at renewal for the subscription they can be cancelled using this argument and timing&#x3D;renewal | [optional]
**add_ons** | [**\Reepay\Model\CreateSubscriptionAddOn[]**](CreateSubscriptionAddOn.md) | Add-ons to attach to subscription. The same add-on can only be attached to subscription once unless unique handles are supplied for the subscription add-on. | [optional]
**remove_add_ons** | **string[]** | Subscription add-ons to remove from subscription by subscription add-on handle | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


