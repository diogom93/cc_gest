function ativSelection()
{
	var selectedOptionVal = document.getElementById('cab_id').value;
	
	var sections = document.getElementsByClassName("div_tabela_atividades");
	
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