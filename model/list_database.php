<?php
function get_items($user_id) {
    global $db;
    $query = 'SELECT * FROM items
	ORDER BY user_id ';
    $statement = $db->prepare($query);
    $statement->bindValue(":user_id", $user_id);
    $statement->execute();
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items; 
}

function delete_item ($item_id) {
	global $db;
	$query = 'DELETE FROM items
		WHERE itemID = :item_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':item_id', $item_id);
	$statement->execute();
	$statement->closeCursor();
}

function add_item ($user_id, $item, $duedate) {
	global $db;
	$query = 'INSERT INTO items
			(userID, itemName, dueDate)
		  VALUES
		  	(:user_id, :item, :duedate)';
	$statement = $db->prepare($query);
	$statement->bindValue(':user_id', $user_id);
	$statement->bindValue(':item', $item);
	$statement->bindValue(':duedate', $duedate);
	$statement->execute();
	$statement->closeCursor();
}
?>
