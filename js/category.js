
function filterSelection()
{
	var selectedOptionVal = document.getElementById('u_type').value;
	
	var sections = document.getElementsByClassName("field_category");
	
	var sel = document.getElementById('filter_default');
	
	if( sel)
	{
		document.getElementById('u_type').removeChild(sel);
	}
	
	var i=0, len = sections.length;
	
	for(i = 0; i < len; i++)
	{
		var div = sections.item(i);
		
		div.style.display="none";
		
		if( div.id == selectedOptionVal)
		{
			div.style.display="initial";
		}
	}
	
	
	var selectedCategoryVal = document.getElementById("u_category_".concat(selectedOptionVal)).value;
	document.getElementById('sub_selection_id').value = selectedCategoryVal;
	
}

function filterSelectionInitial()
{
	var selectedOptionVal = document.getElementById('u_type').value;
	
	var sections = document.getElementsByClassName("field_category");
	
	var i=0, len = sections.length;
	
	for(i = 0; i < len; i++)
	{
		var div = sections.item(i);
		
		div.style.display="none";
		
		if( div.id == selectedOptionVal)
		{
			div.style.display="initial";
		}
	}
	
}