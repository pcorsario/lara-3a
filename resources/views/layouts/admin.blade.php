<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Panel de Adminitracion</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

:root {
    --light: #f6f6f9;
    --primary: #1976D2;
    --light-primary: #CFE8FF;
    --grey: #eee;
    --dark-grey: #AAAAAA;
    --dark: #363949;
    --danger: #D32F2F;
	--light-danger: #FECDD3;
    --warning: #FBC02D;
    --light-warning: #FFF2C6;
    --success: #388E3C;
    --light-success: #BBF7D0;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.bx{
    font-size: 1.7rem;
}

a{
    text-decoration: none;
}

li{
    list-style: none;
}

html{
    overflow-x: hidden;
}

body.dark{
    --light: #181a1e;
    --grey: #25252c;
    --dark: #fbfbfb
}

body{
    background: var(--grey);
    overflow-x: hidden;
}

.sidebar{
    position: fixed;
    top: 0;
    left: 0;
    background: var(--light);
    width: 230px;
    height: 100%;
    z-index: 2000;
    overflow-x: hidden;
    scrollbar-width: none;
    transition: all 0.3s ease;
}

.sidebar::-webkit-scrollbar{
    display: none;
}

.sidebar.close{
    width: 60px;
}

.sidebar .logo{
    font-size: 24px;
    font-weight: 700;
    height: 56px;
    display: flex;
    align-items: center;
    color: var(--primary);
    z-index: 500;
    padding-bottom: 20px;
    box-sizing: content-box;
}

.sidebar .logo .logo-name span{
    color: var(--dark);
}

.sidebar .logo .bx{
    min-width: 60px;
    display: flex;
    justify-content: center;
    font-size: 2.2rem;
}

.sidebar .side-menu{
    width: 100%;
    margin-top: 48px;
}

.sidebar .side-menu li{
    height: 48px;
    background: transparent;
    margin-left: 6px;
    border-radius: 48px 0 0 48px;
    padding: 4px;
}

.sidebar .side-menu li.active{
    background: var(--grey);
    position: relative;
}

.sidebar .side-menu li.active::before{
    content: "";
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    top: -40px;
    right: 0;
    box-shadow: 20px 20px 0 var(--grey);
    z-index: -1;
}

.sidebar .side-menu li.active::after{
    content: "";
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    bottom: -40px;
    right: 0;
    box-shadow: 20px -20px 0 var(--grey);
    z-index: -1;
}

.sidebar .side-menu li a{
    width: 100%;
    height: 100%;
    background: var(--light);
    display: flex;
    align-items: center;
    border-radius: 48px;
    font-size: 16px;
    color: var(--dark);
    white-space: nowrap;
    overflow-x: hidden;
    transition: all 0.3s ease;
}

.sidebar .side-menu li.active a{
    color: var(--success);
}

.sidebar.close .side-menu li a{
    width: calc(48px - (4px * 2));
    transition: all 0.3s ease;
}

.sidebar .side-menu li a .bx{
    min-width: calc(60px - ((4px + 6px) * 2));
    display: flex;
    font-size: 1.6rem;
    justify-content: center;
}

.sidebar .side-menu li a.logout{
    color: var(--danger);
}

.content{
    position: relative;
    width: calc(100% - 230px);
    left: 230px;
    transition: all 0.3s ease;
}

.sidebar.close~.content{
    width: calc(100% - 60px);
    left: 60px;
}

.content nav{
    height: 56px;
    background: var(--light);
    padding: 0 24px 0 0;
    display: flex;
    align-items: center;
    grid-gap: 24px;
    position: sticky;
    top: 0;
    left: 0;
    z-index: 1000;
}

.content nav::before{
    content: "";
    position: absolute;
    width: 40px;
    height: 40px;
    bottom: -40px;
    left: 0;
    border-radius: 50%;
    box-shadow: -20px -20px 0 var(--light);
}

.content nav a{
    color: var(--dark);
}

.content nav .bx.bx-menu{
    cursor: pointer;
    color: var(--dark);
}

.content nav form{
    max-width: 400px;
    width: 100%;
    margin-right: auto;
}

.content nav form .form-input{
    display: flex;
    align-items: center;
    height: 36px;
}

.content nav form .form-input input{
    flex-grow: 1;
    padding: 0 16px;
    height: 100%;
    border: none;
    background: var(--grey);
    border-radius: 36px 0 0 36px;
    outline: none;
    width: 100%;
    color: var(--dark);
}

.content nav form .form-input button{
    width: 80px;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--primary);
    color: var(--light);
    font-size: 18px;
    border: none;
    outline: none;
    border-radius: 0 36px 36px 0;
    cursor: pointer;
}

.content nav .notif{
    font-size: 20px;
    position: relative;
}

.content nav .notif .count{
    position: absolute;
    top: -6px;
    right: -6px;
    width: 20px;
    height: 20px;
    background: var(--danger);
    border-radius: 50%;
    color: var(--light);
    border: 2px solid var(--light);
    font-weight: 700;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.content nav .profile img{
    width: 36px;
    height: 36px;
    object-fit: cover;
    border-radius: 50%;
}

.content nav .theme-toggle{
    display: block;
    min-width: 50px;
    height: 25px;
    background: var(--grey);
    cursor: pointer;
    position: relative;
    border-radius: 25px;
}

.content nav .theme-toggle::before{
    content: "";
    position: absolute;
    top: 2px;
    left: 2px;
    bottom: 2px;
    width: calc(25px - 4px);
    background: var(--primary);
    border-radius: 50%;
    transition: all 0.3s ease;
}

        /* continuar clase miercoles 09/agosto */

        .content nav #theme-toggle:checked+.theme-toggle::before{
    left: calc(100% - (25px - 4px) - 2px);
}
    </style>
</head>
<body>
    {{-- Sidebar --}}
    <div class="sidebar   ">
        <a href="#" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>A</span>Volta</div>
        </a>
        <ul class="side-menu">
            <li><a href="#"><i class="bx bxs-dashboard"></i>DashBoard</a></li>
            <li><a href="#"><i class="bx bx-store-alt"></i>Store</a></li>
            <li class="active"><a href="#"  ><i class="bx bx-analyse"></i>Analiticas</a></li>
            <li><a href="#"><i class="bx bx-message-square-dots"></i>Tickets</a></li>
            <li><a href="#"><i class="bx bx-group"></i>Users</a></li>
            <li><a href="#"><i class="bx bx-cog"></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class="bx bx-log-out-circle"></i>
                    Salir
                </a>
            </li>
        </ul>

    </div>
    {{-- Fin SideBar --}}

    {{-- Contenedor Principal --}}
    <div class="content">
        {{-- Barra de navegacion --}}
        {{-- Continuar el proximo Lunes 07/08/2023 --}}
        <nav>
            <i class="bx bx-menu"></i>
            <form action="#" method="post">
                <div class="form-input">
                    <input type="search" placeholder="Buscar">
                    <button class="search-btn" type="submit" >
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class="bx bx-bell"></i>
                <span class="count">22</span>
            </a>
            <a href="#" class="profile">
                {{-- <img src="{{ assets(img/pnve.png) }}"> --}}
                <i class="bx bx-bell"></i>
            </a>
        </nav>

        <main>
            <div class="header">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Analitycs</a></li>
                        <li><a class="active" href="#">Shop</a></li>
                    </ul>
                </div>
            </div>
        </main>

        {{-- Fin de la navbar --}}
        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    </div>
 

    <script>

    </script>
</body>
</html>