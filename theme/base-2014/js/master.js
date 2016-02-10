$(function() {

})


// replace this with shuffle js
$('body').on('click', '#work_filter li a', function(e) {
	e.preventDefault();
	var me = $(this);
	var active_group = me.attr('data-cat');
	var holder = $('#work_block_cards');
	holder.find('.work_card').each(function() {
		var card = $(this);
		if(card.attr('data-filter-cat') != active_group) {
			card.hide()
			if(active_group == 'all') {
				card.show()
			}
		}
		else {
			card.show()
		}
	})
	// .not('[data-filter-cat="'+active_group+'"]').removeClass('can_view')
})
