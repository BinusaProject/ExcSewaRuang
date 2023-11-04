<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background: #180835;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  html, body {
    height: 100%;
  }
.card {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    border-radius: 30px;
    padding: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    width: 70%;
    height: 480px;
    background: #12c2e9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

  .left-container {
    background: #000000; 
background: -webkit-linear-gradient(to right, #434343, #000000);
background: linear-gradient(to right, #434343, #000000); 
    flex: 1;
    max-width: 30%;
    display: flex;
    flex-direction: column;
    align-items: center;
    height:430px;
    padding: 10px;
    margin: 30px;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  
  .right-container {
    background: #000000; 
    background: -webkit-linear-gradient(to left, #434343, #000000);
    background: linear-gradient(to left, #434343, #000000); 
    flex: 1;
    max-width:70%;
    height:430px;
    padding: 10px;
    margin: 20px;
    border-radius:30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  @media only screen and (max-width: 860px) {
    .card
     {
     flex-direction: column;
     margin: 10px;
     height: auto;
     width: 90%;
    }
    .left-container{
        flex: 1;
        max-width:100%; 
    }
  }
  @media only screen and (max-width: 600px) {
    .card
     {
     flex-direction: column;
     margin: 10px;
    }
    .left-container{
        flex: 1;
        max-width:100%; 
    }
  }
  img {
    width: 200px;
    height: 200px;
    max-width: 200px;
    border-radius: 50%;
    margin: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  
  h2 {
    font-size: 24px;
    margin-bottom: 5px;
  }
  h3 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 5px;
  }
  .gradienttext{
    background-image: linear-gradient(to right, #ee00ff 0%, #fbff00 100%);
    color: transparent;
    -webkit-background-clip: text;
  }
  p {
    font-size: 18px;
    margin-bottom: 20px;
    color:aliceblue
  }
  
  table {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 280px;
    border-collapse: collapse;
  }
  
  td {
    
    padding: 10px;
    border: none;
    border-radius: 20px;
    color: white;
  }
  
  td:first-child {
    font-weight: bold;
  }
  .credit a {
  text-decoration: none;
  color: #fff;
  font-weight: 800;
}

.credit {
    color: #fff;
  text-align: center;
  margin-top: 10px;
  font-family: Verdana,Geneva,Tahoma,sans-serif;
}
</style>
<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a Stunning Personal Profile Card with HTML and CSS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="card">
  <div class="left-container">
    <img src="https://cdn.pixabay.com/photo/2015/01/08/18/29/entrepreneur-593358__480.jpg" alt="Profile Image">
    <h2 class="gradienttext">John Doe</h2>
    <p>Web Developer</p>
  </div>
  <div class="right-container">
    <h3 class="gradienttext">Profile Details</h3>
    <table>
        <tr>
            <td>Name :</td>
            <td>John Doe</td>
          </tr>
      <tr>
        <td>Age :</td>
        <td>35</td>
      </tr>
      <tr>
        <td>Mobile :</td>
        <td>+91 XXXXXXXXXX</td>
      </tr>
      <tr>
        <td>Email :</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Address :</td>
        <td>123 Main St, Anytown, USA</td>
      </tr>
    </table>
    <div class="credit">Made with <span style="color:tomato;font-size:20px;">❤ </span>by<a href="https://www.learningrobo.com/"> Learning Robo</a></div>
  </div>
</div>

</body>
</html>