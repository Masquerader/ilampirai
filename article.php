<?php

$js = <<<js
    <script src='http://code.jquery.com/jquery-1.9.1.js'></script>
    <script type='text/javascript'>
        var url = "http://api.tumblr.com/v2/blog/sarcasan.tumblr.com/posts?api_key=z85MlZeqU5upp7onUGeAMvHHfYwzRv9DJJqK57eV0yQqjmhD09&limit=5&callback=?";
        $.getJSON(url, function(results){
            var posts=results.response.posts;
            var html='';
            for(i=0;i<posts.length;i++)
            {
                html = html + '<li><h2>'+ posts[i].title+'</h2><a>'+ posts[i].timestamp +'</a><p>'+ posts[i].body + '</p></li>';
            }
            html = '<ul>' + html + '</ul>';
            $(body).insertAfter(html);
        });
    </script>

js;

echo $js;

/*if(isset($_GET['offset'])){
  $offset = $_GET['offset'];
}
else{
    $offset = 1;
}
$offset = ($offset - 1) * 5;

$api_key='z85MlZeqU5upp7onUGeAMvHHfYwzRv9DJJqK57eV0yQqjmhD09';

$info = 'http://api.tumblr.com/v2/blog/sarcasan.tumblr.com/info?api_key=' . $api_key;

$blogPosts = 'http://api.tumblr.com/v2/blog/sarcasan.tumblr.com/posts/text?limit=5&api_key=' . $api_key . '&offset=' . $offset ;

function getResponse($yql)
{
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $yql);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/json',
    	'Accept: application/json'
	));
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function constructBlogs(){
    $PostsPerPage = 5;
    $blogs = json_decode(getResponse($GLOBALS['blogPosts']));
    $posts = $blogs->response->posts;
    $total_Posts= $blogs->response->blog->posts;
    foreach($posts as $post){
        echo $post->title;
    }
    
    //Pagination logic
    $pagination = '';
    $pages = (int)($total_Posts/$PostsPerPage);
    $last_page = $total_Posts%$PostsPerPage;
    if($last_page != 0 ){
        $pages = $pages + 1;
    }
    
    for($count=1;$count<=$pages;$count++)
    {
        $page_offset = $offset*5-4;
        if($offset == $count)
        {
            $pagination = $pagination . <<<EOD
                <a href='#' class='selected'> {$count} </a>
EOD;
        }
        else{
            $pagination = $pagination . <<<EOD
                <a href='#'> {$count} </a>
EOD;
        }
    }
    $pagination = "<a href='#' class='prev'>prev</a>" . $pagination . "<a href='#' class='next'>next</a>";
    echo $pagination;
}

constructBlogs();*/

?>

