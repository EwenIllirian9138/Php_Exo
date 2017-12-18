$(document).ready(function() {

	affichageJauges();
	affichePiece();
	$('#vue2').hide();

	$('.buttons').hover(function() {
		$(this).attr('src', $(this).attr('src').split('Normal').join('Hover'));
	}, function() {
		$(this).attr('src', $(this).attr('src').split('Hover').join('Normal'));
	}).mousedown(function() {
		$(this).attr('src', $(this).attr('src').split('Hover').join('Push'));
	}).mouseup(function() {
		$(this).attr('src', $(this).attr('src').split('Push').join('Hover'));
	});

	$('#btnPlus img').click(function() {
		indexSucre('plus');
	});
	$('#btnMoins img').click(function() {
		indexSucre('moins');
	});

    $('#btnDroite').click(function() {
        if ($('#chargement').width() == 0) {
            indexBoissons('plus');
        }
        });
    
    $('#btnGauche').click(function() {
        if ($('#chargement').width() == 0) {
            indexBoissons('moins');
        }
        });

    $('#btnValider img').click(function() {
        if ($('#chargement').width() == 0) {
    	   validerChoix();    
        }
    });

    $('#gobelet').click(function() {
        if ($('#chargement').width() == 768) {
            $('#gobelet').fadeOut('slow');
            $('#chargement').width('0px');
            $('.boissons').html('Veuillez selectionner une boisson');
            $('.ingredients').height('0');
            $('#Lait').css('margin-top', '198px');
            $('.ingredients').css('background-color', '').fadeTo(0, 1);
        }
    }).hide();
    
	$('.coins').click(function(){
		ajoutPiece($(this).attr('alt'));
	}).hover(function() {
		$(this).css('box-shadow', '0 0 20px white');
	}, function() {
		$(this).css('box-shadow', '0 0 0 white');
	}).mousedown(function() {
		$(this).css('padding',  '1px');
	}).mouseup(function() {
		$(this).css('padding', '0px');
	});

	$('#btnResetMonnaie img').click(function() {
		monnayeur(0);
	});

	$('#btnMoney img').click(function(){
		let etat = $(this).attr('src').split('.png').join('').split('assets/buttons/euro').join('');
		if (etat === 'Hover') {
			$(this).attr('src', $(this).attr('src').split('Hover').join('Push'));
		} else {
			$(this).attr('src', 'assets/buttons/euroHover.png');
		}
	    $('#moneyForm').toggleClass('hidden');
	    $(this).parent().toggleClass('backgroundGrey');
	}).hover(function() {
		let etat = $(this).attr('src').split('.png').join('').split('assets/buttons/euro').join('');
		if (etat === 'Normal') {
			$(this).attr('src', $(this).attr('src').split('Normal').join('Hover'));
		}
	}, function() {
		$(this).attr('src', $(this).attr('src').split('Hover').join('Normal'));
	});

	$('html').click(function() {
		$('#moneyForm').addClass('hidden');
		$('#btnMoney').removeClass('backgroundGrey');
		$('#btnMoney img').attr('src', 'assets/buttons/euroNormal.png');
	});
	$('.porteMonnaie').click(function(event){
	   event.stopPropagation();
	});

	$('.maintenance img').click(function() {
		if ( $('#vue2').is(':visible') ) {
			$('#vue2').hide();
			$('#machine, #monnaieUser').fadeIn('slow');
		} else if ( $('#machine').is(':visible') ) {
			$('#machine, #monnaieUser').hide();
			$('#vue2').fadeIn('slow');
		}
	});
});