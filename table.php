<?php
/* include("developers.php"); */
$conn = new mysqli('sql204.epizy.com', 'epiz_33774755', 'VApohlQsriB0BfU', 'epiz_33774755_userdata');
/* $conn=new mysqli('localhost','root','','userdata');
 */
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$db= $conn;
$tableName="userinfodata";
$columns= ['user', 'email', 'phno','comment','time'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <style>
            *
            {
                margin=0;
                padding=0;
                box-sizing=border-box;
                a{color:black;text-decoration:none;}
                a:hover{color:black;text-decoration:none;}
                a:active{color:black;text-decoration:none;}
                a:visited{color:black;text-decoration:none;}
            }

            td
            {
                font-size:13.5px;
            }

            .container
            {
                 font-family: 'Josefin Sans', Roboto, sans-serif;
            }

            .tbl
            {
                margin:20px;
                margin-left:13%;
                margin-bottom:13.5%;
            }
            .img_fav
            {
                margin:7px;
                margin-left:5px;
                padding-top:2px;
                padding-bottom:-2px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="favicon.ico" alt="Logo" width="30" height="28" class="d-inline-block align-text-top img_fav">
            <a class="navbar-brand" href="index.htm">WORLD TOUR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>                  
	    </nav>

      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="contact.htm">Contact</a></li>
                <li>&#62;</li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>

        
        <div class="container">
        <div class="row">
        <div class="col-sm-8 tbl">
            <?php echo $deleteMsg??''; ?>
            <div class="table-responsive">
            <table class="table table-bordered">
            <thead><tr><th>S.N</th>

                <th>User</th>                
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Comments</th>
                <th>Time</th>
            </thead>
            <tbody>
        <?php
            if(is_array($fetchData)){      
            $sn=1;
            foreach($fetchData as $data){
            ?>
            <tr>
                <td><?php echo $sn; ?></td>
                <td><?php echo $data['user']??''; ?></td>
                <td><?php echo $data['email']??''; ?></td>
                <td><?php echo $data['phno']??''; ?></td>
                <td><?php echo $data['comment']??''; ?></td>
                <td><?php echo $data['time']??''; ?></td>
            </tr>
            <?php
            $sn++;}}else{ ?>
            <tr>
                <td colspan="8">
            <?php echo $fetchData; ?>
        </td>
            <tr>
            <?php
            }?>
            </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>

        <!-- footer -->
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center pt-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-muted">© World Tour <?php echo date("Y");?> Company, Inc</p>

                    <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="Footer-192x192.png" alt="World Tour Favicon" class="bi" width="50" height="50"><use xlink:href="#bootstrap"></use></img>
                    </a>

                    <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="index.htm" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="service.htm" class="nav-link px-2 text-muted">Services</a></li>
                    <li class="nav-item"><a href="about.htm" class="nav-link px-2 text-muted">About</a></li>
                    <li class="nav-item"><a href="contact.htm" class="nav-link px-2 text-muted">Contact</a></li>
                </ul>
                </footer>
            </div>

    </body>
</html>