$(document).ready(function(){
	var add = 0;
	$('#start').click(function(){
		if(add != 10){
			add++;
			$.ajax({
				url: 'search.php',
				data: {id:add},
				dataType: 'JSON',
				method: 'GET',
				success:function(responce){
					$('#question').html('<span id = "question">'+responce.tanong+'</span>');
					$('#A').html('<input type = "radio" name = "choice" id = "a" value ="a">'+responce.choiceA);
					$('#B').html('<input type = "radio" name = "choice" id = "b" value ="b">'+responce.choiceB);
					$('#C').html('<input type = "radio" name = "choice" id = "c" value ="c">'+responce.choiceC);
					$('#D').html('<input type = "radio" name = "choice" id = "d" value ="d">'+responce.choiceD);

				}
			});
		}else{
			alert("tapos na");
		}
	});
});