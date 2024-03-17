# CreateCredit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription** | **string** | Subscription by handle to add the credit to | 
**handle** | **string** | Per account unique handle for the credit. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**amount** | **int** | Credit amount in the smallest unit for the subscription currency | 
**text** | **string** | Text describing the credit. Will be on affected invoices. | 
**valid_from** | **string** | Date on the form yyyy-MM-dd from which the credit is valid. The credit will not be deducted from invoices before this date. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

