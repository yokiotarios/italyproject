function CoronavirusWarning(language) {
    this.language = language;
    this.langs = {
        'RO': {
            desk: '<div><p>Nu vă faceți griji! Luăm în serios siguranța clienților noștri!</p><p>Curierii schimbă măști și mănuși la fiecare 2 ore. Livrarea și primirea plăţii se fac în modul non-contact.</p></div>',
            mob: '<div><p>Nu vă faceți griji!</p><p>Curierii schimbă în mod regulat măști și mănuși. Livrarea și plata non-contact.</p></div>'
        },
        'ES': {
            desk: '<div><p>¡No os preocupéis! ¡Nosotros tomamos con seriedad la seguridad de nuestros clientes!</p><p>Nuestros mensajeros se cambian de mascarillas y guantes cada dos horas. La entrega del paquete y la recepción del pago se realiza sin contacto.</p></div>',
            mob: '<div><p>¡No os preocupéis!</p><p>Nuestros mensajeros se cambian regularmente de mascarillas y guantes. La entrega del paquete y el pago se realiza sin contacto.</p></div>'
        },
        'PE': {
            desk: '<div><p>¡No tienen de que preocuparse! ¡Nosotros tomamos con seriedad la seguridad de nuestros clientes!</p><p>Nuestros mensajeros se cambian de mascarillas y guantes cada dos horas. La entrega del paquete y la recepción del pago se realiza sin contacto.</p></div>',
            mob: '<div><p>¡No tienen de que preocuparse!</p><p>Nuestros mensajeros se cambian regularmente de mascarillas y guantes. La entrega del paquete y el pago se realiza sin contacto</p></div>'
        },
        'IT': {
            desk: '<div><p>Non vi preoccupate! Noi prendiamo sul serio la sicurezza dei nostri clienti!</p><p>I nostri corrieri cambiano le mascherine e i guanti ogni 2 ore. Il processo della consegna e del pagamento passa senza contatto.</p></div>',
            mob: '<div><p>Non vi preoccupate!</p><p>I corrieri cambiano le mascherine e i guanti periodicamente. Il processo della consegna e del pagamento passa senza contatto.</p></div>'
        }
    };
    this.createPanel = function() {
        var panel = document.createElement('div');
        document.body.insertAdjacentElement("afterbegin", panel);
        panel.classList.add('corona-wrapper');
        var paragraph = document.createElement('div');
        panel.insertAdjacentElement("afterbegin", paragraph);
        paragraph.innerHTML = document.documentElement.clientWidth > 768 ? this.langs[this.language].desk : this.langs[this.language].mob;
        var style = document.createElement("style");
        document.body.insertAdjacentElement("beforeend", style);
        style.innerHTML = "@import url('https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');.corona-wrapper{position:fixed;width:100%;top:0;left:0;background:#4F9356;padding:5px;box-sizing:border-box;z-index:999}.corona-wrapper p{color: #fff;text-align:center;font-family:'Roboto',Arial,sans-serif;margin:0 auto;font-size:15px;line-height:20px;}.corona-wrapper p:first-of-type{font-size:18px;line-height:21px;font-weight:700;margin-bottom:3px;}.corona-wrapper > div { background: url('data:image/png;base64,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') no-repeat;background-position:center left 0px;max-width: 1020px;margin: 0 auto;padding-left:60px;box-sizing:border-box;}";    
        document.querySelector('.corona-wrapper div').style.backgroundPosition = document.documentElement.clientWidth > 1024 ? 'center left 0px' : 'center left 150%';
        document.querySelector('.corona-wrapper div').style.paddingLeft = document.documentElement.clientWidth > 1024 ? '60px' : '0';
        window.addEventListener('resize', this.onresize.bind(this));
        window.addEventListener('load', function(){
            var panelHeight = document.querySelector('.corona-wrapper').offsetHeight;
            document.body.style.paddingTop = panelHeight + 'px';
        });        
    };
    this.onresize = function() {
        document.querySelector('.corona-wrapper').innerHTML = document.documentElement.clientWidth > 1024 ? this.langs[this.language].desk : this.langs[this.language].mob;
        document.querySelector('.corona-wrapper div').style.backgroundPosition = document.documentElement.clientWidth > 1024 ? 'center left 0px' : 'center left 150%';
        document.querySelector('.corona-wrapper div').style.paddingLeft = document.documentElement.clientWidth > 1024 ? '60px' : '0';
        var panelHeight = document.querySelector('.corona-wrapper').offsetHeight;
        document.body.style.paddingTop = panelHeight + 'px';
    };
}