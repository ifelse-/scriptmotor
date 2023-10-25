bnvnvbn
// Define an array to store data
$data = array();

// Define a route to get data
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['endpoint'])) {
    $endpoint = $_GET['endpoint'];
    
    if ($endpoint === 'data') {
        // Retrieve data
        echo json_encode($data);
    }
}

// Define a route to post data
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['endpoint'])) {
    $endpoint = $_POST['endpoint'];
    
    if ($endpoint === 'data') {
        $newData = $_POST['newData'];
        
        // Add new data to the array
        $data[] = $newData;
        
        echo json_encode(array("message" => "Data added successfully."));
    }
}