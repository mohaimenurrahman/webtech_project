function ajax(){

	let d1 = document.getElementById('d1').value;
	let xhttp= new XMLHttpRequest();

	xhttp.open('POST', 'adminsearch.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('d1='+d1);

   
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('d2').innerHTML = this.responseText;		
		}
	}
}