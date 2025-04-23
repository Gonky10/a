export function createHeader() {
    const header = document.createElement('header');
    header.id = 'header';
  
    header.innerHTML = `
      <div class="container-fluid">
        <div id="logo" class="pull-left">
          <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>
        </div>
  
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="#intro">Inicio</a></li>
            <li><a href="#about">Quienes somos</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#portfolio">Productos</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
        </nav>
      </div>
    `;
  
    return header;
  }
  