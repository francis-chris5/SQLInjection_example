function runQuery(){
    let query = document.getElementById('query').value;
    let results = document.getElementById('results');
    let request = new XMLHttpRequest();
	request.open("POST", "runQuery.php?query=" + query, true);
	request.send();
	request.onreadystatechange = function(){
		if(request.readyState == 4 && request.status == 200){
			results.innerHTML = request.responseText;
		}
	}
}//end runQuery()




function resetQuery(){
    let query = document.getElementById('query');
    let results = document.getElementById('results');
    query.value = "";
    results.innerHTML = "(Query Results Will Go Here)";
}//end resetQuery()
