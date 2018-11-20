<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 32px 64px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}


header nav, footer {
display: none;
}


</style>
<script>
function printTrigger(elementId) {
    var getMyFrame = document.getElementById(elementId);
    getMyFrame.focus();
    getMyFrame.contentWindow.print();
}
</script>
</head>
<body>


<button class="button button2" value="Print" onclick="document.title='My new title'; printTrigger('iFramePdf');"><h2>文件列印</h2></button>
<iframe id="iFramePdf" src="http://140.110.17.247/github/print/printData.php"  style="width:0;height:0;border:0; border:none;"></iframe>


</body>
</html>
