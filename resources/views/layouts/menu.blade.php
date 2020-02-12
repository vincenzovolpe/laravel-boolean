<div id="navbarContainer">
    <div class="container-fluid">
        <nav class="boolean__navbar navbar navbar-expand-lg navbar-light">
    <a class="boolean__navbar__logo navbar-brand" href="https://www.boolean.careers">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Careers"></a>

    <button class="navbar-toggler boolean__navbar__button" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="boolean__navbar__items collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="boolean__navbar__item nav-item {{Route::currentRouteName() == 'homepage' ? 'active' : ""}}">
                <a class="nav-link" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="boolean__navbar__item nav-item {{Route::currentRouteName() == 'corsoboolean' ? 'active' : ""}}">
                <a class="nav-link" href="{{route('corsoboolean')}}">Corso</a>
            </li>

            <li class="boolean__navbar__item nav-item {{Route::currentRouteName() == 'carriereboolean' ? 'active' : ""}}">
                <a class="nav-link" href="{{route('carriereboolean')}}">Dopo il corso</a>
            </li>

            <li class="boolean__navbar__item nav-item {{Route::currentRouteName() == 'lezioneboolean' ? 'active' : ""}}">
                <a class="nav-link" href="{{route('lezioneboolean')}}">Lezione Gratuita</a>
            </li>
            <li class="boolean__navbar__cta nav-item {{Route::currentRouteName() == 'iscrizioneboolean' ? 'active' : ""}}">
                <a track="Click-IscrizioneForm" class="nav-link" href="{{route('iscrizioneboolean')}}">Candidati ora</a>
            </li>

        </ul>
    </div>
</nav>
    </div>
</div>
