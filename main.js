/****** AJAX ******/
let id = document.querySelector('#idUser').value;

let msgBox = document.querySelector('.message');

let content = document.querySelector('#content');

let sendMsg = document.querySelector('#sendMsg');

sendMsg.addEventListener('click', function(e){
    e.preventDefault()
    let formData = new FormData()
    formData.append('content', content.value)

    fetch('messages/form-msg.php?id='+id,{
        method:'post',
        body:formData
    }).then(()=>{
        content.value = ''
        refresh()
    })

})

function refresh(){
    fetch('displayMsg.php').then((Response)=>{
        return Response.text()
    }).then((data)=>{
        msgBox.innerHTML = data
    })
}