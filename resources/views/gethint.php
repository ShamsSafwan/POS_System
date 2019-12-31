$mysqli = new mysqli("localhost", "root", "", "arif");
if($mysqli->connect_error) {
  exit('Could not connect');
}