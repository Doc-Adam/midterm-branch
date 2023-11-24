<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login Form</title>
    <style>
        body {
  background-color: #344a72;
  font-family: "Roboto", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 90vh;
}
.registration-box {
  width: 360px;
  height: 620px;
  /* margin: auto; */
  background-color: white;
  border-radius: 3px;
}
.regh {
  margin-top: 40px;
}
.login-box {
  width: 360px;
  height: 350px;
  /* margin: 150px auto; */

  border-radius: 3px;
  background-color: white;
  padding-bottom: 40px;
  display: flex;
  flex-direction: column;
}
h1 {
  text-align: center;
  /* margin-top: 40px; */
}
form {
  width: 300px;
  margin-left: 20px;
}
form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
}
form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.p-2 {
  text-align: center;
  color: black;
  font-size: 15px;
  margin-top: 20px;
}
.p-2 a {
  color: #49c1a2;
}
.p-3 {
  text-align: center;
  color: black;
  font-size: 15px;
  /* margin-top: 20px; */
  display: flex;
  align-items: center;
  justify-content: center;
}
.link {
  margin-left: 5px;
}
.submit {
  width: 320px;
  /* height: 35px; */

  background-color: #49c1a2;
  color: white;
  font-size: 18px;
  /* display: inline; */
  display: inline-block;
  /* padding: 5px 10px; */
  padding: 7px 0;
  text-align: center;
  align-self: center;
  text-decoration: none;
  border-radius: 6px;
}
.login-box p {
  margin-top: 40px;
  margin-bottom: 30px;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}
.container {
  color: white;
}
.log {
  color: white;
  background-color: #49c1a2;
  padding: 7px 14px;
  text-decoration: none;
  border-radius: 6px;
}

    </style>
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form>
        <label>Username</label>
        <input type="text" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <!-- <input type="button" value="Submit" /> -->
      </form>
      <p><a class="submit" href="success.html">Login</a></p>
      <span class="p-3">
        Doesn't have an account?
        <a class="link" href="registration.html"> Sign up here</a>
      </span>
    </div>
  </body>
</html>
