<?php 
header('Content-type: text/css; charset:UTF-8');
?>

body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #c3c7ca;
}

.box {
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #191919;
  text-align: center;
}

.box2 {
  width: 1000px;
  padding: auto;
  position: relative;
  display: flex;  
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;

}

.box h1 {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}

.box h4 {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}

.box input[type="text"],
.box input[type="password"] {
  border: 0;
  background: none;
  display: block;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
  width: 280px;
  border-color: #2ecc71;
}

.box input[type="submit"] {
  border: 0;
  background: none;
  position: relative;
  display: block;
  justify-content: center;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
  align-items:  center;

}

.box input[type="submit"]:hover {
  background: #2ecc71;
}

a {
  text-decoration: none;
  display: flex;
  color: white;
  font-size: 14px;
  font-weight: 100;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
  width: 40%;
}

 .box a {
  text-decoration: none;
  display: block;
  color: white;
  font-size: 14px;
  font-weight: 100;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
  padding: 14px 40px;
  width: 20%;
}

a:hover {
  background: #2ecc71;
}

nav a {
  display: block;
  background: none;
  color: black;
  cursor: pointer;
  text-decoration: none;
  width: 200px;
  padding: 5px;
  text-align: center;
  border-radius: 8px;
  margin-top: 5px;
  margin-left: 10px;
  border: solid 2px black;
}

.post{
    width: 97%;
    min-height: 200px;
    padding: 5px;
    border: 1px solid gray;
    margin-bottom: 15px;
}
.post h1{
    letter-spacing: 1px;
    font-weight: normal;
    font-family: sans-serif;
}
.post p{
    letter-spacing: 1px;
    text-overflow: ellipsis;
    line-height: 25px;
}

.todo-list{
  width: 100px;
  padding: 0;
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}


.submit{
  background: none;
  text-decoration: none;
  width: 200px;
  padding: auto;
  text-align: center;
  padding: 5px;
  border-radius: 8px;
  margin-top: 5px;
  margin-left: 10px;
  cursor: pointer;
}

.submit:hover {
  background: #2ecc71;
}


.wrapper {
  margin: auto;
  width: 95%;
}

header {
  text-align: center;
  margin-bottom: 30px;
}

#clock {
  font-weight: normal;
  font-size: 60px;
  color: black;
  margin-bottom: 0;
}

#date {
  color: black;
  font-size: 1.1rem;
  padding-bottom: 9px;
  border-bottom: 1px solid;
}

ul {
  margin: auto;
  margin-top: 20px;
  padding: 0;
  text-decoration: none;



}

ul li a{
  list-style: none;
  align-items: center;
  margin-bottom: 10px;
  border-radius: 5px;
  text-decoration: none;
  display: block;
  color: black;

}

p {
  color: white;
}