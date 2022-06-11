<?php 

    session_start();
    
    if(!isset($_SESSION['useraccounts'])){
        header("Location: login.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-do</title>
    <link rel="stylesheet" href="liststyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-2">
    <div class="addTask">
        <input type="text" placeholder="Enter a Task">
        <input type="date" id="dateInput">
        <input type="time" id="timeInput">
        <button> ADD </button>

    </div>
    <ol class="notCompleted">
       <h3>Not Completed</h3>
    </ol>
<br>
    <ol class="Completed">
        <h3>Completed</h3>
    </ol>

    <a href="signout.php">Signout here.</a>
    
</div>
<script>
    const input = document.querySelector('input');
    const btn = document.querySelector('.addTask > button');

    btn.addEventListener('click', addList);
    input.addEventListener('keyup', (e)=>{
        (e.keyCode === 13 ? addList(e) : null);

    })


    function addList(e){
        const notCompleted = document.querySelector('.notCompleted');
        const Completed = document.querySelector('.Completed');
        
        const newLi = document.createElement('li');
        const checkBtn = document.createElement('button');
        const delBtn = document.createElement('button');

        checkBtn.innerHTML = '<i class="fa fa-check"></i>';
        delBtn.innerHTML = '<i class="fa fa-trash"></i>';




        if(input.value !==''){
            newLi.textContent = input.value;
            input.value = '';
            notCompleted.appendChild(newLi);
            newLi.appendChild(checkBtn);
            newLi.appendChild(delBtn);



        }
        checkBtn.addEventListener('click', function (){
            const parent = this.parentNode;
            parent.remove();
            Completed.appendChild(parent);
            checkBtn.style.display = 'none';

        });

        delBtn.addEventListener('click', function (){
            const parent = this.parentNode;
            parent.remove();


        });


    }

</script>

</body>
</html>