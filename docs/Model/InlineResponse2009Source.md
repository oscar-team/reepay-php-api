# InlineResponse2009Source

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of charge source: &#x60;card&#x60; or &#x60;card_token&#x60; | 
**card** | **string** | Reference to customer card if source type &#x60;card&#x60; | [optional] 
**fingerprint** | **string** | Uniquely identifies this particular card number | [optional] 
**auth_transaction** | **string** | Reference to authorization transaction if charge is settled after authorization | [optional] 
**card_type** | **string** | Card type if credit card source: &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional] 
**exp_date** | **string** | Card expire date on form MM-YY if card source | [optional] 
**masked_card** | **string** | Masked card number if card source | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


