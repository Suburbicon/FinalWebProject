
(function(){

	var Memory = {

		init: function(cards){
			this.$game = $(".game");
			this.$modal = $(".modal");
			this.$overlay = $(".modal-overlay");
			this.$restartButton = $("button.restart");
			this.cardsArray = $.merge(cards, cards);
			this.shuffleCards(this.cardsArray);
			this.setup();
		},

		shuffleCards: function(cardsArray){
			this.$cards = $(this.shuffle(this.cardsArray));
		},

		setup: function(){
			this.html = this.buildHTML();
			this.$game.html(this.html);
			this.$memoryCards = $(".card");
			this.paused = false;
     	this.guess = null;
			this.binding();
		},

		binding: function(){
			this.$memoryCards.on("click", this.cardClicked);
			this.$restartButton.on("click", $.proxy(this.reset, this));
		},
		// kinda messy but hey
		cardClicked: function(){
			var _ = Memory;
			var $card = $(this);
			if(!_.paused && !$card.find(".inside").hasClass("matched") && !$card.find(".inside").hasClass("picked")){
				$card.find(".inside").addClass("picked");
				if(!_.guess){
					_.guess = $(this).attr("data-id");
				} else if(_.guess == $(this).attr("data-id") && !$(this).hasClass("picked")){
					$(".picked").addClass("matched");
					_.guess = null;
				} else {
					_.guess = null;
					_.paused = true;
					setTimeout(function(){
						$(".picked").removeClass("picked");
						Memory.paused = false;
					}, 500);
				}
				if($(".matched").length == $(".card").length){
					_.win();
				}
			}
		},

		win: function(){
			this.paused = true;
			setTimeout(function(){
				Memory.showModal();
				Memory.$game.fadeOut();
			}, 1000);
		},

		showModal: function(){
			this.$overlay.show();
			this.$modal.fadeIn("slow");
			$('html').css({'overflow' : 'hidden'})
		},

		hideModal: function(){
			this.$overlay.hide();
			this.$modal.hide();
			$('html').css({'overflow' : 'auto'})
		},

		reset: function(){
			this.hideModal();
			this.shuffleCards(this.cardsArray);
			this.setup();
			this.$game.show("slow");
		},

		shuffle: function(array){
			var counter = array.length, temp, index;

	   	while (counter > 0) {

        	index = Math.floor(Math.random() * counter);

        	counter--;

        	temp = array[counter];
        	array[counter] = array[index];
        	array[index] = temp;
	    	}
	    	return array;
		},

		buildHTML: function(){
			var frag = '';
			this.$cards.each(function(k, v){
				frag += '<div class="card" data-id="'+ v.id +'"><div class="inside">\
				<div class="front"><img src="'+ v.img +'"\
				alt="'+ v.name +'" /></div>\
				<div class="back"><img src="img/game/card-show.png"\
				alt="Codepen" /></div></div>\
				</div>';
			});
			return frag;
		}
	};

	var cards = [
		{
			name: "atletico",
			img: "img/game/atletico.jpg",
			id: 1,
		},
		{
			name: "barcelona",
			img: "img/game/barc.jpg",
			id: 2
		},
		{
			name: "juventus",
			img: "img/game/juventus.jpg",
			id: 3
		},
		{
			name: "liverpool",
			img: "img/game/liverpool.png",
			id: 4
		},
		{
			name: "mancity",
			img: "img/game/mancity.png",
			id: 5
		},
		{
			name: "manutd",
			img: "img/game/manutd.jpg",
			id: 6
		},
		{
			name: "milan",
			img: "img/game/milan.png",
			id: 7
		},
		{
			name: "realmadrid",
			img: "img/game/realmadrid.png",
			id: 8
		},
		{
			name: "zenit",
			img: "img/game/zenit.png",
			id: 9
		},
	];

	Memory.init(cards);


})();

$(document).ready(function() {
	let flag = true;

    $('.form').submit(function(e) {
		e.preventDefault;
	});

	$('.js_btn').on('click', function() {
		let form = $(this).closest('.form');
		let email = form.find('.js_email_val').val();
		let reg = /.+@.+\..+/i;
        let url = "https://script.google.com/macros/s/AKfycbwyj_FGKbLQFvy79NmI989VH65g8QQRThlOE7hJae36u86iJy-8/exec";
		let params = "p1="+email;
		if (email !== '' && reg.test(email) && flag) {
			flag = false;
			console.log('click');
			$.ajax(
				{
					type: 'GET',
					url: url,
					dataType: 'json',
					data: params,
				}
			).fail(function() {
				$('.js_email_val').val('');
				flag = true;
				$('.restart').click();
				$('.popup-wrapper').addClass('open');
				$('.page-wrapper').addClass('blur-it');
				$('html').css({'overflow' : 'hidden'})
			});

		}
	})
});


$( document ).ready(function() {
    $('.trigger').on('click', function() {
       $('.popup-wrapper').removeClass('open');
	  $('.page-wrapper').removeClass('blur-it');
	  $('html').css({'overflow' : 'auto'})
       return false;
    });
  });
