function language(){
    let lang = document.getElementById('lang');
    let sel = lang.options[ lang.selectedIndex ].value
    if (sel === 'en'){
        window.location.href = 'https://polireplay.it/en/';
    }
    else if (sel === 'it') {
        window.location.href = 'https://polireplay.it';
    }
    else if (sel === 'zh') {
        window.location.href = 'https://polireplay.it/zh/';
    }
}