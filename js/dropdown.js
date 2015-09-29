
function updateSelection()
{
	var selectedOptionVal = document.getElementById('caixa_filtro').value;
	
	var sections = document.getElementsByClassName("secc_operacoes");
	
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