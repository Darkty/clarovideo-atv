var current_page = "";
// ---------- Register ----------
function onSubmitRegister(value) {
    console.log('Results from text entry: ' + value);
    atvutils.loadAndSwapURL("http://mcbkairrulo.local/clarovideo-atv/views/main.xml");
}
function onCancelRegister() {
    console.log('User cancelled text entry.');
}
var textEntryRegister = {
    'type'              : 'emailAddress',
    'instructions'      : 'Por favor ingresa el correo electrónico que te gustaría que Clarovideo usará para tu cuenta.\n\n'+
                            'Clarovideo te enviará un correo con instrucciones para tu CONTRASEÑA.',
    'label'             : 'Correo electrónico',
    'footnote'          : 'Clarovideo NO venderá tu dirección de correo electrónico.\n'+
                            'Clarovideo puede contactarte acerca del servicio.',
    'defaultValue'      : 'email@example.com',
    'defaultToAppleID'  : true,
    'image'             : 'http://mcbkairrulo.local/clarovideo-atv/images/720p/logos_login.png',
    'onSubmit'          : onSubmitRegister,
    'onCancel'          : onCancelRegister
};
function showTextEntryRegister() {
    console.log('show text entry');
    atvutils.loadTextEntry(textEntryRegister);
}

// ---------- Username Login ----------
function onSubmitUsernameLogin(value) {
    console.log('Results from text entry: ' + value);
    // atvutils.loadURL("http://mcbkairrulo.local/clarovideo-atv/views/main.xml");
    showTextEntryPasswordLogin();
}
function onCancelUsernameLogin() {
    console.log('User cancelled text entry.');
}
var textEntryUsernameLogin = {
    'type'              : 'emailAddress',
    'instructions'      : 'Por favor ingresa tu correo electrónico:',
    'label'             : 'Correo electrónico',
    'footnote'          : '¿Necesitas ayuda para entrar? Visita www.clarovideo.com',
    'defaultValue'      : 'email@example.com',
    'defaultToAppleID'  : true,
    'image'             : 'http://mcbkairrulo.local/clarovideo-atv/images/720p/logos_login.png',
    'onSubmit'          : onSubmitUsernameLogin,
    'onCancel'          : onCancelUsernameLogin
};
function showTextEntryUsernameLogin() {
    console.log('show text entry');
    atvutils.loadTextEntry(textEntryUsernameLogin);
}

// ---------- Password Login ----------
function onSubmitPasswordLogin(value) {
    console.log('Results from text entry: ' + value);
    if (value=="123") {
        showErrorLoginDialog();
        return;
    }
    if (current_page == "error-login") { 
        atv.unloadPage();
        // atvutils.loadAndSwapURL("http://mcbkairrulo.local/clarovideo-atv/views/main.xml");
    }
    atvutils.loadAndSwapURL("http://mcbkairrulo.local/clarovideo-atv/views/main.xml");
}
function onCancelPasswordLogin() {
    console.log('User cancelled text entry.');
}
var textEntryPasswordLogin = {
    'type'              : 'password',
    'instructions'      : 'Por favor ingresa tu CONTRASEÑA de Clarovideo:',
    'label'             : 'Contraseña',
    'footnote'          : '¿Necesitas ayuda para entrar? Visita www.clarovideo.com',
    'defaultValue'      : '',
    'defaultToAppleID'  : false,
    'image'             : 'http://mcbkairrulo.local/clarovideo-atv/images/720p/logos_login.png',
    'onSubmit'          : onSubmitPasswordLogin,
    'onCancel'          : onCancelPasswordLogin
};
function showTextEntryPasswordLogin() {
    console.log('show text entry');
    // atvutils.loadURL("http://mcbkairrulo.local/clarovideo-atv/views/main.xml");
    atvutils.loadTextEntry(textEntryPasswordLogin);
}
// ----------
function showErrorLoginDialog() {
    atvutils.loadURL("http://mcbkairrulo.local/clarovideo-atv/views/error-login-option-dialog.xml");
}
