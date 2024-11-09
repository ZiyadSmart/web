    <div id="myDiv3"></div>
    <script>
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var tabVals1 = JSON.parse(xmlhttp.responseText);
                
                for (let i = 0; i < tabVals1.length; i++) {
                    let presentation = tabVals1[i].presentation;
                    
                    document.getElementById("myDiv3").innerHTML += `
                        <p>${presentation}</p>
                    `;
                }
            }
        };
        
        xmlhttp.open("GET", "../php/request_presentation.php", true);
        xmlhttp.send();
    </script>
