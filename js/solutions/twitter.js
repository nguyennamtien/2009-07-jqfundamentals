$(document).ready(function() {
	var $twitter = $('#twitter').show();
		
	var $container = $twitter.find('ul');
	var $template = $container.find('.template').remove();
		
	$.ajax({
		url : 'http://twitter.com/status/user_timeline/rmurphey.json?count=3&callback=?',
		dataType : 'jsonp',
		type : 'GET',
		success : function(tweets) {
			$.each(tweets, function(i, tweet) {
				var $li = $template.clone().appendTo($container).show();
				$li.find('.username').text(tweet.username);
				$li.find('.tweet').text(tweet.text);
				$li.find('.date').text(tweet.created_at);
			});
		}
	}); 
});


