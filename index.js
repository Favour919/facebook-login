let radio = document.querySelector("#radio3");
let radio2 = document.querySelector('#radio2');
let radio3 = document.querySelector('#radio1');
let radioHide = document.querySelector(".custom");
// radioHide.style.display = "none"
radio.addEventListener('click', function () {
        radioHide.style.display = "block";
});
radio2.addEventListener('click', function () {
    if (radioHide.style.display !== "none") {
        radioHide.style.display = "none";
    } else {
        radioHide.style.display = "none";
    };
});
radio3.addEventListener('click', function () {
    if (radioHide.style.display !== "none") {
        radioHide.style.display = "none";
    } else {
        radioHide.style.display = "none";
    };
});

// first name
let btn = document.querySelector('.btn2');
let submit = document.getElementById('submit-btn');
let firstName = document.querySelector('#firstname');
let surName = document.querySelector('#surname');
let email = document.querySelector('#email');
let errorMessage = document.querySelector('.error-message');
// let errorIcon = document.querySelector('.error-icon');
let inputField = document.querySelectorAll('.name');
const form = document.querySelector('.login-wrapper');
let confirmEmail = document.querySelector('.re-enter')


// firstName.addEventListener('blur', function () {
//         if (firstName.value == "") {
//             firstName.style.border = "1px solid red";
//             firstName.nextElementSibling.style.color = "red"
//             firstName.nextElementSibling.style.display = "block"
//             firstName.parentNode.firstElementChild.style.visibility = "visible"
//         } else {
//             firstName.style.border = "1px solid rgb(156, 151, 151)";
//             // firstName.nextElementSibling.style.color = "black"
//             firstName.nextElementSibling.style.display = "none"
//             firstName.parentNode.firstElementChild.style.visibility = "hidden"
//         };
//         var name = /^[A-Za-z]+$/g;
//         if (firstName.value.match(name)) {
//             firstName.nextElementSibling.style.display = "none"
//             firstName.style.border = "1px solid rgb(156, 151, 151)"
//         } else {
//             firstName.nextElementSibling.style.display = "block"
//             firstName.style.border = "1px solid red"
//         };
//     })
//     firstName.addEventListener('input', function () {
//         firstName.style.border = "1px solid rgb(156, 151, 151)";
//         firstName.nextElementSibling.style.color = "red"
//         firstName.nextElementSibling.style.display = "none"
//         // errorIcon.style.visibility = "hidden"
//         firstName.parentNode.firstElementChild.style.visibility = "hidden"
        
//     });

// surName.addEventListener('blur', function () {
//         if (surName.value == "") {
//             surName.style.border = "1px solid red";
//             surName.nextElementSibling.style.color = "red"
//             surName.nextElementSibling.style.display = "block"
//             surName.parentNode.firstElementChild.style.visibility = "visible"
//         } else {
//             surName.style.border = "1px solid rgb(156, 151, 151)";
//             surName.nextElementSibling.style.color = "black"
//             surName.nextElementSibling.style.display = "none"
//             surName.parentNode.firstElementChild.style.visibility = "hidden"
//         };
//         var name = /^[A-Za-z]+$/g;
//             if (surName.value.match(name)) {
//                 surName.nextElementSibling.style.display = "none"
//                 surName.style.border = "1px solid rgb(156, 151, 151)"
//             } else {
//                 surName.nextElementSibling.style.display = "block"
//                 surName.nextElementSibling.style.color = "red"
//                 surName.style.border = "1px solid red"
//             };
//     })
//     surName.addEventListener('input', function () {
//         surName.style.border = "1px solid rgb(156, 151, 151)";
//         surName.nextElementSibling.style.color = "red"
//         surName.nextElementSibling.style.display = "none"
//         // errorIcon.style.visibility = "hidden"
//         surName.parentNode.firstElementChild.style.visibility = "hidden"

//     });

// email.addEventListener('blur', function () {
//     var emailChange = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     var phoneno = /^\d{10}$/;
//     if (email.value == "") {
//         email.style.border = "1px solid red"
//     } else {
//         // return false
//         email.style.border = "1px solid rgb(156, 151, 151)"
//         confirmEmail.style.display = "block"
        
//     };
//     // if (email.value.match(phoneno)) {
//     //     email.style.border = "1px solid rgb(156, 151, 151)"
//     // }
// })
// email.addEventListener('input', function () {
//     email.style.border = "1px solid rgb(156, 151, 151)"
//     var emailChange = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     var phoneno = /^\d{10}$/;
//     if (email.value.match(emailChange)) {
//         email.style.border = "1px solid rgb(156, 151, 151)"
//         confirmEmail.style.display = "block"
//     } else {
//         // return false
//         email.style.border = "1px solid red"
        
//     };
//     if (email.value.match(phoneno)) {
//         email.style.border = "1px solid rgb(156, 151, 151)"
//         confirmEmail.style.display = "none"
//     }
    
// })
// confirmEmail.addEventListener('blur', function () {
//     if (email.value !== confirmEmail.value) {
//         confirmEmail.style.border = "1px solid red"
//     } else {
//         confirmEmail.style.border = "1px solid rgb(156, 151, 151)"
//     }
// })
// confirmEmail.addEventListener('input', function () {
//     confirmEmail.style.border = "1px solid rgb(156, 151, 151)"
    
// })


const eyeIcon = document.querySelector('.slash');
const pwInput = document.querySelector('#psd');

eyeIcon.addEventListener('click', function () {
    if (eyeIcon.classList.contains('fa-eye-slash')) {
        eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
        pwInput.type = 'text';
    } else {
        eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
        pwInput.type = 'password';
    }
});

// const year = document.querySelector('#year');
// const getYear = new Date().getFullYear();

// for (i = getYear; i >= 1960; i--) {
//     year.innerHTML += `<option value="${i}">${i}</option>`
// }


// submit.addEventListener('click', function (e) {
    
//     if (inputField.values &&  firstName.value.match(/^[A-Za-z]+$/) && surName.value.match(/^[A-Za-z]+$/) && email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) || email.value.match(/^\d{10}$/)) {
//             form.submit();
//     } else {
//         e.preventDefault();
//         }
// });