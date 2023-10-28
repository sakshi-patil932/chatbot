<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database="chatbot";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password,$database);

// // Check connection
// if(mysqli_num_rows($run_query) > 0)
// {
//     $fetch_data = mysqli_fetch_assoc($run_query);
//     $replay = $fetch_data['replies'];
//     echo $replay;
// }
// else
// {
//     echo "Sorry can't be able to understand you!";
// }



// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "chatbot";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo 'successfully connected';
// }

// // Assuming you have a query to run, replace the following line with your actual query
// $query = "SELECT replies FROM your_table_name WHERE your_condition";
// $run_query = mysqli_query($conn, $query);

// // Check if the query was successful
// if ($run_query) {
//     // Check if there are rows returned
//     if (mysqli_num_rows($run_query) > 0) {
//         $fetch_data = mysqli_fetch_assoc($run_query);
//         $reply = $fetch_data['replies'];
//         echo $reply;
//     } else {
//         echo "Sorry, can't be able to understand you!";
//     }
// } else {
//     echo "Query failed: " . mysqli_error($conn);
// }

// // Close the connection
// mysqli_close($conn);



// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "chatbot";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Assuming you have a query to run, replace the following line with your actual query
// $query = "SELECT Answers FROM chatbot_questionaries WHERE Id = 1";
// $run_query = mysqli_query($conn, $query);

// // Check if the query was successful
// if ($run_query) {
//     // Check if there are rows returned
//     if (mysqli_num_rows($run_query) > 0) {
//         $fetch_data = mysqli_fetch_assoc($run_query);
//         $reply = $fetch_data['Answers'];
//         echo $reply;
//     } else {
//         echo "Sorry, can't be able to understand you!";
//     }
// } else {
//     echo "Query failed: " . mysqli_error($conn);
// }

// // Close the connection
// mysqli_close($conn);




$servername = "localhost";
$username = "root";
$password = "";
$database = "chatbot";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Assuming you have received the user's question and stored it in $userQuestion
$userQuestion = mysqli_real_escape_string($conn, $_POST['text']);  // Make sure to sanitize user input

// Use the user's question in the SQL query
$query = "SELECT Answers FROM chatbot_questionaries WHERE LOWER(questions) = LOWER('$userQuestion')";
$run_query = mysqli_query($conn, $query);

// Check if the query was successful
if ($run_query) {
    // Check if there are rows returned
    if (mysqli_num_rows($run_query) > 0) {
        $fetch_data = mysqli_fetch_assoc($run_query);
        $reply = $fetch_data['Answers'];
        echo $reply;
    } else {
        echo "Sorry, can't be able to understand you!";
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>
