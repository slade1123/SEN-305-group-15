const name = document.getElementById('name')
const age = document.getElementById('age')
const email = document.getElementById('email')
const matric = document.getElementById('matric')
const department = document.getElementById('department')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages =[]
    if (name.value === '' || name.value == null) {
        messages.push('Name is required')
    }
    if (age.value === '' || age.value == null) {
        messages.push('Age is required')
    }
    if (email.value === '' || email.value == null) {
        messages.push('Email is required')
    }
    if (matric.value === '' || matric.value == null) {
        messages.push('Matric number is required')
    }
    if (department.value === '' || department.value == null) {
        messages.push('Department is required')
    }
    if (messages.length > 0) {
        e.preventDefault()
        errorElement.innerText = messages.join('\n')
    }
})