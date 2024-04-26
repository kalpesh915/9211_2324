<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP - AJAX Introduction
        AJAX is about updating parts of a web page, without reloading the whole page.
        What is AJAX?
        AJAX = Asynchronous JavaScript and XML. AJAX is a technique for creating fast and dynamic web pages. AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page. Classic web pages, (which do not use AJAX) must reload the entire page if the content should change.
        Examples of applications using AJAX: Google Maps, Gmail, Youtube, and Facebook tabs.
        AJAX is Based on Internet Standards AJAX is based on internet standards, and uses a combination of:
        XMLHttpRequest object (to exchange data asynchronously with a server)
        JavaScript/DOM (to display/interact with the information)
        CSS (to style the data)
        XML (often used as the format for transferring data)    
        AJAX applications are browser- and platform-independent!
        Google Suggest

        AJAX was made popular in 2005 by Google, with Google Suggest.
        Google Suggest is using AJAX to create a very dynamic web interface: When you start typing in Google's search box, a JavaScript sends the letters off to a server and the server returns a list of suggestions.

        AJAX PHP Example

        The following example will demonstrate how a web page can communicate with a web server while a user type characters in an input field:
    -->
    <label for="searchText">Search Data Here</label>
    <input type="text" name="searchText" id="searchText" onkeyup="loadData(this.value)">
    <p id="op"></p>

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum qui voluptatibus sint et molestias nihil vel totam error doloribus tempore commodi accusamus molestiae deleniti quas adipisci iusto quis, nesciunt temporibus!</p>
</body>
</html>

<script>
    function loadData(searchText){
        //alert(searchText);
        const XMLHttp = new XMLHttpRequest();
        XMLHttp.open("GET", "gethint.php?text="+searchText, true);
        XMLHttp.send();

        XMLHttp.onreadystatechange = function(){
            if(XMLHttp.status == 200 && XMLHttp.readyState == 4){
                document.getElementById("op").innerHTML = XMLHttp.responseText;
            }
        }
    }
</script>