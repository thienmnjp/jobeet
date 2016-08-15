<?php
// initializing a pdo object to run queries with the query builder
$pdo_connection = 'mysql:host=localhost;dbname=jobeet;charset:uft8;';
$pdo = new PDO($pdo_connection ,'root' ,'' );
    
// initializing the query builder object with PDO support
require_once( 'PtcQueryBuilder.php' );
$qb = new PtcQueryBuilder( $pdo );
$qb->setFetchMode( PDO::FETCH_ASSOC );
$qb->table( 'jobs' )
->select('title');

$job = "";
if (isset($_POST['job'])) {
	$job = $_POST['job'];
}
if (!empty($job)) {
	$qb->where('title', 'like', '%'.$job.'%');
}
$category = "";
if (isset($_POST['job_cat'])) {
	$category  = $_POST['job_cat'];
}
if (!empty($category)) {
	$qb->where('cat_id', '=', $category);
}

$location = "";
if (isset($_POST['location'])) {
	$location = $_POST['location'];
}
if (!empty($location)) {
	$qb->where('location_id ', '=', $location);
}

// retrieve records that match a where clause
$result = $qb->run();
echo json_encode($result); // encode with json format then return to client
exit;


