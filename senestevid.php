{<?php
$video = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?key=AIzaSyDBzIBpp0A9HUcrkwhLVJ_k1cLdwrk0pLE&part=id&channelId=UCBqXdivqgtgiZg-00oSxvaw&order=date&maxResults=2&type=video'), true);
$video_id = $video['items'][0]['id']['videoId'];
?>
<?php echo number_format("$sub_count_main;") ?>"senestevid":"https://youtube.com/watch?v=<?php echo $video_id; ?>"}