function chooseSelection()
{
	
	var selector = document.getElementById('cab_id');
	if(selector == null)
		return;
	
	var selectedOptionVal = selector.value;
	
	var sections = document.getElementsByClassName("div_tabela_movements");
	
	var i=4, len = sections.length;
	
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