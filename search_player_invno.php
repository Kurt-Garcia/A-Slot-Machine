<?php

include('connect.php');

header('Content-Type: application/json');

if (isset($_POST['search_invno'])) {
    $search_invno   = $_POST['search_invno'];

    if (!$conn) {
        echo json_encode(['success' => false, 'error' => 'Connection failed: ' . mysqli_connect_error()]);
        exit;
    }

    // Query to search for the prize
    $query_search_invno = "SELECT * FROM customer WHERE orno = ?";
    $stmt = mysqli_prepare($conn, $query_search_invno);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $search_invno);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && $row = mysqli_fetch_assoc($result)) {
            $name       = $row['name']; // Adjust according to your actual column names
            $orno       = $row['orno']; // Adjust according to your actual column names
            $amount     = $row['amount']; // Adjust according to your actual column names
            $ctr        = $row['ctr']; // Adjust according to your actual column names
            $id         = $row['id']; // Adjust according to your actual column names

            echo json_encode(['success' => true, 'name' => $name, 'orno' => $orno, 'amount' => $amount, 'ctr' => $ctr, 'id' => $id]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Players Inv No. not found  $search_invno']);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to prepare query']);
    }

    mysqli_close($conn);
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>

