<nav class="sidebar"  id="sidebar">
    <ul class="nav">
        <li class="nav-item @if(request()->routeIs('admin.index')) active @endif">
            <a class="nav-link" href="{{route('admin.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank float-left" viewBox="0 0 16 16">
                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                </svg>
                <span class="menu-title ml-3">Главная</span>
            </a>
        </li>
        <li class="nav-item  @if(request()->routeIs('admin.categories.*')) active @endif">
            <a class="nav-link" href="{{route('admin.categories.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c.961 0 1.641.633 1.729 1.512h1.295v-.088c-.094-1.518-1.348-2.572-3.03-2.572-2.068 0-3.269 1.377-3.269 3.638v1.073c0 2.267 1.178 3.603 3.27 3.603 1.675 0 2.93-1.02 3.029-2.467v-.093H9.875c-.088.832-.75 1.418-1.729 1.418-1.224 0-1.927-.891-1.927-2.461v-1.06c0-1.583.715-2.503 1.927-2.503Z"/>
                </svg>
                <span class="menu-title ml-3">Категории</span>
            </a>
        </li>
        <li class="nav-item @if(request()->routeIs('admin.news.*')) active @endif">
            <a class="nav-link" href="{{route('admin.news.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M6 11.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <span class="menu-title ml-3">Новости</span>
            </a>
        </li>
        <li class="nav-item @if(request()->routeIs('admin.users.*')) active @endif">
            <a class="nav-link" href="{{route('admin.users.index')}}">
                <!-- icon666.com - MILLIONS vector ICONS FREE --><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512"><g><g><g><path d="m172.1,89.3c26.6,0 48.3,20.4 48.3,45.6s-21.7,45.6-48.3,45.6c-26.6,0-48.3-20.4-48.3-45.6s21.7-45.6 48.3-45.6zm0,132c49.1,0 89.1-38.8 89.1-86.4s-40-86.4-89.1-86.4c-49.1,0-89.1,38.7-89.1,86.4s40,86.4 89.1,86.4z" fill="#000000" style="fill: rgb(203, 203, 203);"></path><path d="M460.2,341H347.8c-2-36.6-22.1-68.4-51.4-86.8c8.1-27.7,26.8-43.3,52.6-43.3h49.7c33.9,0,61.5,34,61.5,75.7V341 L460.2,341z M307.1,460.2H51.8V347c0-37.8,30.8-68.6,68.6-68.6h118c37.8,0,68.6,30.8,68.6,68.6V460.2L307.1,460.2z M398.7,170 H349c-43.4,0-76.9,26.1-90.8,69.3c-6.4-1.2-13-1.8-19.7-1.8h-118C60.1,237.6,11,286.7,11,347v133.5c0,11.3,9.1,20.4,20.4,20.4 h296.1c11.3,0,20.4-9.1,20.4-20.4v-98.8h132.7c11.3,0,20.4-9.1,20.4-20.4v-74.8C501,222.3,455.1,170,398.7,170L398.7,170z" fill="#000000" style="fill: rgb(203, 203, 203);"></path><path d="m354,90c0.7-26.9 11.1-37.3 19.8-38.1 8.9,0.7 19.1,11.1 19.8,38.1 0.2,8.6 2.1,16 4.6,22.2-1.5,0.1-46.6,0.1-48.9,0 2.6-6.2 4.5-13.6 4.7-22.2zm94.2,46.1c6.8-12.7-2-24-6-29.3-3.9-5.3-7.6-10.2-7.8-17.9-1.3-52.5-31-76.9-59.9-77.9-0.2,0-3.2,0.1-3.6,0.1-25.8,1.9-56.3,23.4-57.8,77.8-0.2,7.7-3.9,12.6-7.8,17.9-3.9,5.3-13.5,17-6,29.3 14.7,23.7 137.7,21.1 148.9,0z" fill="#000000" style="fill: rgb(203, 203, 203);"></path></g></g></g></svg>
                <span class="menu-title ml-3">Пользователи</span>
            </a>
        </li>
    </ul>
</nav>
