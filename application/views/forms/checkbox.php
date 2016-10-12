 <?php
        if(isset($_POST['save'])){//to run PHP script on submit
        if(!empty($_POST['descr'])){
        // Loop to store and display values of individual checked checkbox.
        foreach($_POST['descr'] as $selected){
        echo $selected."</br>";
            }
          }
        }
?>