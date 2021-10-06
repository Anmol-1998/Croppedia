 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 10px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 1px 1px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size:30px;
  padding:1px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
</div>


<div class="row">
      <div class="container">
        <p class="title">Project Title : Croppedia</p>
		<p class="title">Made by       : Anmol Dubey & Ramchandra Desai</p>
		<p class="title">Institute Name: Thakur Institute of Management Studies,Career Development and Research.</p>
		<p class="title">Academic Year : Second Year MCA Batch-A 2020-21 Summer Project</p>
      </div>
</div>

</body>
</html>
