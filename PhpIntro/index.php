<?php
// $toods = [];
// if(file_exists('todo.json'))
// $json = file_get_contents('todo.json');
// $toods = json_decode($json,true);

$connection= require_once './connection.php';

$notes = $connection-> getNotes();


echo '<pre>';
// var_dump($notes);
// echo '<pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createnotes.php" method ="post">
    <input type="text" name="title" placeholder= 'Notes title '>
    <textarea name='description' cols ='30' row ='4' placeholder ="Note Description"> </textarea> 
    
    <button>New Notes</button>
     </form>

    <div style = 'display : flex'>
        <?php  foreach($notes as $note): ?>
            <div style = 'display : flex'>
        <div>
            <a href=""><?php echo $note['title'] ?></a>
        </div>

        <div>
            <?php echo $note['description'] ?>
        </div>

        <small>
            <?php echo $note['create_date'] ?>
        </small>
        
        <form action="delete.php" method ="post" >
            <input type="hidden" name='id' value="<?php echo $note['id']?>">
            <button>delete</button>
        </form>

        </div>
    </div>
<?php endforeach; ?> 
   
 

</body>
</html>     

       <!-- <?php foreach($toods as $todoName => $todo){?>
            <div>
                <form style='display: inline-block' action="change_status.php" method ='post'>
                <input type="hidden" name = 'todo_name' value= "<?php echo $todoName ?>">
                <input type="checkbox" <?php echo $todo['completed']? "checked":'' ?>>
                </form>
                <?php echo $todoName?>
                <form style='display: inline-block' action="delete.php" method='post'>
                    <input type="hidden" name = 'todo_name' value= "<?php echo $todoName ?>">
                    <button>delete</button> 
                </form>
               
            </div>
            
       <?php } ?> -->


<!-- <script>

           const checkboxes = document.querySelectorAll('input[type=checkbox]')
           checkboxes.forEach((ch) => {
               ch.onclick= function(){
                   this.parentNode.submit();
               }
           });
       </script> -->