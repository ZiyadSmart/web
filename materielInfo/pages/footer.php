<footer>
    <div id="myDiv2"></div>
    <script>
        var xmlhttp_footer = new XMLHttpRequest();
        
        xmlhttp_footer.onreadystatechange = function() {
            if (xmlhttp_footer.readyState == 4 && xmlhttp_footer.status == 200) {
                var tabVals1 = JSON.parse(xmlhttp_footer.responseText);
                
                for (let i = 0; i < tabVals1.length; i++) {
                    let adresse = tabVals1[i].adresse;
                    let telephone = tabVals1[i].telephone;

                    document.getElementById("myDiv2").innerHTML += `
                        <address>
                            <a href="${adresse}">${adresse}</a><br />
                            <a href="tel:${telephone}">${telephone}</a>
                        </address>
                    `;
                }
            }
        };
        
        xmlhttp_footer.open("GET", "../php/request_contact.php", true);
        xmlhttp_footer.send();
    </script>
</footer>