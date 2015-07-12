function toEdit(id){
	//alert(id);
    var text=$(this).html();
    $("#edit_"+id).show();
    $("#submit_"+id).show();
}