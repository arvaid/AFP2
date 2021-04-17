let staticDiv = document.getElementById('profile-static')
let editDiv = document.getElementById('profile-edit')
let editBtn = document.getElementById('edit_profile_btn')
let cancelBtn = document.getElementById('cancel_edit_profile_btn')

function editProfile(){
    staticDiv.classList.remove('d-block')
    staticDiv.classList.add('d-none')

    editDiv.classList.remove('d-none')
    editDiv.classList.add('d-block')

    editBtn.classList.add('d-none')
    cancelBtn.classList.remove('d-none')
}

function cancelEditProfile(){
    staticDiv.classList.add('d-block')
    staticDiv.classList.remove('d-none')

    editDiv.classList.add('d-none')
    editDiv.classList.remove('d-block')

    editBtn.classList.remove('d-none')
    cancelBtn.classList.add('d-none')
}
