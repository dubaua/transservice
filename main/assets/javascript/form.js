let forms = document.querySelectorAll('.form__content');

const validBack = 'transition: background 0.5s; background: #FF8383;';
for (let form of forms) {
    let formCheckbox = form.querySelector('.form__checkbox');
    let formButton = form.querySelector('.form__button');
    let formTel = form.querySelector('.form__tel');
    formButton.classList.add('form__button-disactive');

    formCheckbox.addEventListener('click', onClickCheckbox.bind(null,formButton,formCheckbox));

    if (form.classList.contains('form__order')) {
        let dest_from = form.querySelector('.form__name');
        let dest_to = form.querySelector('.form__where');
        let package_name = form.querySelector('.form__package-name');
        let form__weight = form.querySelector('.form__weight');
        let sizes = form.querySelector('.form__to');
        let form__space = form.querySelector('.form__space');
        formButton.addEventListener('click', onClickButOrder.bind(null,formButton,dest_from,dest_to,package_name,form__weight,sizes,form__space,formTel));
    } else {
        let formName = form.querySelector('.form__name');
        let formMail = form.querySelector('.form__mail');
        let formTextarea = form.querySelector('.form__textarea');
        let formMessage = form.querySelector('.form__message');
        formButton.addEventListener('click', onClickButContact.bind(null,formButton,formName,formMail,formTel,formTextarea,formMessage));
    }


}

function onClickCheckbox(formButton,formCheckbox,event) {
    if(formCheckbox.checked) {
        formButton.classList.remove('form__button-disactive');
        formButton.removeAttribute('disabled');

    } else {
        formButton.classList.add('form__button-disactive');
        formButton.setAttribute("disabled", "disabled");
    }
}

function onClickButOrder(formButton,dest_from,dest_to,package_name,form__weight,sizes,form__space,formTel,e) {
    e.preventDefault();
    formTel.style = 'background: #FAFAFA;';
    if( formTel.value == "" || formTel.value == " " ) {
        formTel.style = validBack;
        alertTel();
    } else {
         $.ajax({
                url: './response-order.php',
                type: 'POST',
                data: {
                    'package-name': package_name.value,
                    'dest-from': dest_from.value,
                    'dest-to': dest_to.value,
                    weight: form__weight.value,
                    sizes: sizes.value,
                    space: form__space.value,
                    phone: formTel.value,
                },
                success: function() {
                    formMessage.style = 'display: block;';
                }
            })
    }
}

function onClickButContact(formButton,formName,formMail,formTel,formTextarea,formMessage,e) {
    e.preventDefault();
    formTel.style = 'background: #FAFAFA;';
    formMail.style = 'background: #FAFAFA;';
    formName.style = 'background: #FAFAFA;';

    for(let i=0; i<1; i++) {
        if( formName.value == "" || formName.value == " ") {
            formName.style = validBack;
            return false;
        } else if( formMail.value.split('@').length-1 == 0) {
            formMail.style = validBack;
            return false;
        } else if ( formTel.value == "" || formTel.value == " " ) {
            formTel.style = validBack;
            alertTel();
            return false;
        }  else {
            formTel.style = 'background: #FAFAFA;';
            formMail.style = 'background: #FAFAFA;';
            formName.style = 'background: #FAFAFA;';
            formButton.setAttribute("disabled", "disabled");

            $.ajax({
                url: './response.php',
                type: 'POST',
                data: {
                    name: formName.value,
                    email: formMail.value,
                    phone: formTel.value,
                    message: formTextarea.value
                },
                success: function() {
                    formMessage.style = 'display: block;';
                }
            })
        }
    }
}

function alertTel () {
     let elem = document.createElement('div')
     elem.className = 'alert'
     elem.innerHTML = '<div class="alert__content"><p>Пожалуйста введите свой номер телефона</p></div>';
     elem.onclick = function() { this.remove() };
     document.body.appendChild(elem);
     setTimeout(function(){
        elem.remove();
     },2000)
}