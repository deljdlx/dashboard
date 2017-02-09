
$(document).on('click', '.componentContainer', function(event) {

	var script=$(this).find('script[type=elbiniou-dashboard-richEditRenderer]').html();
	try {
		eval('var properties='+script);
		console.debug(properties);


		var content='';

		for(var attribute in properties.properties) {

			var value=properties.properties[attribute];
			var id=properties.instanceID+'-'+attribute

			//content+='<div>'+attribute+' : <input id="'+id+'" value="'+value+'" name="'+attribute+'"/></div>';


				content+='<div class="form-group label-floating">';
					content+='<label class="control-label" for="focusedInput1">'+attribute+'</label>';
					content+='<input class="form-control" id="focusedInput1" type="text" value="'+value+'"/>';
				content+='</div>';


		}


		$('#richEditor-dialog .modal-body').html(content);


		$('#richEditor-dialog').modal('show')


	} catch(exception) {
	}
})



function RichEditComponentManager()
{

}





RichEditComponentManager.handleComponent=function(item) {
	var script=$(item).find('script[type=elbiniou-dashboard-richEditRenderer]').html();
	try {
		eval(script);
		console.debug(properties);
	} catch(exception) {
		console.debug(exception);
	}
}
