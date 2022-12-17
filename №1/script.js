$(function(){
		$('li:nth-child(1)').click(function(){
			$('.text').toggle()
		});
		$('li:nth-child(2)').click(function(){
			$('.text1').toggle()
		});
		$('li:nth-child(3)').click(function(){
			$('.text2').toggle()
		});
		$('li:nth-child(4)').click(function(){
			$('.container').toggle()
		});

	$('li a').click(function(){
		$('li a').css('background-color', 'red');
		$(this).css('background-color', 'white')
	})
	$(function(){
		$('.select1').change(function(){
			var v = $('.select1 :selected').val();
			if(v=='tj'){
				$('.info').html('<p>Таджикистан - прекрасная, чудесная, с богатой историей, нация - таджики, таджики - носители корон.</p>')
			}
		});
	});
	$(function(){
		$('.select1').change(function(){
			var v = $('.select1 :selected').val();
			if(v=='USA'){
				$('.info').html('<p>Америка - прекрасная, чудесная, с богатой историей, нация - американцы, американцы - носители звёзд.</p>')
			}
		});
	});
});