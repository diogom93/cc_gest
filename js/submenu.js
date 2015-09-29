		
		// Wait for the page to load first
$(document).ready(function() {

	/*
        //get submenu items
        var a_estado = document.getElementById("a_estado");
		var a_operacoes = document.getElementById("a_operacoes");
		var a_consultas = document.getElementById("a_consultas");

          //use this event to do the post trick
        a_estado.onclick = postCCId();
		a_estado.onclick = postCCId();
		a_estado.onclick = postCCId();
		  
		  
        }
        */
	
		
			
		//make dummy hidden form
		var d_form = $('<form></form>');
		
		d_form.attr('method', 'POST');
		
		var d_post = $("<input />");
		d_post.attr('type', "hidden");
		d_post.attr('name', "ccid");
		d_post.attr('value', window.ccid);
		d_post.attr('id', "ccid");
		d_form.append(d_post);
	
	
		 $('.list_sub_subtopic_link').click(function(e) {
			
			//e.preventDefault();
			
			var url = $(this).attr('href');
			d_form.attr('action', url);
			
			//dereference global:
			window.ccid = null;
			
			$(document.body).append(d_form);
			d_form.submit();
			$(document.body).remove(d_form);

			
			
            //return true so redirect still happens
            return false;
			
		 });
		

});