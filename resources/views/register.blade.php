<html lang="en">
<head> 

</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/sendReq " method="POST"> 
    @csrf
        <p>First Name :</p> 
        <input type="text" name="fname" id="">
        <p>Last Name :</p> 
        <input type="text" name="lname" id="">
        <p>Gender : </p>
        <input type="radio" name="gender" id="">Male<br>
        <input type="radio" name="gender" id="">Female<br>
        <input type="radio" name="gender" id="">Other
        <p>Nationality : </p>
        <select name="nationality" id="">
            <option value="Indonesia">Indonesian</option>
            <option value="Jepang">Japanese</option>
        </select>
        <p>Language Spoken :</p>
        <input type="checkbox" name="lang">Bahasa Indonesia<br>
        <input type="checkbox" name="lang">English<br>
        <input type="checkbox" name="lang">Other
        <p>Bio : </p>
        <textarea name="bio" id="" cols="50" rows="10"></textarea><br>
        <button type="submit" name="submit">Sign Up</button> 
    </form>
</body>
</html>