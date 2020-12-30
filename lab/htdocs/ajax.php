<?php
if (isset($_POST['key'])) {

    $conn = new mysqli('localhost', 'root', '', 'clowns');

    if ($_POST['key'] == 'getRowData') {
        $rowID = $conn->real_escape_string($_POST['rowID']);
        $sql = $conn->query("SELECT name, login, pass, best FROM users WHERE id='$rowID'");
        $data = $sql->fetch_array();
        $jsonArray = array(
            'name' => $data['name'],
            'login' => $data['login'],
            'pass' => $data['pass'],
        );

        exit(json_encode($jsonArray));
    }

    if ($_POST['key'] == 'getExistingData') {
        $start = $conn->real_escape_string($_POST['start']);
        $limit = $conn->real_escape_string($_POST['limit']);

        $sql = $conn->query("SELECT id, login FROM users LIMIT $start, $limit");
        if ($sql->num_rows > 0) {
            $response = "";
            while($data = $sql->fetch_array()) {
                $response .= '
						<tr>
							<td>'.$data["id"].'</td>
							<td id="users_'.$data["id"].'">'.$data["login"].'</td>
							<td>
								<input type="button" onclick="viewORedit('.$data["id"].', \'edit\')" value="Edit" class="btn btn-primary">
								<input type="button" onclick="viewORedit('.$data["id"].', \'view\')" value="View" class="btn">
								<input type="button" onclick="deleteRow('.$data["id"].')" value="Delete" class="btn btn-danger">
							</td>
						</tr>
					';
            }
            exit($response);
        } else
            exit('reachedMax');
    }

    $rowID = $conn->real_escape_string($_POST['rowID']);

    if ($_POST['key'] == 'deleteRow') {
        $conn->query("DELETE FROM users WHERE id='$rowID'");
        exit('The User Has Been Deleted!');
    }

    $name = $conn->real_escape_string($_POST['name']);
    $login = $conn->real_escape_string($_POST['login']);
    $pass = $conn->real_escape_string($_POST['pass']);
    $best = $conn->real_escape_string($_POST['best']);

    if ($_POST['key'] == 'updateRow') {
        $conn->query("UPDATE users SET name='$name', login='$login', pass='$pass' WHERE id='$rowID'");
        exit('success');
    }

    if ($_POST['key'] == 'addNew') {
        $sql = $conn->query("SELECT id FROM users WHERE login = '$login'");
        if ($sql->num_rows > 0)
            exit("User With This Login Already Exists!");
        else {
            $conn->query("INSERT INTO country (name, login, pass, best) 
							VALUES ('$name', '$login', '$pass', '$best')");
            exit('User Has Been Inserted!');
        }
    }
}
?>