<html>
    <body >
        <form action="connect.php" method="POST">
        <h1>Register</h1> <br/>
        Login: <input type="login" name="login"><br/>

        Password: <input type="password" name="password"><br/>

        Language: <select name="language" >
        <option value="Thai">Thai</option>
        <option value="English">English</option></select> <br/>

        Gender: <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female <br/>

        Interest:<input type="checkbox" name="interest" value="Movise/Tv/Music">Movise/Tv/Music   
                 <input type="checkbox" name="interest" value="Sports">Sports
                 <input type="checkbox" name="interest" value="Travel">Travel <br/>

        Comment: <br> <textarea name="comment" id="" cols="30" rows="10"></textarea>

        <input type="submit">
    </body>
</html>