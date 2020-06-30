<html>
  <body>
    <p><h1>Buat Account Baru!</h1></p>
    <p><h2>Sign Up Form</h2></p>
    <form id="signup" method="post" action="/save_post">
        @csrf
      <table>
        <tr>
          <td >
            <label >First Name :</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" size="30" id="fnama" name="fnama"/>
          </td>
        </tr>
        <tr>
          <td>
            <label>Last Name :</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" size="30" id="lname" name="lnama"/>
          </td>
        </tr>
        <tr>
          <td>
            <label>Gender :</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
          </td>
        </tr>
        <tr>
          <td>
            <label>Nationality :</label>
          </td>
        </tr>
        <tr>
          <td>
            <select name="natonaluty" id="natonaluty">
              <option value="Indonesia">Indonesia</option>
              <option value="Malaysia">Malaysia</option>
              <option value="Palestina">Palestina</option>
              <option value="Turki">Turki</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label>Language Spoken :</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" id="bhs1" name="bhs1" value="Bahasa Indonesia">
            <label for="bhs1"> Bahasa Indonesia</label><br>
            <input type="checkbox" id="bhs2" name="bhs2" value="English">
            <label for="bhs2">English</label><br>
            <input type="checkbox" id="bhs3" name="bhs3" value="Other">
            <label for="bhs3">Other</label><br>
          </td>
        </tr>
        <tr>
          <td>
            <label>Bio :</label>
          </td>
        </tr>
        <tr>
          <td >
            <textarea id="bio" name="bio" rows="5" cols="30"></textarea>
          </td>
        </tr>
        <tr>
          <td >
            <button type="submit" >Sign Up</button>
          </td>
        </tr>
      </table>
    </form>

  </body
<body>