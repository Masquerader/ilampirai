<?php
require_once('./sdk/facebook.php');
$config = array();
$config['appId'] = '189470877784753';
$config['secret'] = 'fbaee6417267a200308408e70d7403ae';

$facebook = new Facebook($config);
$aid=$_GET["aid"];
if(isset($aid))
{
	$response=$facebook->api(array(
						'method' => 'fql.query',
						'query' => 'select caption,src_big,src from photo where aid=\'' . $aid . '\''
					));

	$photoCount = sizeof($response);
	$photos="";
	$desc = "";
	$title="";


	foreach ($response as $key => $photo) {
		$photos = $photos . "'" . $photo['src_big'] ."',";
		$desc   = $desc . "'". htmlspecialchars($photo['caption'],ENT_QUOTES) . "',";
		$title = $title . "'',";
	}
	$photos = "api_gallery=[" . rtrim($photos,',') . "];";
	$desc = "api_description=[". rtrim($desc,',') . "];";
	$title = "api_titles=[". rtrim($title,',') . "];";

	$js = <<<PHOTO
		<script type="text/javascript" charset="utf-8">
		{$photos}
		{$title}
		{$desc}
		$.fn.prettyPhoto({ social_tools: false,show_title: false });
		$.prettyPhoto.open(api_gallery,api_titles,api_description);
		</script>
		

PHOTO;
	echo $js;

}
else{

$multiQuery = '{
		"query1":"select name,aid,photo_count, created from album where owner=\'125899704117417\' and name!= \'Cover Photos\' and name!= \'Timeline Photos\' and name!=\'Profile Pictures\'",
		"query2":"select src_big from photo where pid in ( select cover_pid,name from album where owner=\'125899704117417\' and name!= \'Cover Photos\' and name!= \'Timeline Photos\' and name!=\'Profile Pictures\')"
	}';



$ret = $facebook->api( array(
                         'method' => 'fql.multiquery',
                         'queries' => $multiQuery,

                     ));
$resultCount = sizeof($ret[0]['fql_result_set']);

$album = "";
for($i=0;$i<$resultCount;$i++){

	$album = $album . <<<EOT
		<li id="{$ret[0]['fql_result_set'][$i]['aid']}"><a title="{$ret[0]['fql_result_set'][$i]['name']}"><img src="{$ret[1]['fql_result_set'][$i]['src_big']}" alt="{$ret[0]['fql_result_set'][$i]['name']}"></a></li>
EOT;

}
$js=<<<EOT
<script type='text/javascript'>
$('#albums li').click(function(){	
			var selected = this.id;
			$.ajax({
				type:"GET",
  				url: "gallery.php",
  				data:{aid:this.id}
			}).done(function(html) {				
  			$('#photo_container').html(html);
			
			});

		});

</script>
EOT;
echo "<ul id='albums'>" . $album . "</ul><div id='photo_container'></div>" . $js;
}
?>
