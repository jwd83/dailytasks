<?

$users = $db->selectCollection(COLLECTION_USERS);

$validation_key = sha1($_REQUEST['email'] . microtime(true) . rand() . rand());

$users->insert(
  array(
    'email' => $_REQUEST['email'], 
    'validation_key' => $validation_key    
  ) 
);