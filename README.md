# zero_item_problem

Install an email header plug-in in WordPress (e.g. Email Header Footer).

Place the following style into header.

<style> 
	.item-0, .item- {
		visibility: hidden;
		height: 0px;   
		padding: 0;   
		margin: 0; 
	} 
	.item-0 > *, .item- > * { 
		margin: 0; 
	}
</style>


