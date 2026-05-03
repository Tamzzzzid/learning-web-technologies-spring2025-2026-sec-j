function ajax(){
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    
    let xhttp = new XMLHttpRequest();
    xhttp.open('post', 'loginCheck.php', true);
    
    xhttp.setRequestHeader('Content-type', 'application/json');
    
    let payload = {
        username: username,
        password: password,
        submit: 1
    };
    
    xhttp.send(JSON.stringify(payload));
    
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('change').innerHTML = this.responseText;
        }
    }
}