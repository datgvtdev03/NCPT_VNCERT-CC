<?php
    // function connect($query) {
    //     $connection = mysqli_connect('localhost','root','vncert@2022','DemoWebsite');
    //     $stmt = $connection -> prepare($query);
    //     $stmt -> execute();
    //     return $stmt;
    // };
    // function getAll($query) {
    //     $array = connect($query) -> fetchAll();
    //     return $array;
    // };
    // function getOne($query) {
    //     $array = connect($query) -> fetch();
    //     return $array;
    // };

    // $User = $_POST['username'];
    // $Pass= $_POST['password'];
    
    // $conn = new mysqli('localhost','root','','DemoWebsite');
    // if($conn->connect_error){
    //     die('Connect Failed: '.$conn->connect_error);
    // }else{
    //     $stmt = $conn->prepare("insert into loginform(User,Pass)values(?,?)");
    //     $stmt->bind_param("ssi",$User,$Pass);
    //     echo "loginform successfully...";
    //     $stmt->close();
    //     $stmt->close();
    // }

?>

<?php


/**
 * insert, update, delete -> su dung function
 */
function execute($sql) {
	//create connection toi database
	$conn = mysqli_connect("Login", "root", "vncert@2022", "DemoWebsite");

	//query
	mysqli_query($conn, $sql);

	//dong connection
	mysqli_close($conn);
}

/**
 * su dung cho lenh select => tra ve ket qua
 */
function executeResult($sql) {
	//create connection toi database
	$conn = mysqli_connect("Login", "root", "vncert@2022", "DemoWebsite");

	//query
	$resultset = mysqli_query($conn, $sql);
	$list      = [];
	while ($row = mysqli_fetch_array($resultset, 1)) {
		$list[] = $row;
	}

	//dong connection
	mysqli_close($conn);

	return $list;
}