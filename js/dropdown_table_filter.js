
function updateTableSelection()
{
	var selectedOptionVal = document.getElementById('caixa_filtro_tabela').value;
	
	var sections = document.getElementsByClassName("secc_tabela");
	
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