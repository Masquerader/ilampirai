
	var caption = ['This is heading 1','This is heading -2','This is heading -3','This is heading -4'];
	var description = ['Description 1 Description 1 Description 1 Description 1 Description 1 Description 1 Description 1 ',
						'Description 2 Description 2 Description 2 Description 2 Description 2 Description 2 Description 2 ',
						'Description 3 Description 3 Description 3 Description 3 Description 3 Description 3 Description 3 ',
						'Description 4 Description 4 Description 4 Description 4 Description 4 Description 4 Description 4 '];
	var animInterval;

	$(window).load(function(){
		$("#loading").fadeOut('slow');
	})
	$(document).ready(function(){
		slider();
	});
	function slider(){
		var images=$("#slides").children();	
		i=0;
		function run(){			
			$("#description").fadeOut(1000,function(){
				$("#slides p").fadeOut(1000,function(){
					$(images[i]).fadeOut(2000);
					i++;
					if(i==4){i=0;}
					$(images[i]).fadeIn(2000,function(){
						$("#slides p").text(caption[i]).fadeIn(1000,function(){
							$("#description").text(description[i]).fadeIn(1000);
						});
					});	
				});
			});
			animInterval=setTimeout(run,8500);	
		}
		setTimeout(run,3000);
	}

	$(".gallery").click(function(){
		$("#navbar li").removeClass("selected");
		$(this).addClass("selected");
		$("#loading").fadeIn('slow');
		var album = "";
		$.getScript('http://connect.facebook.net/en_UK/all.js', function(){
    	FB.init({
      		appId: '189470877784753',
    	});     
    	FB.api({
     		method: 'fql.multiquery',
     		queries: {
        		query1:"select name,aid,photo_count, created from album where owner=\'125899704117417\' and name!= \'Cover Photos\' and name!= \'Timeline Photos\' and name!=\'Profile Pictures\' and photo_count!=0",
        		query2:"select src_big from photo where pid in ( select cover_pid,name from album where owner=\'125899704117417\' and name!= \'Cover Photos\' and name!= \'Timeline Photos\' and name!=\'Profile Pictures\' and photo_count!=0)"
     		}
    	}, function(response) {
	  			var album_details = response[0]['fql_result_set'];
    			var cover_pics = response[1]['fql_result_set'];
	  			$.each(album_details,function(index,value){
      				album = album + "<li id='"+ value.aid+ "'><a title='" + value.name + "'><img src='" + cover_pics[index].src_big +"'alt='" + value.name +"'></a></li>";
	  			});
	  			album = "<ul id='albums'>" + album + "</ul><div id='photo_container'></div>";
	  			$("#main").html(album);
	  			$("#loading").fadeOut('slow');
			});
  		});
  		
	});
	
	$('body').on('click','#albums li',function(){
		var api_gallery = [];
		var api_description = [];
		var api_titles = [];
		
		FB.api({
			method: 'fql.query',
			query:  'select caption,src_big,src from photo where aid=\'' + this.id + '\''
		},function(response){
			$.each(response,function(index,value){
				api_gallery.push(value.src_big);
				api_description.push(value.caption);
				api_titles.push('');
			});
			$.fn.prettyPhoto({ social_tools: false,show_title: false });
			$.prettyPhoto.open(api_gallery,api_titles,api_description);
		});
		
	});

	$(".project").click(function(){
		$("#navbar li").removeClass("selected");
		$(this).addClass("selected");
		$("#loading").fadeIn('slow');
		getPosts(0);
	});

	$(".home").click(function(){
		$("#navbar li").removeClass("selected");
		$(this).addClass("selected");
		$("#loading").fadeIn('slow');
		$("#main").html('<div id="slides"><img src="https://m.ak.fbcdn.net/sphotos-g.ak/hphotos-ak-prn2/1557366_693556257351756_1958874898_o.jpg" style="display:block;"/><img src="https://m.ak.fbcdn.net/sphotos-g.ak/hphotos-ak-ash2/t1/197502_195146347192752_7620326_n.jpg"/><img src="https://m.ak.fbcdn.net/sphotos-a.ak/hphotos-ak-frc1/385170_297363436971042_956429475_n.jpg"/><img src="https://m.ak.fbcdn.net/sphotos-e.ak/hphotos-ak-ash2/t1/374248_297349896972396_186183961_n.jpg"/><p>This is heading -1</p><div id="description">Description  Description  Description  Description  Description  Description  Description 1</div></div>');
			$("#loading").fadeOut('slow');
			slider();
	});

	$(".about").click(function(){
		$("#navbar li").removeClass("selected");
		$(this).addClass("selected");
		$("#loading").fadeIn('slow');
		$.ajax({
  			url: "server.php",
  			type: "GET",
  			data: { page : "about" }
		}).done(function( html ) {
  			$("#main").html( html );
  			$("#loading").fadeOut('slow');
		});
	});

	$(".team").click(function(){
		$("#navbar li").removeClass("selected");
		$(this).addClass("selected");
		$("#loading").fadeIn('slow');
		$.ajax({
  			url: "server.php",
  			type: "GET",
  			data: { page : "team" }
		}).done(function( html ) {
  			$("#main").html( html );
  			$("#loading").fadeOut('slow');
		});
	});

	$(".contact").click(function(){
		$("#navbar li").removeClass("selected");
		$(this).addClass("selected");
		$("#loading").fadeIn('slow');
		$.ajax({
  			url: "server.php",
  			type: "GET",
  			data: { page : "contact" }
		}).done(function( html ) {
  			$("#main").html( html );
  			$("#loading").fadeOut('slow');
		});
	});

	function getPosts(offst){
			var nextPage = offst;
			var html='';
			var month = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
			var url = "http://api.tumblr.com/v2/blog/ilampirai.tumblr.com/posts?api_key=z85MlZeqU5upp7onUGeAMvHHfYwzRv9DJJqK57eV0yQqjmhD09&limit=5&callback=?&offset="+nextPage;
			var postsPerPage=5;
			$.getJSON(url, function(results){
        		var posts= results.response.posts;
        		var totalPosts = parseInt(results.response.total_posts);
        		var pagination = '';
        		for(i=0;i<posts.length;i++)
        		{
          		 	var dates = posts[i].date.split(" ");
            		var dateSplit = dates[0].split("-");
            		d = new Date(dateSplit[0] + " " + dateSplit[1] + ", " + dateSplit[2]);
           			html = html + '<li><div class="timestamp"><div class="day">'+ d.getDate() +'</div><div class="month">'+ month[d.getMonth()]+'</div><div class="year">'+ d.getFullYear() + '</div></div><div class="title">'+ posts[i].title+
           			'</div><div class="post">'+ posts[i].body + '</div></li>';
        		}
        		
        		if( nextPage == 0){
        			var pages = parseInt(totalPosts/postsPerPage);
        			var lastPage = totalPosts%postsPerPage;
        			if(lastPage!=0){pages++;}
        				for(i=1;i<=pages;i++){
        					var offset = (i-1)*5;
        					if(i==1)
        					{
        						pagination = pagination + '<a href="#" class="first active" offset=' + offset + '>' + i + '</a>';
        					}
        					else if(i==pages)
        					{
        						pagination = pagination + '<a href="#" class="last" offset=' + offset + '>' + i + '</a>';	
        					}
        					else
        					pagination = pagination + '<a href="#" class="" offset=' + offset + '>' + i + '</a>';
        				}
        			pagination = '<div id="pagination"><a href="#" class="prev" style="display:none;">prev</a>' + pagination + '<a href="#" class="next" offset="5">next</a></div>';
        			js = '<script>$("#pagination a").click(function(){$("#pagination a").removeClass("active");var curOffset= parseInt($(this).attr("offset"));$(".prev").attr("offset",curOffset-5);$(".next").attr("offset",curOffset+5);$("#pagination a[offset=\'"+ curOffset + "\']").addClass("active");$(".prev").removeClass("active");$(".next").removeClass("active");if($(".active").attr("class").search("first")!=0){$(".prev").show();}if($(".active").attr("class").search("last")==0){$(".next").hide();}else{$(".next").show();};$("#loading").fadeIn("slow");getPosts(curOffset);});</'+ 'script>';
					html = '<ul id="posts">' + html + '</ul>' + pagination + js;
					$("#main").html( html );
					$("#loading").fadeOut('slow');
        		}
        		else{
        			$("#posts").html(html);
        			$("#loading").fadeOut('slow');
        		}
        		
        	});
		}
		function formSubmit(){
			console.log("Form submit");
		}