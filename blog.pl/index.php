<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="borders.css">
   	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta http-equiv="content-language" content="pl">
	<title>MyBlog</title>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>
<div class="header">
  <h2>Max's blog</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TURKEY</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg1" style="height:400px;"></div>
      <p>Some text..</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="card">
      <h2>NATURE</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg2" style="height:400px;"></div>
      <p>Some text..</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
     <div class="card">
      <h2>LIFE</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg3" style="height:400px;"></div>
      <p>Some text..</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
     <div class="card">
      <h2>SCIENCE</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg4" style="height:400px;"></div>
      <p>Some text..</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
     <div class="card">
      <h2>SUNSET</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg5" style="height:400px;"></div>
      <p>Some text..</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="card">
      <h2>FOREST</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg6" style="height:400px;"></div>
      <p>Some text..</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="imglogo" style="height:100px;"></div>
      <p>
      	23yo.<br>
      	Programmer without degree.<br>
      	Like:
      	<ul>
      		<li>sport,</li>
      		<li>music,</li>
      		<li>programming</li>
      	</ul>
      </p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <p>The Fingerprint Analysis Process</p>
      <div class="imagediv"><a href=""><img src="./images/science1.jpg" class="imagesmall"></a></div><br>
      <p>Future of humanity</p>
      <div class="imagediv"><a href=""><img src="./images/science2.jpg" class="imagesmall"></a></div><br>
      <p>DNA structure</p>
      <div class="imagediv"><a href=""><img src="./images/science3.jpg" class="imagesmall"></a></div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>
      	<a href="">Instagram</a><br>
      	<a href="">Facebook</a><br>
      	<a href="">LinkedIn</a>
      </p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>&copy; All rights reserved</h2>
</div>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>