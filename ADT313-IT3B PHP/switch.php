<h1>Swtich<h1>

<?php
    $role = "Student";

    
    switch($role){
        case 'Student':
            echo "You are a student, you are not allowed to access.....";
            break;

        case 'Instructor':
            echo "Instructor, Yuou have limited access too..."
            break;

        case 'admin':
            echo "Admin, You have full access too.."
            break;

        case 'default':
            echo "who are you?"
            break;

    }
?>