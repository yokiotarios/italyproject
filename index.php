<!DOCTYPE html>
<html lang="eu" ng-app="Diet" ng-controller="MainCtrl">
<head>
    <title>Cosa cambierà nella tua vita nel 2020</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Karla%7CLato&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body ng-cloak ng-class="{'desktop-bg':!landing, 'no-bg': showUserResult}">
<div id="landing" ng-show="landing">
    <div class="container">
        <div class="logo">
            <img src="img/logo.gif" alt="" class="regular-logo">
            <span>Cosa cambierà <br>nella tua vita nel 2020</span>
        </div>
        <div class="descr">
            <h1>
                Scopri come l'oroscopo cambierà la tua vita nel nuovo anno 2020!
            </h1>
            <p class="text-desc">
                Per molte persone sarà un buon anno, ma per alcuni sarà difficile sotto tutti gli aspetti. E' molto
                importante sfruttare appieno il potenziale del nuovo anno!
            </p>
        </div>
        <div class="gender-description">
            Per piacere, seleziona il tuo sesso:
        </div>
        <div class="gender-buttons">
            <button class="btn btn-female" ng-click="startQuestion()">
                Donna
            </button>
            <button class="btn btn-male" ng-click="startQuestion()">
                Uomo
            </button>
        </div>
        <div class="row">
            <div class="col-xs-12 col-lg-4 copyright">
                <p>Servizio di oroscopo riservato ad un pubblico adulto offerto da: <br>
                    ABCMobile OÜ Reg No 14710834 Adress: Tallinn, Peterburi tee 71-318, 11415 – Estonia
                    © 2019 <br>
                    Assistenza clienti: <a href="support@abcmobile.com.html">support@abcmobile.com</a> <br>
                    Consulti i nostri <a href="terms.php.html">Termini e condizioni generali</a> ed <a
                            href="privacy.php.html">Informativa sulla privacy</a>. <br>
                    Affiliato: mobstra.com
                </p>
            </div>
        </div>
    </div>
</div>
<div id="desktop-container" ng-class="{'desktop-container': showQuestion}">
    <nav class="mainNavbar navbar navbar-expand-lg" ng-show="showQuestion">
        <div class="container">
            <img src="img/back.svg" alt="Back" class="btn-back" ng-click="prevQuestion()">
            <div class="navbar-brand">
                <img src="img/logo.gif" alt="" class="regular-logo">
            </div>
        </div>
    </nav>
    <div class="subheader" ng-show="showQuestion">
        <div class="progress-bar">
            <div id="progress" class="progress"></div>
        </div>
    </div>
    <div class="container" ng-show="showQuestion">
        <div ng-hide="currentIndex === questionList.length" id="step-{{$index+1}}" class="step"
             ng-class="{'active' : currentIndex === $index}" ng-repeat="q in questionList track by $index">
            <div class="question" ng-bind-html="q.question"></div>
            <div class="question-description" ng-if="q.hint" ng-bind-html="q.hint"></div>
            <div ng-class="q.type === 'checkbox' ? 'fancy-checkbox-holder' : 'fancy-radio-holder'">
                <div class="fancy-radio fancy-radio-{{a.id}}" ng-repeat="a in q.answers track by a.id"
                     ng-class="{'active':a.active, 'with-icon':a.img}" ng-click="checkAnswer(q.answers, q.type)">
                    <div class="icon" ng-if="a.img">
                        <img ng-src="./img/{{a.img}}" class="svg" alt="{{a.answer}}">
                    </div>
                    {{a.answer}}
                    <div class="status"></div>
                    <div class="status-icon">{{a.active ? '+' : '-'}}</div>
                </div>
            </div>
            <div class="zodiak-form" ng-if="q.type === 'date'">
                <form name="questionForm" class="form" novalidate>
                    <div class="form-group">
                        <div class="form-group-inline">
                            <select name="day"
                                    ng-class="{'is-invalid': questionForm.day.$error.required && questionForm.$submitted }"
                                    required="" class="custom-select select-day" ng-change="formChange(this)"
                                    ng-model="day">
                                <option value="">Giorno</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="form-group-inline">
                            <select name="month"
                                    ng-class="{'is-invalid': questionForm.month.$error.required && questionForm.$submitted }"
                                    required="" class="custom-select select-month" ng-change="formChange(this)"
                                    ng-model="month">
                                <option value="">Mese</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group-inline year">
                            <select name="year"
                                    ng-class="{'is-invalid': questionForm.year.$error.required && questionForm.$submitted }"
                                    class="custom-select select-year" required="" ng-change="formChange(this)"
                                    ng-model="year">
                                <option value="">Anno</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="zodiak-form-img">
                    <img ng-src="img/zodiak/{{zodiaks[zodiak - 1].img}}" alt="">
                    <p ng-bind-html="zodiaks[zodiak - 1].name"></p>
                </div>
            </div>
            <div class="alert alert-danger" ng-show="errorMessage" ng-bind-html="errorMessage"></div>
            <button class="btn btn-primary btn-next-step btn-next-step-{{$index+1}}" ng-click="nextQuestion(q)">
                Avanti
            </button>
        </div>
    </div><!--ng-show="showUserResult"-->
    <div id="step-8" class="step results active" ng-show="showUserResult">
        <div class="summary-container">
            <div class="container">
                <div class="logo">
                    <img src="img/logo.gif" alt="" class="results-logo">
                    <span>Cosa cambierà <br>nella tua vita nel 2020</span>
                </div>

                <div class="result-desc">
                    <p class="text-desc">Grazie per le tue risposte.</p>
                    <h3 class="animated pulse infinite">Congratulazioni! Adesso puoi ascoltare il tuo messaggio audio al
                        numero
                        <a href="tel:123456789">XXXXXXXXXX</a></h3>

                    <p class="subheading">
                        <span>Attenzione!</span> Devi ascoltare la registrazione per evitare che si palesino i problemi
                        del Nuovo Anno. L'accesso è disponibile solo per 10 minuti, per gli utenti dalla città di<span> {{city}}. </span>
                        Scopri come proteggere te stesso ed i tuoi cari. Come migliorare la tua situazione finanziaria e
                        la tua salute.
                    </p>

                </div>
                <a href="tel:123456789" class="btn btn-primary scroll-btn call-button">
                    <img src="img/button-call.png" alt="" class="tada animated infinite">Chiama ed ascolta!</a>
            </div>
            <div class="footer-container container" id="summary-footer" resize>
                <div class="row">
                    <div class="col-xs-12 col-lg-4 copyright">
                        <p>
                            Info costi applicati alla chiamata: <br>
                            Costo da rete fissa: <span class="price">0,37€ + 1,83 al min.</span>, i.i. <br>
                            Costo max da rete mobile: <span class="price">1,22€ + 2,44€ al min.</span>, i.i. <br>
                            Costo max servizio: <span class="price">15,25€</span>, iva inclusa <br>
                            L’utente può richiedere la disabilitazione a 899 contattando il proprio gestore telefonico
                            <br>
                            Servizio di oroscopo riservato ad un pubblico adulto, offerto da: <br>
                            ABCMobile OÜ Reg No 14710834 Adress: Tallinn, Peterburi tee 71-318, 11415 <br>
                            Assistenza clienti: <a href="support@abcmobile.com.html">support@abcmobile.com</a> <br>
                            Consulti i nostri <a href="terms.php.html">Termini e condizioni generali</a> ed <a
                                href="privacy.php.html">Informativa sulla privacy</a>. <br>
                            Affiliato: <a href="http://mobstra.com/">mobstra.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="loading-modal" ng-class="{'fadeIn animated':loading}" ng-show="loading">
    <div class="loading-modal-container">
        <div class="load-modal">
            <div class="load-modal-header">
                <h4>Risultati</h4>
            </div>
            <div class="load-modal-bar">
                <div class="bar" ng-style="{width: loadingWidth + '%'}" ng-bind-html="loadingWidth + '%'"></div>
            </div>
            <div class="load-modal-progress">
                <p ng-if="loadingWidth > 0">Analisi dell'oroscopo personale . . . . . . . <span
                        ng-if="loadingWidth > 10">Completata!</span></p>
                <p ng-if="loadingWidth > 10">Correzione del segno zodiacale . . . . . . . <span
                        ng-if="loadingWidth > 30">Completata!</span></p>
                <p ng-if="loadingWidth > 30">Calcolo della variazione delle risposte . . . . . . . <span
                        ng-if="loadingWidth > 60">Completata!</span></p>
                <p ng-if="loadingWidth > 60">Elaborazione della predizione . . . . . . . <span
                        ng-if="loadingWidth > 80">Completata!</span>
                </p>
                <p ng-if="loadingWidth > 80">Salvataggio dei risultati . . . . . . . <span
                        ng-if="loadingWidth > 98">Completata!</span>
                </p>
                <p ng-if="loadingWidth > 99" class="done">I risultati sono pronti!</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>