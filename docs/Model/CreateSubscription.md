# CreateSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Optional custom per quantity plan price. If provided the plan price billed for each billing period will be overridden by this price. | [optional] 
**quantity** | **int** | Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan. | [optional] 
**discounts** | **string[]** | Discount handles to attach to subscription | [optional] 
**add_ons** | **string[]** | Add-on handles to attach to subscription.. | [optional] 
**additional_costs** | [**\Reepay\Model\HostedPagesAdditionalCost[]**](HostedPagesAdditionalCost.md) | Additional costs to add to subscription at creation time | [optional] 
**amount_incl_vat** | **bool** | Whether the optional amount is including VAT. Defaults to true. | [optional] 
**grace_duration** | **int** | A grace duration in seconds from the creation of a subscription where no dunning process is started for a failing invoice. This allows a certain amount of time for the customer to sign up with a payment method. | [optional] 
**no_trial** | **bool** | Override plan trial settings and disable trial | [optional] 
**no_setup_fee** | **bool** | Override plan setup fee settings and disable fee | [optional] 
**conditional_create** | **bool** | If the subscription is eligible to bill for the first period right away, this option will make the creation conditional on a successful payment of the first invoice. Default is false. | [optional] 
**can_configure_plan_quantity** | **bool** | Indicates whether customers can modify the quantity of subscription plans to purchase when purchase the product. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

