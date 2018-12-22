$(document).ready(function(){
	function mydate(e){
		var temp = e;
		var dd = temp.getDate();
		var mm = temp.getMonth() + 1; //January is 0;
		var yyyy = temp.getFullYear();
		var mdate = dd + '-' + mm + '-' + yyyy;
		return mdate
	}
	function mstring(e){
		var temp = e;
		if(temp == 0){
		return "No"
		}else{
			return "Yes"
		}	
	}					

});
