
require_once('../backend/connect.php');
require_once('../backend/scrolling_news.php');

$content = $_REQUEST['content'];
$date = $_REQUEST['date'];
$url = $_REQUEST['url'];


$sql = "INSERT INTO scrolling_news (content, url, date) VALUES ('$content', '$url', '$date')";
$result = $conn->query($sql);
header('Location: scrollingNews.php');