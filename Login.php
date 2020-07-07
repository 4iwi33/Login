<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <form action="?">
        <input type="text"><br>
        <input type="text" name="" id=""><br>
        <input type="button" value="ok">
    </form>
    <?php
   class Login
   {
       private $table;
   
       public function __construct()
       {
           $this->table = new DbEntity(
               Config::MYSQL_TABLE,
               DB::Link([
                   'host' => Config::MYSQL_HOST,
                   'username' => Config::MYSQL_USER_NAME,
                   'password' => Config::MYSQL_PASSWORD,
                   'dbname' => Config::MYSQL_DATABASE
               ])
           );
       }
   
   //    public function userCheck(string $login, string $password): bool
   //    {
   //        return !empty($this->table->runSQL(
   //            'SELECT*FROM form WHERE login="' . $login . '" AND password="' . $password . '"'
   //        ));
   //    }
   
       public function userCheck2(string $login, string $password): bool
       {
           return !empty($this
               ->table
               ->setWhere('login="' . $login . '" AND password="' . $password . '"')
               ->get()
           );
       }
   
   }




    ?>
</body>

</html>