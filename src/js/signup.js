import JustValidate from 'just-validate';

//const steponeForm = document.getElementById('');

//if (steponeForm) {
    const suValidation = new JustValidate('#steponeForm', {
        errorFieldCssClass: 'is-invalid'
    });

    suValidation
        .addField('#email', [
            {
                rule: 'required',
                errorMessage: 'Field is required.'
            },
            {
                rule: 'email',
                errorMessage: 'Email is invalid.'
            },
        ])
        .addField('#pass_confirm', [
            {
                validator: (value, fields) => {
                    if (fields['#pass'] && fields['#pass'].elem) {
                        const passValue = fields['#pass'].elem.value;

                        return passValue === value;
                    }

                    return true;
                },
                errorMessage: 'Passwords must match.'
            },
        ])
        .addField('#pass', [
            {
                rule: 'strongPassword'
            }
        ])
        .onSuccess((event) => {
            document.getElementById('steponeForm').submit();
        })
        ;
//}