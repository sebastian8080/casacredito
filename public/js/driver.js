const driver = window.driver.js.driver;

        const driverObj = driver({
        popoverClass: 'driverjs-theme',
        showProgress: true,
        allowClose: false,
        steps: [
            { element: '#first_filter', popover: { title: 'Pasos para buscar', description: 'Selecciona el tipo de propiedad que estás buscando' } },
            { element: '#second_filter', popover: { title: 'Pasos para buscar', description: 'Selecciona si vas a comprar o rentar una propiedad' } },
            { element: '#third_filter', popover: { title: 'Pasos para buscar', description: 'Escribe una ubicación en donde estés buscando. Por ejemplo: Cuenca, o más específico como Misicata' } },
            { element: '#btn-search', popover: { title: 'Pasos para buscar', description: 'Da clic en Buscar y visualiza nuestras opciones' } },
        ],
        onDestroyed: () => {
            localStorage.setItem('tutorialVisto', 'true');
        }
        });

        window.addEventListener('load', function(){
            if (localStorage.getItem('tutorialVisto') !== 'true') {
                driverObj.drive();
            }
        });