<!DOCTYPE html>
<html>
<head>
    <title>Buat Account Baru</title>
</head>
<body>

    <h2>Buat Account Baru</h2>

    <h4>Sign Up Form</h4>

    <form action="/data" method="GET">

        <p>First name :</p>
        <input type="text" name="first_name">

        <p>Last name :</p>
        <input type="text" name="last_name">

        <p>Gender</p>

        <input type="radio" name="gender" value="Male">Male
        <br>
        <input type="radio" name="gender" value="Female">Female

        <p>Nationality</p>

        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="Thailand">Thailand</option>
        </select>

        <p>Language Spoken</p>

        <input type="checkbox" name="language[]" value="Bahasa Indonesia">
        Bahasa Indonesia
        <br>

        <input type="checkbox" name="language[]" value="English">
        English
        <br>

        <input type="checkbox" name="language[]" value="Other">
        Other

        <p>Bio</p>

        <textarea name="bio" rows="7" cols="25"></textarea>

        <br>

        <button type="submit">Sign Up</button>

    </form>

</body>
</html>