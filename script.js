function acessar(){
    var login = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;
    if(login == 'ranni_adm' && senha == '1234'){
        window.alert('foi')
        location.href = 'conectin.html'
        
    }else{
        window.alert('erro')
    }
}
