# CreateSession

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**configuration** | **string** | Optional handle for a configuration to use for this session
**locale** | **string** | Optional locale for session. Defaults to configuration locale or account locale.
**invoice** | **string** | Handle for existing invoice to charge. Either this argument must be provided or order.
**settle** | **bool** | If invoice reference provided this is whether or not to immediately settle the invoice. Default is true. If not settled immediately the invoice will be authorized and can later be settled. Normally this have to be done within 7 days.
**order** | [**\Reepay\Model\CreateOrder**](CreateOrder.md) | Order object. Either this argument must be provided or invoice. |
**recurring** | **bool** | recurring
If set a recurring payment method is stored for the customer and a reference returned. This parameter if set to true will limit payment methods to those that are reusable.
**accept_url** | **string** | If checkout is opened in separate window the customer will be directed to this page after success
**cancel_url** | **string** | If checkout is opened in separate window the customer will be directed to this page if the customer cancels

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
