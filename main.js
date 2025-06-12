/* проверка для чекбоксов в модалках обратной связи для contact-form7*/
document.addEventListener('DOMContentLoaded', function() {
    
    function toggleButtonState(checkboxSelector, buttonSelector) {
        const checkboxes = document.querySelectorAll(checkboxSelector);
        const buttons = document.querySelectorAll(buttonSelector);

        if (checkboxes.length === 0 || buttons.length === 0) {
            console.error('Чекбоксы или кнопки не найдены');
            return;
        }

        checkboxes.forEach((checkbox, index) => {
            const button = buttons[index];
            
            if (!button) return;
            
            function updateButton() {
                button.disabled = !checkbox.checked;
            }

            updateButton();
            
            checkbox.addEventListener('change', updateButton);
        });
    }

    toggleButtonState('.wpcf7-form .checkbox--required', '.wpcf7-form .order-modal__btn');
    
    document.addEventListener('wpcf7mailsent', function() {
        toggleButtonState('.wpcf7-form .checkbox--required', '.wpcf7-form .order-modal__btn');
    });
});