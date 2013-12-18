<script src='http://code.jquery.com/jquery-1.9.1.js'></script>
<script type='text/javascript'>
	
	var totalPosts;
	var postsPerPage=5;

    var url = "http://api.tumblr.com/v2/blog/sarcasan.tumblr.com/posts?api_key=z85MlZeqU5upp7onUGeAMvHHfYwzRv9DJJqK57eV0yQqjmhD09&limit=5&callback=?";
    $.getJSON(url, function(results){
		var posts = results.response.posts;
		$.each(posts,function(index,value){
			console.log(index + ":" + value);
		});
	});
</script>