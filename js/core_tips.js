var mouseX;
var mouseY;

$(document).ready(function() {
	
	$(document).mousemove( function(e) {
	   mouseX = e.pageX + 25; 
	   mouseY = e.pageY - 25;
	   
	   d_width = $("#core_popper").width();
	   d_height = $("#core_popper").height();
	   
	   
	   //see if bounds are aggressive and flip them
	   if( mouseX + d_width + 60 >=  window.innerWidth)
	   {
			mouseX = mouseX - 25 - d_width - 60;
	   }
	   if( mouseY + d_height + 25 >=  window.innerHeight)
	   {
			mouseY = mouseY - d_height - 25;
	   }
	   
	   $('#core_popper').css({'top':mouseY,'left':mouseX, 'position':'absolute'})
	}); 
	
	$('.Scrollable').on('DOMMouseScroll mousewheel', function(ev) {
		
		
		
		
		//change context
		var $this = document.getElementById("core_cont").contentDocument.body,
			scrollTop = $this.scrollTop,
			scrollHeight = $this.scrollHeight,
			height = $($this).height(),
			delta = (ev.type == 'DOMMouseScroll' ?
				ev.originalEvent.detail * -40 :
				ev.originalEvent.wheelDelta),
			up = delta > 0;
			
		delta = (up ? -30 : 30);
	
		var prevent = function() {
			ev.stopPropagation();
			ev.preventDefault();
			ev.returnValue = false;
			return false;
		}
		
		$($this).scrollTop(scrollTop + delta);

			
		if (!up && -delta > scrollHeight - height - scrollTop) {
			// scrolling down, offbounds
			$($this).scrollTop(scrollHeight);
			return prevent();
		} else if (up && delta > scrollTop) {
			// scrolling up, offbounds
			$($this).scrollTop(0);
			return prevent();
		}
		else return prevent();
		
		
	});
	
	$('.core_node').mouseenter(function(e) {
		
	mouseX = e.pageX + 25; 
	   mouseY = e.pageY - 25;
	   
	   d_width = $("#core_popper").width();
	   d_height = $("#core_popper").height();
	   
	   
	   //see if bounds are aggressive and flip them
	   if( mouseX + d_width + 60 >=  window.innerWidth)
	   {
			mouseX = mouseX - 25 - d_width - 60;
	   }
	   if( mouseY + d_height + 25 >=  window.innerHeight)
	   {
			mouseY = mouseY - d_height - 25;
	   }
	   
	   $('#core_popper').css({'top':mouseY,'left':mouseX, 'position':'absolute'})
		
		
        // Grab current anchor value
        var target = $(this).attr('for');
		
		var address = '<iframe id="core_cont" class="core_container" src="http://paginas.fe.up.pt/~ee12001/core/' + target + '"/>'
		
		
		//resetclass
		$("#core_popper").removeClass().addClass('Scrollable').addClass('core_info');
		
		if( address.indexOf("center") >= 0)
		{
			//is center type
			$("#core_popper").addClass('ct_center');
		}
		else if( address.indexOf("activity") >= 0)
		{
			//is activity type
			$("#core_popper").addClass('ct_activity');
		}
		else if( address.indexOf("TI") >= 0)
		{
			//is cab type
			$("#core_popper").addClass('ct_ti');
		}
		else if( address.indexOf("cab") >= 0)
		{
			//is cab type
			$("#core_popper").addClass('ct_cab');
		}
		else if( address.indexOf("person") >= 0)
		{
			//is cab type
			$("#core_popper").addClass('ct_person');
		}
		else if( address.indexOf("mov") >= 0)
		{
			//is cab type
			$("#core_popper").addClass('ct_movement');
		}
		
		$("#core_popper").html( address );
		
		$('#core_popper').stop(true,true).fadeIn('fast');
		
		
    });
	
	$('.core_node').mouseleave(function(e) {
        
		
		
		$('#core_popper').stop(true,true).fadeOut('fast');
		
		
    });
	
});