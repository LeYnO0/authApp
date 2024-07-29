const EditField = document.getElementById('edit-box')

function setPhoneAttr(){
    EditField.setAttribute('name', 'phone')
    EditField.setAttribute('placeholder', 'Введите телефон')
}

function setEmailAttr(){
    EditField.setAttribute('name', 'mail')
    EditField.setAttribute('placeholder', 'Введите Email')
}