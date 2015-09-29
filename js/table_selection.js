function clickEvent( element, siblings_id )
{
	//clear all children:
	var row = document.getElementById(siblings_id);
	
	while( row != null )
	{
		row.className = row.className.replace( /(?:^|\s)selected(?!\S)/g , '' );
		row = row.nextElementSibling;
	}
	
	element.className += " selected";
	
}

function computeSelection(receiver_id, selected_class, table_index, depth=0)
{
	receiver = document.getElementById( receiver_id );
	
	selected_element = document.getElementsByClassName( selected_class )[0];
	
	if( !selected_element)
		return;
	
	if(depth == 0)
		receiver.value = selected_element.children[table_index].childNodes[0].data;
	else if( depth == 2 )
		receiver.value = selected_element.children[table_index].childNodes[0].childNodes[0].childNodes[0].data;
	else
		receiver.value = selected_element.children[table_index].childNodes[0].childNodes[0].data;
}