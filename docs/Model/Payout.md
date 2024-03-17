# Payout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique reference to payout. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. It is recommended to use a maximum of 20 characters as this will allow for the use of handle as reference on bank statements without truncation. | 
**state** | **string** | The payout state one of the following: &#x60;created&#x60;, &#x60;processing&#x60;, &#x60;failed&#x60; or &#x60;paid&#x60;. | 
**amount** | **int** | Amount in the smallest unit. | 
**currency** | **string** | Optional currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code. | [optional] 
**text** | **string** | Optional text associated with the payout | [optional] 
**customer** | **string** | Customer handle | 
**paid** | [**\DateTime**](\DateTime.md) | When the payout was paid, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**failed** | [**\DateTime**](\DateTime.md) | When the payout failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | When the payout was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**transactions** | [**\Reepay\Model\PayoutTransaction[]**](PayoutTransaction.md) | List of transactions for payout | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

