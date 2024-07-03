

function checking(){
    const tab = [['michalakjakub39@gmail.com','klocki']]
    const login = document.getElementById("login").value
    const login_ = tab[0][0]
    const password = document.getElementById("password").value
    const password_ = tab[0][1]
if(login == login_ && password == password_){
    window.open('index.html')
    
}
}
